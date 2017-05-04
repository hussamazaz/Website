<?
include_once("php/connect.php"); 

mysql_query("SET @update_id :=0;");
mysql_query("UPDATE `maintenance` SET `main_status`='6' WHERE `main_id`=(SELECT @update_id := `main_id`)");
?>