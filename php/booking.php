<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hotel_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve the ID based on the email from the session or initialize with an empty value
$email = "";
if (isset($_SESSION['session_email'])) {
    $email = $_SESSION['session_email'];
}
// Get the ID from the database based on the email
$stmt = $conn->prepare("SELECT id FROM account WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
$acc_id = $row['id'];

// Retrieve other values from the form
$date =mysqli_real_escape_string($conn,$_POST['date']);
$no_kamar = mysqli_real_escape_string($conn,$_POST['no_kamar']);
$tipe = mysqli_real_escape_string($conn,$_POST['tipe']);

// Prepare the SQL statement
$stmt = $conn->prepare("INSERT INTO booking (acc_id, date, no_kamar, tipe) VALUES (?, ?, ?, ?)");

// Bind parameters and execute the statement
$stmt->bind_param("ssss", $acc_id, $date, $no_kamar, $tipe);
if ($stmt->execute()) {
    // Booking successful
    $response = array('status' => 'success');
} else {
    // Booking failed
    $response = array('status' => 'failed', 'message' => $stmt->error);
}

// Close the statement and connection
$stmt->close();
$conn->close();

// Send the JSON response
header('Content-Type: application/json');
echo json_encode($response);
?>
