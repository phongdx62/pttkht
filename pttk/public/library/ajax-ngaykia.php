<?php  
  include("../../models/m-datlich.php");
  $dl = new datlich();
  $sql = "SELECT makg, gio, tinhtrang
          FROM khunggio
          WHERE ngay = '2019-01-13' ";
  $dl->query($sql);
  include("ajax-dulieu.php");
?>