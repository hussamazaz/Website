<?
include_once("../../php/connect.php");
session_start();
$uid=$_SESSION["userid"];

$id=$_POST["id"];
$nake=$_POST["nake"];
$name=$_POST["name"];
$pass=$_POST["pass"];
$email=$_POST["email"];
$type=$_POST["type"];
$mob=$_POST["mob"];


mysql_query("INSERT INTO `users` (`user_id`, `user_nickname`, `user_name`, `user_password`, `user_email`, `user_type`, `user_mobile`) VALUES                                  ('$id', '$nake', '$name', '$pass', '$email', '$type', '$mob');") or die (mysql_error());


header("location:../addcom.php");
?>