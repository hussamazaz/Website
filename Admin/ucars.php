<?
include_once( "../php/connect.php" );
$cid = $_GET[ "car" ];
$query = mysql_query( "select * from cars where car_id='$cid'" )or die( mysql_error() );
$eachdata = mysql_fetch_array( $query );
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Update Cars</title>
	<link href="../CSS/styleadmin.css" rel="stylesheet" type="text/css"/>
</head>

<body>
	<table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td colspan="2" align="center">
				<h1>Update Cars</h1>
			</td>
		</tr>
		<tr>
			<td width="198"><a href="#" class="homebot">Logout</a>
			</td>
			<td width="494" rowspan="6" valign="top">
				<form action="PHP/uucars.php" method="post" enctype="multipart/form-data">
					<table width="100%" border="0" cellspacing="5" cellpadding="0">
						<tr>
							<td>Car id:</td>
							<td><input name="icar" type="text" id="icar" value="<? echo $eachdata["car_id"]; ?>" readonly="readonly"/>
							</td>
						</tr>
						<tr>
							<td>Car Name:</td>
							<td><input type="text" name="ncar" id="ncar" value="<? echo $eachdata["car_name"]; ?>"/>
							</td>
						</tr>
						<tr>
							<td>Car Plate:</td>
						    <td><input type="text" name="pcar" id="pcar" value="<? echo $eachdata["car_plate"]; ?>"/>
							</td>
						</tr>
						<tr>
							<td>Car Year Model:</td>
							<td><input type="text" name="mycar" id="mycar" value="<? echo $eachdata["car_model"]; ?>"/>
							</td>
						</tr>
						<tr>
							<td>Car Company:</td>
							<td><input type="text" name="ccar" id="ccar" value="<? echo $eachdata["car_company"]; ?>"/>
							</td>
						</tr>
						<tr>
							<td>Car Odometer:</td>
							<td><input type="text" name="ocar" id="ocar" value="<? echo $eachdata["car_odo"]; ?>"/>
							</td>
						</tr>
						<tr>
							<td colspan="2" align="center"><input type="submit" name="button" id="button" value="Update"/>
							</td>
						</tr>
					</table>
				</form>

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
					<td><a href="accipt.php" class="homebot">Accept Reserve</a>
					</td>

	</table>

</body>

</html>