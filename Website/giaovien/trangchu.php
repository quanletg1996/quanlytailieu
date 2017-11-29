<?php
	if(!isset($_SESSION)) session_start();
	if(!isset($_SESSION["giaovien"]))
	{
		exit;
	}
	
	

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Quản trị</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
 
</style>
</head>



<body style="margin:auto 30px auto 30px">
<div class="row" >
    	<div class="col-xs-12 col-md-12"><img src="../images/background/backgroud.png" class="img-rounded" alt="Cinque Terre" width="100%" height="100%" /></div>
</div>
    
<div style="margin-top:10px">
    <ul class="nav nav-tabs">
       <li class="active"><a href="#">Home</a></li>
       <li style="float:right"><a href="logout.php">Thoát</a></li>
    </ul>
</div>
    	
<div class="container">
	
    
    <?php //print_r($_POST);?>
    
    
<!--Khung tim kiem -->    
    <div>
    	<div class="row" style="background-color:#FFF; padding-bottom:20px" align="center">
            <div class="col-xs-12 col-md-12"  align="center">
               <div class="col-xs-12 col-md-12" align="left" style="margin-top:20px">
                   <legend style="font-style:italic;"><u>Tìm kiếm: </u></legend>
               </div>
            </div>
        </div>
        <div class="row"  align="center">
            <div class="col-xs-2 col-md-2"></div>
            <div class="col-xs-8 col-md-8" align="right">
                <form action="trangchu.php" method="post" id='frm1' name="timkiem">
                    <div class="form-group">
                        <div class="row" style="padding-top:0px" align="right">
                             <div class="col-xs-4 col-md-4" >
                             </div>
                             <div class="col-xs-8 col-md-8" >
                                 <input type="text" class="form-control" name="tu_khoa">
                             </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-12 col-md-12" >
                                 <select name="list">
                                    <option value="all">Tất cả</option>
                                    <option value="monhoc">Môn học</option>
                                    <option value="giaovien">Giáo viên giảng dạy</option>
                                 </select><br />
                             </div>
                         </div> 
                     </div>
                     <div class="form-group" align="right">        
                         <div class="col-sm-offset-2 col-sm-2"  style="padding-bottom:10px; padding-right:10px; padding-top:0px; float:right">
                             <button type="submit" name="submit" class="btn btn-success" width="90px" style="font-family:Georgia, 'Times New Roman', Times, serif" value="tim" >Tìm</button>
                         </div>
                     </div>
                </form>
             </div>       	
        </div>
    </div>
<!--end tim kiem -->

<!--hiển thị -->
    <?php include "chucnang/do_tim_kiem.php";?>
<!--end hiển thị -->
</div>
<!--footer-->
    <footer class="container-fluid text-center" style="background-color:#99ff99; border-radius:5px">
      <p>Web Quản lý Tài liệu</p>  
      <p>Địa chỉ: 180 Cao Lỗ, Phường 4, Quận 8, TP.HCM</p>
      <p>Liên Hệ: 0987654321</p>
    </footer>
</body>
</html>