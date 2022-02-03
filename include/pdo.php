<?php
//是否顯示錯誤
//ini_set("display_errors", "On");
//ini_set("error_reporting", E_ERROR);

ini_set('session.gc_maxlifetime', 3600); //設定session過期為一個小時
date_default_timezone_set("Asia/Taipei");//設定時區為台北

//資料庫連線設定
define('DB_NAME','minderho_db');
define('DB_USER','minderho_db');
define('DB_PASSWD','0ibu6ln2t97g');
define('DB_HOST','localhost');
define('DB_PORT','3306');
define('DB_TYPE','mysql');

try {
	
	$conn = new PDO(DB_TYPE.':host='.DB_HOST.';port='.DB_PORT.';dbname='.DB_NAME, DB_USER, DB_PASSWD, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8mb4"));
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); //拋出 exceptions 異常
    $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); //禁用模擬的準備語句,防止SQL注入
	
}catch(Exception $e) {
	
	//echo $e->getMessage();
	die('系統出現錯誤，請與管理員聯絡!!');
    
}
?>