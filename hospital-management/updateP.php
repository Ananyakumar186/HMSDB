<?php
include("connect.php"); 
     $id = $_REQUEST['edit'];
     $patientsql="SELECT * from PATIENT WHERE pat_id='$id'";
     $patientresult=mysqli_query($con,$patientsql);
    $patientrow=mysqli_fetch_assoc($patientresult);
       
    
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Patient details</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<style>
input[type=tel] {
    
    border: none;
    border-bottom: 1px solid black;
  }
input[type=text] {
    
    border: none;
    border-bottom: 1px solid black;
  }
input[type=number] {
    
    border: none;
    border-bottom: 1px solid black;
  }
  input[type=date] {
    border: none;
    border-bottom: 1px solid black;
  }
  #staff{
      border-radius: 15px 50px 30px 5px;
  }
  div.card {
    
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    
  }
  textarea {
    width: 100%;
    height: 150px;
    padding: 12px 20px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color: #f8f8f8;
    resize: none;
  }
  </style>
<body style="background:url(img/doctor.jfif) no-repeat;background-size:cover; opacity:1">
<div class="container" style="width:max-content; margin-top:100px">
<div class="card">
<div class="card-body" style="background-color: #3498DB; color:#ffffff; height:min-content">
        <h3>Patient Details</h3>
        </div>
                             <div class="card-body" style="align:center">
                             <form id="myFormId" class="form-group" action="login.php" method="post">
                             <table cellpadding=9>
                                 
                            
                               <tr> 
                                    <input type="hidden" name="record_id" class="form-control"  maxlength="5" value="<?php echo $patientrow["pat_id"];?>"/>   
                                </tr>
                                <tr>
                               
                                <td>
                                    <tr>
                                    <td>First Name: </td>
                                    <td> <input type='text' name="fname" placeholder="Enter your First Name" value="<?php echo $patientrow["fname"];?>"/> </td>
                                
                                    <td>Last Name:</td>
                                    <td> <input type='text' name="lname" placeholder="Enter your last Name" value="<?php echo $patientrow["lname"];?>"/></td>
                                   </tr>
                                <tr>
                                    
                                    <td>Age:</td>
                                    <td> <input type='tel' name="age" placeholder="Enter your age" value="<?php echo $patientrow["age"];?>"/> </td>
                                    <td>Disease:</td>
                                    <td> <input type="text" name="disease" placeholder="give disease" value="<?php echo $patientrow["disease"];?>"/> </td>
                                </tr>
                                <tr>
                                   <!-- <td>Weight:</td>
                                    <td> <input type='tel' name="weight" placeholder="Enter your weight" value="<?php echo $patientrow["weight"];?>"/> </td>-->
                                    
                                </tr>
                                <tr>
                                    <td>Phone No:</td>
                                    <td> <input type="tel" name="phoneNo" maxlength="10" value="<?php echo $patientrow["phoneNo"];?>"/> </td>
                                    <td>Address : </td>
                                    <td><textarea name="address" cols="40" rows="6" placeholder="Enter your Address"  maxlength="100">"<?php echo $patientrow["address"];?></textarea></td>  
                                </tr>
                                <tr>
                                    <td><input class="btn btn-primary" type="submit" name="update" value="Update"></td>
                                    <td><input class="btn btn-secondary" type="reset" name="reset" value="Reset" onclick="resetForm('myFormId'); return false;"></td>
                                </tr>
                             
                                
                                </div>
                                </table>
                             </div>
                             </div>
                            </div>
                        </form> 

                        <?php   
       
      



?>

</body>
</html>