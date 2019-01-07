<?php 
	session_start();
    if($_SESSION["cb"] == "Nhân viên lễ tân")
    {
    	$matt = addslashes(stripslashes($_GET["matt"]));
    	require("templates/header.php");
    	require("templates/header-letan.php");
    	include("../models/m-thanhtoan.php");
    	$tt = new thanhtoan();
    	$row = $tt->m_get_tt($matt);
		$tt1 = new thanhtoan();
		$tt2 = new thanhtoan();
		$sql1 = "SELECT makh, tenkh FROM khachhang";
		$sql2 = "SELECT manv, tennv FROM nhanvien WHERE capbac = 'Nhân viên lễ tân' ";
		$tt1->query($sql1);
		$tt2->query($sql2);
		
		if(isset($_POST["ok"]))
		{
			$madvdl = addslashes(stripslashes($_POST["madvdl"]));
			$manv = addslashes(stripslashes($_POST["manv"]));
			$makh = addslashes(stripslashes($_POST["makh"]));

			if(isset($madvdl) && isset($manv) && isset($makh))
			{
				$tt->m_edit_tt($matt, $madvdl, $manv, $makh);
				$tt->disconnect();
				ob_start();
				header('Location: list-tt.php');
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
	
	require("templates/table-edit-tt.php"); 
	$tt->disconnect();
	require("templates/footer.php");
?>