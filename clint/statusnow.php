<?
include_once("../php/connect.php");
session_start();
$uid=$_SESSION["userid"];
$query=mysql_query("select * from maintenance where user_id='$uid' and main_status !='5'") or die(mysql_error());
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home</title>
<link href="../CSS/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<table width="1100" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="2" align="center">History Page</td>
  </tr>
  <tr>
    <td><a href="PHP/logoutuser.php" class="homebot">logout</a></td>
    <td width="900" rowspan="11" valign="top"><table width="100%" border="1" cellspacing="0" cellpadding="0">
        
        <tr>
          <td>car company </td>
          <td>car name </td>
          <td>car model </td>
          <td>car plate </td>
          <td>date of entry </td>
          <td>Time of entry </td>
          <td>Maintenance status</td>
          <td>Type maintenance</td>
          <td>Maintenance id</td>
          <td>Maintenance comments</td>
          <td>Repair price</td>
        </tr>
        <?
		while ($eachdata=mysql_fetch_array($query)){
			$cn=$eachdata["car_id"];
			$q2=mysql_query("select * from cars where car_id='$cn'");
			$cardata=mysql_fetch_array($q2);
		?>
        
        <tr>
          <td><? echo $cardata["car_company"]; ?></td>
          <td><? echo $cardata["car_name"]; ?></td>
          <td><? echo $cardata["car_model"]; ?></td>
          <td><? echo $cardata["car_plate"]; ?></td>
          <td><? echo $eachdata["main_datestart"]; ?></td>
          <td><? echo $eachdata["main_timestart"]; ?></td>
          <td><? echo $eachdata["main_status"]; ?></td>
          <td><? echo $eachdata["main_type"]; ?></td>
          <td><? echo $eachdata["main_comm"]; ?></td>
          <td><? echo $eachdata["main_cost"]; ?></td>
        </tr>
        <tr>
        <td colspan="11" align="center"><input type="submit" name="button" id="button" value="Refrech" /></td>
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