<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-widht, initial-scale=1">
    <title>Company Profile</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="Stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
</head>
<body>

    <!-- header-->
    <div class="medsos">
        <div class="container">
            <ul>
                <li><a href="https://www.instagram.com/diorestu.putra"><i class="fa-brands fa-instagram"></i></a></li>
            </ul>
        </div>
    </div>
    <header>
        <div class="container">
            <h1><a href="index.html">UNCHIAGE</a></h1>
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li class="active"><a href="produc.php">ART</a></li>
                <li><a href="contact.php">CONTACT</a></li>
                <li><a href="create.php">ADD ART</a></li>
            </ul>
        </div>
    </header>


    <!--services-->
    <section class="services">
        <div class="container">
            <h3>MY ART</h3>
            <div class="box">
                <div class="col-4">
                    <div class="icon">
                        <ul>
                            <li><a href="gambar.php"><i class="fa-solid fa-laptop"></i></a></li>
                        </ul>
                    </div>
                    <h4>GAMBAR (video TimeLapse Coming soon)</h4>
                </div>
            </div>
        </div>
    </section>
    <!--footer-->
    <footer>
        <div class="container">
            <small> copyright &copy; 2022 - I O STORE, All Rights Reserved.</small>
        </div>
    </footer>
</body>
</html>