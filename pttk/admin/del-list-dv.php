<?php 
	include("../models/m-dichvu.php");
	$madv = addslashes(stripslashes($_GET["madv"]));
	$nv = new dichvu();
	$nv->m_del_dv($madv);
	$nv->disconnect();
	ob_start(); 
	header('Location: list-dv.php');
	ob_end_flush(); 
?>