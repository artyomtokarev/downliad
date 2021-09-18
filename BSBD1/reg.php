<?php
/*if(isset($_GET['user-full-name']) && isset($_GET['age']) && 
isset($_GET['email']) && isset($_GET['tel-number'])  && isset($_GET['url']) 
&& isset($_GET['open_key'])) 
{*/
$name = $_GET['user-full-name'];
$date = $_GET['date'];
$email = $_GET['email'];
$tel =  $_GET['tel-number'];
$url =  $_GET['url'];
$age = $_GET['age'];
$color = $_GET['color'];
$city =  $_GET['city'];
$jim = $_GET['jim'];
$height = $_GET['height'];
$open_key = $_GET['open_key'];
$prised = $_GET['prised'];
$weight = $_GET['weight'];
$hostname="localhost"; 
$username="Kirill"; 
$password="123456"; 
/* Имя базы данных */ 
$dbName="Bodibildres"; 
/* Имя таблицы */ 
$usertable="Bodibilders"; 
$link = mysqli_connect("$hostname", "$username", "$password", "$dbName");

if (!$link) {
    echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
    echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
    exit;
} 
$query="INSERT INTO $usertable (ID, ФИО, Дата_рождения, EMAIL, URL, Телефон, Возраст, Цвет, Открытый_ключ, Город, Вес, Рост, Жим, Присед) VALUES ( '1', '$name','2000-12-12', '$email', '$url', '$tel', '$age', '$color', '$open_key', '$city','$jim', '$height', '$prised', '$weight')"; 
$result=mysqli_query($link, $query); 
/*if (mysqli_query($link, $query)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($link);
}*/

mysqli_close($link); 
print "Запись введена в БД! <br>"; 
?>
