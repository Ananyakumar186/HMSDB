<?php
include("login.php");
error_reporting(0);
$mn = $_GET['sn'];
$query = "DELETE FROM nurse WHERE nur_id='$mn'";
$query_str = mysqli_query($con, $query);

if ($query_str) {
    echo "<script>alert('Record Deleted')</script>";
?>

    <META HTTP-EQUIV="Refresh" CONTENT="0 ;URL=http://localhost/hospital-management/listofstaff.php?by=0">

<?php
} else {
    echo "delete fail";
}
?>