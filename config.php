<?php
//引入資料庫程式
include_once('include/pdo.php');
include_once('include/fun_auth.php');

//正式機網站位置設定
define('WEB_NAME','明德醫院暨附設精神護理之家內部公告系統');
define('WEB_SITE','https://inside.minder-hosp.com/');


define('WEB_PATH','/home/minderho/inside.minder-hosp.com/');

//MAIL SERVER
define('MAIL_HOST','mail.minder-hosp.com');
define('MAIL_PORT','465');
define('MAIL_AUTH', true);
define('MAIL_SECURE', 'ssl');
define('MAIL_USER','service@minder-hosp.com');
define('MAIL_PASS','slrcn5rghsiu');

/*
//reCAPTCHA V2 API
define('V2_SITEKEY','6LdC1OsZAAAAAOL7hMbwponk5VV4CMnQTywOWxb7');    //site key
define('V2_SITEVERIFY','6LdC1OsZAAAAACnEfkpvyuF01rILlGcvPxColgzs'); //Secrete key

//LDAP SERVER
define('LDAP_HOST','103.17.10.33');
define('LDAP_PORT','389');
define('LDAP_ADMIN', 'cn=ldapadm ,dc=minder-hosp,dc=com');
define('LDAP_PASSWORD', 'kf@rong~5168');
define('LDAP_BASEDN','cn=資訊室,ou=Group,dc=minder-hosp,dc=com');
define('LDAP_USERDN','ou=People,dc=minder-hosp,dc=com');


//取出設定資料
$mn_rs = $conn->prepare("SELECT * FROM mail_name");
$mn_rs->execute();
$mn_row = $mn_rs->fetch(PDO::FETCH_ASSOC);
*/
?>