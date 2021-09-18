<?php 
    $name = htmlentities($_POST['ФИО']);
    $date = htmlentities($_POST['Дата_рождения']);
    $email = htmlentities($_POST['EMAIL']);
    $tel =  htmlentities($_POST['Телефон']);
    $url =  htmlentities($_POST['URL']);
    $age = htmlentities($_POST['Возраст']);
    $color = htmlentities($_POST['Цвет']);
    $city =  htmlentities($_POST['Город']);
    $jim =  htmlentities($_POST['Жим']);
    $height =  htmlentities($_POST['Рост']);
    $open_key = htmlentities($_POST['Открытый_ключ']);
    $prised =  htmlentities($_POST['Присед']);
    $weight =  htmlentities($_POST['Вес']);
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
	$query="INSERT INTO $usertable (ID, ФИО, Дата_рождения, EMAIL, URL, Телефон, Возраст, Цвет, Открытый_ключ, Город, Вес, Рост, Жим, Присед) VALUES ( '1', '$name','2000-12-12', '$email', '$url', '$tel', '$age', '$color', '$open_key', '$city','$jim', '$height', '$prised', '$weight')";
    $result=mysqli_query($link, $query); 
  /* if (mysqli_query($link, $query)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($link);
    }
*/
    mysqli_close($link); 
    print "Запись введена в БД! <br>"; 
?>
