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
            <h1><a href="index.php">MY ART</a></h1>
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
            <div class="col-md-12 row justify-content-center">
                <div class="col-md-8 mt-4">
                    <div class="col-md-12">
                        <?php
                        include "koneksi.php";
                        $data = mysqli_query($conn, "SELECT * FROM siswa order by
                            id_siswa DESC") ;
                        while ($row = mysqli_fetch_array($data)) {
                        ?>
                        
                        <div class="col-md-12 row mb-5">
                            <div class="col-md-3">
                                <img src="file/<?php echo $row['foto'] ; ?>" style="width: 85%;">
                            </div>
                            <div class="col-md-9">
                                <h2><?php echo $row['nama'] ; ?></h2>
                                <a href="delete.php ?id=<?php echo $row['id_siswa'] ; ?>" class="btn btn-danger mt-4">Delete</a>
                            </div>
                        </div>

                        <?php } ?>
        
    </section>
    <!--footer-->
    <footer>
        <div class="container">
            <small> copyright &copy; 2023 - UNCHIAGE, All Rights Reserved.</small>
        </div>
    </footer>
    ?>
</body>
</html>