<?php
    session_start();
    if($_SESSION["cb"] == "Nhà quản lý")
    {
        include("../models/m-dichvu.php");
        $dv = new dichvu();
        require("templates/header.php");
        require("templates/header-admin1.php");
        require("templates/header-list-dv.php");
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
                $dv->m_search_dv($key);
            }
                echo"</table>";
            echo"</div>";   
        }
        else
        {
            echo"<div style='height: 40px;'>";
            echo"<a style='color: #FF33FF;' href='add-list-dv.php'>Thêm dịch vụ</a>";
            echo"</div>";
            require("templates/table-dv.php");      
            $dv->m_list_dv();                         
                echo"</table>";
            echo"</div>";   
        }
        $dv->disconnect();
        require("templates/footer.php"); 
    }
    else
    {
        ob_start(); 
        header('Location: ../index.php');
        ob_end_flush(); 
    }	
?>