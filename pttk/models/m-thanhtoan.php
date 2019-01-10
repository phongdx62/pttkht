<?php  
	include('database.php');
	class thanhtoan extends database
	{
		public function __construct()
		{
			$this->connect();
		}


		public function m_list_tt()
		{
			$sql = "SELECT *
					FROM thanhtoan";		
			$this->query($sql);
			$stt = 1;
			while($row = $this->fetch_assoc())
			{
				require("templates/show-tt.php");
				$stt++;
			}
		}


		public function m_search_tt($key)
		{
			$sql = "SELECT tendv, dongia, tennv, tenkh FROM thanhtoan tt
					INNER JOIN dichvudalam dvdl
					ON tt.madvdl = dvdl.madvdl
					INNER JOIN dichvu dv
					ON dvdl.madv = dv.madv
					INNER JOIN nhanvien nv
					ON nv.manv = tt.manv
					INNER JOIN khachhang kh
					ON kh.makh = tt.makh
					WHERE tendv LIKE '%$key%' OR dongia LIKE '%$key%' OR tennv LIKE '%$key%' OR tenkh LIKE '%$key%' ";
			$this->query($sql);
			$num = $this->num_rows();
			if ($num > 0 && $key != "") 
            {
                echo "<p style='color:#0000FF;'>$num kết quả trả về với từ khóa <b>$key</b></p>";
                echo '<table border="1" cellspacing="0" cellpadding="10">'; 
                require("templates/table-tt.php");
                $stt = 1;
                while ($row = $this->fetch_assoc()) 
                {
                    require("templates/show-tt.php");
                    $stt++;         
                }                   
            } 
            else 
            {
                echo"<p style='color:red;'>* Không tìm thấy kết quả!</p>";
            }
		}


		public function m_add_tt($madvdl, $manv, $makh)
		{
			$sql = "INSERT INTO thanhtoan (
									       madvdl,
									       manv,
									       makh) VALUES (
													     '$madvdl',
													     '$manv',
													 	 '$makh')";
			$this->query($sql);	
		}


		public function m_edit_tt($matt, $madvdl, $manv, $makh)
		{
			$sql = "UPDATE thanhtoan SET madvdl = '$madvdl',  
									     manv = '$manv',
									     makh = '$makh'  
								     WHERE matt = $matt";
			$this->query($sql);
		}


		public function m_get_tt($matt)
		{
			$sql = "SELECT *
					FROM thanhtoan
					WHERE matt = $matt";
			$this->query($sql);
			$row = $this->fetch_assoc();
			return $row;
		}


		public function m_del_tt($matt)
		{
			$sql = "DELETE FROM thanhtoan WHERE matt = $matt";
			$this->query($sql);
		}
	}
?>