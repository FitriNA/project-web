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
	<form method="post" action="" class="form-inline">
		<div class="form-group">
			<input type="text" name="search" placeholder="Pencarian" class="form-control"/>
			<input type="submit" name="cari" value="cari" class="btn btn-success"><p></p>
		</div>
	</form>
	<table class="table table-bordered">
		<tr>
			<th>No</th>
			<th>ID Anggota</th>
			<th>Nama</th>
			<th>Kelamin</th>
			<th>Telepon</th>
			<th>Alamat</th>
			<th>E-Mail</th>
			<th>Tgl Masuk</th>
		</tr>
			<?php
				include('admin/fungsi/koneksi.php');
				$query=mysql_query("SELECT * FROM anggota ORDER BY id_anggota DESC") or die(mysql_error());
				if (isset($_POST['cari'])) {
					$search = $_POST['search'];

					$sql = "SELECT * FROM anggota WHERE id_anggota LIKE '%$search%' OR nama LIKE '%$search%' OR kelamin LIKE '%$search%' OR phone LIKE '%$search%' OR alamat LIKE '%$search%' OR email LIKE '%$search%' OR tgl_entry LIKE '%$search%'";
					$result = mysql_query($sql) or die('Ada kesalahan saat menampilkan data.' . mysql_error());
					
					if (mysql_num_rows($result) == 0) {
						echo '<p></p><p>Pencarian tidak ditemukan</p>';
					} else {
						echo '<p></p>';
						$no = 1;
						while($row=mysql_fetch_array($result)){
						extract($row);
							echo '<tr class=hijau>';
							echo '<td>'.$no.'</td>';
							echo '<td>'.$id_anggota.'</td>';
							echo '<td>'.$nama.'</td>';
							echo '<td>'.$kelamin.'</td>';
							echo '<td>'.$phone.'</td>';
							echo '<td>'.$alamat.'</td>';
							echo '<td>'.$email.'</td>';
							echo '<td>'.$tgl_entry.'</td>';
							echo '</tr>';
						$no++;
						}
					}
				}
				else if(mysql_num_rows($query) == 0){
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