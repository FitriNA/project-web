<?php
	$host="localhost";
	$user="root";
	$pass="";
	$db="perpuz";
	$kon=mysql_connect($host,$user,$pass) or die(mysql_error());
		 mysql_select_db($db,$kon) or die(mysql_error());
?>