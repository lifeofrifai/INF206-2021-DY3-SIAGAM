<!DOCTYPE html>
<html>
<head>
    <title>Halaman Support</title>
    <link rel="icon" type="image/png" href="img/icons/icon-siagam.png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style-navbar.css">
    <link rel="stylesheet" href="css/footer.css">

    <style>
        body {
            background-image: url('img/bg-light.png');
            background-size: cover;
            font-family: 'Ubuntu', 'sans-serif';
        }
        .kotak {
            margin : auto;
            margin-top : 170px;
            width: 800px;
            left: 230px;
            top: 5px;
            bottom: 50px;

            background: #222734;
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
    <div class = "container">
        <div class = "kotak">
            <h2  style = "text-align : center; margin-top : 5%; padding-top: 20px; font-weight: bold; font-size: 42px; color:white; font-family: ubuntu; "> Support</h2>
            <h2  style = "text-align : center; margin-top : 18%; font-size: 36px; color:white; font-family: ubuntu;"> Butuh Bantuan?</h2>
            <h2  style = "text-align : center; margin-top : 1%; font-size: 24px; color:white; font-family: ubuntu; "> Silahkan Hubungi Admin Melalui WhatsApp dibawah ini</h2>
            <a href="https://wa.me/6285214998535?text=Halo,%20Saya%20Mengalami%20Kendala%20di%20Website%20SIAGAM" target = "_blank"><img src="img/icons/wa.png" alt = " image " height = " 70 " width = " 70 "  style="margin-left: 48%; margin-bottom: 20%; margin-top: 3%;" ></a>

        </div>
    </div>

    <div class="footer" style="margin-bottom: -10%;">
        <p>Made With <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="red" class="bi bi-heart-fill" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
    </svg> by DY3 RPL 2021</p>
    </div>

     <!-- Option 1: Bootstrap Bundle with Popper -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8"
     crossorigin="anonymous"></script>

 <script src="Js/navbar.js"></script>
</body>
</html>