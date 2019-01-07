<?php
    session_start();
    require("../models/m-khachhang.php");
    if($_SESSION["cb"] == "Nhà quản lý")
    {
        require("templates/header.php");
        require("templates/header-admin.php");
        require("templates/js-sendmail.php");
        
        $makh = addslashes(stripslashes($_GET["makh"]));

        $sql = "SELECT email, taikhoan FROM khachhang WHERE makh = $makh";
        $kh = new khachhang();
        $kh->query($sql);
        $row = $kh->fetch_assoc();

        if(isset($_POST["ok"]))
        {
            $title = addslashes(stripslashes($_POST["title"]));
            $content = addslashes(stripslashes($_POST["content"]));
                
            if(isset($title) && isset($content))
            {
                if($kh->num_rows()<1)
                {
                     echo "<p style='color:red;'>Không tìm thấy email nào!</p>";
                }
                else
                {   
                    include('../public/library/send-mail.php');
                    include('../public/library/class.phpmailer.php');
                    include('../public/library/class.smtp.php');               
                    //Hàm htmlentities() sẽ chuyển các kí tự thích hợp thành các kí tự HTML entiies.
                    //Kí thự HTML entiies là các kí tự dùng để hiển thị các biểu tượng, kí tự trong HTML. Ví dụ muốn hiển thị 5 dấu cách, nếu bạn chỉ sử dụng dấu cách bình thường trình duyệt sẽ loại bỏ 4 dấu và chỉ dữ lại 1 dấu cách, muốn hiển thị tất cả bạn sẽ phải sử dụng HTML entiies.
                    //Hàm trim() sẽ loại bỏ khoẳng trắng( hoặc bất kì kí tự nào được cung cấp) dư thừa ở đầu và cuối chuỗi.
                    //Hàm stripslashes() sẽ loại bỏ các dấu backslashes ( \ ) có trong chuỗi. ( \ ' sẽ trở thành ' , \\ sẽ trở thành \).
                    //Hàm trả về chuỗi với các kí tự backslashes đã bị loại bỏ.
                    $email = htmlentities(trim(stripcslashes($row["email"])));
                    $taikhoan = htmlentities(trim(stripcslashes($row["taikhoan"])));
                    $new_tiltel = htmlentities(trim($title));
                    $new_content = "Xin chào {$taikhoan} ! \n\n" .htmlentities(trim($content));

                    $send = send_mail($new_tiltel, $new_content, $taikhoan, $email);        
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
                <form action="send-mail-kh.php?makh=<?php echo $makh; ?>" method="post">
                    <label for="email" style="color: #C71585;">Địa chỉ email:</label>
                    <input id="email" type="email" name="email" value="<?php echo $row['email']; ?>" required>
                    
<?php  
    $kh->disconnect();
    require("templates/label-sendmail.php");
    require("templates/footer.php");
?>