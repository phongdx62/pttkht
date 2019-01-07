<?php
    session_start();
    if($_SESSION["cb"] == "Nhà quản lý")
    {
        include("../models/m-dichvudalam.php");
        $dvdl = new dichvudalam();
        require("templates/header.php");
        require("templates/header-admin1.php");
        require("templates/header-list-dvdl.php");
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
                $dvdl->m_search_dvdl($key);
            }
                echo"</table>";
            echo"</div>";   
        }
        else
        {
            echo"<div style='height: 40px;'>";
            echo"<a style='color: #FF33FF;' href='add-list-dvdl.php'>Thêm dịch vụ đã làm</a>";
            echo"</div>";
            require("templates/table-dvdl.php");      
            $dvdl->m_list_dvdl();                         
                echo"</table>";
            echo"</div>";   
        }
        $dvdl->disconnect();
        require("templates/footer.php"); 
    }
    else
    {
        ob_start(); 
        header('Location: ../index.php');
        ob_end_flush(); 
    }	
?>