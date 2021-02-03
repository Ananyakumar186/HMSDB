
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
input[type=tel] {
  border: none;
  border-bottom: 1px solid black;
}
input[type=date] {
  border: none;
  border-bottom: 1px solid black;
}
input[type=number] {
  border: none;
  border-bottom: 1px solid black;
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
#record{
    border-radius: 15px 50px 30px 5px;
}
div.card {
  
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  
}
.dropbtn {
background-color: white;
  color: black;
  padding: 16px;
  font-size: 16px;
  border: none;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 200px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {background-color: #3498DB;}
</style>
<body style="background:url(img/doctor.jfif) no-repeat;background-size:cover; opacity:1;padding-top:20px;">
<div class="dropdown">
  <button class="dropbtn">Patient
  <i class="fa fa-caret-down"></i></button>
  <div class="dropdown-content">
    <a href="admin-panel.php">Patient Reg</a>
    <a href="listofpatients.php">Patient List</a>
    
  </div>
</div>
<div class="dropdown">
  <button class="dropbtn">Doctor
  <i class="fa fa-caret-down"></i></button>
  <div class="dropdown-content">
    <a href="doctor.php">Add Doctor</a>
    <a href="listofdoctors.php">Doctor List</a>
    
  </div>
</div>
<div class="dropdown">
<button class="dropbtn">Appointment
  <i class="fa fa-caret-down"></i></button>
  <div class="dropdown-content">
    <a href="appointment.php">Add Appointment</a>
    <a href="appointmentlist.php">Appointment list</a>
    
  </div>
</div>
<div class="dropdown">
<button class="dropbtn">Staff
  <i class="fa fa-caret-down"></i></button>
  <div class="dropdown-content">
    <a href="staff.php">Add Staff </a>
    <a href="listofstaff.php">Staff list</a>
    
  </div>
</div>
</div>
</div>
<div class="container" style="width:max-content; ">
<div class="card" id="record">
<div class="card-body" style="background-color: #3498DB; color:#ffffff; height:fit-content">
        <h3>Medical Record</h3>
        </div>
                             <div class="card-body">
                             <form id="myFormId" class="form-group" action="login.php" method="post">
                               <table cellpadding=10>
                               <tr> <td>Record Id:</td>
                                    <td><input type="text" name="record_id" class="form-control"  maxlength="5"></td>
                                     <td>Patient name:</td><br>
                                       <td><input type="text" name="fname" class="form-control" id="fname"><br></td>
                                       <td><input type="text" name="lname" class="form-control" id="lname"><br></td>

                                       
                                </tr>
                                <tr>
                               <td><label>Doctor Id:</label><br></td>
                                       <td><input type="text" name="doc_id" class="form-control"  maxlength="5"><br></td>
                                    <td>Admission date: </td>
                                    <td> <input type="date" name="admDate" maxlength="10" class="form-control"> </td>
                                </tr>
                                <tr>
                                    <td>Discharge date: </td>
                                    <td> <input type="date" name="disDate" maxlength="10" class="form-control"> </td>
                                    <td>Medicines:</td>
                                    <td><textarea type="text" cols="40" rows="6" name="medicine" placeholder="Medicines Given" maxlength="100"></textarea></td>
                                </tr>
                                <tr>
                                    <td>Room No: </td>
                                    <td> <input type="number" name="roomNo"> </td>
                                </tr>
                                <tr>
                                <td>Bed No:</td>
                                    <td> <input type="number" name="bedNo"> </td>
                                    <td>Illness:</td>
                                    <td><textarea cols="40" rows="6" type="text" name="infoillness" placeholder="Diesease info given here" maxlength="200"></textarea> </td>
                                    
                                    
                                </tr>
                                <tr>
                                    <td><input class="btn btn-primary" type="submit" name="msubmit" value="Add record"></td>
                                    <td><input class="btn btn-secondary" type="reset" name="reset" value="Reset" onclick="resetForm('myFormId'); return false;"></td>
                                </tr>
                            </table>    
                                </tr>
                                </div>
                               </div>
                        </form>                                 


</html>
</body>