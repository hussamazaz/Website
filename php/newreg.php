<?
include_once("connect.php");

$id=$_POST["id"];
$nake=$_POST["nake"];
$name=$_POST["name"];
$pass=$_POST["pass"];
$email=$_POST["email"];
$mob=$_POST["mob"];


mysql_query("INSERT INTO `users` (`user_id`, `user_nickname`, `user_name`, `user_password`, `user_email`, `user_type`, `user_mobile`) VALUES                                  (NULL , '$nake', '$name', '$pass', '$email', '1', '$mob');") or die (mysql_error());


header("location:../regcom.php");
?>