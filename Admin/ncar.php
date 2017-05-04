<?
include_once("../php/connect.php");
$query=mysql_query("select * from users") or die(mysql_error());
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Add new Car</title>
	<link href="../CSS/styleadmin.css" rel="stylesheet" type="text/css"/>
</head>

<body>
	<table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td colspan="4" align="center">
				<h1>Add New Car</h1>
			</td>
		</tr>


		<tr>
			<td width="8" rowspan="9" align="left">
				<tr>
					<td width="198"><a href="#" class="homebot">logout</a>
					</td>
					<td width="494" rowspan="6" valign="top">
						<form action="PHP/nncar.php" method="post" enctype="multipart/form-data">
							<table width="100%" border="0" cellspacing="5" cellpadding="0">
								<tr>
									<td>Clint Name:</td>
									<td> <select name="uname" id="uname" >
                  <option value="-1" selected>None</option>
                  <? while($uid=mysql_fetch_array($query)){  ?>
                  <option value="<? echo $uid["user_id"];?>"><? echo $uid["user_name"];?></option>
                  <?  }	  ?>
                </select></td>
								</tr>
								<tr>
									<td>Car Name:</td>
									<td><input type="text" name="ncar" id="ncar"/>
									</td>
								</tr>
								<tr>
									<td>Car Plate:</td>
									<td><input type="text" name="pcar" id="pcar"/>
									</td>
								</tr>
								<tr>
									<td>Car Year Model:</td>
									<td><input type="text" name="mycar" id="mycar"/>
									</td>
								</tr>
								<tr>
									<td>Car Company:</td>
									<td><input type="text" name="ccar" id="ccar"/>
									</td>
								</tr>
								<tr>
									<td>Car Odometer:</td>
									<td><input type="text" name="ocar" id="ocar"/>
									</td>
								</tr>
								<tr>
									<td colspan="2" align="center"><input type="submit" name="button" id="button" value="Submit"/>
									</td>
								</tr>
							</table>
						</form>
					</td>
				</tr>
				<tr>
					<td><a href="vusers.php" class="homebot">Users</a>
					</td>
				</tr>
				<tr>
					<td><a href="vcars.php" class="homebot">Cars</a>
					</td>
				</tr>
				<tr>
					<td><a href="pmian.php" class="homebot">Pending Maintenance</a>
					</td>
				</tr>
				<tr>
					<td><a href="vmain.php" class="homebot">View Maintenance</a>
					</td>
				</tr>
				<tr>
					<td><a href="newreserv.php" class="homebot">Reserve now </a>
					</td>
				</tr>
				<tr>
					<td><a href="accipt.php" class="homebot">Accipt Reserve</a>
					</td>
				</tr>
				<tr>
					<td>&nbsp;</td>
				</tr>
	</table>
</body>

</html>