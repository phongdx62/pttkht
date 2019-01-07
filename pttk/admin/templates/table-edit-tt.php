<div style="margin: auto; width: 400px;">
	<form action="edit-list-tt.php?matt=<?php echo $matt; ?>" method="post">	
	<h2 style="color: #FF9999; margin-left: 90px;">Sửa thanh toán</h2>

		<div class="mb-3">
			<label for="inputPassword" class="sr-only"></label>
			<input type="text"  name="madvdl" class="form-control is-valid" placeholder="Mã dịch vụ đã làm" value="<?php echo $row['madvdl']; ?>" required >
		</div>

		<div class="mb-3">
			<tr>
				<td>Mã nhân viên</td>
				<td>
					<select name="manv">
						<option value="manv"><?php echo "$row[manv]"; ?></option>
						<?php  
							while ($row2 = $tt2->fetch_assoc()) 
							{
								echo "<option value='$row2[manv]'>$row2[manv] - $row2[tennv]</option>";
							}
						?>			
					</select>
				</td>
			</tr>		
		</div>	

		<div class="mb-3">
			<tr>
				<td>Mã khách hàng</td>
				<td>
					<select name="makh">
						<option value="makh"><?php echo "$row[makh]"; ?></option>
						<?php  
							while ($row1 = $tt1->fetch_assoc()) 
							{
								echo "<option value='$row1[makh]'>$row1[makh] - $row1[tenkh]</option>";
							}
						?>			
					</select>
				</td>
			</tr>		
		</div>	
			
	<button style="height: 30px; color: #FF6600; margin-left: 155px;" type="submit" name="ok">Đồng ý sửa</button>
</form>
</div>