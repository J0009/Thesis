<?php
include "conn.php";
if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
    echo "open apache and mysql in xampp";
}
if (isset($_POST["ok"]))
{
	$username=$_POST["username"];
	$res = mysqli_query($link, "Select * from admin where adminName ='$username'");
		if(mysqli_num_rows($res)!=0)//checks if input is in the database
		{
			if($_POST["username"]!="guest"){
			if($_POST["pswd"]!=""){
			$password=$_POST["pswd"];//gets textbox content from index.php
	
		 	$res = mysqli_query($link, "Select * from admin where password ='$password'");
			if(mysqli_num_rows($res)!=0)//checks if input is in the database
			{
				while($row = mysqli_fetch_assoc($res)){//gets the dbase data similar to input
					if($password == $row["password"]){//compare data from dbase and textbox

						echo"<script>window.location.href='admin_view.php';</script>";//redirects to main.php
					}
				}	
			}else{
				echo "<font class='text'>Password Incorrect</font>";//error message
			}
			}else{
			echo "<font class='text'>Password musn't be null!</font>";
			}}else{echo"<script>window.location.href='admin_view.php';</script>";//redirects to main.php
			}
	}else{
	echo "<font class='text'>User's name not found!</font>";
	}
}
// admin_add
if (isset($_POST['add'])) {
	$u=$_POST['newusername'];
	$p=$_POST['newpassword'];
	$res=mysqli_query($link,"select * from admin where adminName='$u'");
	if ($u=="") {
		echo "<script>document.getElementById('u').style.display='';</script>";
	}elseif(mysqli_num_rows($res)!=0){
		echo "<script>window.alert('Username already taken! Please try other name!');</script>";
	}else{
		mysqli_query($link,"select * from admin where password='$p'");
		if ($p=="") {
			echo "<script>document.getElementById('p').style.display='';</script>";
		}elseif(mysqli_num_rows($res)!=0){
			echo "<script>window.alert('Password already taken! Please try a different one!');</script>";
		}else{
			mysqli_query($link,"insert into admin values( '$u', '$p')");
			echo "<script>alert('Admin Added!');</script>";
			echo "<script>window.location.href='admin_view.php';</script>";
		}
	}
}
// admin_change
if (isset($_POST['adChange'])) {
	$un=$_POST['newname'];
	$ps=$_POST['newpass'];
	$ps1=$_POST['oldpass'];
			$res=mysqli_query($link,"select * from admin where password='$ps1'");
			if ($un=="" || $ps=="" || $ps1=="") {
				echo "<script>alert('Please Fill the Entire Form');</script>";
			}elseif(mysqli_num_rows($res)!=0){
				mysqli_query($link,"update admin set adminName='$un', password='$ps' where password='$ps1'");
				echo "<script>alert('Change Adopted!');</script>";		
				echo "<script>window.location.href='admin_change.php';</script>";	
			}else{
				echo "<script>window.alert('Old Password Not Found! Please contact the management!');</script>";
			}
}

// admin_delete
if (isset($_POST['delete'])) {
	$u=$_POST['dusername'];
	$u1=$_POST['username1'];
	$p=$_POST['password2'];
	$res=mysqli_query($link,"select * from admin where adminName='$u1' and password='$p'");
			if ($u=="" || $u1=="" || $p=="") {
				echo "<script>alert('Please Fill the Entire Form');</script>";
			}elseif(mysqli_num_rows($res)!=0){
				mysqli_query($link,"delete from admin where adminName='$u'");
				echo "<script>alert('Account Deleted!');</script>";		
				echo "<script>window.location.href='admin_view.php';</script>";	
			}else{
				echo "<script>window.alert('Admin not recgnized! Please contact the management!');</script>";
			}
}
?>