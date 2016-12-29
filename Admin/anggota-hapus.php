<?php
if(isset($_GET['id'])){
	include('fungsi/koneksi.php');
	$id_anggota = $_GET['id'];
	$cek = mysql_query("SELECT id_anggota FROM anggota WHERE id_anggota='$id_anggota'") or die(mysql_error());
	if(mysql_num_rows($cek) == 0){
		echo '<script>window.history.back()</script>';
	}else{
		$del = mysql_query("DELETE FROM anggota WHERE id_anggota='$id_anggota'");
		if($del){
			echo 'Data berhasil di hapus! ';
			echo '<a href="anggota.php">Kembali</a>';
		}else{
			echo 'Gagal menghapus data! ';
			echo '<a href="anggota.php">Kembali</a>';
		}
	}
}else{
	echo '<script>window.history.back()</script>';
}
?>