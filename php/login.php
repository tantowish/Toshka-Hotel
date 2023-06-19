<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hotel_db";
    
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if(isset($_COOKIE['cookie_email'])){
        $cookie_email = $_COOKIE['cookie_email'];
        $cookie_password = $_COOKIE['cookie_password'];
    
        $sql1 = "SELECT * FROM account WHERE email = '$cookie_email'";
        $q1   = mysqli_query($conn, $sql1);
        $r1   = mysqli_fetch_array($q1);
        if($r1['password'] == $cookie_password){
            $_SESSION['session_email'] = $cookie_email;
            $_SESSION['session_password'] = $cookie_password;
        }
    }
    
    if(isset($_SESSION['session_email'])){
        header("location: profile.php");
        exit();
    }
?>