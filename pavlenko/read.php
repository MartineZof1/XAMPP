<?php
include ('config.php');

$checkSQL=mysqli_query($connection, "SELECT id, title, news FROM `news`");

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Чтение новостей</title>
</head>
<body>
<h1>Чтение новостей</h1>	
<?php
    while($str= mysqli_fetch_array($checkSQL))
    {
        echo'<div>
                <p><span>ID </span>'.$str['id'].'</p>
                <p><span>Title </span>'.$str['title'].'</p>
                <p><span>News </span>'.$str['news'].'</p>
            </div>
            <hr>';
    }
?>
</body>
</html>