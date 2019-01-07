<?php
	session_start();
    if($_SESSION["cb"] == "Nhà quản lý")
    {
    	require("templates/header.php");
    	require("templates/header-admin.php");

		if(isset($_POST["ok"]))	
		{
			//stripslashes loại bỏ ký tự \ trước dấu '
			$tendv = addslashes(stripslashes($_POST["tendv"]));
			$mota = addslashes(stripslashes($_POST["mota"]));
			$dongia = addslashes(stripslashes($_POST["dongia"]));
			
			if(isset($tendv) && isset($mota) && isset($dongia))
			{
				include("../models/m-dichvu.php");
				$dv = new dichvu();
				$result = $dv->m_add_dv($tendv, $mota, $dongia);	
				$msg = "<p style='color: #CC3366;'>* Thêm dịch vụ thành công</p>";
				$dv->disconnect();
			}
		}	
    } 
	else
	{
		ob_start(); 
		header('Location: ../index.php');
		ob_end_flush();
	}
	
	require("templates/table-add-dv.php");
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
