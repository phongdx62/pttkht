<?php
	session_start();
    if($_SESSION["cb"] == "Nhà quản lý")
    {
    	require("templates/header.php");
    	require("templates/header-admin.php");

		if(isset($_POST["ok"]))	
		{
			//stripslashes loại bỏ ký tự \ trước dấu '
			$tennv = addslashes(stripslashes($_POST["tennv"]));
			$diachi = addslashes(stripslashes($_POST["diachi"]));
			$sdt = addslashes(stripslashes($_POST["sdt"]));
			$email = addslashes(stripslashes($_POST["email"]));
			$capbac = addslashes(stripslashes($_POST["capbac"]));
			$gioitinh = addslashes(stripslashes($_POST["gioitinh"]));
			$ngay = addslashes(stripslashes($_POST["ngay"]));
			$thang = addslashes(stripslashes($_POST["thang"]));
			$nam = addslashes(stripslashes($_POST["nam"]));
			$tk = addslashes(stripslashes($_POST["tk"]));
			$mk = md5(addslashes(stripslashes($_POST["mk"])));
			
			if(isset($tennv) && isset($diachi) && isset($sdt) && isset($email) && isset($capbac) && isset($gioitinh) && isset($ngay) && isset($thang) && isset($nam) && isset($tk)&& isset($mk))
			{
				$ngaysinh = "$nam-$thang-$ngay";
				include("../models/m-nhanvien.php");
				$nv = new nhanvien();
				$result = $nv->m_add_nv($tennv, $diachi, $sdt, $email, $capbac, $gioitinh, $ngaysinh, $tk, $mk);	
				$msg = "<p style='color: #CC3366;'>* Thêm nhân viên thành công</p>";
				$nv->disconnect();
			}
		}	
    } 
	else
	{
		ob_start(); 
		header('Location: ../index.php');
		ob_end_flush();
	}
	
	require("templates/table-add-nv.php");
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
