<?php
    include("../models/m-nhanvien.php");
    $nv = new nhanvien();
    $sql = "SELECT * FROM nhanvien";
    $nv->query($sql);
    $stt=1;
    while($row = $nv->fetch_assoc())
    {
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
        $stt++;
    }
       
    // include("../../models/m-nhanvien.php");
    // $nv = new nhanvien();

    // require("templates/search-ad.php");
    // if (isset($_REQUEST['ok'])) 
    // {
    //     $key = addslashes(stripslashes($_GET['key']));

    //     if (empty($key)) 
    //     {
    //         echo "<p style= 'color:red;'>* Dữ liệu tìm kiếm không được để trống</p>";
    //     } 
    //     else
    //     {
    //         $nv->m_search_nv($key);
    //     }        
    // }
    // else
    // {
    //     echo"<div style='height: 40px;'>";
    //     echo"<a style='color: #FF33FF;' href='send-mail-nv-all.php'>Gửi thư cho tất cả</a>";
    //     echo"<br />";
    //     echo"<a style='color: #FF33FF;' href='add-list-nv.php'>Thêm nhân viên</a>";
    //     echo"</div>";
    //     require("templates/table-nv.php");      
    //     $nv->m_list_nv();                           
    // }
    // $nv->disconnect(); 
?>