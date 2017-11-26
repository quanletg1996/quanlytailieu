<?php
	function thong_bao_abc($c)
	{
		//$lien_ket_trang_truoc=$_SERVER['HTTP_REFERER'];
		?>
			<html><head>
			  <meta charset="UTF-8">
			  <title>Thông báo</title></head>
			<body>
					<script type="text/javascript">
						window.history.back();
						alert("<?php echo $c; ?>");
					</script>
                	
			</body>
			</html>		
		<?php 
		exit();
	}
	function trang_truoc_abc()
	{
		?>
			<html><head>
			  <meta charset="UTF-8">
			  <title>Đang chuyển về trang trước</title></head>
			<body>
				<script type="text/javascript">
					window.history.back();
				</script>	
			</body>
			</html>
		<?php 
	}



	
	$data=null;
	$sm=postIndex("login");
	$tk = postIndex("taikhoan");
	$pass=postIndex("pass");
	
	$err="";
	
	if(isset($_POST["login"])){
		$data=null;
		$dangnhap=new Login();
		$data=$dangnhap->loginAdmin("Select count(*) from dangnhap where taikhoan = :taikhoan and matkhau = :matkhau",$tk,$pass);
		print_r($data);
		
		if($data[0]==1)
			{
				$_SESSION['ky_danh']=$tk;
				$_SESSION['mat_khau']=$pass;
			}
			else 
			{
				thong_bao_abc("Thông tin nhập vào không đúng");
			}
		trang_truoc_abc();
	}
	if(isset($_SESSION['ky_danh']))
	{
		$data=null;
		$dangnhap=new Login();
		$ky_danh=$_SESSION['ky_danh'];
		$mat_khau=$_SESSION['mat_khau'];
		$tv="Select count(*) from dangnhap where taikhoan = :taikhoan and matkhau = :matkhau";
		$data=$dangnhap->loginAdmin($tv,$ky_danh,$mat_khau);
		if($data[0]==1)
		{
			$xac_dinh_dang_nhap="co";
		}
	}
?>