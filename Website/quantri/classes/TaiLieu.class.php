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
		public function getTailieu($ten){
			$arr=array("%$ten%");
			$data=$this->query("SELECT * FROM tailieu where tailieu.TenTaiLieu like ?", $arr);
			$n=$this->numRow;
			if($n !=0){return $data;}
			else{return false;}	
		}
		public function getGiaovien($ma){
			$data=null;
			$arr=array("$ma");
			$data=$this->query("SELECT * FROM giaovien where giaovien.MaGiaoVien = ?", $arr);
			if($data !=null){return $data;}
			else{return false;}	
		}
		public function updateTailieu($ma){
			$data=null;
			$arr=array("$ma");
			$data=$this->query("UPDATE tailieu SET ThongTin='Cập nhật' WHERE MaTaiLieu=?", $arr);
			if($data !=null){return $data;}
			else{return false;}
		}
		public function updateCapnhat($matl,$magv,$ngaycn,$noidung,$phucap,$vaitro,$kiemduyet){
			$data=null;
			$arr= array("$matl","$magv","$ngaycn","$noidung","$phucap","$vaitro","$kiemduyet");
			$data=$this->query("INSERT INTO capnhat (TaiLieuMaTaiLieu , GiaoVienMaGiaoVien , NgayCapNhat ,TomTatND ,PhuCap ,VaiTro ,NguoiKiemDuyet)
									VALUES (?,?,?,?,?,?,?)", $arr);
			if($data !=null){return $data;}
			else{return false;}
		}
		public function insertTailieu($matl,$mamh,$tentl,$thongtin,$loaitl,$nxb,$file){
			$data=null;
			$arr=array("$matl","$mamh","$tentl","$thongtin","$loaitl","$nxb","$file");
			$data=$this->query("INSERT INTO tailieu (MaTaiLieu , MonHocMaMonHoc  , TenTaiLieu  ,ThongTin  ,LoaiTaiLieu  ,NXB ,file)
									VALUES (?,?,?,?,?,?,?)", $arr);
			return true;
		}
		public function insertSoan($matl,$magv,$tiendo,$ngaybd,$ngayht,$vaitro,$phucap,$kiemduyet){
			$data=null;
			$arr= array("$matl","$magv","$tiendo","$ngaybd","$ngayht","$vaitro","$phucap","$kiemduyet");
			$data=$this->query("INSERT INTO soan (TaiLieuMaTaiLieu , GiaoVienMaGiaoVien , TienDo ,NgayBD ,NgayHT ,VaiTro ,PhuCap,NguoiKiemDuyet)
									VALUES (?,?,?,?,?,?,?,?)", $arr);
			return true;
		}
		public function upload($file,$path,$maxsize=1,$extention = array('docx','doc','pptx','ppsx'))
		{
			$size = $maxsize * 1024*1024; 
			//kiem tra dữ liệu post lên trong $_FILES ($file)
			if($file && $file['error']==0 && !empty($file['name']))
			{
				//check size
				if($file['size']>0 && $file['size']<=$size)
				{
					//dat lai ten va check đuôi file
					$arrayname = explode('.',$file['name']);
					$ext = $arrayname[count($arrayname)-1];
					if(in_array($ext,$extention))
					{
						$newname = 'file'.time().'.'.$ext;
						$fullpath = $newname;
						if(move_uploaded_file($file['tmp_name'],$fullpath))
						{
							return $fullpath;
						}
						return false; 						
					}
					return false; 		
				}
				return false; 		
			}
			return false; 
		}
	}