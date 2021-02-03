<?php
include("connect.php");
?>
<!DOCTYPE html>
<html>

<head>

    <title>List Of Doctor </title>

    <style type=text/css> 
      #doctor {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#doctor td, #doctor th {
  border: 1px solid #ddd;
  padding: 8px;
}

#doctor tr:nth-child(even){background-color: #f2f2f2;}

#doctor tr:hover {background-color: #ddd;}

h3{
    
  text-align: center;
  background-color: #3498DB;
  color: white;
}

#doctor th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #3498DB;
  color: white;
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
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
              <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        </head> 
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
  <button class="dropbtn">Appointment
  <i class="fa fa-caret-down"></i></button>
  <div class="dropdown-content">
    <a href="appointment.php">Add Appointment</a>
    <a href="appointmentlist.php">Appointment List</a>
    
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
<button class="dropbtn">Staff
  <i class="fa fa-caret-down"></i></button>
  <div class="dropdown-content">
    <a href="staff.php">Add Staff </a>
    <a href="listofstaff.php">Staff list</a>
    
  </div>
</div>
</div>
</div>
     <form method="POST" name="lod">
        <div class="card">
            <div class="card-body" style="background-color: #3498DB; color:#ffffff; height:100px;padding-top:10px">
            <a href="admin-panel.php"></a>
                <center>    
                <h3 class="heading"> List of Doctor : </h3>
                </center>
            </div> 
                <center>
                <div class="card-body"> 
                <table cellpadding="15" id="doctor">
                <th>SL.No</td>
                <th>doctor_ID</th>
                <th>Doctor_Name</th>
                <th>Phone no</th>
                <th>Qualification</th>
                <th>Expertize</th>
                <th>Available</th>
                <!--<th>nurse_appointed</th>-->
                <th>Action</th>
                </center>
                <tr>
      </form>
<?php

        $query_str = mysqli_query($con, "select * from DOCTOR");

    $count = 0;

    while ($data = mysqli_fetch_assoc($query_str)) {

        $count = $count + 1;
        echo "
        <tr>
        <td> " . $count . "</td>
        <td> " . $data['doc_id'] . " </td>
        <td> " . $data['doc_name'] . " </td>
        <td> " . $data['phoneno'] . " </td>
        <td> " . $data['qualification'] . " </td>
        <td> " . $data['area_of_exp'] . " </td>
        <td> " . $data['available'] . " </td>
        
       <td><a href='deleteD.php?sn=$data[doc_id]'onclick='return checkdelete()'> <i class='material-icons' style='font-size:18px'>delete</i> </td>
       <!--<td><a href='editD.php?sn=$data[doc_id] 'onclick='return checkEdit()'> Edit </td>-->
        </tr>"

?>
        <?php
    }
        ?>

    

   


</table>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min">
</body>

<script type="text/javascript">
	
function checkdelete()
{
	return confirm('Are  you sure to delte the data???');
}
function checkEdit()
{
    return confirm('Are you sure you want to edit the data???');
}

</script>
</html>