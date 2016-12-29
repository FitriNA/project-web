<?php
if(isset($_GET['id'])){
	include('fungsi/koneksi.php');
	$id_buku = $_GET['id'];
	$cek = mysql_query("SELECT id_buku FROM buku WHERE id_buku='$id_buku'") or die(mysql_error());
	if(mysql_num_rows($cek) == 0){
		echo '<script>window.history.back()</script>';
	}else{
		$del = mysql_query("DELETE FROM buku WHERE id_buku='$id_buku'");
		if($del){
			echo 'Data berhasil di hapus! ';
			echo '<a href="buku.php">Kembali</a>';
		}else{
			echo 'Gagal menghapus data! ';
			echo '<a href="buku.php">Kembali</a>';
		}
	}
}else{
	echo '<script>window.history.back()</script>';
}
?>