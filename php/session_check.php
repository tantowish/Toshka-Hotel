<?php
    session_start();

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hotel_db";

    $login = "LOGIN";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    
    if(isset($_SESSION['session_email'])){
        $cookie_email=$_SESSION['session_email'];
        $sql1 = "SELECT * FROM account WHERE email = '$cookie_email'";
        $q1   = mysqli_query($conn, $sql1);
        $r1   = mysqli_fetch_array($q1);
        $login = $r1['surname'];
    }

    ?>