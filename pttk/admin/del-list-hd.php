<?php 
	include("../models/m-hoadon.php");
	$sohd = addslashes(stripslashes($_GET["sohd"]));
	$hd = new hoadon();
	$hd->m_del_hd($sohd);
	$hd->disconnect();
	ob_start(); 
	header('Location: list-hd.php');
	ob_end_flush(); 
?>