
 
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<style>
input[type=text] {
  border: none;
  border-bottom: 1px solid black;
}
input[type=tel] {
  border: none;
  border-bottom: 1px solid black;
}
div.card {
    border-radius: 15px 50px 30px 5px;
  box-shadow: 0 4px 6px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  
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
#pat{
    width:100px;
}

</style>
<body>
    <div class="jumbotron jumbotron-fluid" style="color:white; background:url(img/jum.jfif) no-repeat; background-size:cover; opacity:1; height:300px;">
        <div class="container">
            <h1 class="display-4">Welcome</h1>
            <p class="lead">XYZ  hospital</p>
            
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="list-group" style="box-shadow: 0 4px 6px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                    <a class="list-group-item active ">Patient</a>
                    <a class="list-group-item click" href="listofpatients.php?by=<?php echo "0"; ?>">Patient details</a></h3>
                    <a class="list-group-item click" href="appointment.php">Appointment</a>
                    <a class="list-group-item click" href="appointmentlist.php?">Appointment list</a>

                    <!--<a class="list-group-item click" href="searchP.php">Search Patient</a>-->
                </div>
                <br>
                <div class="list-group" style="box-shadow: 0 4px 6px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                    <a class="list-group-item active ">Staff</a>
                    <a href="staff.php" class="list-group-item ">Add New Staff</a>
                    <a href="listofstaff.php" class="list-group-item ">Staff Details</a>
                    <!-- <a class="list-group-item click" href="searchD.php">Search Staff</a>-->
                    
                </div>
                <br>
                <div class="list-group" style="box-shadow: 0 4px 6px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                    <a href="" class="list-group-item active ">Doctor</a>
                    <a href="doctor.php" class="list-group-item ">Add Doctor</a>
                    <a class="list-group-item click" href="listofdoctors.php?by=<?php echo "0"; ?>">Doctor details</a></h3>
                  
                </div>
                <br>
                <div class="list-group" style="box-shadow: 0 4px 6px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                    <a href="" class="list-group-item active ">Records</a>
                    <a href="medical.php" class="list-group-item">Add record</a>
                    <!--<a href="search.php" class="list-group-item">Search record</a>-->
                    <a class="list-group-item click" href="medicalrecords.php?by=<?php echo "0"; ?>">Medical Records</a>
                </div>
                <br>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body" style="background-color: #3498DB; color:#ffffff; height:min-content">
                        <h3>Patient Registration</h3>
                    </div>
                    <div class="card-body">

                        <form id="myFormId" class="form-group" action="login.php" method="post">
                            <table cellpadding=9>
                            <tr>
                                    
                                    <td>Patient Id:</td><br>
                                     <td><input type="text" name="pat_id" id="pat" class="form-control" maxlength="5"><br></td>
                                </tr>
                                <tr>
                                    
                                    <td>First Name:</td>
                                    <td> <input type='text' name="fname" placeholder="Enter your First Name" required><br><br> </td>

                                    <td>Last Name:</td>
                                    <td> <input type='text' name="lname" placeholder="Enter your last Name" required><br><br> </td>
                                </tr>
                                <tr>
                                    <td>Age:</td>
                                    <td> <input type='tel' name="age" placeholder="Enter your age" required><br><br> </td>

                                    <td>Weight:</td>
                                    <td> <input type='tel' name="weight" placeholder="Enter your weight" required><br><br> </td>
                                </tr>
                                <tr>
                                    <td>Gender</td>
                                    <td><input type="radio" name="gender" value="M" checked> Male
                                        <input type="radio" name="gender" value="F"> Female
                                        <input type="radio" name="gender" value="O"> Other
                                    </td>

                                    
                                </tr>
                                <tr>
                                    <td>Phone No:</td>
                                    <td><input type="tel" name="phoneNo" placeholder="number" maxlength="10"  required> </td>
                                    <td>Disease:</td>
                                    <td> <input type="text" name="disease" placeholder="give disease"> </td>
                                </tr>

                                <tr>
                                    <td>Address : </td>
                                    <td><textarea name="address" cols="40" rows="6" placeholder="Enter your Address" required maxlength="100"></textarea></td>

                                    
                                </tr>
                                <tr>
                                    <td><input class="btn btn-primary" type="submit" name="psubmit" value="Submit"></td>
                                    <td><input class="btn btn-secondary" type="reset" name="reset" value="Reset" onclick="resetForm('myFormId'); return false;"></td>
                                </tr>
                                    
                            </table>
                            
                            </form>
                            </div></div></div>
                            <br>


                            <div class=" col-md-12" style="padding-left:330px;">
                                
                                
                                
                                
                                    
                                

                          
                    </div>


                </div>

            </div>

        </div>

    </div>






    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min">
</body>
<script type="text/javascript">
    function resetForm(myFormId) {
        var myForm = document.getElementById(myFormId);

        for (var i = 0; i < myForm.elements.length; i++) {
            if ('submit' != myForm.elements[i].type && 'reset' != myForm.elements[i].type) {
                myForm.elements[i].checked = false;
                myForm.elements[i].value = '';
                myForm.elements[i].selectedIndex = 0;
            }
        }
    }
</script>

</html>