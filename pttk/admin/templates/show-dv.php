<?php  
	echo"<tr>";
		echo"<td>$stt</td>";
		echo"<td>$row[tendv]</td>";
		echo"<td>$row[mota]</td>";
		echo"<td>$row[dongia]</td>";	
		echo"<td><a href='edit-list-dv.php?madv=$row[madv]' style='color:blue;'>Sửa</a></td>";
		echo"<td><a href='del-list-dv.php?madv=$row[madv]' onclick='return show_confirm()' style='color:red;'>Xóa</a></td>";						
		echo"</tr>";
?>