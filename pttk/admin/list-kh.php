<?php
    session_start();
    if($_SESSION["cb"] == "Nhà quản lý")
    {
        include("../models/m-khachhang.php");
        $kh = new khachhang();
        require("templates/header.php");
        require("templates/header-admin1.php");
        require("templates/header-list-kh.php");
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
                $kh->m_search_kh($key);
            }
                echo"</table>";
            echo"</div>";   
        }
        else
        {
            echo"<div style='height: 40px;'>";
            echo"<a style='color: #FF33FF;' href='send-mail-kh-all.php'>Gửi thư cho tất cả</a>"; 
            echo"</div>";
            require("templates/table-kh.php");      
            $kh->m_list_kh();                         
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