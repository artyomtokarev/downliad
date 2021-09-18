<?php 

$parametr = $_GET['parametr'];
$arg = $_GET['arg'];
$hostname="localhost"; 
$username="Kirill"; 
$password="123456"; 
/* Имя базы данных */ 
$dbName="Bodibilders"; 
/* Имя таблицы */ 
$usertable="Bodibilders"; 
$link = mysqli_connect("$hostname", "$username", "$password", "$dbName");

if (!$link) {
    echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
    echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
    exit;
} 
$query="select * from $usertable where $parametr like '$arg%'"; 

if ($result=mysqli_query($link, $query)) {

    while ($obj = mysqli_fetch_object($result)) {
        
        print "Имя:   $obj->ФИО <br>";
        print "Телефон:    $obj->Телефон<br>";
        print "Почта:  $obj->EMAIL<br>";
        print "Ссылка на соц.сеть:    $obj->URL <br>";
    }

    
} 
mysqli_close($link);
?> 
