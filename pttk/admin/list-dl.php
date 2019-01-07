<?php
    session_start();
    if($_SESSION["cb"] == "Nhân viên lễ tân")
    {
        include("../models/m-datlich.php");
        $dl = new datlich();
        require("templates/header.php");
        require("templates/header-letan1.php");
        require("templates/header-letan-dl.php");
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
                $dl->m_search_dl($key);
            }
                echo"</table>";
            echo"</div>";   
        }
        else
        {
            echo"<div style='height: 40px;'>";
            echo"</div>";
            require("templates/table-dl.php");      
            $dl->m_list_dl();                         
                echo"</table>";
            echo"</div>";   
        }
        $dl->disconnect();
        require("templates/footer.php"); 
    }
    else
    {
        ob_start(); 
        header('Location: ../index.php');
        ob_end_flush(); 
    }	
?>