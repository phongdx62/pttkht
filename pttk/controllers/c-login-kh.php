<?php 
	session_start(); 
	if(isset($_POST['ok']))
	{
		$tk = addslashes(stripslashes($_POST['tk']));
		$mk = md5(addslashes(stripslashes($_POST['mk'])));
		if(isset($tk) && isset($mk))
		{
			require("./models/m-khachhang.php");
			$kh = new khachhang();
			if($kh->m_login($tk, $mk) == 'fail')
			{
				$err = "<p style='color: red;'>* Bạn nhập sai tài khoản hoặc mật khẩu</p>";			
			}
			else
			{
				ob_start(); 
				header('Location: ./index.php');
				ob_end_flush();	
			}
			$kh->disconnect();
		}
	}
?>