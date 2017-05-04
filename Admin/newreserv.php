<?
include_once("../php/connect.php");
$q1=mysql_query("select * from users where user_type='1'") or die(mysql_error());

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
    <td colspan="2" align="center"><h1>Home Page</h1></td>
  </tr>
  <tr>
    <td><a href="php/logoutadmin.php" class="homebot">Logout</a></td>
    <td width="550" rowspan="9">
    <table width="100%" border="1" cellspacing="0" cellpadding="3">
        <tr>
          <td>User Id </td>
          <td>User Name </td>
          <td>User Mobile </td>
          <td>&nbsp;</td>
        </tr>
        <?	while ($arr=mysql_fetch_array($q1)){	?>
        <tr>
          <td><? echo $arr["user_id"];?></td>
          <td><? echo $arr["user_name"];?></td>
          <td><? echo $arr["user_mobile"];?></td>
          <td><a href="selectcar.php?uid=<? echo $arr["user_id"]; ?>">GO</a></td>
        </tr>
        <? } ?>
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