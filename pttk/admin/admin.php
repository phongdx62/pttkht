<?php  
	session_start();
	if($_SESSION["cb"] == "Nhà quản lý")
	{		
		require("templates/header.php");
		require("templates/header-admin.php");
		require("templates/footer.php"); 
	}
	else
	{
		ob_start(); 
		header('Location: ../index.php');
		ob_end_flush(); 
	}
?>