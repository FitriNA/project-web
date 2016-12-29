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
<body style="background-image: url(lib/css/images/bg.png); background-size: cover;">
<nav class="navbar navbar-default">
  <div class="container">
    <a class="navbar-brand"><b><i>perpuz</i></b></a>
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Beranda</a></li>
        <li><a href="buku.php">Buku</a></li>
        <li><a href="anggota.php">Anggota</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
  </div>
</nav>
<div class="container">

</div>
</body>
  <script src="lib/js/jquery.min.js"></script>
  <script src="lib/js/bootstrap.min.js"></script>
</html>