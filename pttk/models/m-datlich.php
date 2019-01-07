<?php  
	include('database.php');
	class datlich extends database
	{
		public function __construct()
		{
			$this->connect();
		}


		public function m_list_dl()
		{
			$sql = "SELECT madl, tenkh, gio, ngay FROM datlich dl
					INNER JOIN khachhang kh
					ON dl.makh = kh.makh
					INNER JOIN khunggio kg
					ON kg.makg = dl.makg";		
			$this->query($sql);
			$stt = 1;
			while($row = $this->fetch_assoc())
			{
				require("templates/show-dl.php");
				$stt++;
			}
		}


		public function m_lichhen($makh)
		{
			$sql = "SELECT madl, tenkh, gio, ngay FROM datlich dl
					INNER JOIN khachhang kh
					ON dl.makh = kh.makh
					INNER JOIN khunggio kg
					ON kg.makg = dl.makg
					WHERE kh.makh = $makh";		
			$this->query($sql);
			$stt = 1;
			while($row = $this->fetch_assoc())
			{
				require("templates/show-lichhen.php");
				$stt++;
			}
		}


		public function m_search_dl($key)
		{
			$sql = "SELECT madl, tenkh, gio, ngay FROM datlich dl
					INNER JOIN khachhang kh
					ON dl.makh = kh.makh
					INNER JOIN khunggio kg
					ON kg.makg = dl.makg
					WHERE tenkh LIKE '%$key%' OR gio LIKE '%$key%' OR ngay LIKE '%$key%' ";
			$this->query($sql);
			$num = $this->num_rows();
			if ($num > 0 && $key != "") 
            {
                echo "<p style='color:#0000FF;'>$num kết quả trả về với từ khóa <b>$key</b></p>";
                echo '<table border="1" cellspacing="0" cellpadding="10">'; 
                require("templates/table-dl.php");
                $stt = 1;
                while ($row = $this->fetch_assoc()) 
                {
                    require("templates/show-dl.php");
                    $stt++;         
                }                   
            } 
            else 
            {
                echo"<p style='color:red;'>* Không tìm thấy kết quả!</p>";
            }
		}


		public function m_del_dl($madl)
		{
			$sql = "DELETE FROM datlich WHERE madl = $madl";
			$this->query($sql);
		}


		public function m_datlich($makh, $gio, $ngay)
		{
			$sql = "SELECT makg FROM khunggio
					 WHERE gio = '$gio' AND ngay = '$ngay' ";
			$this->query($sql);
			$row = $this->fetch_assoc();
			$makg = $row["makg"];
			$sql1 = "INSERT INTO datlich (makh, makg) VALUES ('$makh', '$makg')";
			$this->query($sql1);
		}
	}
?>