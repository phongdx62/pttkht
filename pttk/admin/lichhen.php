<?php
    session_start();
    if(isset($_SESSION["makh"]))
    {
        $makh = $_SESSION["makh"];
        include("../models/m-datlich.php");
        $dl = new datlich();
        require("templates/header.php");
        require("templates/header-letan1.php");
        
        echo"<div id='duoi'>";
        echo"<table>";
        echo"<div style='height: 40px;'>";
        echo"</div>";
        require("templates/table-dl.php");      
        $dl->m_lichhen($makh);                         
            echo"</table>";
        echo"</div>";   
        
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