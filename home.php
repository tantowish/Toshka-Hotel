<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style/home.css">
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" />
  <title> Hotel - Home </title>
</head>

<body>
    <header>
        <nav id="navbar">
        <div class="container">
            <h1 class="logo"><a href="#">TOSHKA HOTEL</a></h1>
            <ul>
            <li><a class = current href="#">HOME</a></li>
            <li><a href="gallery.php">GALLERY</a></li>
            <li><a href="booking.php">BOOKING</a><li>
            <li><a href="#">REVIEW</a></li>
            <li><a href="login.php""><?php include './php/session_check.php'; echo $login?></a></li>
            </ul>
        </div>
        </nav>
    </header>

    <div id="showcase">
        <div class="container">
        <div class="showcase-content">
            <br>
            <p>TOSHKA GROUP</p>
            <h4>TOSHKA HOTEL </h4>
            <p>“Hotels for moments in emotions.”</p>
        </div>
        </div>
    </div>
    </header>

    <hr1> </hr1>

    <div class="header-room">
        <h1> ROOM TYPE </h1>
        <p> take a look about the room we provide </p>
    </div>

    <section id="home-info" class="bg-dark">
        <div class="info-img">
        <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, at.</p> -->
        </div>

        <div class="info-content">
        <h4> Suite </h4>
        <p> Dengan area terluas, kamar suite memberikan para tamu keleluasaan lebih untuk menjalankan aktivitasnya. Disamping kenyamanan kamar tidur, kamar ini juga dilengkapi dengan ruang tamu terpisah untuk pertemuan informal
        </p>
        </div>
    </section>

    <hr1> </hr1>

    <section id="home-info2" class="bg-dark">
        <div class="info-img2">

        </div>

        <div class="info-content2">
        <h4> Premiere </h4>
        <p>Kamar premiere menawarkan pengalaman tinggal di kamar yang nyaman dengan area ruang tamu yang menyatu dengan kamar.</p>
        </div>
    </section>

    <hr1> </hr1>

    <section id="home-info3" class="bg-dark">
        <div class="info-img3">

        </div>

        <div class="info-content3">
        <h4> Deluxe </h4>
        <p> Dengan suasana kamar yang nyaman, para tamu diberikan pilihan untuk dapat menikmati waktu istirahat di twin bed atau queen bed dengan pemandangan kolam renang dan jalan.
        </p>
        </div>
    </section>

    <hr1> </hr1>

    <section id="home-info4">
        <h1>INTERESTED ?</h1>
        <button type="submit"><a href="booking.php">BOOK NOW</a></button>    
    </section>

    <div class="footer">
        <div class="info-footer">
            <p class="">Contact Us</p>
            <p class="isi1">Sleman, Mlati, Sendowo 
                Road No. 129</p>
            <p class="isi1">+6285273349256</p>
            <p class="isi1">toshkaHotel@mail.hotel.id</p>
        </div>
    </div>
    <div>
    <footer id="main-footer">
        <p>© 2023 Copyright: TOSHKA GROUP </p>
    </footer>
    </div>
</body>
</html>