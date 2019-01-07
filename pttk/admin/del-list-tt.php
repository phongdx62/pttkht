<?php 
	include("../models/m-thanhtoan.php");
	$matt = addslashes(stripslashes($_GET["matt"]));
	$tt = new thanhtoan();
	$tt->m_del_tt($matt);
	$tt->disconnect();
	ob_start(); 
	header('Location: list-tt.php');
	ob_end_flush(); 
?>