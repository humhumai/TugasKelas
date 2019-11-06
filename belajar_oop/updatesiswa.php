<h2>Menu Update Data Siswa</h2>
<form method="POST" enctype=multipart/form-data>
	<label>Nama</label>
	<input type="text" name="namaa"><br><br>
    <label>Update Alamat</label>
	<input type="text" name="alamata"><br><br>
	<button type="submit" name="update">Update</button>
</form>

<?php
include 'class.php';
if(isset($_POST['update'])){
    $siswa -> upd_siswa($_POST['namaa'],$_POST['alamata']);
	echo "<script>location='tampilsiswa.php';</script>";
}
?>