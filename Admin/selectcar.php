<?
include_once("../php/connect.php");
$uid=$_GET["uid"];
$q1=mysql_query("select * from cars where user_id='$uid'") or die(mysql_error());


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
    <td width="550" rowspan="9"><form action="php/reservnow.php" method="post" enctype="multipart/form-data">
        <table width="100%" border="0" cellspacing="5" cellpadding="0">
          <tr>
            <td>Clint id:</td>
            <td><input name="name" type="text" value="<? echo $uid; ?>" readonly="readonly" /></td>
          </tr>
          <tr>
            <td>The Car:</td>
            <td><label>
                <select name="car" id="car" >
                  <option value="-1" selected>None</option>
                  <? while($cid=mysql_fetch_array($q1)){  ?>
                  <option value="<? echo $cid["car_id"];?>"><? echo $cid["car_name"];?></option>
                  <?  }	  ?>
                </select>
              </label></td>
          </tr>
          <tr>
            <td>Choose day for reserve:</td>
            <td><input type="date" name="rev" id="rev" /></td>
          </tr>
          <tr>
            <td>Maintains type:</td>
            <td><label>
                <select name="type" id="type" >
                  <option value="-1" selected>None</option>
                  <option value="1">صيانة دورية</option>
                  <option value="2">حادث</option>
                  <option value="3">تغير لون </option>
                  <option value="4">مشكلة داخلية</option>
                  <option value="5">تغير قطع غيار</option>
                </select>
              </label></td>
          </tr>
          <tr>
            <td colspan="2" align="center"><input type="submit" name="button" id="button" value="Submit" /></td>
          </tr>
        </table>
      </form></td>
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