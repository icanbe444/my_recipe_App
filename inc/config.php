<?php
session_start();

$db_host = "localhost";
$db_name = "tpaiseve_recipe";
$db_user = "root";
$db_pass = "root";
try{
	$db_con = new PDO("mysql:host={$db_host};dbname={$db_name}",$db_user,$db_pass);
	$db_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
	echo $e->getMessage();
}

define('BLOG_NAME', 'icanbe\'s blog');
define('LOGO_URL', 'images/site_logo.jpg');
?>