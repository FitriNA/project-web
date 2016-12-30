<?php
	include('admin/fungsi/koneksi.php');

	$response = array();
	$query=mysql_query("SELECT * FROM buku ORDER BY id_buku DESC") or die(mysql_error());

	$response["buku"] = array();
	while($data=mysql_fetch_assoc($query)){
		$bk = array();
    	$bk["id_buku"] = $data["id_buku"];
    	$bk["judul"] = $data["judul"];
    	$bk["jenis"] = $data["jenis"];
    	$bk["isbn"] = $data["isbn"];
    	$bk["penulis"] = $data["penulis"];
    	$bk["penerbit"] = $data["penerbit"];
    	$bk["thn_terbit"] = $data["thn_terbit"];
    	$bk["jml_buku"] = $data["jml_buku"];
    	$bk["rak_buku"] = $data["rak_buku"];
    	$bk["tgl_entry"] = $data["tgl_entry"];
		array_push($response["buku"], $bk);
	}
	echo json_encode($response);
?>