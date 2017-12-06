<?php
	if(!isset($_SESSION)) session_start();
	if(!isset($_SESSION["dadangnhap"]))
	{
		exit;
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/admin.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Thêm Tài Liệu</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
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
<!-- InstanceBeginEditable name="noidung" -->
<form class="form-horizontal">
    <div class="form-group">
      <label class="col-sm-2 control-label">Focused</label>
      <div class="col-sm-10">
        <input class="form-control" id="focusedInput" type="text" value="Click to focus...">
      </div>
    </div>
    <div class="form-group">
      <label for="disabledInput" class="col-sm-2 control-label">Disabled</label>
      <div class="col-sm-10">
        <input class="form-control" id="disabledInput" type="text" placeholder="Disabled input here..." disabled>
      </div>
    </div>
    <fieldset disabled>
      <div class="form-group">
        <label for="disabledTextInput" class="col-sm-2 control-label">Disabled input and select list (Fieldset disabled)</label>
        <div class="col-sm-10">
          <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">
        </div>
      </div>
      <div class="form-group">
        <label for="disabledSelect" class="col-sm-2 control-label"></label>
        <div class="col-sm-10">
          <select id="disabledSelect" class="form-control">
            <option>Disabled select</option>
          </select>
        </div>
      </div>
    </fieldset>
    <div class="form-group has-success has-feedback">
      <label class="col-sm-2 control-label" for="inputSuccess">Input with success and glyphicon</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="inputSuccess">
        <span class="glyphicon glyphicon-ok form-control-feedback"></span>
      </div>
    </div>
    <div class="form-group has-warning has-feedback">
      <label class="col-sm-2 control-label" for="inputWarning">Input with warning and glyphicon</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="inputWarning">
        <span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>
      </div>
    </div>
    <div class="form-group has-error has-feedback">
      <label class="col-sm-2 control-label" for="inputError">Input with error and glyphicon</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="inputError">
        <span class="glyphicon glyphicon-remove form-control-feedback"></span>
      </div>
    </div>
</form>

<!-- InstanceEndEditable -->

</body>
<!-- InstanceEnd --></html>
