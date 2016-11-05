<style type="text/css">
body {
	margin-left: 0px;
	margin-top: 0px;
}
</style>
<table border="0" width="100%" cellspacing="0" cellpadding="0" background="image/topbg.jpg">
  <tr>
    <td width="90%" valign="top">
    </td>
    <td width="10%">
     <img border="0" src="image/oxlogos.png" width="300" height="100" align="right"></td>
  </tr>
</table>

  <Table width="100%">
  <tr>
  <td>
  <?php @$_SESSION['login']; 
  error_reporting(1);
  ?>
  </td>
    <td>
	<?php
	if(isset($_SESSION['login']))
	{
	 echo "<div align=\"right\"><strong><a href=\"index.php\"> Home </a>|<a href=\"signout.php\">Signout</a></strong></div>";
	 }
	 else
	 {
	 	echo "&nbsp;";
	 }
	?>
	</td>
	
  </tr>
  
</table>
