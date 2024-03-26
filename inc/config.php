<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$db_host = "localhost";
$db_name = "tpaiseve_recipe";
$db_user = "tpaiseve_recipe";
$db_pass = "A@password123@!";
try{
	$db_con = new PDO("mysql:host={$db_host};dbname={$db_name}",$db_user,$db_pass);
	$db_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
	echo $e->getMessage();
}

define('BLOG_NAME', 'icanbe\'s Recipes Blog');
define('LOGO_URL', 'https://i.pinimg.com/736x/bd/f1/52/bdf1527f9b2a84affa3bf7dceffce3bd.jpg');
?>