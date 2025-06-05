<?php
	include 'koneksi.php';
		header("Content-type: application/vnd-ms-excel");
		header("Content-Disposition: attachment; filename=Data Pemilih.xls");
?>


<table class="h4">
	<tr>
		<?php $sumut = $koneksi->query("SELECT * FROM sumut"); ?>
		<?php while($data = $sumut->fetch_assoc()){ ?>
		<td>Provinsi</td><td> <strong>&nbsp;&nbsp;: <?php echo $data['provinsi']; ?></strong></td>
	</tr>
	<tr>	
		<td>Kabupaten</td><td> <strong>&nbsp;&nbsp;: <?php echo $data['kabupaten']; ?></strong></td>
		<?php }?>
	</tr>
	</table>
	<br>
	<table class="table table-striped table-bordered" border="1">
	<thead>
		<tr>
			<th >NO</th>
			<th >Nama Kecamatan</th>
			<th >Jumlah Desa/Kel</th>
			<th >Tanggal Data</th>
			<th colspan="3">Jumlah DPB Sebelumnya</th>
			<th colspan="3">Potensi Pemilih Baru</th>
			<th colspan="3">Pemilih TMS</th>
			<th colspan="3">Perbaikkan data pemilih</th>
			<th colspan="3">Daftar pemilih berkelanjutan</th>
			<th>Keterangan</th>
		</tr>
	</thead>
		<tr>
			<td colspan="3"></td>
			<td ></td>
			<td width="50"><strong>L</strong></td>
			<td width="50"><strong>P</strong></td>
			<td width="50"><strong>L+P</strong></td>
			<td width="50"><strong>L</strong></td>
			<td width="50"><strong>P</strong></td>
			<td width="50"><strong>L+P</strong></td>
			<td width="50"><strong>L</strong></td>
			<td width="50"><strong>P</strong></td>
			<td width="50"><strong>L+P</strong></td>
			<td width="50"><strong>L</strong></td>
			<td width="50"><strong>P</strong></td>
			<td width="50"><strong>L+P</strong></td>			
			<td width="50"><strong>L</strong></td>
			<td width="50"><strong>P</strong></td>
			<td width="50"><strong>L+P</strong></td>
			<td width="50"></td>
		</tr>
		<?php $nomor=1; ?>
		<?php $ambil = $koneksi->query("SELECT * FROM master"); ?>
		<?php while($pecah = $ambil->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['kecamatan']; ?></td>
			<td><?php echo $pecah['jumlah']; ?></td>
			<td><?php echo $pecah['tgl']; ?></td>
			<td><?php echo $pecah['dpb_l']; ?></td>
			<td><?php echo $pecah['dpb_p']; ?></td>
			<td><?php echo $pecah['dpb_jml']; ?></td>
			<td><?php echo $pecah['ppb_l']; ?></td>
			<td><?php echo $pecah['ppb_p']; ?></td>
			<td><?php echo $pecah['ppb_jml']; ?></td>
			<td><?php echo $pecah['tms_l']; ?></td>
			<td><?php echo $pecah['tms_p']; ?></td>
			<td><?php echo $pecah['tms_jml']; ?></td>
			<td><?php echo $pecah['pdp_l']; ?></td>
			<td><?php echo $pecah['pdp_p']; ?></td>
			<td><?php echo $pecah['pdp_jml']; ?></td>
			<td><?php echo $pecah['lanjut_l']; ?></td>
			<td><?php echo $pecah['lanjut_p']; ?></td>
			<td><?php echo $pecah['lanjut_jml']; ?></td>
			<td><?php echo $pecah['ket']; ?></td>
		</tr>
		<?php $nomor++; ?>
		<?php } ?>
   </table>