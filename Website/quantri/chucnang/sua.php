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
					history.back();
					history.back();
				</script>
			</body>
			</html>		
		<?php 
		exit();
	}
	$matl=$_GET["matl"];
	$tentl=$_POST["tentl"];
	$magv=$_POST["magv"];
	$TL=new TaiLieu();
	
	$tailieu=$TL->getTailieu($tentl);
	print_r($tailieu);echo "<br>";
	
	$giaovien=$TL->getGiaovien($magv);
	$magv=$giaovien[0]["MaGiaoVien"];
	print_r($giaovien);echo "<br>";
	if($giaovien==false){thong_bao_abc("Không có giáo viên này!!");}
	else{
		//print_r($_POST);echo "<br>";
		$ngaycn=$_POST["ngaycn"];
		$noidung=$_POST["noidung"];
		
		$phucap;
		if($_POST["phucap"]==1){$phucap=true;}
		else {$phucap=false;}
		
		$vaitro=$_POST["vaitro"];
		$kiemduyet=$_POST["kiemduyet"];
		
		$data=$TL->updateTailieu($matl);
		
		$data2=$TL->updateCapnhat($matl,$magv,$ngaycn,$noidung,$phucap,$vaitro,$kiemduyet);
		thong_bao_abc("Sửa thành công!!");
	}
?>