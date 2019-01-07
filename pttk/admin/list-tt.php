<?php
    session_start();
    if($_SESSION["cb"] == "Nhân viên lễ tân")
    {
        include("../models/m-thanhtoan.php");
        $tt = new thanhtoan();
        require("templates/header.php");
        require("templates/header-letan1.php");
        require("templates/header-letan-tt.php");
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
                $tt->m_search_tt($key);
            }
                echo"</table>";
            echo"</div>";   
        }
        else
        {
            echo"<div style='height: 40px;'>";
            echo"<a style='color: #FF33FF;' href='add-list-tt.php'>Thêm thanh toán</a>";
            echo"</div>";
            require("templates/table-tt.php");      
            $tt->m_list_tt();                         
                echo"</table>";
            echo"</div>";   
        }
        $tt->disconnect();
        require("templates/footer.php"); 
    }
    else
    {
        ob_start(); 
        header('Location: ../index.php');
        ob_end_flush(); 
    }	
?>