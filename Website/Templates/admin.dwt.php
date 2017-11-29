<?php
	if(!isset($_SESSION)) session_start();
	if(!isset($_SESSION["dadangnhap"]))
	{
		exit;
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- TemplateBeginEditable name="doctitle" -->
<title>Untitled Document</title>
<!-- TemplateEndEditable -->
<!-- TemplateBeginEditable name="head" -->
<!-- TemplateEndEditable -->
<link rel="stylesheet" href="quantri/css/bootstrap.min.css">
 <script src="quantri/js/jquery-3.2.1.min.js"></script>
 <script src="quantri/js/bootstrap.min.js"></script>

</head>

<body>	
<div class="container">
	<div class="row" >
    	<div class="col-xs-12 col-md-12"><img src="quantri/images/background/backgroud.png" class="img-rounded" alt="Cinque Terre" width="100%" height="100%" /></div>
    </div>
    <ul class="nav nav-tabs">
       <li class="active"><a href="#">Home</a></li>
       <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Menu 1
          <span class="caret"></span></a>
           <ul class="dropdown-menu">
               <li><a href="#">Submenu 1-1</a></li>
               <li><a href="#">Submenu 1-2</a></li>
               <li><a href="#">Submenu 1-3</a></li> 
           </ul>
       </li>
       <li><a href="#">Menu 2</a></li>
       <li><a href="#">Menu 3</a></li>
    </ul>
</div>
<!-- TemplateBeginEditable name="noidung" -->noidung<!-- TemplateEndEditable -->

</body>
</html>
