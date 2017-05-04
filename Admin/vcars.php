<?
include_once("../php/connect.php");
$query=mysql_query("select * from cars") or die(mysql_error());
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
    <td colspan="2" align="center"><h1>Cars</h1></td>
  </tr>

  <tr>
    <td align="center"><a href="php/logoutadmin.php" class="homebot">Logout</a></td>
    <td width="550" rowspan="9" valign="top">
    <a href="ncar.php"> add new car </a>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
          <td>id </td>
          <td>user id </td>
          <td>car name </td>
          <td>car plate </td>
          <td>car model </td>
          <td>car color </td>
          <td>odo meter</td>
             <td> </td>
             
        </tr><?
		while ($eachdata=mysql_fetch_array($query)){
			$cn=$eachdata["user_id"];
			$q2=mysql_query("select * from users where user_id='$cn'");
			$userdata=mysql_fetch_array($q2);
		?>
        
        <tr>
          <td><? echo $eachdata["car_id"]; ?></td>
          <td><? echo $userdata["user_id"]; ?></td>
          <td><? echo $eachdata["car_name"]; ?></td>
          <td><? echo $eachdata["car_plate"]; ?></td>
          <td><? echo $eachdata["car_model"]; ?></td>
          <td><? echo $eachdata["car_company"]; ?></td>
          <td><? echo $eachdata["car_odo"]; ?></td>
          <td><a href="ucars.php?car=<? echo $eachdata["car_id"]; ?>">update info</a> </td>
          
        </tr>
        <?
		}
		?>
        
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
    <td><a href="accipt.php" class="homebot">Accept Reserve</a></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>