<?
include_once("../php/connect.php");
$query=mysql_query("select * from maintenance where main_status='1'") or die(mysql_error());

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home</title>
<link href="../CSS/styleadmin.css" rel="stylesheet" type="text/css" />
</head>

<body>
<table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="2" align="center"><h1>Accept Page</h1></td>
  </tr>
  <tr>
    <td align="center"><a href="php/logoutadmin.php" class="homebot">Logout</a></td>
    <td width="550" rowspan="9" valign="top"><table width="100%" border="1" cellspacing="0" cellpadding="3">
      <tr>
        <td>Tickit No.</td>
        <td>User Name</td>
        <td>Car Name</td>
        <td>Car Model</td>
        <td>Miantenance Type</td>
        <td>Date requested</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <?
	  while($ar1=mysql_fetch_array($query)){
		  $rid=$ar1["user_id"];
		  $rcid=$ar1["car_id"];
		  $q2=mysql_query("select * from users where user_id='$rid'");
		  $q3=mysql_query("select * from cars where car_id='$rcid'");
		  $uinfo=mysql_fetch_array($q2);
		  $cinfo=mysql_fetch_array($q3);
	  ?>
      <tr>
        <td><? echo $ar1["main_id"]; ?></td>
        <td><? echo $uinfo["user_name"]; ?></td>
        <td><? echo $cinfo["car_name"]; ?></td>
        <td><? echo $cinfo["car_model"]; ?></td>
        <td><? echo $ar1["main_type"]; ?></td>
        <td><? echo $ar1["reserve_date"]; ?></td>
        <td><a href="php/accipt.php?mid=<? echo $ar1["main_id"]; ?>">accipt</a></td>
        <td><a href="php/noaccipt.php?mid=<? echo $ar1["main_id"]; ?>">no accipt</a></td>
      </tr>
      <?	 }	  ?>
    </table></td>
  <tr>
    <td><a href="vusers.php" class="homebot">Users</a></td>
  </tr>
  <tr>
    <td><a href="vcars.php" class="homebot">Cars</a></td>
  </tr>
  <tr>
    <td><a href="pmian.php" class="homebot">Pending Maintenance</a></td>
  </tr>
  <tr>
    <td><a href="vmain.php" class="homebot">View Maintenance</a></td>
  </tr>
  <tr>
    <td><a href="newreserv.php" class="homebot">Reserve now </a></td>
  </tr>
  <tr>
    <td><a href="accipt.php" class="homebot">Accipt Reserve</a></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>