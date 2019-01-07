<?php  
	echo"<tr>";
		echo"<td>$stt</td>";
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
		echo"<td><a href='send-mail-nv.php?manv=$row[manv]' style='color:blue;'>Gửi</a></td>";
		echo"<td><a href='edit-list-nv.php?manv=$row[manv]' style='color:blue;'>Sửa</a></td>";
		echo"<td><a href='del-list-nv.php?manv=$row[manv]' onclick='return show_confirm()' style='color:red;'>Xóa</a></td>";						
		echo"</tr>";
		//href='del_list_user.php?id=$row[matv]' matv sẽ được chuyển theo đường dẫn
?>