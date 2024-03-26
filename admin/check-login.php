<?php
require_once '../inc/config.php';
if(!isset($_SESSION['admin_session']))
{
    header("Location: login.php");
}
$stmt = $db_con->prepare("SELECT * FROM admin WHERE id=:id");
$stmt->execute(array(":id"=>$_SESSION['admin_session']));
$row=$stmt->fetch(PDO::FETCH_ASSOC);

$adminID = $_SESSION['admin_session'];
$username = $row['username'];
$adminname = $row['fullname'];
$adminemail = $row['email'];

?>