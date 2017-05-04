<?
include_once("../php/connect.php");
session_start();
$uid=$_SESSION["userid"];
$query=mysql_query("select * from users") or die(mysql_error());
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
    <td colspan="2" align="center"><h1>Users</h1></td>
    
    
    
  </tr>
  
  <tr>
     <td align="center"><a href="php/logoutadmin.php" class="homebot">Logout</a></td>
    <td width="550" rowspan="9">
    
   <form action="newuserpage.php" method="post" enctype="multipart/form-data">
   
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      
      
 <td width="550" rowspan="6" valign="top"><table width="100%" border="1" cellspacing="0" cellpadding="0">
        
        <tr>
          <td>ID</td>
          <td>User nickname </td>
          <td>User name </td>
          <td>Email </td>
          <td>User_type</td>
          <td>Mobile</td>
          <td>&nbsp;</td>
        </tr>
        <?
		while ($eachdata=mysql_fetch_array($query)){
		?>
        <tr>
          <td><? echo $eachdata["user_id"]; ?></td>
          <td><? echo $eachdata["user_nickname"]; ?></td>
          <td><? echo $eachdata["user_name"]; ?></td>
          <td><? echo $eachdata["user_email"]; ?></td>
          <td><? echo $eachdata["user_type"]; ?></td>
          <td><? echo $eachdata["user_mobile"]; ?></td>
          <td><a href="updateuserspage.php?user=<? echo $eachdata["user_id"]; ?>">Update</a></td>
        </tr>
        
       
        <?
		}
		?>
        
         <tr>
 <td colspan="11" align="center"><input type="submit" name= "button" id="button" value="Add new user" /></td>
        </tr>
        
      </table></td>
   
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