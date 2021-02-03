<?php
include("connect.php");

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>List of Records</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<style type=text/css> 
      #patient {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#patient td, #patient th {
  border: 1px solid #ddd;
  padding: 8px;
}

#patient tr:nth-child(even){background-color: #f2f2f2;}

#patient tr:hover {background-color: #ddd;}

h3{
    
  text-align: center;
  background-color: #3498DB;
  color: white;
}

#patient th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #3498DB;
  color: white;
}  

#home{
    color:white;
    
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
  align:center;
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
<body>
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
    <form method="POST" name="lop">
        <div class="card">
                    <div class="card-body" style="background-color: #3498DB; color:#ffffff; height:100px;padding-top:10px">
                    <a href="admin-panel.php"></a>
                     <center>    
                    <h3 class="heading">medical records:</h3>
                     </center>
                    </div>
                    <div class="card-body">   
                     <table  id="patient">
                     <tr>
                     <th>SL.No</td>
                     <th>Record_id</th>
                     <th>Patient Name</th>
                     <th>Doctor Id</th>
                     <th>Admission date</th>
                     <th>Discharge date</th>
                     <th>Room No</th>
                     <th>Bed No</th>
                     <th>Medicines given</th>
                     <th>Illness Report<th> 
                     
                     </tr>
        </div>
    </form>

    <?php
    
        $query_str = mysqli_query($con, "select * from medicalrecord");
        $count = 0;
        while ($data = mysqli_fetch_assoc($query_str)) {
            $count = $count + 1;
            echo "
	<tr>
	<td> " . $count . " </td>
	<td> " . $data['record_id'] . " </td>
  <td> " . $data['fname'] . " 
       " . $data['lname'] . " </td>
	<td> " . $data['doc_id'] . " </td>
	<td> " . $data['admDate'] . " </td>
	<td> " . $data['disDate'] . " </td>
	<td> " . $data['roomNo'] . " </td>
	<td> " . $data['bedNo'] . " </td>
	<td> " . $data['medicine'] . " </td>
    <td> " . $data['infoillness'] . " </td>
    <td><a href='medical.php?sn$data[record_id] onclick='return checkEdit()'> <i class='material-icons' style='font-size:18px'>create</i>
        <a href='update.php?sn=$data[record_id] '  onclick='return checkEdit()'> <i class='material-icons' style='font-size:18px'>update</i>
        <a href='deleteP.php?sn=$data[record_id]' onclick='return checkdelete()'><i class='material-icons' style='font-size:18px'>delete</i> </td>
        </tr>"
    ?>
    <?php
        }
      
    ?>
   </table>
   </body>
   </html>

    
    