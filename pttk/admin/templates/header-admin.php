<?php  
	$name = "<h7 style='color: blue;'>$_SESSION[name]</h7>";
?>
<div id="top">
	<h3>Xin chào <?php echo $name; ?>, <a href="../logout.php">Đăng xuất</a></h3>
</div>

<div id="menu" class="mt-3">
	<ul>
		<li><a href="list-nv.php">Quản lý nhân viên</a></li>
		<li><a href="list-kh.php">Quản lý khách hàng</a></li>
		<li><a href="list-dv.php">Quản lý dịch vụ</a></li>
		<li><a href="list-dvdl.php">Quản lý dịch vụ đã làm</a></li>
		<li><a href="list-hd.php">Quản lý hóa đơn</a></li>
	</ul>
</div>
<div style="clear: left;"></div>