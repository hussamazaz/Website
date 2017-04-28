<?
include_once("../../php/connect.php");

$namecar=$_POST["ncar"];
$platecar=$_POST["pcar"];
$yearmcar=$_POST["mycar"];
$companycar=$_POST["ccar"];
$odocar=$_POST["ocar"];

mysql_query("INSERT INTO `cars` (`car_id`, `user_id`, `car_name`, `car_plate`, `car_model`, `car_company`, `car_odo`) VALUES (NULL, '1', '$namecar', '$platecar', '$yearmcar', '$companycar', '$odocar');") or die (mysql_error());


header("location:tncar.php");
?>