<?php
	session_start();
	if(isset($_SESSION['loginInfo']))
	{
	echo 
	"Hello..! Kamu berhasil login.<br> <a href='logout.php'>Keluar</a>";
	}else{
		header("location:login.php");
	}
?>