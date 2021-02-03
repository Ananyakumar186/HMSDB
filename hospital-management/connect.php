<?php

$servername = "localhost";
$user = "root";
$password = "agnious";
$dbname = "hmsdb";
$con =  mysqli_connect($servername, $user, $password, $dbname)
    or die('Could not connect to the database server' . mysqli_connect_error());
?>