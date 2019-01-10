<?php
	session_start();
	include("../models/m-hoadon.php");
	$hd1 = new hoadon();
	$hd2 = new hoadon();
	$sql1 = "SELECT makh, tenkh FROM khachhang";
	$sql2 = "SELECT manv, tennv FROM nhanvien";
	$hd1->query($sql1);
	$hd2->query($sql2);

    if($_SESSION["cb"] == "Nhà quản lý")
    {
    	require("templates/header.php");
    	require("templates/header-admin.php");

		if(isset($_POST["ok"]))	
		{
			//stripslashes loại bỏ ký tự \ trước dấu '
			$makh = addslashes(stripslashes($_POST["makh"]));
			$manv = $_SESSION["id"];
			$gio = addslashes(stripslashes($_POST["gio"]));
			$ngay = addslashes(stripslashes($_POST["ngay"]));
			
			if(isset($makh) && isset($manv) && isset($gio) && isset($ngay))
			{
				$hd = new hoadon();
				$hd->m_add_hd($makh, $manv, $gio, $ngay);
				$msg = "<p style='color: #CC3366;'>* Thêm hóa đơn thành công</p>";
				$hd->disconnect();
			}
		}	
    } 
	else
	{
		ob_start(); 
		header('Location: ../index.php');
		ob_end_flush();
	}
	
	require("templates/table-add-hd.php");
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
