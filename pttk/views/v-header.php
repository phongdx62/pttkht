<?php  
  session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./css/all.min.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/header-footer.css">
    <title>Hello, world!</title>
  </head>
  <body>
    <!-- block1 -->
    <div class="logo"><img src="img/logo.png" alt="logo"></div>
    
    <!-- block2 -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light menu">
      <div class="container">
        <a class="navbar-brand" href="index.php"><i class="fas fa-home" style="font-size: 32px;"></i></a>
        <a class="navbar-brand mr-5" href="index.php"><i class="fas fa-phone fa-lg"></i></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto menu-1">
            <li class="nav-item active">
              <a class="nav-link" href="ve30shine.php">Về 30SHINE <span class="sr-only">(curent)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="dichvu.php">Dịch Vụ</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Muốn Gì</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Blog</a>
            </li>
          </ul>
         
          <?php 
            if(isset($_SESSION["name"]))
            {
          ?>    
              <div class='info-user'>
                <div class='dropdown' style='background-color: #181412;'>
                  <button class= 'btn btn-secondary dropdown-toggle abc' type='button' id='dropdownMenuButton' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                 <?php echo $_SESSION["name"]." "; ?> 
                  </button>
                  <div class='dropdown-menu' aria-labelledby='dropdownMenuButton'>
                    <a class='dropdown-item' href='#'>Thông tin cá nhân</a>
                    <a class='dropdown-item' href='admin/lichhen.php'>Thông tin lịch hẹn</a>
                    <a class='dropdown-item' href='logout.php'>Đăng xuất</a>
                  </div>
                <div>  
              </div>
          <?php  
            }            
            else
            { 
          ?>  
              <a class='navbar-brand mx-4' href='./login-kh.php'>
                <span class='mr-3' style=' color: #2f7ee6;'>
                  <i class='fas fa-circle'>
                  </i>
                </span>
                Đăng nhập
              </a>
              </nav>
              </div>
          <?php    
            }      
          ?>
          
        </div>
      </div>
    </nav>