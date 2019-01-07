<div style="margin-left: 300px; width: 500px;">
	<form action="edit-list-dvdl.php?madvdl=<?php echo $madvdl; ?>" method="post">	
	<h2 style="color: #FF9999; margin-left: 90px;">Sửa thông tin dịch vụ đã làm</h2>
		<div class="mb-3">
			<label for="inputPassword" class="sr-only"></label>
			<input type="text"  name="madv" class="form-control is-valid" placeholder="Mã dịch vụ" value="<?php echo $row['madv']; ?>" required >
		</div>	
		<div class="mb-3">
			<label for="inputPassword" class="sr-only"></label>
			<input type="text"  name="sohd" class="form-control is-valid" placeholder="Số hóa đơn" value="<?php echo $row['sohd']; ?>" required >
		</div>
		<div class="mb-3">
			<label for="inputPassword" class="sr-only"></label>
			<input type="text"  name="soluong" class="form-control is-valid" placeholder="Số lượng" value="<?php echo $row['soluong']; ?>" required >
		</div>
		<div class="mb-3">
			<label for="inputPassword" class="sr-only"></label>
			<input type="text"  name="dongia" class="form-control is-valid" placeholder="Đơn giá" value="<?php echo $row['dongia']; ?>" required >
		</div>	
	<button style="height: 30px; color: #FF6600; margin-left: 200px;" type="submit" name="ok">Đồng ý sửa</button>
</form>
</div>