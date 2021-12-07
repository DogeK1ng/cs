<?php
$adres    = filter_var(trim($_POST['adres']), FILTER_SANITIZE_STRING);
$login    = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);


$mysql = new mysqli('localhost', 'root', '', 'base');

$result = $mysql->query("SELECT * FROM `users` WHERE `adres` = '$adres' AND `login` = '$login' AND `password` = '$password'");
$user   = $result->fetch_assoc();
if (array(
    $user
) == 0) {
    echo "Такой пользователь не найден.";
    exit();
} else if (array(
        $user
    ) == 1) {
    echo "Проверьте написание данных";
    exit();
}

$mysql->close();
header('Location:http://localhost//Kursovaya/index_auto-tion.html');
exit();

?>