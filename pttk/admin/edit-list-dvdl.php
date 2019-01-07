<?php 
	session_start();
    if($_SESSION["cb"] == "Nhà quản lý")
    {
    	require("templates/header.php");
    	require("templates/header-admin.php");
    	include("../models/m-dichvudalam.php");
		$madvdl = addslashes(stripslashes($_GET["madvdl"]));

		if(isset($_POST["ok"]))
		{
			$madv = addslashes(stripslashes($_POST["madv"]));
			$sohd = addslashes(stripslashes($_POST["sohd"]));
			$soluong = addslashes(stripslashes($_POST["soluong"]));
			$dongia = addslashes(stripslashes($_POST["dongia"]));
			
			if(isset($madv) && isset($sohd) && isset($soluong) && isset($dongia))
			{
				$dvdl = new dichvudalam();
				$dvdl->m_edit_dvdl($madvdl, $madv, $sohd, $soluong, $dongia);
				$dvdl->disconnect();
				ob_start();
				header('Location: list-dvdl.php');
				ob_end_flush();
			}
		}

		$dvdl = new dichvudalam();
		$row = $dvdl->m_get_dvdl($madvdl);

    }
	else
	{		
		ob_start(); 
		header('Location: ../index.php');
		ob_end_flush();
	}					   								  	
	
	require("templates/table-edit-dvdl.php"); 
	$dvdl->disconnect();
	require("templates/footer.php");
?>