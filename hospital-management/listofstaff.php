<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>List of Staff</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<style type=text/css> 
      #nurse {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#nurse td, #nurse th {
  border: 1px solid #ddd;
  padding: 8px;
}

#nurse tr:nth-child(even){background-color: #f2f2f2;}

#nurse tr:hover {background-color: #ddd;}

h3{
    
  text-align: center;
  background-color: #3498DB;
  color: white;
  padding-bottom:10px;
}

#nurse th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #3498DB;
  color: white;
}      
#home{
  color:white;
  width:5px;
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
 <body>
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
    <?php
    include("connect.php");
    $results = mysqli_query($con, "SELECT * FROM nurse"); ?>
 <div class="card">
                    <div class="card-body" style="background-color: #3498DB; color:#ffffff;height:100px">
                    <a href="admin-panel.php"></a>
                     <center>    
                    <h3 class="heading">List of staff :</h3>
                     </center>
                    </div>
                    <div class="card-body"> 
                     <table id="nurse">
                      <thead>
                        <tr>
                            <th>Nurse_Id</th>
                            <th>Nurse Name</th>
                            <th>Nurse Phone</th>
                            <th>Qualification</th>
                            <th>Action</th>
                        </tr>
                    </thead>

    <?php while ($data = mysqli_fetch_array($results)) { 
        
        echo "
        <tr>
        
        <td> " . $data['nur_id'] . " </td>
        <td> " . $data['nur_name'] . " </td>
        <td> " . $data['nur_phone'] . " </td>
        <td> " . $data['nur_quali'] . " </td>
        <td><a href='deleteN.php?sn=$data[nur_id]' onclick='return checkdelete()'> <i class='material-icons' style='font-size:18px'>delete</i> </td>
        </tr>"
     ?>
        <?php
    }
        ?>
</table>
</body>

<script type="text/javascript">
  
function checkdelete()
{
  return confirm('Are  you sure to delete the data???');
}

function checkEdit()
{
    return confirm('Are you sure you want to edit the data???');
}

</script>