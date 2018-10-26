<!DOCTYPE html>
<?php
	include "conn.php";
	$query="select * from studentdetail";
?>
<html>
<head>
	<!-- <link rel="stylesheet" type="text/css" href="css/admin_css.css"> -->
	<link rel="stylesheet" type="text/css" href="css/thtd.css">
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
		<select name="campusSelect">
			<option></option>
			<option value="alaminos">Alaminos City Campus</option>
			<option value="asingan">Asingan Campus</option>
			<option value="bayambang">Bamyambang Campus</option>
			<option value="binmaley">Binmaley Campus</option>
			<option value="infanta">Infanta Campus</option>
			<option value="lingayen">Lingayen Campus</option>
			<option value="sancarlos">San Carlos City Campus</option>
			<option value="stamaria">Santa Maria Campus</option>
			<option value="urdaneta">Urdaneta Campus</option>
		</select>
		<input type='submit' name='s' title="Use Campus's Database" value="use">
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
		echo "<table cellpadding='10%'>
			<b>
			<th class='th'>Status</th>
			<th class='th'>Student Entry Number</th>
			<th class='th'>Student Name</th>
			<th class='th'>Address</th>
			<th class='th'>Birth Date</th>
			<th class='th'>Birth Place</th>
			<th class='th'>Religion</th>
			<th class='th'>Sex</th>
			<th class='th'>Civil Status</th>
			<th class='th'>Citezenship</th>
			<th class='th'>Cellphone Number</th>
			<th class='th'>Name of Spouse</th>
			<th class='th'>Spouse's Phone Number</th>
			<th class='th'>Father's Name</th>
			<th class='th'>Mother's Name</th>
			<th class='th'>Father's Address</th>
			<th class='th'>Mother's Address</th>
			<th class='th'>Father's Contact Number</th>
			<th class='th'>Mother's Contact Number</th>
			<th class='th'>Father's occupation</th>
			<th class='th'>Mother's Occupation</th>
			<th class='th'>Father's Educational Attainment</th>
			<th class='th'>Mother's Educational Attainment</th>
			<th class='th'>Guardian's Name</th>
			<th class='th'>Relationship with Guardian</th>
			<th class='th'>Guardian's Address</th>
			<th class='th'>Guardian's Contact Number</th>
			<th class='th'>Number of Siblings</th>
			<th class='th'>Highschool Name</th>
			<th class='th'>Year Graduated</th>
			<th class='th'>General Average</th>
			<th class='th'>SHS Strand</th>
			<th class='th'>College Name(Transferee / Returnee)</th>
			<th class='th'>Last Semester Attended</th>
			<th class='th'>Last Year Attended</th>
			<th class='th'>Last Year Level</th>
			<th class='th'>Last Course</th>
			<th class='th'>First Choice Course</th>
			<th class='th'>Second Choice Course</th>
			<th class='th'>Third Choice Course</th>
			<th class='th'>Date Form was Filled Up</th>

			</b>";
			if ($res->num_rows > 0) {
		    while($row = mysqli_fetch_array($res)) {
		    echo "<tr align='center'>";
		    	if($row['status']=='confirm'){
  		    		echo "<td class='td'><button name='c' id='button' title='Click to confirm Student Registry'>Confirm</button></td>";
  		    		$entryNum=$row['entryNum'];
  		    		if (isset($_GET['c'])) {
						mysqli_query($link, "update studentdetail set status = 'confirmed' where studentdetail.entryNum = '$entryNum'");
					}
  		    	}else{
  		    		echo "<td class='td'>".$row['status']."</td>";
  		    	}
		    echo "<td class='td'>".$row['entryNum']."</td>
		    	  <td class='td'>".$row['FirstName']," ",$row['MiddleName']," ",$row['LastName']."</td>
		    	  <td class='td'>".$row['CompleteAddress']."</td>
		    	  <td class='td'>".$row['DateofBirth']."</td>
		    	  <td class='td'>".$row['BirthPlace']."</td>
		    	  <td class='td'>".$row['Religion']."</td>
		    	  <td class='td'>".$row['Sex']."</td>
		    	  <td class='td'>".$row['CivilStatus']."</td>
		    	  <td class='td'>".$row['Citezenship']."</td>
		    	  <td class='td'>".$row['CellphoneNumber']."</td>
		    	  <td class='td'>".$row['NameofSpouse']."</td>
		    	  <td class='td'>".$row['ContactNoofSpouse']."</td>
		    	  <td class='td'>".$row['FatherName']."</td>
		    	  <td class='td'>".$row['MotherName']."</td>
		    	  <td class='td'>".$row['FatherAdd']."</td>
		    	  <td class='td'>".$row['MotherAdd']."</td>
		    	  <td class='td'>".$row['FatherNum']."</td>
		    	  <td class='td'>".$row['MotherNum']."</td>
		    	  <td class='td'>".$row['FatherOccupation']."</td>
		    	  <td class='td'>".$row['MotherOccupation']."</td>
		    	  <td class='td'>".$row['FatherEdAttainment']."</td>
		    	  <td class='td'>".$row['MotherEdAttainment']."</td>
		    	  <td class='td'>".$row['GuardianName']."</td>
		    	  <td class='td'>".$row['RelwithGuardian']."</td>
		    	  <td class='td'>".$row['GuardianAdd']."</td>
		    	  <td class='td'>".$row['ContactNum']."</td>
		    	  <td class='td'>".$row['NoofSiblings']."</td>
		    	  <td class='td'>".$row['NameofHighSchool']."</td>
		    	  <td class='td'>".$row['YearGraduated']."</td>
		    	  <td class='td'>".$row['GenAve']."</td>
		    	  <td class='td'>".$row['SHSStrand']."</td>
		    	  <td class='td'>".$row['CollegeName']."</td>
		    	  <td class='td'>".$row['LastSemAttended']."</td>
		    	  <td class='td'>".$row['LastYearAttended']."</td>
		    	  <td class='td'>".$row['YearLevel']."</td>
		    	  <td class='td'>".$row['Course']."</td>
		    	  <td class='td'>".$row['firstChoice']."</td>
		    	  <td class='td'>".$row['secondChoice']."</td>
		    	  <td class='td'>".$row['thirdChoice']."</td>
		    	  <td class='td'>".$row['DateFilledUp']."</td>


		    	  </tr>";//shows all data
			}
		}
		echo "</table>";
}
	?>
</center>
</form>
</body>
</html>