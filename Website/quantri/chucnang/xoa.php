<?php
	//print_r($_POST);
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
	function postIndex($index, $value="")
	{
		if (!isset($_POST[$index]))	return $value;
		return $_POST[$index];
	}
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


	$ma=postIndex("btnOk");
	$TL=new TaiLieu();
	$data=$TL->delete($ma);
	if($data==true){
		header("location:../../quantri");	
	}
	else{
		thong_bao_abc("Chưa xoá được tài liệu!!");
	}
?>