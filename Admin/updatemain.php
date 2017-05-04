<?
include_once("../php/connect.php");
$mid=$_GET["mid"];
$query=mysql_query("select * from maintenance where main_id='$mid'") or die(mysql_error());
$arr=mysql_fetch_array($query);
$cid=$arr["car_id"];
$q2=mysql_query("select * from cars where car_id='$cid'")or die(mysql_error());
$cardata=mysql_fetch_array($q2);
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
    <td width="550" rowspan="9"><form action="php/mainupdate.php" method="post" enctype="multipart/form-data">
        <table width="100%" border="0" cellspacing="0" cellpadding="5">
          <tr>
            <td>Tiket Number: </td>
            <td><input name="tno" type="text" id="tno" value="<? echo $arr["main_id"]; ?>" readonly="readonly" /></td>
          </tr>
          <tr>
            <td>Clint id:</td>
            <td><input name="clintid" type="text" id="clintid" value="<? echo $arr["user_id"]; ?>" readonly="readonly" /></td>
          </tr>
          <tr>
            <td>Car id:</td>
            <td><input name="carid" type="text" id="carid" value="<? echo $arr["car_id"]; ?>" readonly="readonly" /></td>
          </tr>
          <tr>
            <td>Car Name:</td>
            <td><input name="cname" type="text" id="cname" value="<? echo $cardata["car_name"]; ?>" readonly="readonly" /></td>
          </tr>
          <tr>
            <td>Car Model:</td>
            <td><input name="tno4" type="text" id="tno4" value="<? echo $cardata["car_model"]; ?>" readonly="readonly" /></td>
          </tr>
          <tr>
            <td>Date of entry:</td>
            <td><input type="text" name="indate" id="indate" value="<? echo $arr["reserve_date"]; ?>" /></td>
          </tr>
          <tr>
            <td>Maintenance status:</td>
            <td><select name="mstat" id="mstat">
                <option value="0" <? if($arr["main_status"] == 0) { ?>selected="selected"<? }else{} ?>>refused</option>
                <option value="1" <? if($arr["main_status"] == 1) { ?>selected="selected"<? }else{} ?>>request</option>
                <option value="2" <? if($arr["main_status"] == 2) { ?>selected="selected"<? }else{} ?>>accipt</option>
                <option value="3" <? if($arr["main_status"] == 3) { ?>selected="selected"<? }else{} ?>>cheaking</option>
                <option value="4" <? if($arr["main_status"] == 4) { ?>selected="selected"<? }else{} ?>>waiting approve</option>
                <option value="5" <? if($arr["main_status"] == 5) { ?>selected="selected"<? }else{} ?>>fixing</option>
                <option value="6" <? if($arr["main_status"] == 6) { ?>selected="selected"<? }else{} ?>>waiting to pickup</option>
                <option value="7" <? if($arr["main_status"] == 7) { ?>selected="selected"<? }else{} ?>>finished</option>
              </select></td>
          </tr>
          <tr>
            <td>Type of Maintenance:</td>
            <td><select name="mtype" id="mtype">
                <option value="1" <? if($arr["main_type"] == 1) { ?>selected="selected"<? }else{} ?>>Preventive Maintenance</option>
                <option value="2" <? if($arr["main_type"] == 2) { ?>selected="selected"<? }else{} ?>>Accident</option>
                <option value="3" <? if($arr["main_type"] == 3) { ?>selected="selected"<? }else{} ?>>Change Color</option>
                <option value="4" <? if($arr["main_type"] == 4) { ?>selected="selected"<? }else{} ?>>Internal Problem</option>
                <option value="5" <? if($arr["main_type"] == 5) { ?>selected="selected"<? }else{} ?>>Change Parts</option>
              </select></td>
          </tr>
          <tr>
            <td>Comment:</td>
            <td><input type="text" name="comm" id="comm" value="<? echo $arr["main_comm"]; ?>" /></td>
          </tr>
          <tr>
            <td>Cost:</td>
            <td><input type="text" name="cost" id="cost" value="<? echo $arr["main_cost"]; ?>" /></td>
          </tr>
          <tr>
            <td colspan="2" align="center"><input type="submit" name="button" id="button" value="Submit" /></td>
          </tr>
          <tr>
            <td colspan="2" align="center">&nbsp;</td>
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