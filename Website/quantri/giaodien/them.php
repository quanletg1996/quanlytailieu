<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Thêm tài liệu</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
 
</style>
</head>

<body style="margin:auto 30px auto 30px">
<div class="row" >
    	<div class="col-xs-12 col-md-12"><img src="../../images/background/backgroud.png" class="img-rounded" alt="Cinque Terre" width="100%" height="100%" /></div>
</div>
    
<div style="margin-top:10px">
    <ul class="nav nav-tabs">
       <li><a href="#">Home</a></li>
       <li class="active"><a href="#">Thêm</a></li>
       <li style="float:right"><a href="../logout.php">Thoát</a></li>
    </ul>
</div>
    	
<div class="container">	
     
<!--Khung sua --> 
<div class="container">
    <form style="margin:10px auto;width:50%" name="form" action="../chucnang/themTL.php" method="post">
      <div class="form-group">
        <label for="inputlg" style="padding-left:15px">Loại tài liệu:</label>
        <select name="loaitl" id="loaitl" >
        	<option value="soanchinh">Bài giảng</option>
            <option value="soanphu" >Giáo trình</option>
        </select>
      </div>
      <div class="form-group">
        <label for="inputsm" style="padding-left:15px">Tài liệu:</label>
        <input class="form-control input-sm" placeholder="nhập tên tài liệu..." id="tentl" name="tentl" type="text">
      </div>
       <div class="form-group">
        <label for="inputdefault" style="padding-left:15px">Mã tài liệu:</label>
        <input class="form-control" placeholder="nhập mã tài liệu..." id="matl" name="matl" type="text" required>
      </div>
      <div class="form-group">
        <label for="inputdefault" style="padding-left:15px">Môn học:</label>
        <input class="form-control" placeholder="nhập tên môn học..." id="tenmh" name="tenmh" type="text" required>
      </div>
      <div class="form-group">
        <label for="inputlg" style="padding-left:15px">Ngày cập nhật:</label>
        <input class="form-control input-lg" id="ngaycn" name="ngaycn"  type="date" required>
      </div>
      <div class="form-group">
        <label for="inputdefault" style="padding-left:15px">Giáo viên:</label>
        <input class="form-control" placeholder="nhập tên giáo viên soạn..." id="tengv" name="tengv" type="text" required><br/>
        <label for="inputlg" style="padding-left:15px">Vai trò</label>
        <select name="vaitro" id="vaitro" >
        	<option value="soanchinh">Soạn chính</option>
            <option value="soanphu" >Soạn phụ</option>
        </select>
      </div>
      <div class="form-group">
        <label for="inputlg" style="padding-left:15px">Người kiểm duyệt</label>
        <input class="form-control" placeholder="tên/chức vụ người kiểm duyệt..." id="kiemduyet" name="kiemduyet" type="text" required>
      </div>
       <div class="form-group">
        <label for="inputlg" style="padding-left:15px">Phụ cấp</label><br />
        <input id="phucap"  name="phucap" type="radio" required>Đã nhận
        <input id="phucap" name="phucap" type="radio" >Chưa nhận<br />
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
</body>
</html>