<?php
session_start();
if (!isset($_SESSION['authentication'])) {
	header('Location: login.php');
	exit();
}
?>

<h1>Секретная информация</h1>
<p>Секретный текст</p>
<form action="logout.php" method = "post">
	<input type="submit" value="Выйти" name="logout">
</form>