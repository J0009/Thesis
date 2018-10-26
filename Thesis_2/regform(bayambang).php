<?php
include "conn.php";
?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="css/ctrl_css.css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0'>
<script type="text/javascript">
	function showtext(){
		var dis=document.getElementById("showMe");
		dis.style.display='';
	}
	function hidetext(){
		var dis=document.getElementById("showMe");
		dis.style.display='none';
	}
	function showspouse(){
		var dis=document.getElementById("spouse");
		dis.style.display='';
	}
	function hidespouse(){
		var dis=document.getElementById("spouse");
		dis.style.display='none';
	}
</script>
<head>
	<title>Registration Form</title>
</head>
<body style="font-family: calibri; font-size: 19.5px;" class="body"><form name="form1" action="#" method="post">
	<!-- <button type="button" onclick="showtext()"> show</button> <button type="button" onclick="hidetext()"> hide</button> -->
	<img src="img/PSU.png" width="7%" height="7%" align="left"><input type="file" name="">
	<center>
	<span style="font-size: 20px;"">
		APPLICATION FORM FOR COLLEGE ADMISSION TEST<br>
		<font style="font-size: 10px">PANGASINAN STATE UNIVERSITY</font><br>
		<span><b>
			<input type="radio" name="studenttype" value="freshman" onclick="hidetext()" checked>Freshman &nbsp;&nbsp;&nbsp;&nbsp;
			<input type="radio" name="studenttype" value="transferee" onclick="showtext()">Transferee&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="radio" name="studenttype" value="returnee" onclick="showtext()">Returnee</b></span>
	</span>
</center>
<table><tr><td width="100%"">
<ol><b>PLEASE READ BEFORE FILLING UP!</b>
<li> Fill up this form <b><u>COMPLETELY</u></b> and <b><u>CORRECTLY</u></b></li>
<li> Print and submit this form together with 2x2 ID picture (plain background with nametag)</li>
<li> Wait for the examination permit to be given indicating your schedule of examination</li>
</ol></td></tr></table>
<center>
<table>
	<tr>
		<td align="right">Last Name</td>
		<td><input type="text" name="Lastname" style="width: 344%"></td>
	</tr>
	<tr>
		
		<td align="right">First Name</td>
		<td><input type="text" name="Firstname" style="width: 344%"></td>
	</tr>
	<tr>
		<td align="right">Middle Name</td>
		<td><input type="text" name="Middlename" style="width: 344%"></td>
	</tr>
	<tr>
		<td align="right">Complete Address</td>
		<td><input type="text" name="add" width=100px style="width: 344%"></td>
	</tr>
	<tr>
		<td align="right">Date of Birth</td>
		<td><input type="date" name="Bday" style="width: 120%"></td>
		<td></td>
		<td align="right">Birthplace</td>
		<td><input type="text" name="Bplace" style="width: 103.5%"></td>
	</tr>
	<tr>
		<td align="right">Religion</td>
		<td><input type="text" name="Religion" style="width: 120%"></td>
		<td></td>
		<td></td>
		<td>
		</td>
	</tr>
	<tr>
		<td align="right">Sex</td>
		<td align="left">
			<input type="radio" name="sex" value="male" checked>Male&nbsp;&nbsp;&nbsp;
			<input type="radio" name="sex" value="female">Female
			<?php
				$x=130;
				include 'nb.php';
			?> 
		</td>
		<td></td>
		<td align="right">Civil Status</td>
		<td>

			<input type="radio" name="civstat" value="single" onclick="hidespouse()" checked>Single&nbsp;&nbsp;&nbsp; 
			<input type="radio" name="civstat" value="married" onclick="showspouse()">Married&nbsp;&nbsp;&nbsp;<br>
			<input type="radio" name="civstat" onclick="document.getElementById('stat').style.display='';showspouse()">Others, Pls. Specify <input type="text" id="stat" name="status" style="width: 120px; display: none;">
		</td>
	</tr>
	<tr>
		<td align="right">Citezenship</td>
		<td><input type="text" name="Citezenship" style="width: 80%"></td>
		<td></td>
		<td align="right">Cellphone Number</td>
		<td><input type="number" name="Number" maxlength="13" style="width: 103.5%"></td>
		<td></td>
	</tr>
	<tr id="spouse" style="display: none;">
		<td align="right">Name of Spouse</td>
		<td><input type="text" name="NameofSpouse" style="width: 120%"></td>
		<td><?php $x=120; include("nb.php"); ?></td>
		<td align="right">Contact number of Spouse</td>
		<td><input type="number" name="NumofSpouse" style="width: 103.5%"></td>
		
	</tr>
</table>
<table>
	<tr>
		<td></td>
		<td align="center"><b>FATHER</b><div style="font-size: 80%">(indicate "+" after the name if deceased)</div></td>
		<td></td>
		<td align="center"><b>MOTHER</b><div style="font-size: 80%">(indicate "+" after the name if deceased)</div></td>
		<td></td>
	</tr>
	<tr>
		<td align="right">Name</td>
		<td><input type="text" name="fathername" style="width: 150%"></td>
		<td><?php $x=100; include("nb.php"); ?></td>
		<td><input type="text" name="mothername" style="width: 120%"></td>
		<td><?php $x=100; include("nb.php"); ?></td>
	</tr>
	<tr>
		<td align="right">Address</td>
		<td><input type="text" name="fatheradd" style="width: 150%"></td>
		<td></td>
		<td><input type="text" name="motheradd" style="width: 120%"></td>
		<td><?php $x=100; include("nb.php"); ?></td>
	</tr>
	<tr>
		<td align="right">Contact Number</td>
		<td><input type="number" name="fathernum" style="width: 150%"></td>
		<td></td>
		<td><input type="number" name="mothernum" style="width: 120%"></td>
		<td><?php $x=100; include("nb.php"); ?></td>
	</tr>
	<tr>
		<td align="right">Occupation</td>
		<td><input type="text" name="fatherwork" style="width: 150%"></td>
		<td></td>
		<td><input type="text" name="motherwork" style="width: 120%"></td>
		<td><?php $x=100; include("nb.php"); ?></td>
	</tr>
	<tr>
		<td align="right">Educational Attainment</td>
		<td><input type="text" name="fathereduc" style="width: 150%"></td>
		<td></td>
		<td><input type="text" name="mothereduc" style="width: 120%"></td>
		<td><?php $x=100; include("nb.php"); ?></td>
	</tr>
	<tr>
		<td align="right">Guardian's Name</td>
		<td><input type="text" name="guardian" style="width: 150%"></td><td></td>
		<td width="40%"> Relationship with Guardian
		<input type="text" name="relwithguardian" style="width: 30%"></td>
	</tr>
	<tr>
		<td align="right">Guardian's Address</td>
		<td><input type="text" name="guardianadd" style="width: 150%"></td>
	</tr>
	<tr>
		<td align="right">Contact Number</td>
		<td><input type="number" name="guardiannum""></td><td></td>
		<td>Number of children in the family
		<input type="number" name="sibling" style="width: 20%" min="1"></td>
	</tr>
	<tr>
		<td align="right">High School Attended</td>
		<td><input type="text" name="hs" style="width: 150%"></td><td></td>
		<td>Year Graduated <input type="number" name="yeargrad" style="width: 20%"></td>
		<td>General Average <input type="number" name="genave" style="width: 20%" min="75">%</td>
	</tr>
	<tr>
		<td>SHS Track and Strand Completed</td>
		<td><input type="text" name="shsstrand" style="width: 300%"></td>
		<td></td>
		<td></td>
	</tr>
	<tr id="showMe" style="display: none;">
		<!-- hidden part -->
		<td align="right"><span>College/University Attended</span></td>
		<td><input type="text"  name="college" style="width: 150%;"></td><td></td>
		<td><span>Attended Last 
			<select name="sem">
				<option value=""></option>
				<option value="1"> 1<sup>st</sup></option>
				<option value="2"> 2<sup>nd</sup></option>
				<option value="3"> 3<sup>rd</sup></option>
			</select> Sem, School Year <input type="number" name="schoolYear" style="width: 8%"></span> </td>
		<td><span>
			<select name="yearlevel">
				<option value=""></option>
				<option value="1"> 1<sup>st</sup></option>
				<option value="2"> 2<sup>nd</sup></option>
				<option value="3"> 3<sup>rd</sup></option>
				<option value="4"> 4<sup>th</sup></option>
			</select>Year, <input type="name" name="course" style="width: 20%;"> Course</span></td>
	</tr>
</table>
<div>
	1<sup>st</sup> choice 
	<select name="first">
		<?php
			$res = mysqli_query($link,"select * from available ");
	        if ($res->num_rows > 0) {
	            while($row = mysqli_fetch_array($res)) {
	            echo "<option value=".$row['bayambang'].">".$row['bayambang']."</option>";
	          }
	        }
		?>
	</select>
</div>
<div>
	2<sup>nd</sup> choice 
	<select name="second">
		<?php
			$res = mysqli_query($link,"select * from available ");
	        if ($res->num_rows > 0) {
	            while($row = mysqli_fetch_array($res)) {
	            echo "<option value=".$row['bayambang'].">".$row['bayambang']."</option>";
	          }
	        }
		?>
	</select>
</div>
<div>
	3<sup>rd</sup> choice 
	<select name="third">
		<?php
			$res = mysqli_query($link,"select * from available ");
	        if ($res->num_rows > 0) {
	            while($row = mysqli_fetch_array($res)) {
	            echo "<option value=".$row['bayambang'].">".$row['bayambang']."</option>";
	          }
	        }
		?>
	</select>
</div>
<br>
<font>I hereby attest that the above answers are factual about my personal information which may be checked against original documents and if that false information could disqualify me for admission. it is understood that my final acceptance in the college will depend on the requirements and guidelines imposed by the different colleges relative to the degree program I intend to take.</font>
<br>
<table>
	<td>Signature: <u><?php $x=100; include("nb.php"); ?></u></td><?php $x=80; include("nb.php"); ?>
	<td>Date: <u><font name="time"><?php echo Date('m-d-y'); ;?></font></u></td></table>
<h1 style="font-size: 16px">PANGASINAN STATE UNIVERSITY</h1>
<table border="1" style="border-color: black;">
	<tr>
		<td align="center" width="10%">
			<b>VISION</b><br> To become an ASEAN Premier State University in 2020
		</td>
		<td align="center" width="20%">
			<b>MISSION</b><br> The Pangasinan State University through instructions, research, extension and production commits to develop highly competent individuals capable of meeting the industry,public service and civil society
		</td>
		<td align="left" width="15%">
			<b><center>CORE VALUES</center></b><br>
			<B>A</B>ccountability and Transparency<br>
			<b>C</b>redibility and Integrity<br>
			<b>C</b>ompetence and Commitment to Achive<br>
			<b>E</b>xcellence in Service Delivery<br>
			<b>S</b>ocial &amp; Environmental Responsiveness<br>
			<b>S</b>pirituality
		</td>
		<td align="center" width="25%">
			<b>QUALITY POLICY</b><br>
			The Pangasinan State University shall be recognized as a ASEAN premier state university that produces quality education and satisfactory service delivery through instruction, research, extension and production.<br><br>
			We shall commit our expertise and resources to produce professionals who meet the expectations of the industry and other interested parties in the national and international community.<br><br>
			We shall continuously improve our operations in response in the changing environment and in support of the institution's strategic direction.<br>
		</td>
	</tr>
</table>
<input type="submit" name="submit1" value="Submit Form" id="print"><button type="button" value="print" name="print" onclick="window.print()" id="print">Print or Save Form</button>
</center>
</form>
</body>
<?php
	 if(isset($_POST['submit1'])){
// studentgeneraldetail
  $fname=$_POST['Firstname'];
  $lname=$_POST['Lastname'];
  $mname=$_POST['Middlename'];
  $add=$_POST['add'];
  $bday=$_POST['Bday'];
  $bplace=$_POST['Bplace'];
  $rel=$_POST['Religion'];
  $sex=$_POST['sex'];//auto
  $st=$_POST['civstat'];//auto
  $citez=$_POST['Citezenship'];
  $num=$_POST['Number'];
  $sname=$_POST['NameofSpouse'];//optional
  $snum=$_POST['NumofSpouse'];//optional
  $studtype=$_POST['studenttype'];//auto
// studentprivatedetail
  $faname=$_POST['fathername'];
  $moname=$_POST['mothername'];
  $fadd=$_POST['fatheradd'];
  $madd=$_POST['motheradd'];
  $fnum=$_POST['fathernum'];
  $mnum=$_POST['mothernum'];
  $fwork=$_POST['fatherwork'];
  $mwork=$_POST['motherwork'];
  $feduc=$_POST['fathereduc'];
  $meduc=$_POST['mothereduc'];
  $gname=$_POST['guardian'];
  $gadd=$_POST['guardianadd'];
  $gnum=$_POST['guardiannum'];
  $grel=$_POST['relwithguardian'];
  $sibling=$_POST['sibling'];
// studenteducdetail
  $hs=$_POST['hs'];
  $hsyr=$_POST['yeargrad'];
  $shs=$_POST['shsstrand'];//optional
  $college=$_POST['college'];//optional
  $genave=$_POST['genave'];
  $sem=$_POST['sem'];//optional
  $sy=$_POST['schoolYear'];//optional
  $yrlvl=$_POST['yearlevel'];//optional
  $crs=$_POST['course'];//optional
  $first=$_POST['first'];
  $second=$_POST['second'];
  $third=$_POST['third'];
  $date= Date('Y-m-d H:i:s');
// insert function
  // filter 
   $res=mysqli_query($link,"select * from studentdetail where LastName='$lname' and FirstName='$fname' and MiddleName='$mname'");
   if ($res->num_rows > 0) {
     echo "<script>alert('Student file already Exists! Please Contact the Management');</script>";
   }elseif($fname=="" || $mname=="" || $lname=="" || $add=="" || $bday=="" || $bplace=="" || $rel=="" || $citez=="" || $num=="" || $faname=="" || $moname=="" || $fadd=="" || $madd=="" || $fnum=="" || $mnum=="" || $fwork=="" || $mwork=="" || $feduc=="" || $meduc=="" || $gname=="" || $gadd=="" || $gnum=="" || $grel=="" || $sibling=="" || $hs=="" || $hsyr=="" || $genave==""){
    echo "<script> alert('Please Fill Out the Entire Form'); </script>";
  }else{
  $query="insert into studentdetail(LastName, FirstName, MiddleName, CompleteAddress, DateofBirth, BirthPlace, Religion, Sex, CivilStatus, StudentType, Citezenship, CellphoneNumber, NameofSpouse, ContactNoofSpouse,FatherName, MotherName, FatherAdd, MotherAdd, FatherNum, MotherNum, FatherOccupation, MotherOccupation, FatherEdAttainment, MotherEdAttainment, GuardianName, RelwithGuardian, GuardianAdd, ContactNum, NoofSiblings, NameofHighSchool, YearGraduated, GenAve, SHSStrand, CollegeName, LastSemAttended,LastYearAttended, YearLevel, Course, firstChoice, secondChoice, thirdChoice, DateFilledUp, Campus)
  values('$lname', '$fname', '$mname', '$add', '$bday', '$bplace', '$rel','$sex', '$st', '$studtype', '$citez', '$num','$sname', '$snum', '$faname', '$moname', '$fadd', '$madd', '$fnum', '$mnum', '$fwork','$mwork', '$feduc', '$meduc', '$gname', '$grel','$gadd', '$gnum', '$sibling', '$hs', '$hsyr', '$genave', '$shs', '$college', '$sem', '$sy', '$yrlvl', '$crs', '$first', '$second', '$third', CURRENT_TIMESTAMP, 'bayambang')";

    mysqli_query($link,$query);//insertGeneralInfo
  // $query1="insert into studentprivatedetail( )
  // values()";
  //   mysqli_query($link,$query1);//insertPrivateInfo
  //   $query2="insert into studenteducdetail()
  // values()";
  //   mysqli_query($link,$query2);//insertEducInfo
    // if (mysqli_query()) {
      echo "<script>alert('File Submitted! ');</script>";
    mysqli_query($link,"select entryNum from studentgeneraldetail where Lastame='$lname' and FirstName='$fname' and MiddleName='$mname'");
    echo "<script>alert('Your Entry number is".$row['entryNum']." ');</script>";
    echo "<script>window.location.href='index.php';</script>";
    // }else{
    //   echo "<script>alert('error in query');</script>";
    // }
    
  }
}
?>
</html>