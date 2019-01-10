<?php
	session_start();
	include("../models/m-thanhtoan.php");
	$tt1 = new thanhtoan();
	$tt2 = new thanhtoan();
	$sql1 = "SELECT madvdl FROM dichvudalam";
	$tt1->query($sql1);
	$sql2 = "SELECT makh, tenkh FROM khachhang";
	$tt2->query($sql2);

    if($_SESSION["cb"] == "Nhân viên lễ tân")
    {
    	require("templates/header.php");
    	require("templates/header-letan.php");

		if(isset($_POST["ok"]))	
		{
			//stripslashes loại bỏ ký tự \ trước dấu '
			$manv = $_SESSION["id"];
			$madvdl = addslashes(stripslashes($_POST["madvdl"]));
			$makh = addslashes(stripslashes($_POST["makh"]));
			
			if(isset($madvdl) && isset($makh))
			{
				$tt = new thanhtoan();
				$result = $tt->m_add_tt($madvdl, $manv, $makh);
				$msg = "<p style='color: #CC3366;'>* Thêm thông tin thanh toán thành công</p>";
				$tt->disconnect();			
			}
		}	
    } 
	else
	{
		ob_start(); 
		header('Location: ../index.php');
		ob_end_flush();
	}
	
	require("templates/table-add-tt.php");
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
