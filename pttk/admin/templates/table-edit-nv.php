<div style="margin-left: 300px; width: 500px;">
	<form action="edit-list-nv.php?manv=<?php echo $manv; ?>" method="post">	
	<h2 style="color: #FF9999; margin-left: 90px;">Sửa thông tin nhân viên</h2>	
		<div class="mb-3">
			<label for="inputPassword" class="sr-only"></label>
			<input type="text"  name="tennv" class="form-control is-valid" placeholder="Tên nhân viên" value="<?php echo $row['tennv']; ?>" required >
		</div>
		<div class="mb-3">
			<label for="inputPassword" class="sr-only"></label>
			<input type="text"  name="diachi" class="form-control is-valid" placeholder="Địa chỉ" value="<?php echo $row['diachi']; ?>" required >
		</div>
		<div class="mb-3">
			<label for="inputPassword" class="sr-only"></label>
			<input type="text"  name="sdt" class="form-control is-valid" placeholder="Số điện thoại" value="<?php echo $row['sdt']; ?>" required >
		</div>
		<div class="mb-3">
			<label for="inputEmail" class="sr-only"></label>
			<input type="Email"  name = "email" class="form-control is-valid" placeholder="Địa chỉ email" value="<?php echo $row['email']; ?>" required autofocus>
		</div>
		<div class="mb-3">
			<label for="inputPassword" class="sr-only"></label>
			<input type="text"  name="capbac" class="form-control is-valid" placeholder="Cấp bậc" value="<?php echo $row['capbac']; ?>" required >
		</div>
		<div class="mb-3">
			<label for="inputPassword" class="sr-only"></label>
			<input type="text"  name="luong" class="form-control is-valid" placeholder="Lương" value="<?php echo $row['luong']; ?>" required >
		</div>
		<div class="mb-3">
			<label for="inputPassword" class="sr-only"></label>
			<input type="text"  name="thuong" class="form-control is-valid" placeholder="Thưởng" value="<?php echo $row['thuong']; ?>" required >
		</div>
		<div class="mb-3">
			<label for="inputPassword" class="sr-only"></label>
			<input type="text"  name="ca" class="form-control is-valid" placeholder="Ca làm việc" value="<?php echo $row['ca']; ?>" required >
		</div>
		<div class="mb-3">
			<div class="input-group">										
				<input type="text" class="form-control is-valid" id="username" name="tk" placeholder="Tài khoản" value="<?php echo $row['taikhoan']; ?>" required>
				<div class="invalid-feedback">
					Your username is required.
				</div>			
			</div>
		</div>

		<div class="mb-3">
			<label for="inputPassword" class="sr-only"></label>
			<input type="password"  name="mk" class="form-control is-valid" placeholder="Mật khẩu" value="<?php echo $row['matkhau']; ?>" required >
		</div>
		
	<button style="height: 30px; color: #FF6600; margin-left: 200px;" type="submit" name="ok">Đồng ý sửa</button>
</form>
</div>