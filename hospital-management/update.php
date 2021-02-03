<?php
include("connect.php"); 
     $id = $_REQUEST['sn'];
     $medicalsql="SELECT * from medicalrecord WHERE record_id='$id'";
     $medicalresult=mysqli_query($con,$medicalsql);
    $medicalrow=mysqli_fetch_assoc($medicalresult);
       
    
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MedicalRecord</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<style>
#fname{ width:270px;}
#lname{ width:270px;}
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
        <h3>Medical Record</h3>
        </div>
                             <div class="card-body" style="align:center">
                             <form id="myFormId" class="form-group" action="login.php" method="post">
                             <table>
                                 
                            
                               <tr> 
                                    <input type="hidden" name="record_id" class="form-control"  maxlength="5" value="<?php echo $medicalrow["record_id"];?>"/>
                                    <br>
                                    <td>Patient Name</td>
                                    <td><input type="text" name="fname" class="form-control"value="<?php echo $medicalrow["fname"];?>" id="fname"></td>
                                    <td><input type="text" name="lname" class="form-control"value="<?php echo $medicalrow["lname"];?>" id="lname"></td>
                                       
                                </tr>
                                <tr>
                               
                                <td><input type="hidden" name="doc_id" class="form-control"  maxlength="5"value="<?php echo $medicalrow["doc_id"];?>"/><br></td>
                                    <tr>
                                    <td>Admission date: </td>
                                    <td> <input type="date" name="admDate" maxlength="10" class="form-control" value="<?php echo $medicalrow["admDate"];?>"/> </td>
                                </tr><br>
                                <tr>
                                    <td>Discharge date: </td>
                                    <td> <input type="date" name="disDate" maxlength="10" class="form-control" value="<?php echo $medicalrow["disDate"];?>"/> </td>
                                    <td>Medicines:</td>
                                    <td><textarea type="text" cols="40" rows="6" name="medicine" placeholder="Medicines Given" maxlength="100"><?php echo $medicalrow["medicine"];?></textarea></td>
                                </tr>
                                <tr>
                                    <td>Room No: </td>
                                    <td> <input type="number" name="roomNo" value="<?php echo $medicalrow["roomNo"];?>"/> </td>
                                </tr>
                                <tr>
                                <td>Bed No:</td>
                                    <td> <input type="number" name="bedNo" value="<?php echo $medicalrow["bedNo"];?>"/> </td>
                                    <td>Illness:</td>
                                    <td><textarea cols="40" rows="6" type="text" name="infoillness" placeholder="Diesease info given here" maxlength="200"><?php echo $medicalrow["infoillness"];?></textarea> </td>
                                    
                                    
                                </tr>
                                <tr>
                                    <td><input class="btn btn-primary" type="submit" name="update" value="Update"></td>
                                    <td><input class="btn btn-secondary" type="reset" name="reset" value="Reset" onclick="resetForm('myFormId'); return false;"></td>
                                </tr>
                             
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