<!DOCTYPE html>
<?php
	include "conn.php";
	$query="select * from studentdetail";
?>
<html>
<head>
	<!-- <link rel="stylesheet" type="text/css" href="css/admin_css.css"> -->
	<link rel="stylesheet" type="text/css" href="css/ctrl_css.css">
	<script src="js/jquery.js"></script>
	
	<style type="text/css">
		button,input{
			font-size: .6em;
		}
	</style>
	<title></title>
</head>
<body style="font-size: 1.4em">
	<form>
	<center>
	<a href="admin_view.php"><button type="button" style="font-family: bookman old style; float: left;" title="Are You Sure?" onmouseover="style.background='red'" onmouseleave="style.background=''">Exit</button></a>
	<span style="float: right"><input type='search' name='s' title='use entry number for searching'>&nbsp;<input type='submit' name= 'search' value='search' class='button'></span><br><br>
	<?php
	if (isset($_GET['search'])) {//checks if search button is clicked
	$s=$_GET['s'];//$s gets data from textbox s
	$query="Select * from studentgeneraldetail where entryNum = '$s'";//query changes to search id
	$res = mysqli_query($link,$query);//retrieves data from dbase
		echo "<table cellpadding='10%'>
			<b><th></th>
			<th>Student Entry Number</th>
			<th>Student Name</th>
			</b>";
			if ($res->num_rows > 0){
		    while($row = mysqli_fetch_array($res)) {
		    echo "<td><input type='submit' name='view' value='View Details'></td>
		    	  <tr align='center'>
		    	  <td>".$row['entryNum']."</td>
		    	  <td>".$row['FirstName']," ",$row['MiddleName']," ",$row['LastName']."</td></tr>";//shows all data
			}
		}	
		echo "</table>";
}else{
		$res = mysqli_query($link,$query);//retrieves data from dbase
		echo "<table cellpadding='10%' border='1px'>
			<b>
			<th class='th'>Status</th>
			<th class='th'>Student Entry Number</th>
			<th class='th'>Student Name</th>
			<th></th>
			</b>";
			if ($res->num_rows > 0) {
		    $i=1; 
		    $x=1;
		    while($row = mysqli_fetch_array($res)){
		    echo "<tr align='center'>";
  		    		
  		    		
		    	if($row['status']=='confirm'){
  		    		echo "<td><input type='radio' name='status"; echo"$i";  echo"' value='confirm'>Confirm &nbsp;&nbsp;<input type='radio' name='status"; echo"$i"; echo"' value='not confirm' checked>Not Confirmed </td>";
					$entryNum=$row['entryNum'];
  		    	}else{
  		    		echo "<td><input type='radio' name='status"; echo"$i"; echo"' checked>Confirm &nbsp;&nbsp;<input type='radio' name='status"; echo"$i"; echo"' disabled='disable'>Not Confirmed </td>";
  		    	}
		    echo "<td>".$row['entryNum']."</td>
		    	  <td>".$row['FirstName']," ",$row['MiddleName']," ",$row['LastName']."</td>
		    	  <td><input type='submit' name='view"; echo"$i"; echo"' value='View'></td>
		    	  </tr>";//shows all data
		    	  $i++;
		    	  $x++;
			}
		}
		for ($i=1; $i<$x ; $i++) { 
			echo "<script>
						$(document).ready(function() {  
						  $('input[name=status";echo"$i";echo"]').change(function(){ 
						        $('form').submit(); 
						  });
						 });
					</script>";

						if (isset($_GET['status'.$i])) {
							$index=$i;
							mysqli_query($link, "update studentdetail set status = 'confirmed' where entryNum = '$index'");
							break;
						}

		}
		echo "</table>";
}
	?>
</center>
</form>
</body>
</html>
<?php
?>