<?php
#deletion of patient details
include("login.php");
error_reporting(0);
$mn = $_GET['sn'];
$query = "DELETE FROM PATIENT WHERE pat_id='$mn'";
$query_strp = mysqli_query($con, $query);

if ($query_strp) {
    echo "<script>alert('Patient Deleted')</script>";
?>

    <META HTTP-EQUIV="Refresh" CONTENT="0 ;URL=http://localhost/hospital-management/listofpatients.php?by=0">

<?php
} else {
    echo "delete fail";
}
?>

<?php #deletion of medical records ?>
<?php
include("login.php");
error_reporting(0);
$mn = $_GET['sn'];
$query = "DELETE FROM medicalrecord WHERE record_id='$mn'";
$query_str = mysqli_query($con, $query);

if ($query_str) {
    echo "<script>alert('Record Deleted')</script>";
?>

    <META HTTP-EQUIV="Refresh" CONTENT="0 ;URL=http://localhost/hospital-management/medicalrecords.php?by=0">

<?php
} else {
    echo "delete fail";
}
?>