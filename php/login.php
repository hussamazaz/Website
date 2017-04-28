<?
include_once("connect.php");
session_start();

$n=$_POST["uname"];
$p=$_POST["pass"];
$query=mysql_query("select * from users where user_name='$n' and user_password='$p'");
$eachdata=mysql_fetch_array($query);
$re=mysql_num_rows($query);

if ($re == 1){
	$_SESSION["userid"] = $eachdata["user_id"];
	
header("location:../clint/home.php");
}
else{?>
<h1> Wrong UserName or Password </h1> 
<?
}
?>