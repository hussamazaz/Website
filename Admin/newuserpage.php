<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="../CSS/styleadmin.css" rel="stylesheet" type="text/css" />

</head>

<body>

<table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="2" align="center"><h1>Home Page</h1></td>
  </tr>
 
 
  <tr>
     <td align="center"><a href="php/logoutadmin.php" class="homebot">Logout</a></td>
    <td width="550" rowspan="9">
    
    
    <form action="PHP/newuser.php" method="post" enctype="multipart/form-data"><table width="100%" border="0" cellspacing="5" cellpadding="0">
      <tr>
        <td>&nbsp;</td>
        <td>Add New Users</td>
      </tr>
      <tr>
        <td>ID:</td>
        <td><input type="text" name="id" id="id" /></td>
      </tr>
      <tr>
        <td>User nickname:</td>
        <td><input type="text" name="nake" id="nake" /></td>
      </tr>
      <tr>
        <td>User name :</td>
        <td><input type="text" name="name" id="name" /></td>
      </tr>
      <tr>
        <td>User password:</td>
        <td><input type="password" name="pass" id="pass" /></td>
      </tr>
      <tr>
        <td>Email:</td>
        <td><input type="text" name="email" id="email" /></td>
      </tr>
      <tr>
        <td>User_type:</td>
        <td><input type="text" name="type" id="type" /></td>
      </tr>
      <tr>
        <td>Mobile:</td>
        <td><input type="text" name="mob" id="mob" /></td>
      </tr>
      <tr>
        <td colspan="2" align="center"><input type="submit" name="button" id="button" value="Submit" /></td>
        </tr>
    </table></form></td>

  
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
