<h2>Detail Pembelian</h2>

<?php
$ambil = $koneksi->query("SELECT * FROM pembelian JOIN pelanggan 
	ON pembelian.id_pelanggan=pelanggan.id_pelanggan 
	WHERE pembelian.id_pembelian='$_GET[id]'");
$detail = $ambil->fetch_assoc();
?>
<strong> Nama Pembeli : <?php echo $detail['nama_pelanggan']; ?></strong> <br>

<p>
	No. Telp/HP &nbsp;&nbsp;: <?php echo $detail['telepon_pelanggan']; ?> <br>
	E-mail &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $detail['email_pelanggan']; ?>
</p>

<p>
	tanggal      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:  <?php echo $detail['tanggal_pembelian']; ?> <br>
	Tota Belanja &nbsp;&nbsp;: <?php echo $detail['total_pembelian']; ?>
</p>
<br>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>NO</th>
			<th>NAMA PRODUK</th>
			<th>HARGA</th>
			<th>JUMLAH</th>
			<th><center>TOTAL</center></th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1; ?>
		<?php $ambil = $koneksi->query("SELECT * FROM pembelian_produk JOIN produk ON pembelian_produk.id_produk=produk.id_produk WHERE pembelian_produk.id_pembelian='$_GET[id]'");?>
		<?php while ($pecah = $ambil->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['nama_produk']; ?></td>
			<td><?php echo $pecah['harga_produk']; ?></td>
			<td><?php echo $pecah['jumlah']; ?></td>
			<td>
				<?php echo $pecah['harga_produk']*$pecah['jumlah']; ?>
			</td>
		</tr>
		<?php $nomor++; ?> 
		<?php } ?>
	</tbody>
</table>