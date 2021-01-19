<?php 
include ('config.php'); 

if (!empty($_POST['login']) && !empty($_POST['pass'])) {
	$login = htmlspecialchars(trim($_POST['login']));
	$pass = htmlspecialchars(trim($_POST['pass']));
	$pass2 = htmlspecialchars(trim($_POST['pass2']));
		
	if (strlen($pass) < 6) {
		echo "Пароль должен быть не менее 6 символов";
	} else {
		if ($pass != $pass2) {
			echo "Пароли не совпадают";
		} else {
			$salt = 'taiestisuvalinetekst';
			$kryp = crypt ($pass, $salt);				
			$output = mysqli_query ($connection, "select * from users where login = '{$login}'");			
			if (mysqli_num_rows($output) > 0) {
				echo "такой логин уже есть";
			} else {
				$paring = "insert into users set login='$login', pass='$kryp'";
				$output = mysqli_query ($connection, $paring);
				if (mysqli_affected_rows($connection)==1) {
					header('Location: login.php?msg=ok');
				} else {
					echo "неправильный логин или пароль";
				}
			}
		}
	}
}  
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Регистрация</title>
</head>
<body>
<h1>Форма регистрации</h1>
<form action="" method="post">
	Логин: <input type="text" name="login" required> <br>
	Пароль: <input type="password" name="pass" required> <br>
	Повторить пароль: <input type="password" name="pass2" required> <br>
	<input type="submit" value="Регистрация">
</form>
</body>
</html>