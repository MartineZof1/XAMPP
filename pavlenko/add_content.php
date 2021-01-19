<?php
include('config.php'); 

//добавление
if(isset($_POST['submit'])){
  $sql = "INSERT INTO content (title, text, date)
  VALUES ('".$_POST["title"]."','".$_POST["text"]."','".$_POST["date"]."')";
if ($connection->query($sql)) {
  echo 'Record succesfully created!';
};
};
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $_SESSION['postdata'] = $_POST;
  unset($_POST);
  header("Location: ".$_SERVER['PHP_SELF']);
  exit;
}
?>
<html>
<head>
<meta charset="utf-8">
<title>Добавление контента</title>
</head>
<body>
<div>
<form method="post">
	<div>
		<label>Title</label>
		<input type="text" name="title" required>
	</div>
	<div>
		<label>Text</label>
		<textarea type="text" name="text" required></textarea>
	</div>	
	<div>
		<label>Date</label>
		<input type="date" name="date" required>
	</div>	
	<button type="submit" name="submit">Send</button>
</form>
</div>

</body>
</html>