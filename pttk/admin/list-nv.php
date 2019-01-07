<?php
    session_start();
    if($_SESSION["cb"] == "Nhà quản lý")
    {
        include("../models/m-nhanvien.php");
        $nv = new nhanvien();
        require("templates/header.php");
        require("templates/header-admin1.php");
        require("templates/header-list-nv.php");
        require("templates/search-ad.php");
        if (isset($_REQUEST['ok'])) 
        {
            $key = addslashes(stripslashes($_GET['key']));
 
            if (empty($key)) 
            {
                echo "<p style= 'color:red;'>* Dữ liệu tìm kiếm không được để trống</p>";
            } 
            else
            {
                $nv->m_search_nv($key);
            }
                echo"</table>";
            echo"</div>";   
        }
        else
        {
            echo"<div style='height: 40px;'>";
            echo"<a style='color: #FF33FF;' href='send-mail-nv-all.php'>Gửi thư cho tất cả</a>";
            echo"<br />";
            echo"<a style='color: #FF33FF;' href='add-list-nv.php'>Thêm nhân viên</a>";
            echo"</div>";
            require("templates/table-nv.php");      
            $nv->m_list_nv();                         
                echo"</table>";
            echo"</div>";   
        }
        $nv->disconnect();
        require("templates/footer.php"); 
    }
    else
    {
        ob_start(); 
        header('Location: ../index.php');
        ob_end_flush(); 
    }	
?>