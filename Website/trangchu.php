 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Quản lý giáo án</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
 <script src="js/jquery-3.2.1.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
<style>
fieldset{width:50%; margin:50px auto;}

#frm1	{width:600px}; 
</style>
</head>



<body bgcolor="#0e5aa8">
<?php 
	include "config/config.php";
?>
<div class="container">
	<div class="row" >
    	<div class="col-xs-12 col-md-12"><img src="images/background/backgroud.png" class="img-rounded" alt="Cinque Terre" width="100%" height="100%" /></div>
    </div>
    <div class="row" style="background-color:#FFF; padding-top:10px">
    	<?php //include "giaodien/dangnhap.php" ?>
    </div>
	<div class="row" style="background-color:#FFF; padding-bottom:20px" align="center">
    <div class="col-xs-12 col-md-12"  align="center">
       <div class="col-xs-8 col-md-8" align="left">
           <legend style="font-style:italic;"><u>Tìm kiếm tài liệu: </u></legend>
       </div>
    <div class="row col-xs-8 col-md-8" style="background-image:url(images/timkiem/tra_cuu.png); background-repeat:no-repeat">
        <div class="col-xs-12 col-md-12" align="right">
            <form action="trangchu.php" method="post" id='frm1' name="timkiem">
                <div class="form-group">
                    <div class="row" style="padding-top:150px" align="right">
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
                 <div class="form-group">        
                     <div class="col-sm-offset-2 col-sm-4"  style="padding-bottom:50px; padding-right:90px; padding-top:20px">
                         <button type="submit" name="submit" class="btn btn-success" width="90px" style="font-family:Georgia, 'Times New Roman', Times, serif" value="tim" >Tìm</button>
                     </div>
                 </div>
            </form>
         </div>       	
		</div>
	</div>
	 </div>
     
     <div class="table-responsive">
      		<?php include "chuc_nang/thong_tin_tim_kiem.php";?>
     </div>
  </div>
</div>
<?php
//
                                        
?>

</body>
</html>