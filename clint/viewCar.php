<?
include_once("../php/connect.php");
session_start();
$uid=$_SESSION["userid"];

$query=mysql_query("select * from cars where user_id='$uid'") or die(mysql_error());
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home</title>
<link href="../CSS/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="2" align="center">View  Cars Page</td>
  </tr>
  <tr>
    <td><a href="PHP/logoutuser.php" class="homebot">logout</a></td>
    <td width="550" rowspan="6" valign="top"><table width="100%" border="1" cellspacing="0" cellpadding="0">
        
        <tr>
          <td>id </td>
          <td>car name </td>
          <td>car plate </td>
          <td>car model </td>
          <td>car color </td>
          <td>odo meter</td>
        </tr>
        <?
		while ($eachdata=mysql_fetch_array($query)){
		?>
        <tr>
          <td><? echo $eachdata["car_id"]; ?></td>
          <td><? echo $eachdata["car_name"]; ?></td>
          <td><? echo $eachdata["car_plate"]; ?></td>
          <td><? echo $eachdata["car_model"]; ?></td>
          <td><? echo $eachdata["car_company"]; ?></td>
          <td><? echo $eachdata["car_odo"]; ?></td>
        </tr>
        <?
		}
		?>
        
      </table></td>
  </tr>
  <tr>
    <td><a href="newCar.php" class="homebot">new car </a></td>
  </tr>
  <tr>
    <td><a href="viewCar.php" class="homebot">view cars</a></td>
  </tr>
  <tr>
    <td><a href="reserve.php" class="homebot">reserve now </a></td>
  </tr>
  <tr>
    <td><a href="history.php" class="homebot">maintenance history </a></td>
  </tr>
  <tr>
    <td><a href="statusnow.php" class="homebot">view maintencace now</a></td>
  </tr>
</table>
</body>
</html>