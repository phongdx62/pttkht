<div style="margin-left: 300px; width: 500px;">
	<form action="edit-list-dv.php?madv=<?php echo $madv; ?>" method="post">	
	<h2 style="color: #FF9999; margin-left: 90px;">Sửa thông tin dịch vụ</h2>	
		<div class="mb-3">
			<label for="inputPassword" class="sr-only"></label>
			<input type="text"  name="tendv" class="form-control is-valid" placeholder="Tên dịch vụ" value="<?php echo $row['tendv']; ?>" required >
		</div>
		<div class="mb-3">
			<label for="inputPassword" class="sr-only"></label>
			<input type="text"  name="mota" class="form-control is-valid" placeholder="Mô tả" value="<?php echo $row['mota']; ?>" required >
		</div>
		<div class="mb-3">
			<label for="inputPassword" class="sr-only"></label>
			<input type="text"  name="dongia" class="form-control is-valid" placeholder="Đơn giá" value="<?php echo $row['dongia']; ?>" required >
		</div>	
	<button style="height: 30px; color: #FF6600; margin-left: 200px;" type="submit" name="ok">Đồng ý sửa</button>
</form>
</div>