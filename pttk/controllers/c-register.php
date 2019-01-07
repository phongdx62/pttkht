<?php 
	if(isset($_POST["ok"]))
	{
		$ten = addslashes(stripslashes($_POST["ten"]));
		$dc = addslashes(stripslashes($_POST["dc"]));
		$e = addslashes(stripslashes($_POST["e"]));
		$sdt = addslashes(stripslashes($_POST["sdt"]));
		$tk = addslashes(stripslashes($_POST["tk"]));
		$mk = md5(addslashes(stripslashes($_POST["mk"])));

		$pattern = '/^.{8,25}$/';
	}

	if(isset($ten) && isset($dc) && isset($e) && isset($sdt) && isset($tk) && isset($mk))
	{	
		if(preg_match($pattern, $_POST["mk"]))
		{
			if($mk != md5($_POST["kt_mk"]))
			{
				$msg = "<p style='color: red;'>* Bạn nhập lại mật khẩu không đúng</p>";
			}
	  		else
	  		{
	  			require("./models/m-khachhang.php");
	  			$base_url='localhost/pttk1/public/library/';
	         	$activ=md5($e.time());

				$kh = new khachhang();
				$register = $kh->m_register($ten, $dc, $e, $sdt, $tk, $mk, $activ);
				if($register == 'fail')
				{
					$msg = "<p style='color: red;'>* Tài khoản đã tồn tại</p>";
				}
				else
				{
					//Soạn mail
	         		include('./public/library/send-mail.php');
	         		include('./public/library/class.phpmailer.php');
	         		include('./public/library/class.smtp.php');

	         		$title = 'Thư xác nhận';
				    $content = 'Hi, <br/> <br/> Chúng tôi cần đảm bảo bạn là con người. Vui lòng bấm vào đường dẫn dưới đây để hoàn tất việc đăng ký thành viên:
		. <br/> <br/> <a href="'.$base_url.'activ.php'.'?code='.$activ.'">'.$base_url.'activ.php'.'?code='.$activ.'</a>';
				    $nTo = $tk;
				    $mTo = $e;

			        //Gửi mail     
				    $mail = send_mail($title, $content, $nTo, $mTo);
				    if($mail==1)
				    	$msg = "<p style='color: #C71585;'>Một email đã được gửi đến hòm thư $e của bạn.</p><br />
				    			<p style='color: #C71585;'>Hãy vào mail và làm theo hướng dẫn để kich hoạt tài khoản.</p>";
				    else 
			    		$msg = "<p style='color: red;'>* Có lỗi</p>";
				}
				$kh->disconnect();								
		  	}	  				
		}
		else
		{
			$msg = "<p style='color: red;'>* Mật khẩu phải có độ dài từ 8 đến 25 kí tự !</p>";
		}
	  									    
	}			 		
?>
