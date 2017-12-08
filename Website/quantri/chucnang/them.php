<?php
	if(!isset($_SESSION)) session_start();
	if(!isset($_SESSION["admin"]))
	{
		exit;
	}
	require "../../config/config.php";
	function loadClass($className){
		require "../classes/".$className.".class.php";	
	}
	spl_autoload_register("loadClass");
	function thong_bao_abc($c)
	{
		?>
			<html><head>
			  <meta charset="UTF-8">
			  <title>Thông báo</title></head>
			<body>
				<br><br><br><br>
				<script type="text/javascript">
					alert("<?php echo $c; ?>");
					history.back();
				</script>
			</body>
			</html>		
		<?php 
		exit();
	}
	
	
	$TL=new TaiLieu();
	
		print_r($_POST);
	$file=$TL->upload($_FILES['file'],'../../file/',10);
	$loaitl=$_POST["loaitl"];
	$tentl=$_POST["tentl"];
	$matl=$_POST["matl"];
	$mamh=$_POST["mamh"];
	$magv=$_POST["magv"];
	$ngaybd=$_POST["ngaybd"];
	$ngayht=$_POST["ngayht"];
	$tiendo=$_POST["tiendo"];
	$vaitro=$_POST["vaitro"];
	$kiemduyet=$_POST["kiemduyet"];
	$thongtin="Viết mới";
	$nxb="Không có";
	
	$data=null;
	$data=$TL->getTailieu($tentl);
	$tentl_kt="";$matl_kt="";
	if($data!=false || $data != null){
		$tentl_kt=$data[0]["TenTaiLieu"];
		$matl_kt=$data[0]["MaTaiLieu"];
	}
	//echo $data;
	//echo $file;
	
	if(isset($_POST["nxb"])){
		$nxb=$_POST["nxb"];
	}
	$phucap;
		if($_POST["phucap"]==1){$phucap=true;}
		else {$phucap=false;}
	if($file==false){
		thong_bao_abc("Chưa upload được file!! Vui lòng kiểm tra file lại");	
	}else{
		if($tentl != $tentl_kt){
			if($mamh !=0){ 
				if( $magv !=0){
					if($tiendo!="0%"){
						if ($ngayht > $ngaybd) {
							$dataTL=$TL->insertTailieu($matl,$mamh,$tentl,$thongtin,$loaitl,$nxb,$file);
							//echo $dataTL;
							if($dataTL ==true){
								$dataSoan=$TL->insertSoan($matl,$magv,$tiendo,$ngaybd,$ngayht,$vaitro,$phucap,$kiemduyet);
								if($dataSoan ==true){thong_bao_abc("Thêm thành công");}
								else{thong_bao_abc("Thêm soạn thất bại");}
							}else{thong_bao_abc("Thêm tài liệu thất bại ");}
						} else {thong_bao_abc("Ngày 'Bắt đầu' phải trước ngày 'Hoàn thành'");}
					}else {thong_bao_abc("Tiến độ quá thấp..");}
				}else {thong_bao_abc("Chưa chọn giáo viên..");}
			 }else {thong_bao_abc("Chưa chọn môn học..");}
		}else {?>
			<script type="text/javascript">
				confirm("Đã tồn tại tài liệu này! Bạn có muốn cập nhật tài liệu này không?");
				window.location="../giaodien/sua.php?ma=<?php echo $matl_kt?>";
			</script><?php
		}
	}
?>