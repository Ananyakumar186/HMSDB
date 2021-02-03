<?php
include("connect.php");

#login page
if(isset($_POST['submit'])){
	$username=$_POST['username'];
	$pass=$_POST['password'];
	$query="SELECT * FROM logintb WHERE username='$username' and password1='$pass'";
	$result=mysqli_query($con,$query);
	if($result==1){

		header("Location: admin-panel.php");
		exit;
	}
	else{
		echo "<script>alert('Error Login')</script>";
		echo "<script>window.open('index.php','_self')</script>";
	}

}



#for doctor database
if(isset($_POST['doc_submit'])){
	$doc_id=$_POST['doc_id'];
	$doc_name=$_POST['doc_name'];
	$phoneno=$_POST['phoneno'];
	$qualification=$_POST['qualification'];
	$area_of_exp=$_POST['area_of_exp'];
	$avail=$_POST['available'];
	$dquery="INSERT INTO doctor(doc_id,doc_name,phoneno,qualification,area_of_exp,available) VALUES('$doc_id','$doc_name','$phoneno','$qualification','$area_of_exp','$avail')";
	$result1=mysqli_query($con,$dquery);
	if($result1){
		echo "<script>alert('Doctor Added')</script>";
		header("Location: listofdoctors.php");
	}
	else{
		echo"<script>alert('error:incomplete details')</script>";
	}
}

#for nurse database
#initialize the variables
$nur_name = "";
$nur_phone = "";
$nur_quali="";
$nur_id = 0;
$update = false;


if (isset($_POST['save'])) {
	$nur_id=$_POST['nur_id'];
	$nur_name=$_POST['nur_name'];
	$nur_phone=$_POST['nur_phone'];
	$nur_quali=$_POST['nur_quali'];
	$nquery="INSERT INTO nurse VALUES('$nur_id','$nur_name','$nur_phone','$nur_quali')";

	$result2=mysqli_query($con,$nquery);
	if($result2){
		echo "<script>alert('Nurse Added')</script>";
		header("Location: listofstaff.php");
	}
	else{
		echo"<script>alert('error:incomplete details')</script>";;
	}
}



#for the patient database
if (isset($_POST['psubmit'])) {
    $pat_id=$_POST['pat_id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $age = $_POST['age'];
    $weight = $_POST['weight'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $phoneno = $_POST['phoneNo'];
    $disease = $_POST['disease'];
	$address = $_POST['address'];
	
    $q = "INSERT INTO PATIENT(pat_id,fname,lname,age,weight,gender,phoneNo,disease,address) VALUES('$pat_id','$fname','$lname','$age','$weight','$gender','$phoneno','$disease','$address')";
    $q_str = mysqli_query($con, $q);
    if ($q_str) {
        echo "<script>alert('patient registered  sucessfully')</script>";
        header("Location: listofpatients.php");
        
    
	}
	else{
		echo"<script>alert('error:incomplete details')</script>";
	}
}


#for updating the patient database
/*if(isset($_POST["update"])){

    $updatepatientsql = 
	
	if(mysqli_query($con,$updatepatientsql)){
		echo"<script>alert('Updated')</script>";
        header("Location: listofpatients.php?updated=1");
	}
	else{
		echo"<script>alert('error:could not update')</script>";
	}
}*/


#for medical record
if(isset($_POST['msubmit'])){
	
	$record_id=$_POST['record_id'];
	$fname1=$_POST['fname'];
	$lname1=$_POST['lname'];
	$do_id=$_POST['doc_id'];
	$admdate=$_POST['admDate'];
	$disdate=$_POST['disDate'];
	$roomno=$_POST['roomNo'];
	$bedno=$_POST['bedNo'];
	$infoillness=$_POST['infoillness'];
	$medicine=$_POST['medicine'];

	$mquery="INSERT INTO MEDICALRECORD VALUES('$record_id','$fname1','$lname1','$do_id','$admdate','$disdate','$roomno','$bedno','$infoillness','$medicine')";
		 
	$q_str=mysqli_query($con, $mquery);
	if ($q_str) {
		echo "<script>alert('medical record inserted)'</script>";
		header("Location: medicalrecords.php");

	}
	else{
		echo"<script>alert('error:incomplete details')</script>";
	}	 
}


#for updating the record database
if(isset($_POST["update"])){

    $updatemedicalsql = "CALL updateRecord('".$_POST["record_id"]."','".$_POST["fname"]."','".$_POST["lname"]."','".$_POST["admDate"]."','".$_POST["disDate"]."','".$_POST["roomNo"]."','".$_POST["bedNo"]."','".$_POST["medicine"]."','".$_POST["infoillness"]."')";
    if(mysqli_query($con,$updatemedicalsql)){
		echo"<script>alert('updated')</script>";
        header("Location: medicalrecords.php?updated=1");
	}
	else{
		echo"<script>alert('error:could not update')</script>";
		
	}
}


#for appointment database
if(isset($_POST['asubmit'])){
	$app_id=$_POST['app_id'];
	$pat_id=$_POST['pat_id'];
	$doc_id=$_POST['doc_id'];
	$admdate=$_POST['admDate'];

	$aquery="INSERT INTO appointment VALUES('$app_id','$pat_id','$doc_id','$admdate')";

	$a_str=mysqli_query($con,$aquery);
	if($a_str){
		echo "<script>alert('Appointment added)'</script>";
		header("Location: appointmentlist.php");
	}
	else{
		echo"<script>alert('error:incomplete details')</script>";
	}
}





?>