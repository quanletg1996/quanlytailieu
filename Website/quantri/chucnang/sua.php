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
	$TL=new TaiLieu();
	
	$file=$TL->upload($_FILES['file'],'../../file/',10);
	$matl=$_GET["matl"];
	$tentl=$_POST["tentl"];
	$magv=$_POST["magv"];
	print_r($_POST);
	
	$tailieu=$TL->getTailieu($tentl);
	print_r($tailieu);echo "<br>";
	
	$ngaycn=$_POST["ngaycn"];
	$noidung=$_POST["noidung"];
		
	$phucap=$_POST["phucap"];
		
	$vaitro=$_POST["vaitro"];
	$kiemduyet=$_POST["kiemduyet"];
		
	if($data=$TL->updateTailieu($matl,$file)){
		if($data2=$TL->updateCapnhat($matl,$magv,$ngaycn,$noidung,$phucap,$vaitro,$kiemduyet)){
			thong_bao_abc("Sửa thành công!!");
		}else{?><script type="text/javascript">
					alert("Chưa cập nhật được bảng Cập nhật");
				</script><?php 
		}
	}else{?><script type="text/javascript">
				alert("Chưa cập nhật được bảng Tài liệu");
			</script><?php 
	}
?>