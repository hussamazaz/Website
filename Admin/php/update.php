<?
include_once("../../php/connect.php");

$id=$_POST["id"];
$nake=$_POST["nake"];
$name=$_POST["name"];
$pass=$_POST["pass"];
$email=$_POST["email"];
$type=$_POST["type"];
$mob=$_POST["mob"];



mysql_query("UPDATE `users` SET 
`user_nickname` = '$nake', 
`user_name` = '$name', 
`user_password` = '$pass', 
`user_email` = '$email', 
`user_type` = '$type', 
`user_mobile` = '$mob'

 WHERE `users`.`user_id` = $id;") or die (mysql_error());


header("location:../upcom.php");
?>