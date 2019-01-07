<div style="margin: auto; width: 400px;">
	<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">	
	<h2 style="color: #FF9999; margin-left: 90px;">Thêm hóa đơn</h2>
		<div class="mb-3">
			<tr>
				<td>Mã khách hàng</td>
				<td>
					<select name="makh">
						<option value="makh"></option>
						<?php  
							while ($row1 = $hd1->fetch_assoc()) 
							{
								echo "<option value='$row1[makh]'>$row1[makh] - $row1[tenkh]</option>";
							}
						?>			
					</select>
				</td>
			</tr>		
		</div>	
		
		<div class="mb-3">
			<label for="inputPassword" class="sr-only"></label>
			<input type="time"  name="gio" class="form-control is-valid" placeholder="Giờ" required >
		</div>
		<div class="mb-3">
			<label for="inputPassword" class="sr-only"></label>
			<input type="date"  name="ngay" class="form-control is-valid" placeholder="Ngày lập" required >
		</div>		
	<button style="height: 30px; color: #FF6600; margin-left: 155px;" type="submit" name="ok">Đồng ý thêm</button>
</form>
</div>