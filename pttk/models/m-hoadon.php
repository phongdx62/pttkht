<?php  
	include('database.php');
	class hoadon extends database
	{
		public function __construct()
		{
			$this->connect();
		}


		public function m_list_hd()
		{
			$sql = "SELECT *
					FROM hoadon";		
			$this->query($sql);
			$stt = 1;
			while($row = $this->fetch_assoc())
			{
				require("templates/show-hd.php");
				$stt++;
			}
		}


		public function m_list_hd_letan()
		{
			$sql = "SELECT *
					FROM hoadon";		
			$this->query($sql);
			$stt = 1;
			while($row = $this->fetch_assoc())
			{
				require("templates/show-hd-letan.php");
				$stt++;
			}
		}


		public function m_search_hd($key)
		{
			$sql = "SELECT * FROM hoadon
					WHERE makh LIKE '%$key%' OR manv LIKE '%$key%' OR gio LIKE '%$key%' OR ngaylap LIKE '%$key%' ";
			$this->query($sql);
			$num = $this->num_rows();
			if ($num > 0 && $key != "") 
            {
                echo "<p style='color:#0000FF;'>$num kết quả trả về với từ khóa <b>$key</b></p>";
                echo '<table border="1" cellspacing="0" cellpadding="10">'; 
                require("templates/table-hd.php");
                $stt = 1;
                while ($row = $this->fetch_assoc()) 
                {
                    require("templates/show-hd.php");
                    $stt++;         
                }                   
            } 
            else 
            {
                echo"<p style='color:red;'>* Không tìm thấy kết quả!</p>";
            }
		}


		public function m_search_hd_letan($key)
		{
			$sql = "SELECT * FROM hoadon
					WHERE makh LIKE '%$key%' OR manv LIKE '%$key%' OR gio LIKE '%$key%' OR ngaylap LIKE '%$key%' ";
			$this->query($sql);
			$num = $this->num_rows();
			if ($num > 0 && $key != "") 
            {
                echo "<p style='color:#0000FF;'>$num kết quả trả về với từ khóa <b>$key</b></p>";
                echo '<table border="1" cellspacing="0" cellpadding="10">'; 
                require("templates/table-hd.php");
                $stt = 1;
                while ($row = $this->fetch_assoc()) 
                {
                    require("templates/show-hd-letan.php");
                    $stt++;         
                }                   
            } 
            else 
            {
                echo"<p style='color:red;'>* Không tìm thấy kết quả!</p>";
            }
		}


		public function m_add_hd($makh, $manv, $gio, $ngaylap)
		{
	
			$sql = "INSERT INTO hoadon (makh,
									    manv,
									    gio,
									    ngaylap) VALUES ('$makh',
													  '$manv',
													  '$gio',
													  '$ngaylap')";
			$this->query($sql);
			
		}


		public function m_edit_hd($sohd, $makh, $manv, $gio, $ngaylap)
		{
			$sql = "UPDATE hoadon SET makh = '$makh', 
									  manv = '$manv',  
									  gio = '$gio',
									  ngaylap = '$ngaylap'  
								  WHERE sohd = $sohd";
			$this->query($sql);
		}


		public function m_get_hd($sohd)
		{
			$sql = "SELECT hd.*, tenkh, tennv 
					FROM hoadon hd
					INNER JOIN khachhang kh
					ON hd.makh = kh.makh
					INNER JOIN nhanvien nv
					ON hd.manv = nv.manv
					WHERE sohd = $sohd";
			$this->query($sql);
			$row = $this->fetch_assoc();
			return $row;
		}


		public function m_del_hd($sohd)
		{
			$sql = "DELETE FROM hoadon WHERE sohd = $sohd";
			$this->query($sql);
		}
	}
?>