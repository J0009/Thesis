<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="css/admin_css.css">
<script type="text/javascript">
	function admin_Add(){
		var dis=document.getElementById("add_admin");
		dis.style.display='';
		var dis=document.getElementById("admin_change");
		dis.style.display='none';
		var dis=document.getElementById("admin_delete");
		dis.style.display='none';
	}
	function admin_change(){
		var dis=document.getElementById("admin_change");
		dis.style.display='';
		var dis=document.getElementById("add_admin");
		dis.style.display='none';
		var dis=document.getElementById("admin_delete");
		dis.style.display='none';
	}
	function admin_remove(){
		var dis=document.getElementById("admin_delete");
		dis.style.display='';
		var dis=document.getElementById("admin_change");
		dis.style.display='none';
		var dis=document.getElementById("add_admin");
		dis.style.display='none';
	}
</script>
<head>
</head>
<body id="b">
<form name='form1' action='' method='post'>
<center>
  

 	<a type="button" title="Add An Admin" onclick="admin_Add()"><img src="img/addmin.png" style="height: 20%; width: 10%;"></a>
 	<?php
 		$x=90;
 		include "nb.php";
 	?>
 	<!-- <button type="button" style="border-radius: 25px; background: blue;font-size: 110%;font-family: bookman old style;" title="Click Me!" onclick="admin_change()" onmouseover="style.background='yellow'" onmouseleave="style.background='blue'">Change Admin Name and Password</button> -->

 	<a type="button" title="Change Admin's Password, Username or Both" onclick="admin_change()"><img src="img/change.png" style="height: 20%; width: 10%;"></a>
	</div>
 	<?php
 		$x=90;
 		include "nb.php";
 	?>
 	<!-- <button type="button" style="border-radius: 25px; background: blue;font-size: 110%;font-family: bookman old style;" title="Click Me!" onclick="admin_remove()" onmouseover="style.background='yellow'" onmouseleave="style.background='blue'">Remove an Admin</button> -->

 	<a type="button" title="Delete an Admin's Account" onclick="admin_remove()"><img src="img/remove.png" style="height: 20%; width: 10%;"></a>
 	<?php
		$x=5;
		include("br.php");
 	?>
<!-- admin_add -->
	<div id="add_admin" class="border" style="display:">
  	<?php $x=5;	include("br.php"); ?>
   	<p class="text2">New User's Name:</p>
   	<input type="text" name="newusername" title="Enter New Username"><br>
   	<font style="display: none; color: orange; font-size: 1.2em;" id="u"><b>Required</b></font>
	<p class="text2">New User's Password:</p>
	<input type="password" name="newpassword" title="Enter New Password"><br>
   	<font style="display: none; color: orange; font-size: 1.2em;" id="p"><b>Required</b></font>
	<br><br><br>
	<div><input type="submit" name="add" value="Add Admin" style="border-radius: 25px;font-size: 110%;font-family: bookman old style;" title="Are You Sure?" onmouseover="style.background='#00e600'" onmouseleave=style.background=''></div>
	</div>

<!-- admin_change -->
  <div id="admin_change" class="border" style="display: none;">
  	<?php $x=5;	include("br.php"); ?>
   	<p class="text2">User's Name:</p>
   	<input type="text" name="newname" title="Enter New Username">
   	<p class="text2">Old Password:</p>
	<input type="password" name="oldpass" title="Enter Old Password"><br><br>
	<p class="text2">New Password:</p>
	<input type="text" name="newpass" title="Enter New Password"><br><br><br>
	<div><input type="submit" name="adChange" value="Change" style="border-radius: 25px;font-size: 110%;font-family: bookman old style;" title="Are You Sure?" onmouseover="style.background='#00e600'" onmouseleave=style.background=''></div>
	</div>

	<!-- admin_delete -->
	<div id="admin_delete" class="border" style="display:none;">
  	<?php $x=5;	include("br.php"); ?>
   	<p class="text2">Admin's Username to be Removed:</p>
   	<input type="text" name="dusername" title="Enter Username to be Removed">
   	<p class="text2">Your Username:</p>
   	<input type="text" name="username1" title="Enter Your Username (For Validation)">
	<p class="text2">Your Password:</p>
	<input type="password" name="password2" title="Enter Your Password (For Validation)">
	<br><br><br>
	<div><input type="submit" name="delete" value="Remove" style="border-radius: 25px;font-size: 110%;font-family: bookman old style;" onclick="alert('Admin Removed!')" title="Are You Sure?" onmouseover="style.background='#00e600'" onmouseleave=style.background=''></div>
	</div>
 </center>
</form>
</body>
</html>

<?php
	include "log.php";
?>