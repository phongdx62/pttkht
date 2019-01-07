<link rel="stylesheet" href="../css/index.css">
<?php 
  while ($data = $dl->fetch_assoc())
  {
    if($data["tinhtrang"] == "Còn chỗ")
    {
      $tt = "<p style='color: #00CC00;'>$data[tinhtrang]</p>";
    }
    else
    {
      $tt = "<p style='color: #FF3333;'>$data[tinhtrang]</p>";
    }
    echo"<div style='float: left; width: 150px; height: 76px;'><a href='#'><h5>$data[gio]</h5><h5>$tt</h5></a></div>";
  }
?>