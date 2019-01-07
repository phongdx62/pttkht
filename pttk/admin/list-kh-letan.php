<?php
    session_start();
    if($_SESSION["cb"] == "Nhân viên lễ tân")
    {
        include("../models/m-khachhang.php");
        $kh = new khachhang();
        require("templates/header.php");
        require("templates/header-letan1.php");
        require("templates/header-letan-kh.php");
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
                $kh->m_search_kh_letan($key);
            }
                echo"</table>";
            echo"</div>";   
        }
        else
        {
            echo"<div style='height: 40px;'>";
            echo"</div>";
            require("templates/table-kh-letan.php");      
            $kh->m_list_kh_letan();                         
                echo"</table>";
            echo"</div>";   
        }
        $kh->disconnect();
        require("templates/footer.php"); 
    }
    else
    {
        ob_start(); 
        header('Location: ../index.php');
        ob_end_flush(); 
    }	
?>