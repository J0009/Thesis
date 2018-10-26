<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="css/ctrl_css.css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<head>
	<title>Select an Action</title>
</head>
<body><center>
	<img src="img/PSU1.png">
	<form name="form1" action="" method="post">
		<h1 class="text1">Please Select an Action</h1>
	<div>
		<a href="campusSelect.php"><img src="img/studentForm.png" style="height: 20%; width: 20%;"></a>
			<?php $x=110; include("nb.php"); ?>
		<a href="login.php"><img src="img/manage1.png" style="height: 20%; width: 20%;"></a>	
	</div>
	<div class="text1" style="font-size: 24px;"><a href="campusSelect.php">Student Registration</a><?php $x=73; include("nb.php"); ?><a href="login.php">Admin Log-In</a></div>
	</form>
</center></body>
</html>	