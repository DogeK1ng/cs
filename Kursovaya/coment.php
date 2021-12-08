<?php 
$name = filter_var(trim($_POST['name']),
FILTER_SANITIZE_STRING);
$review = filter_var(trim($_POST['review']),
FILTER_SANITIZE_STRING);

$mysql = new mysqli('localhost', 'root', '', 'base');
$mysql -> query("INSERT INTO `reviews` (`name`, `review`) VALUES ('$name', '$review')");
$mysql -> close();
header ('Location: http://localhost/Kursovaya/index_auto-tion.html ');
exit();
?> 