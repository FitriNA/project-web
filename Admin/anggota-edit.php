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
  <link rel="stylesheet" href="lib/css/jquery-ui.css">
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
<h3>Edit Data Anggota</h3>
<?php
  include("fungsi/koneksi.php");
  $id=$_GET['id'];
  $query=mysql_query("SELECT * FROM anggota WHERE id_anggota='$id'") or die(mysql_error());
  while($data=mysql_fetch_assoc($query)){
?>
<form action="anggota-edit-proses.php" method="post">
  <table width="429" border="0" cellspacing="0" cellpadding="3" align="left">
    <tr>
      <td>ID Anggota</td>
      <td width="4"><div align="center">:</div></td>
      <td width="208"><input name="id_anggota" type="text" class="form-control" style="border: 1px solid #24890d;" value="<?php echo $data['id_anggota']; ?>" required/></td>
    </tr>
    <tr>
      <td>Nama</td>
      <td><div align="center">:</div></td>
      <td><input name="nama" type="text" class="form-control" style="border: 1px solid #24890d;" value="<?php echo $data['nama']; ?>" required/></td>
    </tr>
    <tr>
      <td>Kelamin</td>
      <td><div align="center">:</div></td>
      <td><select name="kelamin" class="form-control" style="border: 1px solid #24890d;" value="<?php echo $data['kelamin']; ?>" required/>
        <option value="">Pilih Kelamin</option>
        <option value="L">Laki-Laki</option>
        <option value="P">Perempuan</option>
      </select>
      </td>
    </tr>
    <tr>
      <td>Telepon</td>
      <td><div align="center">:</div></td>
      <td><input name="phone" type="text" class="form-control" style="border: 1px solid #24890d;" value="<?php echo $data['phone']; ?>" required/></td>
    </tr>
    <tr>
      <td>Alamat</td>
      <td><div align="center">:</div></td>
      <td><input name="alamat" type="text" class="form-control" style="border: 1px solid #24890d;" value="<?php echo $data['alamat']; ?>" required/></td>
    </tr>
    <tr>
      <td>E-mail</td>
      <td><div align="center">:</div></td>
      <td><input name="email" type="text" class="form-control" style="border: 1px solid #24890d;" value="<?php echo $data['email']; ?>" required/></td>
    </tr>
    <tr>
      <td width="199">Tanggal Masuk</td>
      <td><div align="center">:</div></td>
      <td><input name="tgl_entry" type="text" id="datepicker" class="form-control" style="border: 1px solid #24890d;" value="<?php echo $data['tgl_entry']; ?>" required/></td>
    </tr>
    <tr>
      <td colspan="3" class="submit"><input name="edit_anggota" type="submit" class="btn btn-success" value="Simpan" />
      <input name="Reset" type="reset" class="btn btn-success" id="Reset" value="Batal" /></td>
    </tr>
  </table>
</form>
<?php
  }
?>
</div>
</body>
  <script src="lib/js/jquery.min.js"></script>
  <script src="lib/js/jquery-ui.js"></script>
  <script src="lib/js/bootstrap.min.js"></script>
  <script>
    $( function() {
      $( "#datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' }).val();
    } );
  </script>
</html>