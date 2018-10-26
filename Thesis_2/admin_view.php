<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/admin_css.css">
	<title>Select Action</title>
</head>
<body>
	<center>
	<img src="img/PSU1.png">
	<form name="form1" action="" method="post">
		<h1 class="text2">Please Select an Action</h1>
	<div>
			<?php $x=125; include("nb.php"); ?>
		<a href="admin_confirm.php" class="text2"><img src="img/studentForm2.png" style="height: 10%; width: 10%;"></a>
			<?php $x=75; include("nb.php"); ?>
		<a href="admin_change.php" class="text2"><img src="img/settings1.png" style="height: 10%; width: 10%;"></a>	
	</div>
	<div class="text1" style="font-size: 24px;"><a href="admin_confirm.php">Confirm Registered Student</a><?php $x=100; include("nb.php"); ?><a href="admin_change.php">Admin Settings</a></div>


	<div>
		<?php $x=125; include("nb.php"); ?>
		<a href="stat.php" class="text2"><img src="img/chart1.png" style="height: 10%; width: 10%;"></a>
		<?php $x=75; include("nb.php"); ?>
		<a href="index.php" class="text2"><img src="img/logout1.png" style="height: 10%; width: 10%;"></a>
			<div class="text1" style="font-size: 24px;">
				<?php $x=125; include("nb.php"); ?>
				<a href="stat.php">View Statistical Report</a>
			<?php $x=110; include("nb.php"); ?>
				<a href="index.php">Log Out and Go to Main Menu</a>
			</div>
		</a>
	</div>
	</form>
</center>
</body>
</html>