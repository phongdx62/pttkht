<?php 
	session_start();
    if($_SESSION["cb"] == "Nhà quản lý")
    {
    	require("templates/header.php");
    	require("templates/header-admin.php");
    	include("../models/m-nhanvien.php");
		$manv = addslashes(stripslashes($_GET["manv"]));

		if(isset($_POST["ok"]))
		{
			$tennv = addslashes(stripslashes($_POST["tennv"]));
			$diachi = addslashes(stripslashes($_POST["diachi"]));
			$sdt = addslashes(stripslashes($_POST["sdt"]));
			$email = addslashes(stripslashes($_POST["email"]));
			$capbac = addslashes(stripslashes($_POST["capbac"]));
			$luong = addslashes(stripslashes($_POST["luong"]));
			$thuong = addslashes(stripslashes($_POST["thuong"]));
			$ca = addslashes(stripslashes($_POST["ca"]));
			$tk = addslashes(stripslashes($_POST["tk"]));
			$mk = addslashes(stripslashes($_POST["mk"]));
			
			if(isset($tennv) && isset($diachi) && isset($sdt) && isset($email) && isset($capbac) && isset($luong) && isset($thuong) && isset($ca) && isset($tk) && isset($mk))
			{
				$nv = new nhanvien();
				$nv->m_edit_nv($manv, $tennv, $diachi, $sdt, $email, $capbac, $luong, $thuong, $ca, $tk, $mk);
				$nv->disconnect();
				ob_start();
				header('Location: list-nv.php');
				ob_end_flush();
			}
		}

		$nv = new nhanvien();
		$row = $nv->m_get_nv($manv);

    }
	else
	{		
		ob_start(); 
		header('Location: ../index.php');
		ob_end_flush();
	}					   								  	
	
	require("templates/table-edit-nv.php"); 
	$nv->disconnect();
	require("templates/footer.php");
?>