<!DOCTYPE html>
<html lang="en">
<head>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/profile.css">

    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" />
    <title> Hotel - Login </title>
</head>
<body>
    <header>
        <nav id="navbar">
        <div class="container">
            <h1 class="logo"><a href="#">TOSHKA HOTEL</a></h1>
            <ul>
            <li><a href="home.php">HOME</a></li>
            <li><a href="gallery.php">GALLERY</a></li>
            <li><a href="booking.php">BOOKING</a><li>
            <li><a href="#">REVIEW</a></li>
            <li><a class = current href="#"><?php include './php/session_check.php'; echo $login?></a></li>
            </ul>
        </div>
        </nav>
    </header>
    
    <section>
        <div class="form-box">
            <div class="form-value">
                <h2>Profile</h2>
                <ion-icon name="person-outline"></ion-icon>
                <div>
                <?php
                // Replace these values with your actual database credentials
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "hotel_db";

                // Create a connection
                $conn = new mysqli($servername, $username, $password, $dbname);

                // Check the connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Retrieve the email from the session or cookies
                $email = ""; // Initialize with an empty value
                if (isset($_SESSION['session_email'])) {
                    $email = $_SESSION['session_email'];
                }
               
                // Prepare the SQL statement with a placeholder for the email
                $sql = "SELECT id, firstname, surname, email FROM account WHERE email = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("s", $email);
                
                // Execute the prepared statement
                $stmt->execute();

                // Get the result
                $result = $stmt->get_result();

                // Display the information
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<div class="account-info">ID : ' . $row["id"] . '</div>';
                        echo '<div class="account-info">First Name : ' . $row["firstname"] . '</div>';
                        echo '<div class="account-info">Surname : ' . $row["surname"] . '</div>';
                        echo '<div class="account-info">Email : ' . $row["email"] . '</div>';
                        break;
                    }
                } else {
                    echo "No account found for this email.";
                }

                // Close the statement and connection
                $stmt->close();
                $conn->close();
                ?>
                </div>
                <button onclick="logout()">Logout</button>
                <script src="./javascript/logout.js"></script>
            </div>
        </div>
    </section>

    <div>
        <footer id="main-footer">
            <p>© 2023 Copyright: TOSHKA GROUP </p>
        </footer>
    </div>
</body>
</html> 