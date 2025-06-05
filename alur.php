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

    <title>Alur Pengawasan</title>

    <style>
    .custom1 {
       margin-left: auto !important;
       margin-right: auto !important;
       margin: 20px;
       padding: 20px;
    }
    .custom2 {
      position: relative;
      height: 0;
      overflow: hidden;
      padding-bottom: 90%;
    }
    .custom2 iframe {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      padding: 0;
      margin: 0;
    }
    #tutorial-pdf-responsive {
      max-width: 900px;
      max-height: 700px;
      overflow: hidden;
    }
    </style>

</head>

<body>

    <?php include 'navbars.php'; ?>

    <!--============================================================================1. header==========================================================-->
    <div class="container">

        <br><br><br><br><br><br><br>

        <div class="row my-5">
            <div id="tutorial-pdf-responsive" class="custom1">
              <div class="custom2">
                 <iframe src="./assets/alur.pdf"></iframe>
              </div>
              <br>
                <a class="btn btn-success text-white" href="menu.php">Kembali</a>
            </div>


        </div>

    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="bs5/dist/js/bootstrap.bundle.js"></script>
    <script src="js/onscroll.js"></script>

</body>

</html>