<?php
session_start()
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Administrative Login - Online Exam</title>
<link href="../quiz.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php
include("header.php");
?>

<p class="head1">Adminstrative Login</p>
<form name="form1" method="post" action="login.php">
<table width="490" border="0">
  <tr>
    <td width="300"><span class="style2"></span></td>
    <td width="132"><span class="style2"><span class="head1"></span></span></td>
    <td width="238"><table width="219" border="0" align="center">
    </tr>
  <tr>
    <td width="500" class="style2">Login ID </td>
    <td width="500"><input name="loginid" type="text" id="loginid"></td>
  </tr>
  <tr>
    <td class="style2">Password</td>
    <td><input name="pass" type="password" id="pass"></td>
  </tr>
  <tr>
    <td class="style2">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td class="style2">&nbsp;</td>
    <td><input name="submit" type="submit" id="submit" value="Login"></td>
  </tr>
</table></td>
  </tr>
</table>

</form>
<?php
include("footer.html");
?>
</body>
</html>
