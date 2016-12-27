<?php
	session_start();
	include("fungsi/ceklogin.php");
	invalid();
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>perpuz</title>
	<link href="lib/css/gaya.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="lib/css/bootstrap.css">
	<link rel="stylesheet" href="lib/css/bootstrap-theme.min.css">
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container">
    <a class="navbar-brand"><b><i>perpuz</i></b></a>
      <ul class="nav navbar-nav">
        <li><a href="index.php">Beranda</a></li>
        <li><a href="buku.php">Buku</a></li>
        <li class="active"><a href="anggota.php">Anggota</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
  </div>
</nav>
<div class="container">
	<a href="anggota-tambah.php" style="text-decoration: none;"><input type="button" name="tambah" value="Tambah" class="btn btn-success"></a><p></p>
	<table class="table table-bordered">
		<tr>
			<th>NO</th>
			<th>Id Anggota</th>
			<th>Nama</th>
			<th>JK</th>
			<th>Telepon</th>
			<th>Alamat</th>
			<th>E-Mail</th>
			<th>Tgl Masuk</th>
        	<th>Edit</th>
        	<th>Hapus</th>
			<?php
				include('fungsi/koneksi.php');
				$query=mysql_query("SELECT * FROM anggota ORDER BY id_anggota DESC") or die(mysql_error());
				if(mysql_num_rows($query) == 0){
					echo '<tr><td colspan="10">Tidak ada data!</td></tr>';
				}else{
					$no=1;
					while($data=mysql_fetch_assoc($query)){
						echo '<tr class=hijau>';
						echo '<td>'.$no.'</td>';
						echo '<td>'.$data['id_anggota'].'</td>';
						echo '<td>'.$data['nama'].'</td>';
						echo '<td>'.$data['kelamin'].'</td>';
						echo '<td>'.$data['phone'].'</td>';
						echo '<td>'.$data['alamat'].'</td>';
						echo '<td>'.$data['email'].'</td>';
						echo '<td>'.$data['tgl_entry'].'</td>';
						echo '<td><a href="anggota-edit.php?id='.$data['id_anggota'].'" class=edit>Edit</a></td>';
						echo '<td><a href="anggota-hapus.php?id='.$data['id_anggota'].'" class=edit>Hapus</a>';
						echo '</tr>';
					$no++;
					}
				}
			?>
		</table>
</div>
</body>
  <script src="lib/js/jquery.min.js"></script>
  <script src="lib/js/bootstrap.min.js"></script>
</html>