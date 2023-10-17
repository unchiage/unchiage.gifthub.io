<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitur Upload Foto dan Video</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="Stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
</head>
<body>
    <div class="container">
        <div class="col-md-12 row justify-content-center">
            <div class="col-md-6 mt-5">
                <div class="col-md-12 text-center">
                    <h2>Fitur Upload Foto dan VIDEO</h2>
                    BY : <a>UNCHIAGE</a>
                </div>
                <div class="col-md-12 mt-5">
                    <form enctype="multipart/form-data" method="post" action="upload.php">
                <div class="col-md-12 mt-5 p-5">
                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Foto/video</label>
                    <input type="file" name="foto" class="form-control">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-success">Kirim</button>
                </div>
                <div>
                    <a href="index.php">HOME</a>
                </div>
</Form>
            </div>
        </div>
</div>
    
</body>
</html>