<?php  
	echo"<tr>";
		echo"<td>$stt</td>";
		echo"<td>$row[madv]</td>";
		echo"<td>$row[sohd]</td>";
		echo"<td>$row[soluong]</td>";
		echo"<td>$row[dongia]</td>";	
		echo"<td><a href='edit-list-dvdl.php?madvdl=$row[madvdl]' style='color:blue;'>Sửa</a></td>";
		echo"<td><a href='del-list-dvdl.php?madvdl=$row[madvdl]' onclick='return show_confirm()' style='color:red;'>Xóa</a></td>";						
		echo"</tr>";
?>