<?php
	define("HOST","localhost");
	define("DB_NAME","giaoan");
	define("DB_USER","root");
	define("DB_PASS","");
	
	define('ROOT',dirname(dirname(__FILE__)));
	
	//define("BASE_URL","http://quanlygiaoan.tk/");
	
	function loadClass($className){
		include "classes/".$className.".class.php";	
	}
	spl_autoload_register("loadClass");
	
	function postIndex($index, $value="")
	{
		if (!isset($_POST[$index]))	return $value;
		return $_POST[$index];
	}
?>