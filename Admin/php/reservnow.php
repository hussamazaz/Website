<?
include_once("../../php/connect.php");
$uid=$_POST["name"];
$cid=$_POST["car"];
$type=$_POST["type"];
$date=$_POST["rev"];
$status=2;


mysql_query("INSERT INTO `maintenance` (`car_id`, `user_id`, `reserve_date` , `main_type` , `main_status`) VALUES ('$cid', '$uid', '$date', '$type', '$status');") or die (mysql_error());


header("location:../newreserv.php");
?>