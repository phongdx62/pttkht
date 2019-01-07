<?php 
	session_start();
    if($_SESSION["cb"] == "Nhà quản lý")
    {
    	$sohd = addslashes(stripslashes($_GET["sohd"]));
    	require("templates/header.php");
    	require("templates/header-admin.php");
    	include("../models/m-hoadon.php");
    	$hd = new hoadon();
    	$row = $hd->m_get_hd($sohd);
    	$hd1 = new hoadon();
		$hd2 = new hoadon();
		$sql1 = "SELECT makh, tenkh FROM khachhang";
		$sql2 = "SELECT manv, tennv FROM nhanvien WHERE capbac = 'Nhân viên lễ tân' ";
		$hd1->query($sql1);
		$hd2->query($sql2);
		
		if(isset($_POST["ok"]))
		{
			$makh = addslashes(stripslashes($_POST["makh"]));
			$manv = addslashes(stripslashes($_POST["manv"]));
			$gio = addslashes(stripslashes($_POST["gio"]));
			$ngay = addslashes(stripslashes($_POST["ngay"]));

			if(isset($makh) && isset($manv) && isset($gio) && isset($ngay))
			{
				$hd->m_edit_hd($sohd, $makh, $manv, $gio, $ngay);
				$hd->disconnect();
				ob_start();
				header('Location: list-hd.php');
				ob_end_flush();
			}
		}	
    }
	else
	{		
		ob_start(); 
		header('Location: ../index.php');
		ob_end_flush();
	}					   								  	
	
	require("templates/table-edit-hd.php"); 
	$hd->disconnect();
	require("templates/footer.php");
?>