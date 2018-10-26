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
  values('$lname', '$fname', '$mname', '$add', '$bday', '$bplace', '$rel','$sex', '$st', '$studtype', '$citez', '$num','$sname', '$snum', '$faname', '$moname', '$fadd', '$madd', '$fnum', '$mnum', '$fwork','$mwork', '$feduc', '$meduc', '$gname', '$grel','$gadd', '$gnum', '$sibling', '$hs', '$hsyr', '$genave', '$shs', '$college', '$sem', '$sy', '$yrlvl', '$crs', '$first', '$second', '$third', CURRENT_TIMESTAMP, '$campus')";

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