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
	
	$tentl=$_POST["tentl"];
	$tengv=$_POST["tengv"];
	$TL=new TaiLieu();
	$tailieu=$TL->getTailieu($tentl);
	print_r($tailieu);echo "<br>";
	$giaovien=$TL->getGiaovien($tengv);
	print_r($giaovien);echo "<br>";
	print_r($_POST);echo "<br>";
?>