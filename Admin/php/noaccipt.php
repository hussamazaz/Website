<?
include_once("../../php/connect.php");
$main=$_GET["mid"];

mysql_query("UPDATE `maintenance` SET `main_status` = '0' WHERE `maintenance`.`main_id` = '$main';")or die(mysql_error());

header("location:../accipt.php");
?>