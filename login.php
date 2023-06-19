<!DOCTYPE html>
<html lang="en">
<head>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/login.css">

    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" />
    <title> Hotel - Login </title>
</head>
<body>
<?php
session_start(); // Start the session

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hotel_db";

$conn = mysqli_connect($servername, $username, $password, $dbname);

$err = "";
$email = "";
$password = "";
$remember = "";

include './php/login.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $remember = isset($_POST['remember']) ? $_POST['remember'] : '';

    if ($email == '' || $password == '') {
        $err .= "<p style='color: white; '>Silahkan masukkan email dan password.</p>";
    } else {
        $sql = "SELECT * FROM account WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);

        if (!$row) {
            $err .= "<p style='color: white;'>Email <b>$email</b> belum terdaftar.</p>";
        } elseif ($row['password'] != $password) {
            $err .= "<p style='color: white;'>Password yang dimasukkan tidak sesuai</p>";
        }

        if (empty($err)) {
            $_SESSION['session_email'] = $email;
            $_SESSION['session_password'] = md5($password);

            if ($remember == '1') {
                $cookie_time = time() + (60 * 60 * 24   );
                setcookie("cookie_email", $email, $cookie_time, "/");
                setcookie("cookie_password", md5($password), $cookie_time, "/");
            }

            header("location: home.php");
            exit;
        }
    }
}

?>

    <header>
        <nav id="navbar">
        <div class="container">
            <h1 class="logo"><a href="#">TOSHKA HOTEL</a></h1>
            <ul>
            <li><a href="home.php">HOME</a></li>
            <li><a href="gallery.php">GALLERY</a></li>
            <li><a href="booking.php">BOOKING</a><li>
            <li><a href="#">REVIEW</a></li>
            <li><a class = current href="#">LOGIN</a></li>
            </ul>
        </div>
        </nav>
    </header>
    
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <h2>Login</h2>
                    <?php if (!empty($err)) { ?>
                        <?php echo $err; ?>
                    <?php } ?>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" name="email" id="" required>
                        <label for="">Email</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name="password" id="" required>
                        <label for="">Password</label>
                    </div>
                    <div class="forget">
                        <label for=""><input type="checkbox" name="remember" id="" value="1">Remeber me <a href="#">Forget Password</a> </label>
                    </div>
                    <button>Log in</button>
                    <div class="register">
                        <p>Don't have an account <a href="register.html">Register</a></p>
                    </div>
                </form>
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