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
    <td colspan="2" align="center">View  Cars Page</td>
  </tr>
  <tr>
    <td><a href="#" class="homebot">logout</a></td>
    <td width="550" rowspan="6" valign="top">
    <table width="100%" border="1" cellspacing="0" cellpadding="0">
        
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
        
      </table>
      
      
      <tr>
    <td><a href="#" class="homebot">logout</a></td>
      </tr>
      
 
  
  <tr>
    <td><a href="#" class="homebot">view cars</a></td>
  </tr>
  <tr>
    <td><a href="#" class="homebot">mange users </a></td>
  </tr>
  <tr>
    <td><a href="#" class="homebot">mange schedule</a></td>
  </tr>
  <tr>
    <td><a href="#" class="homebot">view car report</a></td>
  </tr>
</table>
</body>
</html>