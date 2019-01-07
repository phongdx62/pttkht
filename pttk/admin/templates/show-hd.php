<?php  
	echo"<tr>";
		echo"<td>$stt</td>";
		echo"<td>$row[makh]</td>";
		echo"<td>$row[manv]</td>";
		echo"<td>$row[gio]</td>";
		echo"<td>$row[ngaylap]</td>";	
		echo"<td><a href='edit-list-hd.php?sohd=$row[sohd]' style='color:blue;'>Sửa</a></td>";
		echo"<td><a href='del-list-hd.php?sohd=$row[sohd]' onclick='return show_confirm()' style='color:red;'>Xóa</a></td>";						
		echo"</tr>";
		//href='del_list_user.php?id=$row[matv]' matv sẽ được chuyển theo đường dẫn
?>