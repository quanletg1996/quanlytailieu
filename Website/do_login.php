 <?php
 	if(!isset($_SESSION)) session_start();
 	error_reporting(E_ALL);
    ini_set('display_errors', 1);
 	require "config/config.php";
	
    //print_r($_POST);
	//exit;
	if(!isset($_POST["login"])){
		exit;
	}
	
 ?>
 <?php
 
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
 
	function loadClass($className){
		require "classes/".$className.".class.php";	
	}
	spl_autoload_register("loadClass");
	
	function postIndex($index, $value="")
	{
		if (!isset($_POST[$index]))	return $value;
		return $_POST[$index];
	}
	
	$data=null;
	$sm=postIndex("login");
	$tk = postIndex("taikhoan");
	$pass=postIndex("pass");
	
	
	
	$err="";
	
		$data=null;
		$dangnhap=new Login();
		$data=$dangnhap->loginAdmin("Select * from dangnhap where taikhoan = :taikhoan and matkhau = :matkhau",$tk,$pass);
		
		//print_r($data);
		if($data!=null){
		if($data[0]["loai"]=="ad")
			{
				$_SESSION["admin"]=1;
				?>
					<script> window.location="quantri";</script>
				<?php 
				exit;
			}
		else if($data[0]["loai"]=="gv")
			{
				$_SESSION["giaovien"]=1;
				?>
					<script> window.location="giaovien";</script>
				<?php 
				exit;
			}
		}
		else {
			thong_bao_abc("Thông tin tài khoản không chính xác!! Vui lòng nhập lại!!");
			
		}	
		
?>