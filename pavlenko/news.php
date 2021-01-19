<?php
include ('config.php');
if(isset($_POST['submit'])){
  $sql = "INSERT INTO news (title, news)
  VALUES ('".$_POST["title"]."','".$_POST["news"]."')";
if ($connection->query($sql)) {
  echo 'Record succesfully created!';
};
};
$checkSQL=mysqli_query($connection, "SELECT id, title, news FROM `news`");

if(!empty($_GET['id'])){
	//запрос на удаление
	$id = $_GET['id'];
	$delete_sql = "DELETE FROM news WHERE id='$id'";
	$delete_value = mysqli_query($connection, $delete_sql);
	if($delete_value){
		echo "Строка удалена!";
		echo '<META HTTP-EQUIV="Refresh" Content="0; URL='.$_SERVER['PHP_SELF'].'">';
	} else {
		echo "Ошибка при удалении!";
	}
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $_SESSION['postdata'] = $_POST;
  unset($_POST);
  header("Location: ".$_SERVER['PHP_SELF']);
  exit;
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Новости</title>
</head>
<body>
<h1>Новости</h1>
<!--форма для ввода текста-->
<h2>Добавление новостей</h2>
<form method="post">
<div>
<label>Title</label>
<input type="text" name="title"  placeholder="введите заголовок:" required>
</div>
<div>
<label>News</label>
<textarea type="text" name="news" rows="6" required></textarea>
</div>
<button type="submit" name="submit">Ввод</button>
</form>

<div>
	<table>
		<thead>
			<tr>
				<th>Заголовок</th>
				<th>Новость</th>
				<th>Удаление</th>
				<th>Редактирование</th>
				<th>Просмотр</th>
			</tr>
		</thead>
		<?php
		while($str= mysqli_fetch_array($checkSQL))
			{	
				echo'<tbody>
					<tr>
					  <td>'.$str['title'].'</td>
					  <td>'.$str['news'].'</td>
					  <td><a href="'.$_SERVER['PHP_SELF'].'?id='.$str['id'].'">delete</a></td>
					  <td><a href="edit.php?id='.$str['id'].'">edit</a></td>
					   <td><a href="read.php?id='.$str['id'].'">read</a></td>
					</tr>
				</tbody>';
			}
		?>
	</table>	
</div>

</body>
</html>