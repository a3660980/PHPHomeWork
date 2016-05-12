<?php
 class Datebase {
	public static function initDB() {
		$db_host = 'db.mis.kuas.edu.tw';
		$db_user = ''; //帳號
		$db_pass = ''; //密碼
		$db_name = ''; //資料庫名稱
		$dsn = "mysql:host=$db_host;dbname=$db_name;charset=utf8";
		$db = new PDO($dsn, $db_user, $db_pass);
		return $db;
	}
}
?>
