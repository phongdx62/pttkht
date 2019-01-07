<?php 
	include("../models/m-datlich.php");
	$madl = addslashes(stripslashes($_GET["madl"]));
	$dl = new datlich();
	$dl->m_del_dl($madl);
	$dl->disconnect();
	ob_start(); 
	header('Location: list-dl.php');
	ob_end_flush(); 
?>