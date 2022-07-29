<?php
extract($_POST);
require_once('db/dbconnect.php');

$query = "update user set Password='".$Password."', Email='".$Email."', PhoneNum='".$PhoneNum."' where Id='".$Id."'";
$result = mysqli_query($conn,$query);
echo $query;

mysqli_close($conn);
 ?>
