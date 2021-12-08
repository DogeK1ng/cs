<?php 
$adres = filter_var(trim($_POST['adres']),
FILTER_SANITIZE_STRING);
$login = filter_var(trim($_POST['login']),
FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['password']),
FILTER_SANITIZE_STRING);

$mysql = new mysqli('localhost', 'root', '', 'base');
$mysql -> query("INSERT INTO `users` (`adres`, `login`, `password`) VALUES ('$adres', '$login', '$password')");
$mysql -> close();
header ('Location: http://localhost/Kursovaya/index.html ');
exit();
?> 
