<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <script src="https://kit.fontawesome.com/8868149653.js" crossorigin="anonymous"></script> -->
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="./style/gallery.css">
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" />
  <title> Hotel - Gallery </title>
</head>

<body>
  <header>
    <nav id="navbar">
      <div class="container">
        <h1 class="logo"><a href="#">TOSHKA HOTEL</a></h1>
        <ul>
        <li><a href="home.php">HOME</a></li>
        <li><a class="current" href="#">GALLERY</a></li>
        <li><a href="booking.php">BOOKING</a><li>
        <li><a href="#">REVIEW</a></li>
        <li><a href="login.php"><?php include './php/session_check.php'; echo $login?></a></li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- Image slider start -->
  <div class="body-slider">
    <div class="slider">
      <div class="slides">
        <input type="radio" name="radio-btn" id="radio1">
        <input type="radio" name="radio-btn" id="radio2">
        <input type="radio" name="radio-btn" id="radio3">
        <input type="radio" name="radio-btn" id="radio4">
        <input type="radio" name="radio-btn" id="radio5">
  
        <div class="slide first">
          <img src="./img/gallery/lobby.png" alt="">
        </div>
        <div class="slide">
          <img src="./img/gallery/dinning.png" alt="">
        </div>
        <div class="slide">
          <img src="./img/gallery/bed.png" alt="">
        </div>
        <div class="slide">
          <img src="./img/gallery/gym.png" alt="">
        </div>
        <div class="slide">
          <img src="./img/gallery/pool.png" alt="">
        </div>
  
        <div class="navigation-auto">
          <div class="auto-btn1"></div>
          <div class="auto-btn2"></div>
          <div class="auto-btn3"></div>
          <div class="auto-btn4"></div>
          <div class="auto-btn5"></div>
        </div>
  
      </div>
      <div class="navigation-manual">
        <label for="radio1" class="manual-btn"></label>
        <label for="radio2" class="manual-btn"></label>
        <label for="radio3" class="manual-btn"></label>
        <label for="radio4" class="manual-btn"></label>
        <label for="radio5" class="manual-btn"></label>
      </div>
  
    </div>

  </div>

  <script src="./javascript/gallery.js"></script>

  
  
    <!-- clear to remove the float so the footer text can have padding top -->
    <div class="clr"></div>

    <div>
      <footer id="main-footer">
        <p>© 2023 Copyright: TOSHKA GROUP </p>
      </footer>
    </div>
</body>

</html>