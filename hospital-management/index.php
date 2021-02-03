<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<style type="text/css">
  #ab1:hover{cursor: pointer;}
  div.card {
  
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  }
  input[type=text] {
    
    border: none;
    border-bottom: 1px solid black;
  }
  input[type=password] {
    
    border: none;
    border-bottom: 1px solid black;
  }
  #staff{
    border-radius: 15px 50px 30px 5px;
}
h3{
    background-color:#3498DB;
    text-align:center;
    color:white;
    padding-top:12px;
    height:70px;

}

</style>
<body style="background: url(img/1.jpg) no-repeat; background-size: cover; ">
    <div class="container-fluid" style="width: 400px; margin-top:100px;">
        <div class="card" id="staff">
            
            <h3>Login</h3>
            
            <div class="card-body">
                <form class="form-group" action="login.php" method="post">
                    <label>Username:</label><br>
                    <input type="text" name="username" class="form-control" placeholder="enter username"><br>
                    <label>Password:</label><br>
                    <input type="password" name="password" class="form-control" placeholder="enter password"><br>
                    <input type="submit" name="submit"  id="ab1" class="btn btn-primary">
                </form>
            </div>

        </div>

    </div>







    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min">
</body>


</html>