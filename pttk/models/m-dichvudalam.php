<?php  
	include('database.php');
	class dichvudalam extends database
	{
		public function __construct()
		{
			$this->connect();
		}


		public function m_list_dvdl()
		{
			$sql = "SELECT *
					FROM dichvudalam";		
			$this->query($sql);
			$stt = 1;
			while($row = $this->fetch_assoc())
			{
				require("templates/show-dvdl.php");
				$stt++;
			}
		}


		public function m_search_dvdl($key)
		{
			$sql = "SELECT * FROM dichvudalam
					WHERE madvdl LIKE '%$key%' OR madv LIKE '%$key%' OR sohd LIKE '%$key%' OR soluong LIKE '%$key%' OR dongia LIKE '%$key%' ";
			$this->query($sql);
			$num = $this->num_rows();
			if ($num > 0 && $key != "") 
            {
                echo "<p style='color:#0000FF;'>$num kết quả trả về với từ khóa <b>$key</b></p>";
                echo '<table border="1" cellspacing="0" cellpadding="10">'; 
                require("templates/table-dvdl.php");
                $stt = 1;
                while ($row = $this->fetch_assoc()) 
                {
                    require("templates/show-dvdl.php");
                    $stt++;         
                }                   
            } 
            else 
            {
                echo"<p style='color:red;'>* Không tìm thấy kết quả!</p>";
            }
		}


		public function m_add_dvdl($madv, $sohd, $soluong, $dongia)
		{
			$sql = "INSERT INTO dichvudalam (madv, 
											 sohd,
									    	 soluong,
									    	 dongia) VALUES ('$madv',
									    	 				 '$sohd',
													    	 '$soluong',
													    	 '$dongia')";
			$this->query($sql);
		
		}


		public function m_edit_dvdl($madvdl, $madv, $sohd, $soluong, $dongia)
		{
			$sql = "UPDATE dichvudalam SET madv = '$madv',
										   sohd = '$sohd', 
									  	   soluong = '$soluong',  
									       dongia = '$dongia'  
								       WHERE madvdl = $madvdl";
			$this->query($sql);
		}


		public function m_get_dvdl($madvdl)
		{
			$sql = "SELECT *
					FROM dichvudalam
					WHERE madvdl = $madvdl";
			$this->query($sql);
			$row = $this->fetch_assoc();
			return $row;
		}


		public function m_del_dvdl($madvdl)
		{
			$sql = "DELETE FROM dichvudalam WHERE madvdl = $madvdl";
			$this->query($sql);
		}
	}
?>