<?php 
	session_start();
    if($_SESSION["cb"] == "Nhà quản lý")
    {
    	require("templates/header.php");
    	require("templates/header-admin.php");
    	include("../models/m-dichvu.php");
		$madv = addslashes(stripslashes($_GET["madv"]));

		if(isset($_POST["ok"]))
		{
			$tendv = addslashes(stripslashes($_POST["tendv"]));
			$mota = addslashes(stripslashes($_POST["mota"]));
			$dongia = addslashes(stripslashes($_POST["dongia"]));
			
			if(isset($tendv) && isset($mota) && isset($dongia))
			{
				$dv = new dichvu();
				$dv->m_edit_dv($madv, $tendv, $mota, $dongia);
				$dv->disconnect();
				ob_start();
				header('Location: list-dv.php');
				ob_end_flush();
			}
		}

		$dv = new dichvu();
		$row = $dv->m_get_dv($madv);

    }
	else
	{		
		ob_start(); 
		header('Location: ../index.php');
		ob_end_flush();
	}					   								  	
	
	require("templates/table-edit-dv.php"); 
	$dv->disconnect();
	require("templates/footer.php");
?>