<?php
// ваши данные
$db_server = 'localhost';
$db_database = 'uncletom';
$db_user = 'root';
$db_password = '';



 // соединение с базaой данных
$connection = mysqli_connect ($db_server, $db_user, $db_password, $db_database);
// проверка соединения
if (!$connection){
    die ('не удается подключиться к базе данных');
}
mysqli_set_charset( $connection, 'utf8');
?>
 