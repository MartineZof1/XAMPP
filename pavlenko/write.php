<?php
include ('config.php');
if (!empty($_GET['title']) && !empty($_GET['news']))  {
	$title = htmlspecialchars(trim($_GET['title']));
	$news = htmlspecialchars(trim($_GET['news']));
	//запрос
	$sql = "INSERT INTO news (title,news) VALUES ('".$title."', '".$news."')";
	$valjund = mysqli_query($connection, $sql);
	// количество ответов на запрос
	$tulemus = mysqli_affected_rows($connection);
	if ($tulemus == 1) {
		echo "Запись успешно добавлена";
	} else {
		echo "Запись не добавлена";
	}
	mysqli_close($connection);
} 
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Добавление новостей</title>
</head>
<body>
    <h1>Добавление новостей</h1>
    <form action="" method="get">
        Зоголовок <input type="text" name='title' required><br>
        Новость <textarea type="text" name='news' required></textarea><br>

        <input type="submit" value="Отправить">
    </form>
</body>
</html>