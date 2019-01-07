<?php
    session_start();
    if($_SESSION["cb"] == "Nhân viên lễ tân")
    {
        include("../models/m-hoadon.php");
        $hd = new hoadon();
        require("templates/header.php");
        require("templates/header-letan1.php");
        require("templates/header-letan-hd.php");
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
                $hd->m_search_hd_letan($key);
            }
                echo"</table>";
            echo"</div>";   
        }
        else
        {
            echo"<div style='height: 40px;'>";
            echo"<a style='color: #FF33FF;' href='add-list-hd-letan.php'>Thêm hóa đơn</a>";
            echo"</div>";
            require("templates/table-hd.php");      
            $hd->m_list_hd_letan();                         
                echo"</table>";
            echo"</div>";   
        }
        $hd->disconnect();
        require("templates/footer.php"); 
    }
    else
    {
        ob_start(); 
        header('Location: ../index.php');
        ob_end_flush(); 
    }	
?>