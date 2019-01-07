<?php  
	include('database.php');
	class nhanvien extends database
	{
		public function __construct()
		{
			$this->connect();
		}


		public function m_login($tk, $mk)
		{
			$sql = "SELECT manv, tennv, taikhoan, matkhau, capbac FROM nhanvien WHERE taikhoan = '$tk' AND matkhau = '$mk' ";
			$this->query($sql);
			if($this->num_rows()==1)
			{
				$row = $this->fetch_assoc();
				$_SESSION['name'] = $row['tennv'];
				$_SESSION['cb'] = $row['capbac'];
				$_SESSION['id'] = $row['manv'];
 			}
			else
			{
				return 'fail';
			}
		}


		public function m_list_nv()
		{
			$sql = "SELECT * FROM nhanvien";
			$this->query($sql);
			$stt=1;
			while($row = $this->fetch_assoc())
			{
				require("templates/show-nv.php");
				$stt++;
			}
		}


		public function m_add_nv($tennv, $diachi, $sdt, $email, $capbac, $gioitinh, $ngaysinh, $tk, $mk)
		{
			$sql = "INSERT INTO nhanvien (tennv,
									  	  diachi,
									  	  sdt,
									  	  email,
									  	  capbac,
									      gioitinh,
									      ngaysinh,
									      taikhoan,
									      matkhau)	VALUES ('$tennv',
									   						'$diachi',
									   						'$sdt',
									   						'$email',
									   						'$capbac',
									   						'$gioitinh',
									   						'$ngaysinh',
									   						'$tk',
									   						'$mk')";
			$this->query($sql);
		}


		public function m_edit_nv($manv, $tennv, $diachi, $sdt, $email, $capbac, $luong, $thuong, $ca, $tk, $mk)
		{
			$sql = "UPDATE nhanvien SET tennv = '$tennv', 
									    diachi = '$diachi', 
									    sdt = '$sdt',
									    email = '$email',
									    capbac = '$capbac',
									    luong = '$luong',
									    thuong = '$thuong',
									    ca = '$ca',
									    taikhoan = '$tk',
									    matkhau = '$mk'  						 
								    WHERE manv = $manv";
			$this->query($sql);
		}


		public function m_get_nv($manv)
		{
			$sql = "SELECT * FROM nhanvien WHERE manv = $manv ";			
			$this->query($sql);
			$row = $this->fetch_assoc();
			return $row;
		}


		public function m_del_nv($manv)
		{
			$sql = "DELETE FROM nhanvien WHERE manv = $manv AND capbac != 'Nhà quản lý' ";
			$this->query($sql);
		}


		public function m_search_nv($key)
		{
			$sql = "SELECT * FROM nhanvien 
					WHERE tennv LIKE '%$key%' OR diachi LIKE '%$key%' OR taikhoan LIKE '%$key%' OR email LIKE '%$key%' OR capbac LIKE '%$key%' ";
			$this->query($sql);
			$num = $this->num_rows();
			if ($num > 0 && $key != "") 
            {
                echo "<p style='color:#0000FF;'>$num kết quả trả về với từ khóa <b>$key</b></p>";
                echo '<table border="1" cellspacing="0" cellpadding="10">'; 
                require("templates/table-nv.php");
                $stt=1;
                while ($row = $this->fetch_assoc()) 
                {
                    require("templates/show-nv.php");
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