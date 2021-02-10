<?php
$title = "Контакт";
include ("tmp/header.php");
?>

<?php include('includes/config.php');?>
<?php
	session_start();
	if (@$_GET['msg']) {
		echo "Вы зарегистрированы";
	}
	if (isset($_SESSION['authentication'])) {
	  header('Location: admin.php');
	  exit();
	}
	if (!empty($_POST['login']) && !empty($_POST['pass'])) {
		$login = htmlspecialchars(trim($_POST['login']));
		$pass = htmlspecialchars(trim($_POST['pass']));
		$salt = 'taiestisuvalinetekst';
		$kryp = crypt ($pass, $salt);
		$paring = "SELECT * FROM users WHERE login='$login' AND pass='$kryp'";
		$output = mysqli_query ($connection, $paring);
		
		if (mysqli_num_rows($output)==1) {
			$_SESSION['authentication'] = 'whatever';
			header('Location: admin.php');
		} else {
			echo "неправильный логин или пароль";
		}
	}  
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Вход</title>
</head>
<body>
<h1>Вход</h1>
<form method ="post">
	Логин: <input type ="text" name ="login"> <br></br>
	Пароль: <input type ="password" name ="pass"> <br></br>
	<div class="col-md-6 col-lg-6">	</div>
	<button class="w-20	btn btn-primary btn-lg" name="submit" type="submit">Войти</button>

	
</form>
</body>
</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" 

<?php

include ("tmp/footer.php")

?>