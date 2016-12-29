<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>perpuz</title>
    <link href="lib/css/gaya.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="lib/css/bootstrap.css">
    <link rel="stylesheet" href="lib/css/bootstrap-theme.min.css">
<style>
body {
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #eee;
}
.formnya-bos {
  max-width: 330px;
  padding: 15px;
  margin: 0 auto;
}
.formnya-bos .formnya-bos-kepala {
  margin-bottom: 10px;
}
.formnya-bos .form-control {
  position: relative;
  height: auto;
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
  padding: 10px;
  font-size: 16px;
}
.formnya-bos .form-control:focus {
  z-index: 2;
}
.formnya-bos input[placeholder="Username"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.formnya-bos input[placeholder="Password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
</style>
</head>
<body>
    <div class="container">
      <form class="formnya-bos" action="sesi.php" name="masuk" method="post" onSubmit="return validasi(this)">
        <h2 class="formnya-bos-kepala">Panel Login</h2>
        <input type="text" name="id" class="form-control" placeholder="Username" required autofocus>
        <input type="password" name="pass" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-success btn-block" type="submit">Login</button>
      </form>
    </div>
</body>
  <script src="lib/js/jquery.min.js"></script>
  <script src="lib/js/bootstrap.min.js"></script>
</html>
