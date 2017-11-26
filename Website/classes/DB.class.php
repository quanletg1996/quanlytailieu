<?php
	class DB{
		public $conn;
		public $data;

		public function __construct(){
			$dsn="mysql:host=".HOST.";dbname=".DB_NAME;
			try{
				$this->conn= new PDO($dsn,DB_USER,DB_PASS);
				$this->conn->query("set names 'utf8'");
			}catch(Exception $e){
				echo 'Lỗi: '.$e->getMessage();
				exit;
			}
		}
		public function query($sql,$arr=array()){
			$stm=$this->conn->prepare($sql);
			$stm->execute($arr);
			$this->numRow=$stm->rowCount();
			$this->data=$stm->fetchAll(PDO::FETCH_ASSOC);
			return $this->data;	 
		}
	}
	
?>