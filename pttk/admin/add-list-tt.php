<?php
	session_start();

	if(isset($_SESSION["id"]))
	{
		$manv = $_SESSION["id"];
	}
	
    if($_SESSION["cb"] == "Nhân viên lễ tân")
    {
    	require("templates/header.php");
    	require("templates/header-letan.php");

		if(isset($_POST["ok"]))	
		{
			//stripslashes loại bỏ ký tự \ trước dấu '
			$matt = addslashes(stripslashes($_POST["matt"]));
			$madvdl = addslashes(stripslashes($_POST["madvdl"]));
			$makh = addslashes(stripslashes($_POST["makh"]));
			
			if(isset($matt) && isset($madvdl) && isset($makh))
			{
				include("../models/m-thanhtoan.php");
				$tt = new thanhtoan();
				$result = $tt->m_add_tt($matt, $madvdl, $manv, $makh);
				if($result == 'fail')
				{
					$msg = "<p style='color: #CC3366;'>* Mã thanh toán đã tồn tại</p>";
				}
				else
				{
					$msg = "<p style='color: #CC3366;'>* Thêm dịch vụ thành công</p>";
					$tt->disconnect();
				}	
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
