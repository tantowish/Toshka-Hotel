<!DOCTYPE html>
<html lang="en">
<head>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/booking.css">

    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title> Hotel - Booking </title>
    
</head>
<body>
    <?php include './php/session_booking.php'
    ?>
    <header>
        <nav id="navbar">
        <div class="container">
            <h1 class="logo"><a href="#">TOSHKA HOTEL</a></h1>
            <ul>
            <li><a href="home.php">HOME</a></li>
            <li><a href="gallery.php">GALLERY</a></li>
            <li><a class = current href="#">BOOKING</a><li>
            <li><a href="#">REVIEW</a></li>
            <li><a href="login.php"><?php echo $login;?></a></li>
            </ul>
        </div>
        </nav>
    </header>
    
    <section>
        <div class="form-box">
            <div class="form-value">
                <form id="loginForm">
                    <h2>Booking</h2>
                    <div class="inputbox">
                        <input type="date" name="date" id="" required>
                        <!-- <label class="spesial" for="">Date</label> -->
                    </div>
                    <div class="inputbox">
                        <input type="text" name="no_kamar" id="" required>
                        <label for="">Room Number</label>
                    </div>
                    <div class="select">
                        <select name="tipe" id="" required>
                            <option value="">Type</option>
                            <option value="suite">Suite</option>
                            <option value="premiere">Premiere</option>
                            <option value="deluxe">Deluxe</option>
                          </select>
                    </div>
                    <button>BOOK NOW</button>
                </form>
            </div>
            <script>
                $(document).ready(function() {
                    $('#loginForm').submit(function(event) {
                        event.preventDefault();
            
                        var form = $(this);
                        var formData = form.serialize();
            
                        $.ajax({
                            url: './php/booking.php',
                            type: 'POST',
                            data: formData,
                            dataType: 'json',
                            success: function(response) {
                                if (response.status === 'success') {
                                    showSuccessMessage(); // Memanggil fungsi showSuccessMessage()
                                    form[0].reset();
                                } else {
                                    showErrorMessage(response.message);
                                }
                            },
                            error: function(xhr, status, error) {
                                console.error(xhr.responseText);
                            }
                        });
                    });
            
                    function showSuccessMessage() {
                        alert('Booking succes');
                    }
            
            
                    function showErrorMessage(message) {
                        alert('Booking failed: ' + message);
                    }
                });
            </script>
        </div>
    </section>

    <div>
        <footer id="main-footer">
            <p>© 2023 Copyright: TOSHKA GROUP </p>
        </footer>
    </div>
</body>
</html>