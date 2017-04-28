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
    <td colspan="2" align="center">Add New Car Page</td>
  </tr>
  <tr>
    <td><a href="#" class="homebot">logout</a></td>
    <td width="550" rowspan="6" valign="top">
    <form action="PHP/newCar.php" method="post" enctype="multipart/form-data"><table width="100%" border="0" cellspacing="5" cellpadding="0">
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>Car Name:</td>
        <td><input type="text" name="ncar" id="ncar" /></td>
      </tr>
      <tr>
        <td>Car Plate:</td>
        <td><input type="text" name="pcar" id="pcar" /></td>
      </tr>
      <tr>
        <td>Car Year Model:</td>
        <td><input type="text" name="mycar" id="mycar" /></td>
      </tr>
      <tr>
        <td>Car Company:</td>
        <td><input type="text" name="ccar" id="ccar" /></td>
      </tr>
      <tr>
        <td>Car Odometer:</td>
        <td><input type="text" name="ocar" id="ocar" /></td>
      </tr>
      <tr>
        <td colspan="2" align="center"><input type="submit" name="button" id="button" value="Submit" /></td>
        </tr>
    </table></form></td>
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