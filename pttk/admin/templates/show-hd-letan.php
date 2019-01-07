<?php  
	echo"<tr>";
		echo"<td>$stt</td>";
		echo"<td>$row[makh]</td>";
		echo"<td>$row[manv]</td>";
		echo"<td>$row[gio]</td>";
		echo"<td>$row[ngaylap]</td>";	
		echo"<td><a href='edit-list-hd-letan.php?sohd=$row[sohd]' style='color:blue;'>Sửa</a></td>";
		echo"<td><a href='del-list-hd-letan.php?sohd=$row[sohd]' onclick='return show_confirm()' style='color:red;'>Xóa</a></td>";						
		echo"</tr>";
?>