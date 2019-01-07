<div style="margin-left: 300px; width: 500px;">
	<form action="add-list-nv.php" method="post">	
	<h2 style="color: #FF9999; margin-left: 150px;">Thêm nhân viên</h2>	
		<div class="mb-3">
			<label for="inputPassword" class="sr-only"></label>
			<input type="text"  name="tennv" class="form-control is-valid" placeholder="Tên nhân viên" required >
		</div>
		<div class="mb-3">
			<label for="inputPassword" class="sr-only"></label>
			<input type="text"  name="diachi" class="form-control is-valid" placeholder="Địa chỉ" required >
		</div>
		<div class="mb-3">
			<label for="inputPassword" class="sr-only"></label>
			<input type="text"  name="sdt" class="form-control is-valid" placeholder="Số điện thoại" required >
		</div>
		<div class="mb-3">
			<label for="inputPassword" class="sr-only"></label>
			<input type="text"  name="email" class="form-control is-valid" placeholder="Email" required >
		</div>
		<div class="mb-3">
			<label for="inputPassword" class="sr-only"></label>
			<input type="text"  name="capbac" class="form-control is-valid" placeholder="Cấp bậc" required >
		</div>
		<div class="mb-3">
			<tr>
					<td>Giới tính</td>
					<td>
						<input type="radio" name="gioitinh" value="1" checked="checked">Nam
						<input type="radio" name="gioitinh" value="0">Nữ
					</td>			
				</tr>
		</div>
		<div class="mb-3">
			<tr>
					<td>Ngày sinh</td>
					<td>
						<select name="ngay">
							<option value="date">Ngày</option>
							<?php  
								for($i=1;$i<=31;$i++)
								{
									echo "<option value='$i'>$i</option>";
								}
							?>			
						</select>
						<select name="thang">
							<option value="month">Tháng</option>
							<?php  
								for($i=1;$i<=12;$i++)
								{
									echo "<option value='$i'>$i</option>";
								}
							?>			
							</select>
						<select name="nam">
							<option value="year">Năm</option>
							<?php  
								for($i=1900;$i<=date("Y");$i++)
								{
									echo "<option value='$i'>$i</option>";
								}
							?>			
						</select>
					</td>
				</tr>		
		</div>		
		<div class="mb-3">
			<div class="input-group">										
				<input type="text" class="form-control is-valid" id="username" name="tk" placeholder="Tài khoản" required>
				<div class="invalid-feedback">
					Your username is required.
				</div>			
			</div>
		</div>

		<div class="mb-3">
			<label for="inputPassword" class="sr-only"></label>
			<input type="password"  name="mk" class="form-control is-valid" placeholder="Mật khẩu" required >
		</div>
		
	<button style="height: 30px; color: #FF6600; margin-left: 200px;" type="submit" name="ok">Đồng ý thêm</button>
</form>
</div>