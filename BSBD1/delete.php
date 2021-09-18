<?php 

$parametr = $_GET['parametr'];
$arg = $_GET['arg'];
$hostname="localhost"; 
$username="Kirill"; 
$password="123456"; 
/* Имя базы данных */ 
$dbName="Bodibilders"; 
/* Имя таблицы */ 
$usertable="bodibilders"; 
$link = mysqli_connect("$hostname", "$username", "$password", "$dbName");

if (!$link) {
    echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
    echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
    exit;
} 

$query = "delete from $usertable where $parametr like '$arg%'";
$result = mysqli_query($link, $query);
mysqli_close($link);
print "Запись удалена из базы данных";
?> 
