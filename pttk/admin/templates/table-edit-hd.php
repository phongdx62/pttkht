<div style="margin: auto; width: 400px;">
	<form action="edit-list-hd.php?sohd=<?php echo $sohd; ?>" method="post">	
	<h2 style="color: #FF9999; margin-left: 90px;">Sửa hóa đơn</h2>
		<div class="mb-3">
			<tr>
				<td>Mã khách hàng</td>
				<td>
					<select name="makh">
						<option value="<?php echo $row[makh]; ?>"><?php echo "$row[makh] - $row[tenkh]"; ?></option>
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
			<tr>
				<td>Mã nhân viên</td>
				<td>
					<select name="manv">
						<option value="<?php echo $row[manv]; ?>"><?php echo "$row[manv] - $row[tennv]"; ?></option>
						<?php  
							while ($row2 = $hd2->fetch_assoc()) 
							{
								echo "<option value='$row2[manv]'>$row2[manv] - $row2[tennv]</option>";
							}
						?>			
					</select>
				</td>
			</tr>		
		</div>	
		<div class="mb-3">
			<label for="inputPassword" class="sr-only"></label>
			<input type="time"  name="gio" class="form-control is-valid" placeholder="Giờ" value="<?php echo $row['gio']; ?>" required >
		</div>
		<div class="mb-3">
			<label for="inputPassword" class="sr-only"></label>
			<input type="date"  name="ngay" class="form-control is-valid" placeholder="Ngày lập" value="<?php echo $row['ngaylap']; ?>" required >
		</div>		
	<button style="height: 30px; color: #FF6600; margin-left: 155px;" type="submit" name="ok">Đồng ý sửa</button>
</form>
</div>