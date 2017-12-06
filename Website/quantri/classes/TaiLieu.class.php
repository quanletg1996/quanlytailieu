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
		public function getTailieu($ma){
			$arr=array("%$ma%");
			$data=$this->query("SELECT * FROM tailieu where tailieu.TenTaiLieu like ?", $arr);
			return $data;	
		}
		public function getGiaovien($ma){
			$arr=array("%$ma%");
			$data=$this->query("SELECT * FROM giaovien where giaovien.TenGiaoVien like ?", $arr);
			return $data;	
		}
	}