<?php  
	echo"<tr>";
		echo"<td>$row[matt]</td>";
		echo"<td>$row[madvdl]</td>";
		echo"<td>$row[manv]</td>";
		echo"<td>$row[makh]</td>";	
		echo"<td><a href='edit-list-tt.php?matt=$row[matt]' style='color:blue;'>Sửa</a></td>";
		echo"<td><a href='del-list-tt.php?matt=$row[matt]' onclick='return show_confirm()' style='color:red;'>Xóa</a></td>";						
	echo"</tr>";
?>