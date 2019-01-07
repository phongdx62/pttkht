<?php  
	include("views/v-header.php");
	include("models/m-datlich.php");
	if(isset($_GET["ngay"]))
	{
		$ngay = addslashes(stripslashes($_GET["ngay"]));
	
		$dl = new datlich();
		$sql = "SELECT gio
				FROM khunggio
				WHERE ngay = '$ngay' AND tinhtrang = 'Còn chỗ' ";
		$dl->query($sql);

		if(isset($_SESSION["makh"]))
		{
			$makh = $_SESSION["makh"];
			if(isset($_POST["ok"]))
			{
				$gio = addslashes(stripslashes($_POST["gio"]));			 
				if(isset($gio))
				{
					$dl->m_datlich($makh, $gio, $ngay);
					$msg = "<p style='color: #CC3366;'>* Bạn đã đặt lịch thành công</p>";
				}
			}
		}
			 		
?>
		<br>
		<br>
		<br>
		<br>
		<div style="margin: auto; width: 400px;">
		<form action="datlich.php?ngay=<?php echo $ngay; ?>" method="post">	
		<h2 style="color: #FF9999; margin-left: 90px;">Đặt lịch giữ chỗ</h2>
		<br>
		<br>
		    <div class="mb-3">
				<tr>
					<td>Chọn giờ</td>
					<td>
						<select name="gio">
							<option value="gio"></option>
							<?php  
								while ($row = $dl->fetch_assoc()) 
								{
									echo "<option value='$row[gio]'>$row[gio]</option>";
								}
							?>			
						</select>
					</td>
				</tr>		
			</div> 
		<br>
		<br>
		<button style="height: 30px; color: #FF6600; margin-left: 155px;" type="submit" name="ok">Đồng ý thêm</button>
		</form>
		<br>
		<br>
		<br>
		<br>
		<br>
		<?php  
			if(isset($msg))
			{
				echo $msg;
			}
		?>
		<br>
		<br>
		<br>
		<br>
		</div>	

<?php
	$dl->disconnect();
	}	
	include("views/v-footer.php");
?>