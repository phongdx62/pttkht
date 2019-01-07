<?php 
	include("../models/m-khachhang.php");
	$makh = addslashes(stripslashes($_GET["makh"]));
	$kh = new khachhang();
	$kh->m_del_kh($makh);
	$kh->disconnect();
	ob_start(); 
	header('Location: list-kh.php');
	ob_end_flush(); 
?>