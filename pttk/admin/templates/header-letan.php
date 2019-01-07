<?php 
	$name = "<h7 style='color: blue;'>$_SESSION[name]</h7>";
?>
<div id="top">
	<h3>Xin chào <?php echo $name; ?>, <a href="../logout.php">Đăng xuất</a></h3>
</div>
<div id="menu" class="mt-3">
	<ul>
		<li><a href="list-dl.php">Quản lý đặt lịch</a></li>
		<li><a href="list-kh-letan.php">Xem thông tin khách hàng</a></li>
		<li><a href="list-hd-letan.php">Quản lý hóa đơn</a></li>
		<li><a href="list-tt.php">Quản lý thanh toán</a></li>
		<li><a href="nv-canhan.php">Xem thông tin cá nhân</a></li>
	</ul>
</div>
<div style="clear: left;"></div>