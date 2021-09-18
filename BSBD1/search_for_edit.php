<?php 
$hostname="localhost"; 
$username="Kirill"; 
$password="123456"; 
$dbName="Bodibilders"; 
$usertable="Bodibilders"; 
$parametr = $_GET['parametr'];
$arg = $_GET['arg'];
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
        
	$name=$obj->ФИО;
	$date= $obj->Дата_рождения;
        $tel =  $obj->Телефон;
        $email = $obj->EMAIL;
        $url = $obj->URL;
        $age = $obj->Возраст;
        $color = $obj->Цвет;
        $openkey=$obj->Открытый_ключ;
        $city = $obj->Город;
	$jim = $obj->Жим;
	$height = $obj->Рост;
	$prised = $obj->Присед;
	$weight = $obj->Вес;
    }
    
} 

$query="delete from $usertable where $parametr='$arg'"; 
$result=mysqli_query($link, $query); 
 
print "<link rel='stylesheet' href='./style.css'>";
print "<form method=post action='edit.php'>"; 
print "<br><b>Введите Ваше имя:</b>"; 
print "<br><input type='text' name='ФИО' value='$name' size=30>"; 
print "<br><b>Дата рождения:</b>";
print "<br><input type = 'date'id = 'date' name ='Дата_рождения:' value='$date'>";
print "<br><br><b>Введите номер вашего телефона:</b>"; 
print "<br><input type = 'tel' name ='Телефон' value='$tel'>"; 
print "<br><br><b>Возраст:</b>"; 
print "<br><input type='number' min ='1' max ='150' name='Возраст' value='$age'>"; 
print "<br><br><b>Почта:</b>"; 
print "<br> <input type='email' name='EMAIL' value='$email'>";
print "<br><br><b>Ссылка на соц. сеть:</b>"; 
print "<br> <input type='url' name='URL' value='$url'>";
print "<br><br><b>Любимый цвет:</b>"; 
print "<br> <input type='color' name='Цвет' value='$color'>";
print "<br><br><b>Отрытый ключ:</b>"; 
print "<br> <input type='text' name='Открытый_ключ' value='$openkey'>";
print "<br><br><b>Город:</b>"; 
print "<br> <input type='text' name='Город' value='$city'>";
print "<br><br><b>Жим:</b>"; 
print "<br> <input type='number' name='Жим' value='$jim'>";
print "<br><br><b>Рост:</b>"; 
print "<br> <input type='text' name='Рост' value='$height'>";
print "<br><br><b>Присед:</b>"; 
print "<br> <input type='text' name='Присед' value='$prised'>";
print "<br><br><b>Вес:</b>"; 
print "<br> <input type='number' name='Вес' value='$weight'>";
print "<br><br><input type='submit' value='Отредактировать'>"; 
print "</form>"; 

?> 

