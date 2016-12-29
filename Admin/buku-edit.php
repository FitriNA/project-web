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
        <li class="active"><a href="buku.php">Buku</a></li>
        <li><a href="anggota.php">Anggota</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
  </div>
</nav>
<div class="container">
<h3>Edit Data Buku</h3>
<?php
  include("fungsi/koneksi.php");
  $id=$_GET['id'];
  $query=mysql_query("SELECT * FROM buku WHERE id_buku='$id'") or die(mysql_error());
  while($data=mysql_fetch_assoc($query)){
?>
<form action="buku-edit-proses.php" method="post">
  <table width="429" border="0" cellspacing="0" cellpadding="3" align="left">
    <tr>
      <td width="199">ID Buku</td>
      <td width="4"><div align="center">:</div></td>
      <td width="208"><input name="id_buku" type="text" class="form-control" id="ID" style="border: 1px solid #24890d;" value="<?php echo $data['id_buku']; ?>" required/></td>
    </tr>
    <tr>
      <td>Judul</td>
      <td><div align="center">:</div></td>
      <td><input name="judul" type="text" class="form-control" id="judul" style="border: 1px solid #24890d;" value="<?php echo $data['judul']; ?>" required/></td>
    </tr>
    <tr>
      <td>Jenis</td>
      <td><div align="center">:</div></td>
      <td><select name="jenis" class="form-control" style="border: 1px solid #24890d;" required/>
      <option value="">Pilih Jenis</option>
        <option value="elektro">elektro</option>
        <option value="jaringan">jaringan</option>
        <option value="mekanik">mekanik</option>
        <option value="motor">motor</option>
        <option value="sipil">sipil</option>
        <option value="tekno">tekno</option>
      </select>
      </td>
    </tr>
    <tr>
      <td>ISBN</td>
      <td><div align="center">:</div></td>
      <td><input name="isbn" type="text" class="form-control" id="isbn" style="border: 1px solid #24890d;" value="<?php echo $data['isbn']; ?>" required/></td>
    </tr>
    <tr>
      <td>Penulis</td>
      <td><div align="center">:</div></td>
      <td><select name="penulis" class="form-control" style="border: 1px solid #24890d;" required/>
      <option value="">Pilih Penulis</option>
        <option value="elsa">elsa</option>
        <option value="erik">erik</option>
        <option value="jono">jono</option>
        <option value="onno">onno</option>
      </select>
      </td>
    </tr>
    <tr>
      <td>Penerbit</td>
      <td><div align="center">:</div></td>
      <td><select name="penerbit" class="form-control" id="kdpenerbit" style="border: 1px solid #24890d;" required/>
      <option value="">Pilih Penerbit</option>
        <option value="gramedia">gramedia</option>
        <option value="informatika">informatika</option>
        <option value="maxikom">maxikom</option>
        <option value="modula">modula</option>
      </select>
      </td>
    </tr>
    <tr>
      <td>Tahun Terbit</td>
      <td><div align="center">:</div></td>
      <td><input name="thn_terbit" type="text" class="form-control" id="tahun" maxlength="4" style="border: 1px solid #24890d;" value="<?php echo $data['thn_terbit']; ?>" required/></td>
    </tr>
    <tr>
      <td>Jumlah Buku</td>
      <td><div align="center">:</div></td>
      <td><input name="jml_buku" type="text" class="form-control" id="jumlah" style="border: 1px solid #24890d;" value="<?php echo $data['jml_buku']; ?>" required/></td>
    </tr>
    <tr>
      <td>Rak Buku</td>
      <td><div align="center">:</div></td>
      <td><input name="rak_buku" type="text" class="form-control" id="rak" style="border: 1px solid #24890d;" value="<?php echo $data['rak_buku']; ?>" required/></td>
    </tr>
    <tr>
      <td width="199">Tanggal Masuk</td>
      <td><div align="center">:</div></td>
      <td><input name="tgl_entry" type="text" id="datepicker" class="form-control" style="border: 1px solid #24890d;" value="<?php echo $data['tgl_entry']; ?>" required/></td>
    </tr> 
    <tr>
      <td colspan="3" class="submit"><input name="edit_buku" type="submit" class="btn btn-success" value="Simpan" />
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