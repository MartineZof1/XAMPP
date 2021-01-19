<?php
session_start();
if (!isset($_SESSION['authentication']))  {
	header('Location: login.php');
	exit();
}
if(isset($_POST['logout'])) {
	session_destroy();
	exit();
}
?>