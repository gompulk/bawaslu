<?php
// koneksi ke database
session_start();
include 'koneksi.php';

if(!isset($_SESSION['admin']))
{
    echo "<script>alert('anda harus login dulu ^_^');</script>";
    echo "<script>location='login.php';</script>";
    header('location:login.php');
    exit();
}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin BAWASLU</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><marquee><font size="4">Selamat Datang --> Admin</font></marquee></a> 
            </div>
  
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;">
    <!-- fungsi jam -->
    <?php 
    $tanggal = mktime(date('m'), date("d"), date('Y'));
    echo "Tanggal : <b> " . date("d-m-Y", $tanggal ) . "</b>";
    date_default_timezone_set("Asia/Jakarta");
    $jam = date ("H:i");
    echo " | Pukul . <b> " . $jam . " " ." </b> ";
    $a = date ("H");
    if (($a>=3) && ($a<=11)) {
        echo " <b>, Selamat Pagi !! </b>";
    }else if(($a>=11) && ($a<=14)){
        echo " , Selamat  Siang !! ";
    }else if(($a>=15) && ($a<=18)){
        echo ", Selamat Sore !!";
    }else{
        echo ", <b> Selamat Malam </b>";
    }
    ?>
    <!-- akhir ungsi jam --> 
    </div>
        </nav>   
        
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="../img/logobawaslu.png" class="user-image img-responsive" style="background-color: white" />
					</li>
				
					
                    <li><a href="index.php"><i class="fa fa-desktop fa-3x"></i>&nbsp;Beranda</a></li>
                    <li><a href="index.php?halaman=pemilih"><i class="fa fa-table fa-3x"></i>&nbsp;&nbsp;&nbsp;Data Pemilih</a></li>
                    <li><a href="index.php?halaman=laporan"><i class="fa fa-bar-chart-o fa-3x"></i>Data Hasil Pengawasan</a></li>
                    <li><a href="index.php?halaman=bacara"><i class="fa fa-tasks fa-3x"></i>&nbsp;&nbsp;Berita Acara</a></li>
                    <li><a href="index.php?halaman=logout">&nbsp;&nbsp;<i class="fa fa-sign-out fa-3x"></i>&nbsp;Keluar</a></li> 
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
            <?php
            if (isset($_GET['halaman']))
            {
                if ($_GET['halaman']=="pemilih")
                {
                    include 'pemilih.php';
                }
                elseif ($_GET['halaman']=="laporan")
                {
                    include 'laporan.php';
                }
                elseif ($_GET['halaman']=="bacara") 
                {
                    include 'bacara.php';
                }
                elseif ($_GET['halaman']=="input") 
                {
                    include 'input_pemilih.php';
                }
                elseif ($_GET['halaman']=="file") 
                {
                    include 'file.php';
                }
                elseif ($_GET['halaman']=="hapusproduk") 
                {
                    include 'hapusproduk.php';
                }
                elseif ($_GET['halaman']=="ubahproduk") 
                {
                    include 'ubahproduk.php';
                }
                elseif ($_GET['halaman']=="logout") 
                {
                    include 'logout.php';
                }
                elseif ($_GET['halaman']=="pembayaran")
                {
                    include 'pembayaran.php';
                }
            }
            else
            {
                include 'home.php';
            }
            ?>
            </div>
        </div>

     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
