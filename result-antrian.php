<?php 
include 'action/koneksi.php';
    $data= mysqli_query($conn, "SELECT * FROM antrian WHERE id = (SELECT MAX(id) from antrian)");

    $hasil = mysqli_fetch_array($data);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Halaman Antrian</title>
    <link rel="icon" type="image/png" href="img/icons/icon-siagam.png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style-navbar.css">
    <link rel="stylesheet" href="css/footer.css">

    <style>
        body {
            background: url(img/bg-light.png);
            background-size: cover;
            font-family: 'Ubuntu', 'sans-serif';
        }
        
        .kotak {
            margin-top : 200px;
            padding: 100px;
            width: 807px;
            height: 500px;
            background: #222734 !important;
            box-shadow: -14px 13px 21px rgba(0, 0, 0, 0.25);
            border-radius: 13px;
            font-family: inter;
        }
    </style>
</head>

<body >
    <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="index.php">Home</a>
    <a href="https://bandaacehkota.go.id/" target = "_blank">Web Gampong</a>
    <a href="support.php">Support</a>
    
</div>

<div class="navbar">
    <div class="strip-btn"><span onclick="openNav()"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
            class="bi bi-justify " viewBox="0 0 16 16">
            <path fill-rule="evenodd"
                d="M2 12.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z" />
        </svg></span>
    </div>
    <div id="jamSiagam" class="clock">

    </div>

    </div>
    <div class="container bg-dark kotak ">

        <p style="text-align: center; margin-top: -75px; border-radius: 100%; ">
            <img src="img/icons/cheklist.png " style="width: 100px;height: 100px; "></p>

        <div class="justify-content-center ">
            <h2 style="text-align : center; margin-top : 2%; font-weight: bold; font-size: 20px; color:white; font-family: ubuntu; ">Selamat Antrian Anda Berhasil Ditambahkan</h2>
        </div>

        <div class="justify-content-center ">
            <h1 style="text-align : center; margin-top : 2%; font-weight: bold; font-size: 30px; color:white; font-family: ubuntu; ">No. <?php echo $hasil ['id'] ?> </h1>
        </div>
        <br>
        <div class="justify-content-center ">
            <h2 style="text-align : center; margin-top : 2%; font-weight: bold; font-size: 20px; color:white; font-family: ubuntu; ">Tanggal : <?php echo $hasil ['tanggal'] ?></h2>
        </div>
        <br>
        <div class="justify-content-center ">
            <h2 style="text-align : center; margin-top : 1%; font-weight: bold; font-size: 20px; color:white; font-family: ubuntu; ">Silahkan Menuju Kantor<br> 1 Jam Setelah Mengambil Nomor Antrian </h2>
        </div>

        <div class="d-grid gap-2 d-md-block " style="margin-top: 10%; ">
            <p>
                <a href="index.php"></p><button class="btn btn-danger " type="button ">Home</button></a>
        </div>

        <div class="d-grid gap-2 d-md-flex justify-content-md-end " style="margin-top: -38px; ">
            <p>
                <a href="cetak.php" target="_blank"></p><button class=" btn btn-primary " type="button ">Cetak</button></a>
        </div>

        <div class="footer" style="margin-bottom: -10%; font-family: 'Ubuntu', 'sans-serif';">
        <p>Made With <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="red" class="bi bi-heart-fill" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
    </svg> by DY3 RPL 2021</p>
    </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js " integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8 " crossorigin="anonymous "></script>
        <script src="Js/navbar.js "></script>

</body>

</html>