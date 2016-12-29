<?php
if(isset($_POST['edit_buku'])){
	include('fungsi/koneksi.php');
	$id_buku	= $_POST['id_buku'];
	$judul		= $_POST['judul'];
	$jenis		= $_POST['jenis'];
	$isbn		= $_POST['isbn'];
	$penulis	= $_POST['penulis'];
	$penerbit	= $_POST['penerbit'];
	$thn_terbit	= $_POST['thn_terbit'];
	$jml_buku	= $_POST['jml_buku'];
	$rak_buku	= $_POST['rak_buku'];
	$tgl_entry	= $_POST['tgl_entry'];
	$update = mysql_query("UPDATE buku SET id_buku='$id_buku', judul='$judul', jenis='$jenis', isbn='$isbn', penulis='$penulis', penerbit='$penerbit', thn_terbit='$thn_terbit', jml_buku='$jml_buku', rak_buku='$rak_buku', tgl_entry='$tgl_entry' WHERE id_buku='$id_buku'") or die(mysql_error());
	if($update){
		echo 'Data berhasil di simpan! ';
		echo '<a href="buku.php">Kembali</a>';
	}else{
		echo 'Gagal menyimpan data! ';
		echo '<a href="buku-edit.php?id='.$id_buku.'">Kembali</a>';
	}
}else{
	echo '<script>window.history.back()</script>';
}
?>