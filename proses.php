<?php
    //membuat koneksi
    include 'adminx/koneksi.php';

    //memasukkan data ke array
        $kecamatan     = $_POST['kecamatan'];
        $jumlah        = $_POST['jumlah'];
        $tgl           = $_POST['tgl'];
        $dpb_l         = $_POST['dpb_l'];
        $dpb_p         = $_POST['dpb_p'];
        $ppb_l         = $_POST['ppb_l'];
        $ppb_p         = $_POST['ppb_p'];
        $tms_l         = $_POST['tms_l'];
        $tms_p         = $_POST['tms_p'];
        $ket           = $_POST['ket'];

        $total = count($kecamatan);

        // fungsi untuk melakukan perulangan perhitungan untuk input di bawah
        for ($i=0; $i < $total; $i++) { 
            echo "dpb_jml = ".$dpb_jml[$i] = $dpb_l[$i] + $dpb_p[$i];
            echo "<br>";
            echo "ppb_jml = ".$ppb_jml[$i] = $ppb_l[$i] + $ppb_p[$i];
            echo "<br>";
            echo "tms_jml = ".$tms_jml[$i] = $tms_l[$i] + $tms_p[$i];
            echo "<br>";
            echo "lanjut_l = ".$lanjut_l[$i] = $dpb_l[$i] + $ppb_l[$i] - $tms_l[$i];
            echo "<br>";
            echo "lanjut_p = ".$lanjut_p[$i] = $dpb_p[$i] + $ppb_p[$i] - $tms_p[$i];
            echo "<br>";
            echo "lanjut_jml =  ".$lanjut_jml[$i] = $lanjut_l[$i] + $lanjut_p[$i];
        }

    //melakukan perulangan input
    for($j=0; $j<$total; $j++){

        mysqli_query($koneksi, "insert into master set
            kecamatan    = '$kecamatan[$j]',
            jumlah       = '$jumlah[$j]',
            tgl          = '$tgl[$j]',
            dpb_l        = '$dpb_l[$j]',
            dpb_p        = '$dpb_p[$j]',
            dpb_jml      = '$dpb_jml[$j]',
            ppb_l        = '$ppb_l[$j]',
            ppb_p        = '$ppb_p[$j]',
            ppb_jml      = '$ppb_jml[$j]',
            tms_l        = '$tms_l[$j]',
            tms_p        = '$tms_p[$j]',
            tms_jml      = '$tms_jml[$j]',
            lanjut_l     = '$lanjut_l[$j]',
            lanjut_p     = '$lanjut_p[$j]',
            lanjut_jml   = '$lanjut_jml[$j]',
            ket          = '$ket[$j]'
        ");
    }

    // kembali ke halaman sebelumnya
    header("location: input_pemilih.php");
?>