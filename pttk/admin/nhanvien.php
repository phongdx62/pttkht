<?php  
	session_start();
	if(isset($_SESSION["cb"]) && $_SESSION["cb"] != "Nhà quản lý" && $_SESSION["cb"] != "Nhân viên lễ tân")
	{		
		require("templates/header.php");
		require("templates/header-nhanvien.php");
		require("templates/footer.php"); 
	}
	else
	{
		ob_start(); 
		header('Location: ../index.php');
		ob_end_flush(); 
	}
?>