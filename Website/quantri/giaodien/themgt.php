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
	
	$TL=new TaiLieu();
	$dataMH=$TL->getAllMonhoc();
	$dataGV=$TL->getAllGiaovien();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Thêm tài liệu</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../js/style.css">
  <script src="../js/choosen.js"></script>
<style>
 
</style>
</head>

<body style="margin:auto 30px auto 30px">
<div class="row" >
    	<div class="col-xs-12 col-md-12"><img src="../../images/background/backgroud.png" class="img-rounded" alt="Cinque Terre" width="100%" height="100%" /></div>
</div>
    
<div style="margin-top:10px">
    <ul class="nav nav-tabs">
       <li><a href="../index.php">Home</a></li>
       <li class="dropdown">
         <a class="dropdown-toggle" data-toggle="dropdown" href="#">Thêm
         <span class="caret"></span></a>
         <ul class="dropdown-menu">
           <li><a href="thembg.php">Thêm bài giảng</a></li>
         </ul>
       </li>
       <li style="float:right"><a href="../logout.php">Thoát</a></li>
    </ul>
</div>
    	
<div class="container">	
     
<!--Khung sua --> 
<div class="container">
    <form style="margin:10px auto;width:50%" name="form" action="../chucnang/them.php" method="post">
      <div class="form-group">
        <label for="inputlg" style="padding-left:15px">Loại tài liệu:</label>
        <select name="loaitl" id="loaitl" >
        	<option value="Bài giảng">Giáo trình</option>
        </select>
      </div>
      <div class="form-group">
        <label for="inputsm" style="padding-left:15px">Tên tài liệu:</label>
        <input class="form-control input-sm" placeholder="nhập tên tài liệu..." id="tentl" name="tentl" type="text" required>
      </div>
      <div class="form-group">
        <label for="inputdefault" style="padding-left:15px">Mã tài liệu:</label>
        <input class="form-control" placeholder="nhập mã tài liệu..." id="matl" name="matl" type="text" required>
      </div>
      <div class="form-group">
        <label for="inputdefault" style="padding-left:15px">Môn học:</label>
        <select class="chosen" style="width:500px;" name="mamh" required>
        	<option value="0">"Môn hoc..."</option>
          <?php foreach($dataMH as $v){
					$tenmh=$v['TenMonHoc'];
					$mamh=$v['MaMonHoc'];
					?>
             <option value="<?php echo $mamh ?>"><?php echo $tenmh ?></option>       
          <?php } ?>
        </select>
      </div>
      <div class="form-group">
        <label for="inputdefault" style="padding-left:15px">Nhà xuất bản:</label>
        <input class="form-control" placeholder="nhập nhà xuất bản..." id="matl" name="nxb" type="text" required>
      </div>
      <div class="form-group">
           <div style="width:49%;float:left">
            	<label for="inputlg" style="padding-left:15px">Ngày bắt đầu:</label>
           </div>
           <div style="width:49%;float:left">
            	<label for="inputlg" style="padding-left:15px">Ngày hoàn thành:</label>
           </div>
            <div style="width:49%;float:left">
            	<input class="form-control input-lg" id="ngaybd" name="ngaybd"  type="date" required>
            </div>
            <div style="width:49%;float:left">
            	<input class="form-control input-lg" id="ngayht" name="ngayht"  type="date" required>
            </div>
            <div style="clear:both"></div>
      </div>
      <!--<div class="form-group">
        <label for="inputlg" style="padding-left:15px">Ngày dự kiến</label>
        <input class="form-control input-lg" id="ngaycn" name="ngaycn"  type="date" required>
      </div>-->
      <div class="form-group">
        
      </div>
      <div style="margin-left:50px">
       <label for="inputlg" style="padding-left:15px">Tiến độ</label>
       <select name="tiendo" id="tiendo" >
       		<option value="0%">0%</option>
        	<option value="25%">25%</option>
            <option value="50%" >50%</option>
            <option value="75%" >75%</option>
            <option value="100%" >100%</option>
        </select>
      </div>
      <div class="form-group">
        <label for="inputdefault" style="padding-left:15px">Giáo viên:</label>
        <select class="chosen" style="width:500px;" name="magv" required>
        	<option value="0">"Giáo viên..."</option>
          <?php foreach($dataGV as $v){
					$tengv=$v['TenGiaoVien'];
					$magv=$v['MaGiaoVien'];
					?>
             <option value="<?php echo $magv ?>"><?php echo $tengv ?></option>       
          <?php } ?>
        </select>
       </div>
       <div class="form-group"> 
        <label for="inputlg" style="padding-left:15px">Vai trò</label>
        <select name="vaitro" id="vaitro" >
        	<option value="Soạn chính">Soạn chính</option>
            <option value="Soạn phụ" >Soạn phụ</option>
        </select>
      </div>
      <div class="form-group">
        <label for="inputlg" style="padding-left:15px">Người kiểm duyệt</label>
        <input class="form-control" placeholder="tên/chức vụ người kiểm duyệt..." id="kiemduyet" name="kiemduyet" type="text" required>
      </div>
       <div class="form-group">
        <label for="inputlg" style="padding-left:15px">Phụ cấp</label><br />
        <input id="phucap"  name="phucap" type="radio" value="1" required>Đã nhận
        <input id="phucap" name="phucap" type="radio" value="0">Chưa nhận<br />
      </div>
       <div class="form-group" style="float:right">
        <input class="btn btn-success" id="btnThem" name="btnThem" value="Thêm" type="submit">
      </div>
    </form>
</div>

<!--end them -->

</div>
<!--footer-->
    <footer class="container-fluid text-center" style="background-color:#99ff99; border-radius:5px">
      <p>Web Quản lý Tài liệu</p>  
      <p>Địa chỉ: 180 Cao Lỗ, Phường 4, Quận 8, TP.HCM</p>
      <p>Liên Hệ: 0987654321</p>
    </footer>
<script type="text/javascript">
$(".chosen").chosen();
</script>
</body>
</html>