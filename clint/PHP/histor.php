<?
include_once("../php/connect.php");

$query=mysql_query("select * from users where user_id='$uid'");
$query=mysql_query("select * from cars where car_id='$namecar' , car_plate="$platecar"");

$uid=$_POST["userid"];
$namecar=$_POST["ncar"];
$platecar=$_POST["pcar"];
$rev=$_POST["rev"];
$type=$_POST["type"];

mysql_query("INSERT INTO `Rev` (`car_id`, `user_id`, `car_plate` , 'reserve_day' , 'Maintains_type') VALUES 
                               (NULL, '1', '$platecar', '$rev', '$type');") 
                               or die (mysql_error());


header("location:revcom.php");
$eachdata=mysql_fetch_array($query);
?>