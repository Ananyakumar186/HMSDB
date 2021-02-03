
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
#staff{
    border-radius: 15px 50px 30px 5px
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
<body style="background:url(img/5.jfif) no-repeat;background-size:cover; opacity:1; padding-top:20px;">
<div class="dropdown">
  <button class="dropbtn">Patient
  <i class="fa fa-caret-down"></i></button>
  <div class="dropdown-content">
    <a href="admin-panel.php">Home</a>
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
<button class="dropbtn">Medicalrecord
  <i class="fa fa-caret-down"></i></button>
  <div class="dropdown-content">
    <a href="medical.php">Add Medicalrecord</a>
    <a href="medicalrecords.php">Record list</a>
    
  </div>
</div>
<div class="dropdown">
<button class="dropbtn">Appointment
  <i class="fa fa-caret-down"></i></button>
  <div class="dropdown-content">
    <a href="appointment.php">Add Appointment </a>
    <a href="appointmentlist.php">Appointment list</a>
    
  </div>
</div>
</div>
</div>
<div class="container" style="width:max-content; margin-top:100px">
    <div class="card" id="staff">
        <div class="card-body" style="background-color: #3498DB; color:#ffffff; height:fit-content">
            <h3>Add Nurse</h3>
        </div>
        <div class="card-body">
            <form class="form-group" action="login.php" method="post" style="padding-left:4px; padding-right:4px;">
                <center>
                <table cellpadding=15>
                <tr>
                <td>Nurse Id:</td>
                <td><input type="text" name="nur_id" class="form-control"></td>
                <td>Nurse Name:</td>
                <td><input type="text" name="nur_name" class="form-control" ></td>
                </tr>

                <tr>
                <td>Phoneno:</td>
                <td><input type="tel" name="nur_phone" class="form-control" required maxlength="11" ></td>
                <td>Qualification:</td>
                <td><input type="text" name="nur_quali" class="form-control" ></td>
                </tr>
                <tr>
                <td><button class="btn btn-primary" type="nur_submit" name="save">Add nurse</button></td>
                <td><input class="btn btn-secondary" type="reset" name="reset" value="Reset" onclick="resetForm('myFormId'); return false;"></td>
                </tr>
                </table>
                </center>
            </form>
        </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min">
</body>

</html>