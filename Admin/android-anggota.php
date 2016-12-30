<?php
	include('admin/fungsi/koneksi.php');

	$response = array();
	$query=mysql_query("SELECT * FROM anggota ORDER BY id_anggota DESC") or die(mysql_error());

	$response["anggota"] = array();
	while($data=mysql_fetch_assoc($query)){
		$agt = array();
    	$agt["id_anggota"] = $data["id_anggota"];
    	$agt["nama"] = $data["nama"];
    	$agt["kelamin"] = $data["kelamin"];
    	$agt["phone"] = $data["phone"];
    	$agt["alamat"] = $data["alamat"];
    	$agt["email"] = $data["email"];
    	$agt["tgl_entry"] = $data["tgl_entry"];
		array_push($response["anggota"], $agt);
	}
	echo json_encode($response);
?>