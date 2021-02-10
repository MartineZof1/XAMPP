<?php

function getMenuItems() {
	return array (
		'Home' => 'index.php',
		'Gallery' => 'gallery.php',
		'Contact' => 'contact.php',
		'Login' => 'login.php'
	);
}

function getUrlPHPfileName() {
	$name = basename ($_SERVER ['PHP_SELF']);
	return $name ? $name : 'index.php';
}
?>