<?php  
	echo"<tr>";
		echo"<td>$stt</td>";
		echo"<td>$row[tenkh]</td>";
		echo"<td>$row[diachi]</td>";
		echo"<td>$row[sdt]</td>";
		echo"<td>$row[email]</td>";	
		echo"<td>$row[taikhoan]</td>";
		echo"<td><a href='send-mail-kh.php?makh=$row[makh]' style='color:blue;'>Gửi</a></td>";
		echo"<td><a href='del-list-kh.php?makh=$row[makh]' onclick='return show_confirm()' style='color:red;'>Xóa</a></td>";						
		echo"</tr>";
		//href='del_list_user.php?id=$row[matv]' matv sẽ được chuyển theo đường dẫn
?>