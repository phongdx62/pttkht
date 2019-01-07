<?php  
	echo"<tr>";
		echo"<td>$row[manv]</td>";
		echo"<td>$row[tennv]</td>";
		echo"<td>$row[diachi]</td>";
		echo"<td>$row[sdt]</td>";
		echo"<td>$row[email]</td>";
		if($row['gioitinh'] == 1)
		{
			echo "<td>Nam</td>";
		}
		else
		{
			echo "<td>Nữ</td>";
		}
		echo"<td>$row[ngaysinh]</td>";
		echo"<td>$row[luong]</td>";
		echo"<td>$row[thuong]</td>";
		echo"<td>$row[ca]</td>";
		echo"<td>$row[taikhoan]</td>";						
		echo"<td>$row[capbac]</td>";
?>