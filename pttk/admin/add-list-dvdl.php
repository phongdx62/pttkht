<?php
	session_start();
    if($_SESSION["cb"] == "Nhà quản lý")
    {
    	require("templates/header.php");
    	require("templates/header-admin.php");

		if(isset($_POST["ok"]))	
		{
			$madv = addslashes(stripslashes($_POST["madv"]));
			$sohd = addslashes(stripslashes($_POST["sohd"]));
			$soluong = addslashes(stripslashes($_POST["soluong"]));
			$dongia = addslashes(stripslashes($_POST["dongia"]));
			
			if(isset($sohd) && isset($sohd) && isset($soluong) && isset($dongia))
			{
				include("../models/m-dichvudalam.php");
				$dvdl = new dichvudalam();
				$result = $dvdl->m_add_dvdl($madv, $sohd, $soluong, $dongia);	
				$msg = "<p style='color: #CC3366;'>* Thêm dịch vụ đã làm thành công</p>";
				$dvdl->disconnect();
			}
		}	
    } 
	else
	{
		ob_start(); 
		header('Location: ../index.php');
		ob_end_flush();
	}
	
	require("templates/table-add-dvdl.php");
?>	
	
	<div gioitinh="width: 500px; margin: 30px; text-align: center; color: red;">
		<?php 
			if(isset($msg))
			{
				echo $msg;
			} 		
		?>
	</div>

<?php  
	require("templates/footer.php");
?>
