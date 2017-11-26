<?php
	class Login extends DB{
		public $data;
		
		function loginAdmin($sql,$ten,$pass,$arr=array()){
			$stm= $this->conn->prepare($sql);
			$stm->bindValue(":taikhoan","$ten");
			$stm->bindValue(":matkhau","$pass");
			$stm->execute();
			$this->data=$stm->fetchAll(PDO::FETCH_ASSOC);
			return $this->data;
				
		}
		function loginGV($ten){
			$arr =array("%$ten%");
			return $this->query("SELECT tailieu.TenTaiLieu, tailieu.LoaiTaiLieu, tailieu.NXB
					FROM tailieu  JOIN soan on tailieu.MaTaiLieu=soan.TaiLieuMaTaiLieu
								JOIN giaovien  on giaovien.MaGiaoVien=soan.GiaoVienMaGiaoVien 
					WHERE giaovien.TenGiaoVien like ?",$arr);	
		}
	}