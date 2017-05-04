<?
include_once("../../php/connect.php");
session_start();
$idcar=$_POST["icar"];
$namecar=$_POST["ncar"];
$platecar=$_POST["pcar"];
$yearmcar=$_POST["mycar"];
$companycar=$_POST["ccar"];
$odocar=$_POST["ocar"];


mysql_query("UPDATE `cars` SET `car_name` = '$namecar', `car_plate` = '$platecar', `car_model` = '$yearmcar', `car_company` = '$companycar', `car_odo` = '$odocar' WHERE `cars`.`car_id` ='$idcar'")or die (mysql_error());


header("location:../updatecar.php");
?>

