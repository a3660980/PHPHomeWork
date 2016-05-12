<?php
 class Datebase {
	public static function initDB() {
		$db_host = 'db.mis.kuas.edu.tw';
		$db_user = 's1103137224';
		$db_pass = 'root';
		$db_name = 's1103137224';
		$dsn = "mysql:host=$db_host;dbname=$db_name;charset=utf8";
		$db = new PDO($dsn, $db_user, $db_pass);
		return $db;
	}
}
?>