<?php 
	session_start(); 
	if(isset($_POST['ok']))
	{
		$tk = addslashes(stripslashes($_POST['tk']));
		$mk = md5(addslashes(stripslashes($_POST['mk'])));
		if(isset($tk) && isset($mk))
		{
			require("./models/m-nhanvien.php");
			$nv = new nhanvien();
			if($nv->m_login($tk, $mk) == 'fail')
			{
				$err = "<p style='color: red;'>* Bạn nhập sai tài khoản hoặc mật khẩu</p>";			
			}
			else
			{
				if($_SESSION['cb'] == 'Nhà quản lý')
				{
					ob_start();
					header("Location: admin/admin.php");
					ob_end_flush();
				}
				elseif($_SESSION['cb'] == 'Nhân viên lễ tân')
				{
					ob_start();
					header("Location: admin/letan.php");
					ob_end_flush();
				}
				else
				{
					ob_start();
					header("Location: admin/nhanvien.php");
					ob_end_flush();
				}	
			}
			$nv->disconnect();
		}
	}
?>