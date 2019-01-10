<div style="margin-left: 300px; width: 500px;">
	<form action="add-list-tt.php" method="post">	
	<h2 style="color: #FF9999; margin-left: 110px;">Thêm thanh toán</h2>	
		<div class="mb-3">
			<tr>
				<td>Mã dịch vụ đã làm</td>
				<td>
					<select name="madvdl">
						<option value="madvdl">Madvdl</option>
						<?php  
							while ($row1 = $tt1->fetch_assoc()) 
							{
								echo "<option value='$row1[madvdl]'>$row1[madvdl]</option>";
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
						<option value="makh">Khách hàng</option>
						<?php  
							while ($row2 = $tt2->fetch_assoc()) 
							{
								echo "<option value='$row2[makh]'>$row1[makh] - $row2[tenkh]</option>";
							}
						?>			
					</select>
				</td>
			</tr>		
		</div>			
	<button style="height: 30px; color: #FF6600; margin-left: 200px;" type="submit" name="ok">Đồng ý thêm</button>
</form>
</div>