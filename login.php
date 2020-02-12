<!DOCTYPE html>
<?php
include_once('connect.php');

$error=false;

if(isset($_POST['submit'])){

$password=($_POST['password']);
$userid=($_POST['userid']);
if(!$error){

$sql="SELECT*FROM election3 WHERE userid='$userid' AND password='$password' LIMIT 1"; //check for present of userid and password in a database for login

$result=mysqli_query($con,$sql);

 if(mysqli_num_rows($result)!=1){
     $error=true;
     $errorlogin="invalid username and password";
 }
 else{
    header('location:homepage.html'); //redirect to homepage after succesfully check

 }
}
}
?>

<html>
    <head><title>login</title>
    <link rel="stylesheet" href="bootstrap2/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/signup.css">
</head>
    <body>

    <h1 align="center">OVS LOGIN</h1>
    <form action="login.php" method="POST">
        <div align="center" class="form-group">
        
            <label for="userid">User ID</label>
            <input type="text" class="form-control" id="userid" name="userid" style="width: 300px" required>
        </div>

        <div align="center" class="form-group">
            <label for="password">password</label>
            <input type="password" class="form-control" id="password" style="width: 300px" name="password" required>
            <span class="text-danger"><?php if(isset($errorlogin)) echo $errorlogin; ?></span>

        </div>

        <div align="center">
            <button type="submit" name="submit" class="btn btn-primary">submit</button>
        </div>
    </form>

    <p align="center">don't have an account <a href="signup.php">sign up</a></p>

    </body>
</html>