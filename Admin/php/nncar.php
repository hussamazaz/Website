<?
include_once("../../php/connect.php");

$uid=$_POST["uname"];
$namecar=$_POST["ncar"];
$platecar=$_POST["pcar"];
$yearmcar=$_POST["mycar"];
$companycar=$_POST["ccar"];
$odocar=$_POST["ocar"];

mysql_query("INSERT INTO `cars` (`car_id`, `user_id`, `car_name`, `car_plate`, `car_model`, `car_company`, `car_odo`) VALUES (NULL, '$uid', '$namecar', '$platecar', '$yearmcar', '$companycar', '$odocar');") or die (mysql_error());


header("location:../ttncar.php");
?>