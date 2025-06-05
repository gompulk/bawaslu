<?php
include 'adminx/koneksi.php';
?>
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

    <title>Input Data Pemilih</title>

    
</head>

<body>

    <?php include 'navbars.php'; ?>

    <!--============================================================================1. header==========================================================-->
    <div class="container">

        <br><br><br><br><br><br><br>

        <div class="row my-5">
            <center><h2>Tambah Data Pemilih</h2></center>

        <br><br><br>

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

<br>
<div class="container">
  <div class="panel panel-default">
    <div class="panel-body">
      <!-- membuat form  -->
      <!-- gunakan tanda [] untuk menampung array  -->
        <div href="berdiri">
        <div class="row col-md-12">
        <form action="proses.php" method="POST">
          <div class="control-group after-add-more row g-3">
            <div class="col-md-6">
                <label>Nama Kecamatan :</label>
                <input type="text" class="form-control" name="kecamatan[]">
            </div>
            <div class="col-md-6">
                <label>Jumlah Desa/Kelurahan :</label>
                <input type="text" class="form-control" name="jumlah[]">
            </div>
            <div class="col-md-6">
                <label>Tanggal Data :</label>
                <input type="date" class="form-control" name="tgl[]">
            </div>

            <div></div>
            
            <h3 class="col-md-6">Jumlah DPB Sebelumnya</h3>
            <h3 class="col-md-6">Potensi Pemilih Baru</h3>
            <div class="col-md-3">
                <label>Laki-Laki</label>
                <input type="number" class="form-control" name="dpb_l[]">
            </div>
            <div class="col-md-3">
                <label>Perempuan</label>
                <input type="number" class="form-control" name="dpb_p[]">
            </div>
            
            <div class="col-md-3">
                <label>Laki-laki</label>
                <input type="number" class="form-control" name="ppb_l[]">
            </div>
            <div class="col-md-3">
                <label>Perempuan</label>
                <input type="number" class="form-control" name="ppb_p[]">
            </div>
            
            <h3 class="col-md-6">Pemilih TMS</h3>
            <h3 class="col-md-6">Perbaikkan Data Pemilih</h3>
            <div class="col-md-3">
                <label>Laki-laki</label>
                <input type="number" class="form-control" name="tms_l[]">
            </div>
            <div class="col-md-3">
                <label>Perempuan</label>
                <input type="number" class="form-control" name="tms_p[]">
            </div>
            <div class="col-md-3">
                <label>Laki-laki</label>
                <input type="number" class="form-control" name="pdp_l[]">
            </div>
            <div class="col-md-3">
                <label>Perempuan</label>
                <input type="number" class="form-control" name="pdp_p[]">
            </div>
            <div class="col-md-12">
                <label>keterangan</label>
                <input type="text" class="form-control" name="ket[]">
            </div>
            <!--
            <h3 class="col-md-12">Daftar Pemilih Berkelanjutan</h3>
            <div class="col-md-3">
                <label>Laki-laki</label>
                <input type="number" class="form-control" name="lanjut_l[]">
            </div>
            <div class="col-md-3">
                <label>Perempuan</label>
                <input type="number" class="form-control" name="lanjut_p[]">
            </div>
            -->
            <br>
            <div class="col-md-12">
            <button class="btn btn-success add-more" type="button">
              <i class="fa fa-plus text-white"></i> Tambah Lagi
            </button>
            </div>

            <hr>
          </div>
          <button class="btn btn-success" type="submit" name="save">Simpan Data</button>
        </form>
            
        </div>

        <!-- class hide membuat form disembunyikan  -->
        <!-- hide adalah fungsi bootstrap 3, klo bootstrap 4 pake invisible  -->
        <div class="row col-sm-6">
        <div class="copy invisible">
            <div class="control-group row g-3">
            <div class="col-md-6">
                <label>Nama Kecamatan :</label>
                <input type="text" class="form-control" name="kecamatan[]">
            </div>
            <div class="col-md-6">
                <label>Jumlah Desa/Kelurahan :</label>
                <input type="text" class="form-control" name="jumlah[]">
            </div>
            <div class="col-md-6">
                <label>Tanggal Data :</label>
                <input type="date" class="form-control" name="tgl[]">
            </div>

            <div></div>
            
            <h3 class="col-md-6">Jumlah DPB Sebelumnya</h3>
            <h3 class="col-md-6">Potensi Pemilih Baru</h3>
            <div class="col-md-3">
                <label>Laki-Laki</label>
                <input type="number" class="form-control" name="dpb_l[]">
            </div>
            <div class="col-md-3">
                <label>Perempuan</label>
                <input type="number" class="form-control" name="dpb_p[]">
            </div>

            <div class="col-md-3">
                <label>Laki-laki</label>
                <input type="number" class="form-control" name="ppb_l[]">
            </div>
            <div class="col-md-3">
                <label>Perempuan</label>
                <input type="number" class="form-control" name="ppb_p[]">
            </div>
            
            <h3 class="col-md-6">Pemilih TMS</h3>
            <h3 class="col-md-6">Perbaikkan Data Pemilih</h3>
            <div class="col-md-3">
                <label>Laki-laki</label>
                <input type="number" class="form-control" name="tms_l[]">
            </div>
            <div class="col-md-3">
                <label>Perempuan</label>
                <input type="number" class="form-control" name="tms_p[]">
            </div>
            <div class="col-md-3">
                <label>Laki-laki</label>
                <input type="number" class="form-control" name="pdp_l[]">
            </div>
            <div class="col-md-3">
                <label>Perempuan</label>
                <input type="number" class="form-control" name="pdp_p[]">
            </div>
            <div class="col-md-12">
                <label>keterangan</label>
                <input type="text" class="form-control" name="ket[]">
            </div>
            <!--
            <h3 class="col-md-12">Daftar Pemilih Berkelanjutan</h3>
            <div class="col-md-3">
                <label>Laki-laki</label>
                <input type="number" class="form-control" name="lanjut_l[]">
            </div>
            <div class="col-md-3">
                <label>Perempuan</label>
                <input type="number" class="form-control" name="lanjut_p[]">
            </div>
            -->
            <br>
            <div class="col-md-12">
            <button class="btn btn-danger remove" type="button">
              <i class="fa fa-trash text-white"></i> Batalkan
            </button>
            </div>

              <hr>
            </div>

        </div>
    </div>
  </div>
</div>
<!-- fungsi javascript untuk menampilkan form dinamis  -->
<!-- penjelasan :
saat tombol add-more ditekan, maka akan memunculkan div dengan class copy -->
<script type="text/javascript">
    $(document).ready(function() {
      $(".add-more").click(function(){ 
          var html = $(".copy").html();
          $(".after-add-more").after(html);
      });

      // saat tombol remove dklik control group akan dihapus 
      $("body").on("click",".remove",function(){ 
          $(this).parents(".control-group").remove();
      });
    });
</script>


        </div>

    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="bs5/dist/js/bootstrap.bundle.js"></script>
    <script src="js/onscroll.js"></script>

</body>

</html>