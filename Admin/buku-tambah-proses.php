<?php
if(isset($_POST['tambah_buku'])){
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
	$input = mysql_query("INSERT INTO buku VALUES('$id_buku', '$judul', '$jenis', '$isbn', '$penulis', '$penerbit', '$thn_terbit', '$jml_buku', '$rak_buku', '$tgl_entry')") or die(mysql_error());
	if($input){
		echo 'Data berhasil di tambahkan! ';
		echo '<a href="buku.php">Kembali</a>';
	}else{
		echo 'Gagal menambahkan data! ';
		echo '<a href="buku-tambah.php">Kembali</a>';
	}
}else{
	echo '<script>window.history.back()</script>';
}
?>