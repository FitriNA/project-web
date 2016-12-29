<?php
if(isset($_POST['tambah_anggota'])){
	include('fungsi/koneksi.php');
	$id_anggota	= $_POST['id_anggota'];
	$nama		= $_POST['nama'];
	$kelamin	= $_POST['kelamin'];
	$phone		= $_POST['phone'];
	$alamat		= $_POST['alamat'];
	$email		= $_POST['email'];
	$tgl_entry	= $_POST['tgl_entry'];
	$input = mysql_query("INSERT INTO anggota VALUES('$id_anggota', '$nama', '$kelamin', '$phone', '$alamat', '$email', '$tgl_entry')") or die(mysql_error());
	if($input){
		echo 'Data berhasil di tambahkan! ';
		echo '<a href="anggota.php">Kembali</a>';
	}else{
		echo 'Gagal menambahkan data! ';
		echo '<a href="anggota-tambah.php">Kembali</a>';
	}
}else{
	echo '<script>window.history.back()</script>';
}
?>