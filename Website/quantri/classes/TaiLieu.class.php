<?php
	class TaiLieu extends DB{
		public function delete($ma){
			$data=null;
			$data2=null;
			$data3=null;
			$arr =array("$ma");
			$data= $this->query("SELECT capnhat.TaiLieuMaTaiLieu FROM capnhat WHERE capnhat.TaiLieuMaTaiLieu = ?",$arr);
			$data2= $this->query("SELECT soan.TaiLieuMaTaiLieu FROM soan WHERE soan.TaiLieuMaTaiLieu = ?",$arr);
			$data3= $this->query("SELECT tailieu.MaTaiLieu FROM tailieu WHERE tailieu.MaTaiLieu = ?",$arr);
			if($data != null){
				$this->query("DELETE FROM capnhat WHERE capnhat.TaiLieuMaTaiLieu = ?",$arr);
			}else if($data2 != null){
				$this->query("DELETE FROM soan WHERE soan.TaiLieuMaTaiLieu = ?",$arr);
			}
			if($data3 != null){
				$this->query("DELETE FROM tailieu WHERE tailieu.MaTaiLieu = ?",$arr);
				return true;	
			}
			return false;
		}
		public function getValueSua($ma){
			$arr=array("$ma");
			$data=$this->query("SELECT * FROM tailieu where tailieu.MaTaiLieu=?", $arr);
			return $data;	
		}
		public function getAllGiaovien(){
			$data=$this->query("SELECT * FROM giaovien");
			return $data;	
		}
		public function getAllMonhoc(){
			$data=$this->query("SELECT * FROM monhoc");
			return $data;	
		}
		public function getTailieu($ma){
			$arr=array("%$ma%");
			$data=$this->query("SELECT * FROM tailieu where tailieu.TenTaiLieu like ?", $arr);
			return $data;	
		}
		public function getGiaovien($ma){
			$data=null;
			$arr=array("%$ma%");
			$data=$this->query("SELECT * FROM giaovien where giaovien.TenGiaoVien like ?", $arr);
			if($data !=null){return $data;}
			else{return false;}	
		}
		public function updateTailieu($ma){
			$data=null;
			$arr=array("$ma");
			$data=$this->query("UPDATE tailieu SET ThongTin='Cập nhật' WHERE MaTaiLieu=?", $arr);
			if($data !=null){return $true;}
			else{return false;}
		}
		public function updateCapnhat($matl,$magv,$ngaycn,$noidung,$phucap,$vaitro,$kiemduyet){
			$data=null;
			$arr= array("$matl","$magv","$ngaycn","$noidung","$phucap","$vaitro","$kiemduyet");
			$data=$this->query("INSERT INTO capnhat (TaiLieuMaTaiLieu , GiaoVienMaGiaoVien , NgayCapNhat ,TomTatND ,PhuCap ,VaiTro ,NguoiKiemDuyet)
									VALUES (?,?,?,?,?,?,?)", $arr);
			if($data !=null){return $true;}
			else{return false;}
		}
		public function insertTailieu($matl,$mamh,$tentl,$thongtin,$loaitl,$nxb){
			$data=null;
			$arr=array("$matl","$mamh","$tentl","$thongtin","$loaitl","$nxb");
			$data=$this->query("INSERT INTO tailieu (MaTaiLieu , MonHocMaMonHoc  , TenTaiLieu  ,ThongTin  ,LoaiTaiLieu  ,NXB)
									VALUES (?,?,?,?,?,?)", $arr);
			if($data !=null){return $true;}
			else{return false;}
		}
		public function insertSoan($matl,$magv,$tiendo,$ngaybd,$ngayht,$vaitro,$phucap,$kiemduyet){
			$data=null;
			$arr= array("$matl","$magv","$tiendo","$ngaybd","$ngayht","$vaitro","$phucap","$kiemduyet");
			$data=$this->query("INSERT INTO soan (TaiLieuMaTaiLieu , GiaoVienMaGiaoVien , TienDo ,NgayBD ,NgayHT ,VaiTro ,PhuCap,NguoiKiemDuyet)
									VALUES (?,?,?,?,?,?,?,?)", $arr);
			if($data !=null){return $true;}
			else{return false;}
		}
	}