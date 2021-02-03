
<?php
//fetch.php
include("connect.php");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($con, $_POST["query"]);
 $query = "
  SELECT * FROM medicalrecord 
  WHERE record_id LIKE '%".$search."%'
  OR fname LIKE '%".$search."%' 
  OR lname LIKE '%".$search."%' 
  
 ";
}
else
{
 $query = "
  SELECT * FROM medicalrecord ORDER BY record_id
 ";
}
$result = mysqli_query($con, $query);
if(mysqli_num_rows($result) > 0)
{
 echo '
  <div class="table-responsive">
   <table class="table table bordered" id="result">
    <tr>
    
    <th>Record_id</th>
    <th>Patient Name</th>
    <th>Doctor Id</th>
    <th>Admission date</th>
    <th>Discharge date</th>
    <th>Room No</th>
    <th>Bed No</th>
    <th>Medicines given</th>
    <th>Illness Report</th> 
    
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    
    <td>'.$row["record_id"].'</td>
    <td>'.$row["fname"].'
        '.$row["lname"].'</td>
    <td>'.$row["doc_id"].'</td>
    <td>'.$row["admDate"].'</td>
    <td>'.$row["disDate"].'</td>
    <td>'.$row["roomNo"].'</td>
    <td>'.$row["bedNo"].'</td>
    <td>'.$row["medicine"].'</td>
    <td>'.$row["infoillness"].'</td>
    
   </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}

?>