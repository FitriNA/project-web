<?php
if(isset($_POST['edit_anggota'])){
	include('fungsi/koneksi.php');
	$id_anggota	= $_POST['id_anggota'];
	$nama		= $_POST['nama'];
	$kelamin	= $_POST['kelamin'];
	$phone		= $_POST['phone'];
	$alamat		= $_POST['alamat'];
	$email		= $_POST['email'];
	$tgl_entry	= $_POST['tgl_entry'];
	$update = mysql_query("UPDATE anggota SET id_anggota='$id_anggota', nama='$nama', kelamin='$kelamin', phone='$phone', alamat='$alamat', email='$email', tgl_entry='$tgl_entry' WHERE id_anggota='$id_anggota'") or die(mysql_error());
	if($update){
		echo 'Data berhasil di simpan! ';
		echo '<a href="anggota.php">Kembali</a>';
	}else{
		echo 'Gagal menyimpan data! ';
		echo '<a href="anggota-edit.php?id='.$id_anggota.'">Kembali</a>';
	}
}else{
	echo '<script>window.history.back()</script>';
}
?>