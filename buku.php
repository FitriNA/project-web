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
        <li class="active"><a href="buku.php">Buku</a></li>
        <li><a href="anggota.php">Anggota</a></li>
      </ul>
  </div>
</nav>
<div class="container">
	<table class="table table-bordered">
		<tr>
        	<th>No</th>
        	<th>Id Buku</th>
			<th>Judul</th>
			<th>Jenis</th>
			<th>ISBN</th>
			<th>Penulis</th>
			<th>Penerbit</th>
			<th>Terbit</th>
			<th>Jml</th>
			<th>Rak</th>
			<th>Tgl Masuk</th>
			<?php
				include('admin/fungsi/koneksi.php');
				$query=mysql_query("SELECT * FROM buku ORDER BY id_buku DESC") or die(mysql_error());
				if(mysql_num_rows($query) == 0){
					echo '<tr><td colspan="11">Tidak ada data!</td></tr>';
				}else{
					$no = 1;
					while($data=mysql_fetch_assoc($query)){
						echo '<tr class=hijau>';
						echo '<td>'.$no.'</td>';
						echo '<td>'.$data['id_buku'].'</td>';
						echo '<td>'.$data['judul'].'</td>';
						echo '<td>'.$data['jenis'].'</td>';
						echo '<td>'.$data['isbn'].'</td>';
						echo '<td>'.$data['penulis'].'</td>';
						echo '<td>'.$data['penerbit'].'</td>';
						echo '<td>'.$data['thn_terbit'].'</td>';
						echo '<td>'.$data['jml_buku'].'</td>';
						echo '<td>'.$data['rak_buku'].'</td>';
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