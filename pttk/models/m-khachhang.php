<?php  
	include('database.php');
	class khachhang extends database
	{
		public function __construct()
		{
			$this->connect();
		}


		public function m_login($tk, $mk)
		{
			$sql = "SELECT makh, taikhoan, matkhau, status FROM khachhang WHERE taikhoan = '$tk' AND matkhau = '$mk' AND status = '1' ";
			$this->query($sql);
			if($this->num_rows()==1)
			{
				$row = $this->fetch_assoc();
				$_SESSION['name'] = $tk;
				$_SESSION['makh'] = $row['makh'];
			}
			else
			{
				return 'fail';
			}
		}


		public function m_register($ten, $dc, $e, $sdt, $tk, $mk, $activ)
		{
			$sql = "SELECT makh FROM khachhang WHERE taikhoan = '$tk' ";
			$this->query($sql);
			if($this->num_rows()==0)
			{
				$sql = "INSERT INTO khachhang (tenkh,
			    							   diachi,		
						    				   email,			   		
						    				   sdt,
						    				   taikhoan,
						    				   matkhau,
						    				   activ) VALUES ('$ten',
						    								  '$dc',
						    								  '$e',
						    								  '$sdt',
						    								  '$tk',
						    								  '$mk',
						    								  '$activ')";
						    				
				$this->query($sql);			
			}
			else
			{
				return 'fail';
			}
		}


		public function m_list_kh()
		{
			$sql = "SELECT * FROM khachhang";
			$this->query($sql);
			$stt=1;
			while($row = $this->fetch_assoc())
			{
				require("templates/show-kh.php");
				$stt++;
			}
		}


		public function m_list_kh_letan()
		{
			$sql = "SELECT * FROM khachhang";
			$this->query($sql);
			$stt=1;
			while($row = $this->fetch_assoc())
			{
				require("templates/show-kh-letan.php");
				$stt++;
			}
		}


		public function m_del_kh($makh)
		{
			$sql = "DELETE FROM khachhang WHERE makh = $makh";
			$this->query($sql);
		}


		public function m_search_kh($key)
		{
			$sql = "SELECT * FROM khachhang 
					WHERE tenkh LIKE '%$key%' OR diachi LIKE '%$key%' OR taikhoan LIKE '%$key%' OR email LIKE '%$key%' ";
			$this->query($sql);
			$num = $this->num_rows();
			if ($num > 0 && $key != "") 
            {
                echo "<p style='color:#0000FF;'>$num kết quả trả về với từ khóa <b>$key</b></p>";
                echo '<table border="1" cellspacing="0" cellpadding="10">'; 
                require("templates/table-kh.php");
                $stt=1;
                while ($row = $this->fetch_assoc()) 
                {
                    require("templates/show-kh.php");
                    $stt++;         
                }                   
            } 
            else 
            {
                echo"<p style='color:red;'>* Không tìm thấy kết quả!</p>";
            }
		}


		public function m_search_kh_letan($key)
		{
			$sql = "SELECT * FROM khachhang 
					WHERE tenkh LIKE '%$key%' OR diachi LIKE '%$key%' OR taikhoan LIKE '%$key%' OR email LIKE '%$key%' ";
			$this->query($sql);
			$num = $this->num_rows();
			if ($num > 0 && $key != "") 
            {
                echo "<p style='color:#0000FF;'>$num kết quả trả về với từ khóa <b>$key</b></p>";
                echo '<table border="1" cellspacing="0" cellpadding="10">'; 
                require("templates/table-kh-letan.php");
                $stt=1;
                while ($row = $this->fetch_assoc()) 
                {
                    require("templates/show-kh-letan.php");
                    $stt++;         
                }                   
            } 
            else 
            {
                echo"<p style='color:red;'>* Không tìm thấy kết quả!</p>";
            }
		}
	}
?>