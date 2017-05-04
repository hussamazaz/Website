<?
include_once("../php/connect.php");
$query=mysql_query("select * from maintenance where main_status !='7'") or die(mysql_error());
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home</title>
<link href="../CSS/styleadmin.css" rel="stylesheet" type="text/css" />
</head>

<body>
<table width="1100" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="2" align="center"><h1>Home Page</h1></td>
  </tr>
  <tr>
    <td width="100" align="center"><a href="php/logoutadmin.php" class="homebot">Logout</a></td>
    <td rowspan="9" valign="top"><table width="100%" border="1" cellspacing="0" cellpadding="0">
        <tr>
          <td>tickit No.</td>
          <td>Clint Name</td>
          <td>Car Name </td>
          <td>Car Model </td>
          <td>date of entry </td>
          <td>Maintenance status</td>
          <td>Type maintenance</td>
          <td>Maintenance comments</td>
          <td>&nbsp;</td>
        </tr>
        <?
		while ($eachdata=mysql_fetch_array($query)){
			$cn=$eachdata["car_id"];
			$un=$eachdata["user_id"];
			$q2=mysql_query("select * from cars where car_id='$cn'");
			$q3=mysql_query("select * from users where user_id='$un'");
			$cardata=mysql_fetch_array($q2);
			$userdata=mysql_fetch_array($q3);
		?>
        <tr>
          <td><? echo $eachdata["main_id"]; ?></td>
          <td><? echo $userdata["user_name"]; ?></td>
          <td><? echo $cardata["car_name"]; ?></td>
          <td><? echo $cardata["car_model"]; ?></td>
          <td><? echo $eachdata["main_datestart"]; ?></td>
          <td><? switch($eachdata["main_status"]){
			  case 1:
			  echo "request";
			  break;
			  case 2:
			  echo "accipt";
			  break;
			  case 3:
			  echo "cheaking";
			  break;
			  case 4:
			  echo "waiting approve";
			  break;
			  case 5:
			  echo "fixing";
			  break;
			  case 6:
			  echo "waiting tp pickup";
			  break;
			  case 7:
			  echo "finished";
			  break;
			  case 0:
			  echo "refused";
			  break;
		  }  ?></td>
          <td><? switch($eachdata["main_type"]){
			  case 1:
			  echo "Preventive Maintenance";
			  break;
			  case 2:
			  echo "Accident";
			  break;
			  case 3:
			  echo "Change Color";
			  break;
			  case 4:
			  echo "Internal Problem";
			  break;
			  case 5:
			  echo "Change Parts";
			  break;
		  }	 ?></td>
          <td><? echo $eachdata["main_comm"]; ?></td>
          <td><a href="updatemain.php?mid=<? echo $eachdata["main_id"]; ?>">Update</a></td>
        </tr>
        <?
		}
		?>
        <tr>
      </table></td>
  <tr>
    <td width="100"><a href="vusers.php" class="homebot">Users</a></td>
  </tr>
  <tr>
    <td width="100"><a href="vcars.php" class="homebot">Cars</a></td>
  </tr>
  <tr>
    <td width="100"><a href="pmian.php" class="homebot">Pending Maintenance</a></td>
  </tr>
  <tr>
    <td width="100"><a href="vmain.php" class="homebot">View Maintenance</a></td>
  </tr>
  <tr>
    <td width="100"><a href="newreserv.php" class="homebot">Reserve now </a></td>
  </tr>
  <tr>
    <td width="100"><a href="accipt.php" class="homebot">Accipt Reserve</a></td>
  </tr>
  <tr>
    <td width="100">&nbsp;</td>
  </tr>
</table>
</body>
</html>