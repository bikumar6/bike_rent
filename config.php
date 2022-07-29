<?php

$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "root";
$mysql_database = "meaningcle";



$bd = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password) or die("db connect error");
mysqli_select_db($mysql_database, $bd) or die("db connect error");
?>
