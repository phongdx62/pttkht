<?php
    session_start();
    $manv = $_SESSION["id"];
    if(isset($_SESSION["cb"]))
    {
        include("../models/m-nhanvien.php");
        $nv = new nhanvien();
        require("templates/header.php");
        require("templates/header-nhanvien.php");
        
        echo"<div id='duoi'>";
        echo"<br />";
        echo"<table>";
        echo"<div style='height: 40px;'>";
        echo"</div>";
        require("templates/table-nv-canhan.php");      
        $sql = "SELECT * FROM nhanvien WHERE manv = $manv ";
        $nv->query($sql);
        $row = $nv->fetch_assoc();
        require("templates/show-canhan.php");                         
            echo"</table>";
        echo"</div>";   
        
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