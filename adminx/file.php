<h2>Upload File Pengawasan</h2>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Judul File</label>
		<input type="text" class="form-control" name="nama">
	</div>
	<div class="form-group">
		<label>Upload File</label>
		<input type="file" class="form-control" name="foto">
	</div>
	<button class="btn btn-primary" name="save">Simpan</button>
</form>

<?php
if (isset($_POST['save']))
{
	$nama = $_FILES['foto']['name'];
	$lokasi = $_FILES['foto']['tmp_name'];
	move_uploaded_file($lokasi, "file/".$nama);
	$koneksi->query("INSERT INTO  (file) 
		VALUES ('$_POST[nama]','$nama')");

	echo "<br><div class='alert alert-info'>Data Sudah Tersimpan</div>";
	echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=pemilih'>";
}
?>