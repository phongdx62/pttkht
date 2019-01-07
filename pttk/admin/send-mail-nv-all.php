<?php
    session_start();
    require("../models/m-nhanvien.php");
    if($_SESSION["cb"] == "Nhà quản lý")
    {
        require("templates/header.php");
        require("templates/header-admin.php");
        require("templates/js-sendmail.php");
            
        if(isset($_POST["ok"]))
        {
            $title = addslashes(stripslashes($_POST["title"]));
            $content = addslashes(stripslashes($_POST["content"]));

            if(isset($title) && isset($content))
            {
                $sql = "SELECT email, taikhoan FROM nhanvien";
                $nv = new nhanvien();
                $nv->query($sql);

                if($nv->num_rows()<1)
                {
                    echo "<p style='color:red;'>Không tìm thấy email nào!</p>";
                }
                else
                {
                    include('../public/library/send-mail.php');
                    include('../public/library/class.phpmailer.php');
                    include('../public/library/class.smtp.php');
                    while ($row=$nv->fetch_assoc()) 
                    {
                        $email = htmlentities(trim(stripcslashes($row["email"])));
                        $taikhoan = htmlentities(trim(stripcslashes($row["taikhoan"])));
                        $new_title = htmlentities(trim($title));
                        $new_content = "Xin chào ! {$taikhoan}\n\n" .htmlentities(trim($content));

                        $send = send_mail($new_title, $new_content, $taikhoan, $email);        
                    } 
                    if( $send == true )
                    {
                        echo "<p style='color:blue;'>Gửi email thành công ... </p>";
                    }
                    else
                    {
                        echo "<p style='color:red;'>Không thể gửi email ...</p>";
                    }      
                }       
                $nv->disconnect();            
            }
        } 
    }
    else
    {
        ob_start(); 
        header('Location: ../index.php');
        ob_end_flush(); 
    }
        
?>
        <div class="container">
            <div class="form-container">
                <form method="post" id="reused_form" enctype=&quot;multipart/form-nv&quot;>
                   
<?php
    require("templates/label-sendmail.php");  
    require("templates/footer.php");
?>