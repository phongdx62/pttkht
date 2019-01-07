<?php  
	echo"<tr>";
		echo"<td>$row[madl]</td>";
		echo"<td>$row[tenkh]</td>";
		echo"<td>$row[gio]</td>";
		echo"<td>$row[ngay]</td>";
		echo"<td><a href='del-lichhen.php?madl=$row[madl]' onclick='return show_confirm()' style='color:red;'>Xóa</a></td>";	
		echo"</tr>";
?>