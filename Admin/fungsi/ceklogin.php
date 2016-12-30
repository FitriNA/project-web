<?php
function valid(){
	if ((isset($_SESSION['admin']))){
		header("location: index.php");
	}
}
function invalid(){
	if (!isset($_SESSION['admin'])){
		header("location: login.php");
	}
}
?>