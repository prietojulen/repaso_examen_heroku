<?php
class Database {
	public static $db;
	public static $con;
	function Database(){
		/*if (isset($_ENV["CLEARDB_DATABASE_URL"]))
		{
			$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
			$var_server = $cleardb_url["host"];
			$var_username = $cleardb_url["pass"];
			$var_db = substr($cleardb_url["path"], 1)


		}
		else //Entorno de desarollo
		{
		$var_server = "localhost";
		$var_username = "username";
		$var_password = "userpassword";
		$var_db = "newdb";
		}
		*/
		$this->user="b30f268a08a1f9";$this->pass="45c8cd4f";$this->host="eu-cdbr-west-02.cleardb.net";$this->ddbb="heroku_92a393f2d2af7c3";
	}

	function connect(){
		$con = new mysqli($this->host,$this->user,$this->pass,$this->ddbb);
		$con->query("set sql_mode=''");
		return $con;
	}

	public static function getCon(){
		if(self::$con==null && self::$db==null){
			self::$db = new Database();
			self::$con = self::$db->connect();
		}
		return self::$con;
	}
	
}
?>
