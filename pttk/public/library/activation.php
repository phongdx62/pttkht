<?php
require("../../models/m_khachhang.php");
$msg='';
if(!empty($_GET['code']) && isset($_GET['code']))
{
   $code=addslashes(stripslashes($_GET['code']));

   $sql = "SELECT MaKH FROM khachhang WHERE activ='$code'";
   $kh = new khachhang();
   $kh->query($sql);
   $num = $kh->num_rows();
   if($num > 0)
   {
      $sql = "SELECT MaKH FROM khachhang WHERE activ='$code' and status='0'";
      $kh->query($sql);

      if($kh->num_rows() == 1)
      {
         $sql = "UPDATE khachhang SET status='1', activ = NULL WHERE activ='$code'" or die ("câu truy vấn sai");
         $kh->query($sql);
         $msg = "<p style='color: blue;'>* Đăng kí thành công, <a href='../../login-kh.php' style='color: #FF00FF'>Đăng nhập</a> để vào website<br /></p>"; 
      }
      else
      {
         $msg ="Tài khoản của bạn đã hoạt động, không cần kích hoạt lại";
      }
      $kh->disconnect();
   }
   else
   {
      $msg ="Mã kích hoạt sai.";
   }
}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>PHP Email Verification Script</title>
<link rel="stylesheet" href="<?php echo $base_url; ?>style.css"/>
</head>
<body>
   <div id="main">
   <h2><?php echo $msg; ?></h2>
   </div>
</body>
</html>
