<?php 
	include("../models/m-nhanvien.php");
	$manv = addslashes(stripslashes($_GET["manv"]));
	$nv = new nhanvien();
	$nv->m_del_nv($manv);
	$nv->disconnect();
	ob_start(); 
	header('Location: list-nv.php');
	ob_end_flush(); 
?>