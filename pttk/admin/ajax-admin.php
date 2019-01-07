<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Trang quản lý</title>

  <link rel="stylesheet" href="../public/core/css/all.min.css">
  <link rel="stylesheet" href="../public/core/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../public/core/css/style-admin.css">

  <script language="javascript">
    function show_confirm() {
      if(confirm("Bạn có thực sự muốn xóa không?"))
      {
        return true;
      }
      else
      {
        return false;
      }     
    }
  </script>
</head>
<body class="container">
<script language="javascript">
  function change_color_nv()
  {
    document.getElementById("nv").style.color = '#f60';
    document.getElementById("kh").style.color = 'white';
    document.getElementById("dv").style.color = 'white';
    document.getElementById("dvdl").style.color = 'white';
    document.getElementById("hd").style.color = 'white';
  }
  function change_color_kh()
  {
    document.getElementById("nv").style.color = 'white';
    document.getElementById("kh").style.color = '#f60';
    document.getElementById("dv").style.color = 'white';
    document.getElementById("dvdl").style.color = 'white';
    document.getElementById("hd").style.color = 'white';
  }
  function change_color_dv()
  {
    document.getElementById("nv").style.color = 'white';
    document.getElementById("kh").style.color = 'white';
    document.getElementById("dv").style.color = '#f60';
    document.getElementById("dvdl").style.color = 'white';
    document.getElementById("hd").style.color = 'white';
  }
   function change_color_dvdl()
  {
    document.getElementById("nv").style.color = 'white';
    document.getElementById("kh").style.color = 'white';
    document.getElementById("dv").style.color = 'white';
    document.getElementById("dvdl").style.color = '#f60';
    document.getElementById("hd").style.color = 'white';
  }
   function change_color_hd()
  {
    document.getElementById("nv").style.color = 'white';
    document.getElementById("kh").style.color = 'white';
    document.getElementById("dv").style.color = 'white';
    document.getElementById("dvdl").style.color = 'white';
    document.getElementById("hd").style.color = '#f60';
  }
</script> 
  <div id="top">
		<h3>Xin chào Admin, <a href="../logout.php">Đăng xuất</a></h3>
	</div>
	<div id="menu" class="mt-3">
				<ul>
					<li><a id="nv" onclick="change_color_nv()" href="#">Quản lý nhân viên</a></li>
					<li><a id="kh" onclick="change_color_kh()" href="#">Quản lý khách hàng</a></li>
					<li><a id="dv" onclick="change_color_dv()" href="#">Quản lý dịch vụ</a></li>
					<li><a id="dvdl" onclick="change_color_dvdl()" href="#">Quản lý dịch vụ đã làm</a></li>
					<li><a id="hd" onclick="change_color_hd()" href="#">Quản lý hóa đơn</a></li>
				</ul>
	</div>
	<div style="clear: left;"></div>

  <form action="header-admin.php">
    <div class="row mb-2">
      <div class="col-md-4">
        <input class="form-control is-valid mt-4 w-80" type="text" name="key"  placeholder="Tìm kiếm">
      </div>
      <div class="col-md-3">
        <button class="btn btn-outline-success mt-4" type="submit" name="ok">Tìm kiếm</button>
      </div>
    </div>

  </form>

  <div id="duoi">
    <table id="dulieu">
    
    </table> 
  </div>
  
<script src="../public/core/js/jquery-3.3.1.slim.min.js"></script>  
    <script type="text/javascript" src="../public/core/js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="../public/core/js/jquery-ui-1.8.21.custom.min.js"></script>
    <script src="../public/core/js/popper.min.js"></script>
    <script src="../public/core/js/bootstrap.min.js"></script>
    <script src="../public/core/js/main.js"></script>
    <script src="../public/core/js/content.js"></script>

<script type="text/javascript">
  $(document).ready(function() {
      $('#nv').click(function(e) {
          e.preventDefault();
          $('#dulieu').load('templates/ajax-list-nv.php');
      });
  });
</script>

<script type="text/javascript">
  $(document).ready(function() {
      $('#kh').click(function(e) {
          e.preventDefault();
          $('#dulieu').load('templates/ajax-list-kh.php');
      });
  });
</script>

  <div id="bottom" >Copyright By Công Nghệ Web</div>
</body>
</html    