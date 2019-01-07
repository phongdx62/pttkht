<?php  
	include('database.php');
	class dichvu extends database
	{
		public function __construct()
		{
			$this->connect();
		}


		public function m_list_dv()
		{
			$sql = "SELECT *
					FROM dichvu";		
			$this->query($sql);
			$stt = 1;
			while($row = $this->fetch_assoc())
			{
				require("templates/show-dv.php");
				$stt++;
			}
		}


		public function m_search_dv($key)
		{
			$sql = "SELECT madv, tendv, mota, dongia FROM dichvu
					WHERE madv LIKE '%$key%' OR tendv LIKE '%$key%' OR mota LIKE '%$key%' OR dongia LIKE '%$key%' ";
			$this->query($sql);
			$num = $this->num_rows();
			if ($num > 0 && $key != "") 
            {
                echo "<p style='color:#0000FF;'>$num kết quả trả về với từ khóa <b>$key</b></p>";
                echo '<table border="1" cellspacing="0" cellpadding="10">'; 
                require("templates/table-dv.php");
                $stt = 1;
                while ($row = $this->fetch_assoc()) 
                {
                    require("templates/show-dv.php");
                    $stt++;         
                }                   
            } 
            else 
            {
                echo"<p style='color:red;'>* Không tìm thấy kết quả!</p>";
            }
		}


		public function m_add_dv($tendv, $mota, $dongia)
		{
			$sql = "SELECT madv FROM dichvu WHERE tendv = '$tendv'";
			$this->query($sql);

			$num = $this->num_rows();
			if($num>0)
			{
				return 'fail';
			}
			else
			{
				$sql = "INSERT INTO dichvu (tendv,
										    mota,
										    dongia) VALUES ('$tendv',
														    '$mota',
														    '$dongia')";
				$this->query($sql);
			}
		}


		public function m_edit_dv($madv, $tendv, $mota, $dongia)
		{
			$sql = "UPDATE dichvu SET tendv = '$tendv', 
									  mota = '$mota',  
									  dongia = '$dongia'  
								  WHERE madv = $madv";
			$this->query($sql);
		}


		public function m_get_dv($madv)
		{
			$sql = "SELECT *
					FROM dichvu
					WHERE madv = $madv";
			$this->query($sql);
			$row = $this->fetch_assoc();
			return $row;
		}


		public function m_del_dv($madv)
		{
			$sql = "DELETE FROM dichvu WHERE madv = $madv";
			$this->query($sql);
		}
	}
?>