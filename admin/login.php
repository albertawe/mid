<?php
session_start();
error_reporting(1);
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Admin OnXam</title>
<link href="../quiz.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php
include("header.php");
extract($_POST);
if(isset($submit))
{
	include("../database.php");
	$rs=mysql_query("select * from mst_admin where loginid='$loginid' and pass='$pass'",$cn) or die(mysql_error());
	if(mysql_num_rows($rs)<1)
	{
		echo "<BR><BR><BR><BR><div class=head1> Invalid User Name or Password<div>";
		exit;
		
	}
	$_SESSION['alogin']="true";
	
}
else if(!isset($_SESSION[alogin]))
{
	echo "<BR><BR><BR><BR><div class=head1> Your are not logged in<br> Please <a href=index.php>Login</a><div>";
		exit;
}
?>

			<p class="head1">Welcome Admin</p>
			<div style="margin:auto;width:90%;height:250px;box-shadow:2px 1px 2px 2px #CCCCCC;text-align:left">
			<div style="margin-left:20%;padding-top:5%">
			<p class="style7"><a href="subadd.php">Add Subject</a></p>
			<p class="style7"><a href="testadd.php">Add Test</a></p>
			<p class="style7"><a href="questionadd.php">Add Question </a></p>
			<p align="center" class="head1">  <button><a href="index.php">logout</a></button></p>
</div>
</div>
<?php
include("footer.html");
?>
</body>
</html>
