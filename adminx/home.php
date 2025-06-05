<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Chartjs, PHP dan MySQL Demo Grafik Garis</title>
    <script type="text/javascript" src="Chart.js"></script>
    <style type="text/css">
            .container {
                width: 40%;
                margin: 15px auto;
            }
    </style>
  </head>
  <body>

    <style type="text/css">
  body{
    font-family: roboto;
  }

  table{
    margin: 0px auto;
  }
  </style>


  <center>
    <h2>MEMBUAT GRAFIK DARI DATABASE MYSQL DENGAN PHP DAN CHART.JS<br/>- www.malasngoding.com -</h2>
  </center>


  <?php 
  include 'koneksi.php';
  ?>

  <div style="width: 800px;margin: 0px auto;">
    <canvas id="myChart"></canvas>
  </div>

  <br/>
  <br/>

  <?php
  $produk = mysqli_query($koneksi,"select * from master");
  while($row = mysqli_fetch_array($produk)){
    $kecamatan[] = $row['kecamatan'];
    
    $query = mysqli_query($koneksi,"select sum(dpb_jml) as dpb_jml from master where id_kecamatan='".$row['id_kecamatan']."'");
    $querys = mysqli_query($koneksi,"select sum(ppb_jml) as ppb_jml from master where id_kecamatan='".$row['id_kecamatan']."'");
    $queryss = mysqli_query($koneksi,"select sum(tms_jml) as tms_jml from master where id_kecamatan='".$row['id_kecamatan']."'");
    $row = $query->fetch_array();
    $rows = $querys->fetch_array();
    $rowss = $queryss->fetch_array();

    $dpb_jml[] = $row['dpb_jml'];
    $ppb_jml[] = $rows['ppb_jml'];
    $tms_jml[] = $rowss['tms_jml'];
  }
  ?>


  <script>
    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: <?php echo json_encode($kecamatan); ?>,
        datasets: 
        [{
          label: 'Jumlah DPB',
          data: [
          <?php echo json_encode($dpb_jml); ?>,
          <?php echo json_encode($ppb_jml); ?>,
          <?php echo json_encode($tms_jml); ?>
          ],
          backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)'
          ],
          borderColor: [
          'rgba(255,99,132,1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)'
          ],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero:true
            }
          }]
        }
      }
    });
  </script>


  <script>
    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: ["Oktober", "November", "Desember"],
        datasets: [{
          label: '',
          data: [
          <?php 
          $jumlah_dpb = mysqli_query($koneksi,"SELECT  dpb_jml SUM(dpb_jml) AS dpb_jml FROM master");
          echo mysqli_num_rows($jumlah_dpb);
          ?>,
          <?php 
          $jumlah_ppb = mysqli_query($koneksi,"SELECT  dpb_jml SUM(dpb_jml) AS dpb_jml FROM master");
          echo mysqli_num_rows($jumlah_ppb);
          ?>,
          <?php 
          $jumlah_tms = mysqli_query($koneksi,"SELECT  dpb_jml SUM(dpb_jml) AS dpb_jml FROM master");
          echo mysqli_num_rows($jumlah_tms);
          ?>
          ],
          backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)'
          ],
          borderColor: [
          'rgba(255,99,132,1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)'
          ],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero:true
            }
          }]
        }
      }
    });
  </script>

  </body>
</html>