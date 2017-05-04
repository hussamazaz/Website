<?
include_once("../../php/connect.php");

$mid=$_POST["tno"];
$indate=$_POST["indate"];
$mstat=$_POST["mstat"];
$mtype=$_POST["mtype"];
$mcom=$_POST["comm"];
$mcost=$_POST["cost"];

mysql_query("UPDATE `maintenance` SET 
`reserve_date` = '$indate', 
`main_status` = '$mstat', 
`main_type` = '$mtype', 
`main_comm` = '$mcom', 
`main_cost` = '$mcost' 

 WHERE `maintenance`.`main_id` = $mid;") or die (mysql_error());

header("location:../pmian.php")
?>