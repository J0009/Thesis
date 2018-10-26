<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="css/admin_css.css">
<head>
	<title>sampol</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<meta name='viewport' content='width=device-width, initial-scale=1.0'>
</head>
<body id="b"><center>
	<form name="form1" action="" method="post">
		<?php
			$x=4;
			include("br.php");
		?>
		<img src="img/PSU1.png"><br><?php

		$x=4;
		include "br.php";?>
		<span class="text2">Select User</span>
		<?php $x=125; include("nb.php");?>
		<input type="text" style='width: 10%;' name="username" title="Use guest if you're not the admin">
		<?php
			$x=5;
			include("br.php");
			echo "<span class='text2'>Enter password</span>";
			$x=130; include("nb.php");
			echo"<input type='password' name='pswd' style='width: 9%;'><br><br>
			<input type='submit' name='ok' value='OK'><br>";
		?>
	</form>
<?php
include("log.php");
?>
</center></body>
</html>