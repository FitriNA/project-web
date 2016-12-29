<?php
	include("fungsi/koneksi.php");
	session_start();
	if (login){
		global $id,$pass;
		$id=$_POST['id'];
		$pass=($_POST['pass']);
		$sql="SELECT id_user,sandi FROM userpass WHERE id_user='$id' AND sandi='$pass';";
		$query=mysql_query($sql) or die(mysql_error());
		$jum=mysql_num_rows($query);
		$data=mysql_fetch_array($query);
		if (($jum==0) or ($data[1]!=$pass)){
			header("location: login.php");
		} else {
			$_SESSION['admin']=1;
			$_SESSION['masuk']=$data[0];
			header("location: index.php");
		}
	}
?>