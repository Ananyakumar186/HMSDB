<?php
require('connect.php');
$id = $_REQUEST['sn'];
$query = "SELECT * from nurse where nur_id='$id'";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Update Record</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
    <div class="card">
        <div class="card-body" style="background-color: #3498DB; color:#ffffff; height:min-content">
            <center>
                <h1>Update Record</h1>
            </center>
        </div>
        
            <div class="card-body">
                <form class="form-group" method="post" style="padding-left:4px; padding-right:4px;">
                    <input type="hidden" name="new" value="1" />
                    <input name="id" type="hidden" value="<?php echo $row['nur_id']; ?>" />
                    <p><input type="text" class="form-control" name="nur_name" placeholder="Enter Name" required value="<?php echo $row['nur_name']; ?>" /></p>
                    <p><input type="text" class="form-control" name="nur_phone" placeholder="Enter Phone" required value="<?php echo $row['nur_phone']; ?>" /></p>
                    <p><input type="text" class="form-control" name="nur_quali" placeholder="Enter Qualification" required value="<?php echo $row['nur_quali']; ?>" /></p>
                    <p><input name="update" type="submit" value="Update" /></p>
                    
                </form>
            </div>
        
    </div>
    </div>
</body>

</html>