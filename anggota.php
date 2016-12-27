<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>perpuz</title>
	<link href="admin/lib/css/gaya.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="admin/lib/css/bootstrap.css">
	<link rel="stylesheet" href="admin/lib/css/bootstrap-theme.min.css">
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container">
    <a class="navbar-brand"><b><i>perpuz</i></b></a>
      <ul class="nav navbar-nav">
        <li><a href="index.php">Beranda</a></li>
        <li><a href="buku.php">Buku</a></li>
        <li class="active"><a href="anggota.php">Anggota</a></li>
      </ul>
  </div>
</nav>
<div class="container">
	<table class="table table-bordered">
		<tr>
			<th>No</th>
			<th>ID Anggota</th>
			<th>Nama Lengkap</th>
			<th>Kelamin</th>
			<th>Telepon</th>
			<th>Alamat</th>
			<th>E-Mail</th>
			<th>Tgl Masuk</th>
			<?php
				include('admin/fungsi/koneksi.php');
				$query=mysql_query("SELECT * FROM anggota ORDER BY id_anggota DESC") or die(mysql_error());
				if(mysql_num_rows($query) == 0){
					echo '<tr><td colspan="8">Tidak ada data!</td></tr>';
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
						echo '</tr>';
					$no++;
					}
				}
			?>
	</table>
</div>
</body>
	<script src="admin/lib/js/jquery.min.js"></script>
	<script src="admin/lib/js/bootstrap.min.js"></script>
</html>