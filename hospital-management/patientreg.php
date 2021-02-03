<?php
include 'connect.php';

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
        echo "<script>window.open('listofpatients.php')</script>";
        
    
    }
    
       
    }      
        

else echo "please submit first";

?>