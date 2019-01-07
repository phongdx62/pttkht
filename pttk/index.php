<?php  
  include("views/v-header.php");
?>
    
  <script language="javascript">
    function change_color_hn()
    {
      document.getElementById("hn").style.color = '#f60';
      document.getElementById("nm").style.color = 'blue';
      document.getElementById("nk").style.color = 'blue';
    }
    function change_color_nm()
    {
      document.getElementById("hn").style.color = 'blue';
      document.getElementById("nm").style.color = '#f60';
      document.getElementById("nk").style.color = 'blue';
    }
    function change_color_nk()
    {
      document.getElementById("hn").style.color = 'blue';
      document.getElementById("nm").style.color = 'blue';
      document.getElementById("nk").style.color = '#f60';
    }
  </script> 

    <div class="container mb-3">
      <div class="pl-5 dichvu">
        <img src="./img/dichvu.png" alt="">
      </div>
      
      <div class="datlich">
        <div class="homnay">
          <form action="" method="post">
            <a name="homnay" href="#" id="hn" onclick="change_color_hn()">
              <h5>Hôm nay</h5>
              <h5>Thứ sáu,11/01</h5>
            </a>
          </form>
          
        </div>
        <div class="ngaymai">
          <form action="" method="post">
            <a name="ngaymai" href="#" id="nm" onclick="change_color_nm()">
              <h5>Ngày Mai</h5>
              <h5>Thứ bảy,12/01</h5>
            </a>
          </form>
          
        </div>
        <div class="ngaykia">
          <form action="" method="post">
            <a name="ngaykia" href="#" id="nk" onclick="change_color_nk()">
              <h5>Ngày kia</h5>
              <h5>Chủ nhật,13/01</h5>
            </a>
          </form>
          
        </div>
      </div>
    <div class="thoigian">
      <div id="dulieu" style="width: 600px;">
        <?php  
          include("models/m-datlich.php");
          $dl = new datlich();
          $sql = "SELECT makg, gio, tinhtrang
                  FROM khunggio
                  WHERE ngay = '2019-01-11' ";
          $dl->query($sql);
          include("public/library/ajax-dulieu.php");
        ?>
      </div>
     <script src="./public/core/js/jquery-3.3.1.slim.min.js"></script> 
     <script type="text/javascript">
        $(document).ready(function() {
            $('#hn').click(function(e) {
                e.preventDefault();
                $('#dulieu').load('public/library/ajax-homnay.php');
            });
        });
      </script>

      <script type="text/javascript">
        $(document).ready(function() {
            $('#nm').click(function(e) {
                e.preventDefault();
                $('#dulieu').load('public/library/ajax-ngaymai.php');
            });
        });
      </script>

      <script type="text/javascript">
        $(document).ready(function() {
            $('#nk').click(function(e) {
                e.preventDefault();
                $('#dulieu').load('public/library/ajax-ngaykia.php');
            });
        });
      </script>

    </div>
    <div class="pt-2" style="width: 600px; margin:auto;">
      <?php  
        if(isset($_POST["homnay"]))
        {
          $ngay = "2019-01-11";
        }
        elseif(isset($_POST["ngaymai"]))
        {
          $ngay = "2019-01-12";
        }
        elseif(isset($_POST["ngaymai"]))
        {
          $ngay = "2019-01-13";
        }
        else
        {
          $ngay = "2019-01-11";
        }
      ?>
      <a href="datlich.php?ngay=<?php echo $ngay; ?>" type="button" class="btn btn-secondary btn-lg btn-block">Đặt Lịch Giữ Chỗ</a>
    </div>
    </div>

<?php
  include("views/v-footer.php");
?>