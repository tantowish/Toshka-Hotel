<?php
// Retrieve form data
$id = $_POST['id'];
$fname = $_POST['fname'];
$sname = $_POST['sname'];
$email = $_POST['email'];
$password = $_POST['password'];

// Create a new PDO instance
$servername = "localhost";
$username = "root";
$password_db = "";
$dbname = "hotel_db";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password_db);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Prepare the SQL statement
    $stmt = $conn->prepare("INSERT INTO account (id, firstName, surname, email, password) VALUES (:id, :fname, :sname, :email, :password)");
    
    // Bind the parameters
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':fname', $fname);
    $stmt->bindParam(':sname', $sname);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    
    // Execute the statement
    $stmt->execute();
    
    if ($stmt->rowCount() > 0) {
        // Redirect to login.html
        header("Location: ../login.php");
        exit();
    } else {
        echo "Registration failed!";
    }
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;
?>
