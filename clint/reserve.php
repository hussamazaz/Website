<?
include_once("../php/connect.php");
session_start();
$uid=$_SESSION["userid"];
$query=mysql_query("select * from users where user_id='$uid'");
$eachdata=mysql_fetch_array($query);
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
    <td colspan="2" align="center">Add New Car Page <? echo $uid; ?></td>
  </tr>
  <tr>
    <td><a href="#" class="homebot">logout</a></td>
    <td width="550" rowspan="6" valign="top"><form action="PHP/reserv.php" method="post" enctype="multipart/form-data">
        <p>
          <label>nick Name
            <input type="text" id="first-name" name="first-name" readonly="readonly" value="<? echo $eachdata["user_nickname"]; ?>" placeholder="Enter your first name" required>
          </label>
          <br>
          <label>user Name
            <input type="text" id="Last-Name" name="Last-Name" value="<? echo $eachdata["user_name"]; ?>" readonly="readonly" placeholder="Enter your Last name" required>
          </label>
          <br>
          <label>Phone Number
            <input type="tel" id="Phone" name="Phone" value="<? echo $eachdata["user_mobile"]; ?>" placeholder="Enter your your phone number" required>
          </label>
          <br>
          <label>Select your car:
            <select name="ucar">
              <option value="1">1</option>
            </select>
          </label>
          <br>
          <label>Select the date for fix your car
            <input type="date" id="date" name="date" value=""  required>
          </label>
        </p>
        <p>
          <input type="submit" name="button" id="button" value="Submit" />
        </p>
      </form></td>
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