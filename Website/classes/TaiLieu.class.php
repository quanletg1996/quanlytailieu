<?php
	class TaiLieu extends DB{
		function getAll(){
			return $this->query("select * from tailieu");	
		}
		function seach($ten){
			$arr =array("%$ten%");
			return $this->query("select * from tailieu where tentailieu like ?",$arr);	
		}
		function seachMH($ten){
			$arr =array("%$ten%");
			return $this->query("SELECT tailieu.TenTaiLieu, tailieu.LoaiTaiLieu, tailieu.NXB FROM tailieu JOIN
					monhoc on tailieu.MonHocMaMonHoc=monhoc.MaMonHoc WHERE monhoc.TenMonHoc like ?",$arr);	
		}
		function seachGV($ten){
			$arr =array("%$ten%");
			return $this->query("SELECT tailieu.TenTaiLieu, tailieu.LoaiTaiLieu, tailieu.NXB
					FROM tailieu  JOIN soan on tailieu.MaTaiLieu=soan.TaiLieuMaTaiLieu
								JOIN giaovien  on giaovien.MaGiaoVien=soan.GiaoVienMaGiaoVien 
					WHERE giaovien.TenGiaoVien like ?",$arr);	
		}
	}