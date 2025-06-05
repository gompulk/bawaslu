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

    <title>BAWASLU</title>

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

    <?php include 'navbars.php'; ?>

    <!--============================================================================1. header==========================================================-->
    <div class="container">

        <br><br><br><br><br><br>

        <div class="row my-5">

            <div class="col-lg-12 d-block d-lg-none">
                
            </div>

            <div class="col-lg-6">
                <div class="row align">
                    <h1 class="text-truncate bold-3 my-5 text-white">PASTI Lanjut</h1>
                    <div class="">
                        <p class="text-white">Panduan Pengawasan Pemuktakhiran Daftar Pemilih Berkelanjutan.</p>
                    </div>
                    <div class="row g-3">
                        <div class="col-md-5">
                            <a href="menu.php" class="btn p-3 rounded shadow"><img src="img/1.png" width="200"/><br><br><strong class="text-white">Panduan Pengawasan</strong></a>
                        </div>
                        <div class="col-md-3">
                            <a href="menu 2.php" class="btn p-3 rounded shadow "><img src="img/2.png" width="200"/><br><br><strong class="text-white">Laporan Pengawasan</strong></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- logo di tampilan web -->
            <div class="col-lg-6 d-none d-lg-block">
                <br><br><br><br>
                <img src="./img/logo.png" width="100%">
            </div>

        </div>

    </div>

    

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="bs5/dist/js/bootstrap.bundle.js"></script>
    <script src="js/onscroll.js"></script>

</body>

</html>