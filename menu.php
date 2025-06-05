<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="bs5/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="icon/css/all.min.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/body.css">
    <link rel="stylesheet" href="css/theme.css">
    <link rel="stylesheet" href="css/responsive.css">

    <title>Panduan Pengawasan</title>

    <!-- bg full css -->
    <style>
    /*untuk teks heading di tag <body>*/
    h2
    {
        background-color: white;
        color: crimson;
        font-family: sans-serif;
        text-align: center;
        width: 45%;
        margin:auto;
        padding: 20px;
    }
     
    body
    {
        background-image: url('img/bg.jpeg');
        background-repeat: repeat;
        background-size: cover;
    }
    </style>
    <!-- akhir bg -->
</head>

<body>

    <br><br><br><br>

    <nav class="navbar navbar-expand-lg navbar-light mt-3 fixed-top" id="navbar">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="img/logobawaslu.png" width="150px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="nav nav-pills">
                    <li class="nav-item me-2">
                        <a class="nav-link active bg-active link-navbar" href="menu.php">Panduan Pengawasan</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="nav-link active bg-active link-navbar text-white" href="menu 2.php">Laporan Pengawasan</a>
                    </li>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <li class="nav-item me-2 ms-4">
                        <a href="files/register.php" class="nav-link btn-custom-outline rounded" id="btn-sign">Daftar</a>
                    </li>
                    <li class="nav-item">
                        <a href="adminx/" class="nav-link btn-custom rounded" id="btn-sign">Masuk</a>
                    </li>
                </ul>


            </div>
        </div>
    </nav>

    <!--============================================================================1. header==========================================================-->
    <div class="container">

        <br><br><br><br><br>

        <div class="row justify-content-center">
                <h1 class="h2 bold-3 my-5 max-width-5x text-center text-white">Panduan Pengawasan</h1>

        <div class="row g-3">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                
                    <div class="col-md-3">
                        <a href="hukum.php">
                        <div class="col-md-9">
                            <center><img src="img/dasar_hukum.png" width="200" class=""></center>
                            
                            <h5 class="bold-2 text-white text-center">Dasar Hukum</h5>
                            
                        </div>
                        </a>
                    </div>

                    <div class="col-md-3">
                        <a href="cara.php">
                        <div class="col-md-9">
                            <center><img src="img/tata_cara.png" width="200" class=""></center>
                            
                            <h5 class="bold-2 text-white text-center">Tata Cara</h5>
                            
                        </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="alur.php">
                        <div class="col-md-9">
                            <center><img src="img/alur_proses.png" width="200" class=""></center>
                            
                            <h5 class="bold-2 text-white text-center">Alur</h5>
                            
                        </div>
                        </a>
                    </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="bs5/dist/js/bootstrap.bundle.js"></script>
    <script src="js/onscroll.js"></script>

</body>

</html>