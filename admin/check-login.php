<?php
require_once '../inc/config.php';
if (!isset($_SESSION['admin_session']) && !isset($_SESSION['chef_session'])) {
    header("Location: login.php");
    exit(); // Add an exit() after the header redirect to stop further execution
}

$role = ""; // Initialize the role variable

if (isset($_SESSION['admin_session'])) {
    $role = "admin";
} elseif (isset($_SESSION['chef_session'])) {
    $role = "chef";
}

$stmt = $db_con->prepare("SELECT * FROM chefs WHERE user_id=:user_id");
$stmt->execute(array(":user_id" => $_SESSION[$role . '_session'])); // Use $role to access the correct session variable
$row = $stmt->fetch(PDO::FETCH_ASSOC);

$adminID = $_SESSION[$role . '_session']; // Use $role to access the correct session variable
$storename = $row['store_name'];
$adminname = $row['fullname'];
$adminemail = $row['email'];

?>