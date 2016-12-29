<?php
	session_start();
	unset($_SESSION['admin']);
	unset($_SESSION['masuk']);
	session_destroy();
	header("location: index.php");
?>