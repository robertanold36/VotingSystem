<!DOCTYPE html>
<?php
include_once('connect.php');
$error=false;

if(isset($_POST['submit'])){

$firstname=($_POST['fname']);
$lastname=($_POST['lname']);
$password=($_POST['password']);
$confirm=($_POST['confirm']);
$userid=($_POST['userid']);

if($confirm!=$password){
    $error=true;
    $errorConfirm="enter the match password";
}

if(!$error){

    //statement performed if connection is successfully

    $K="SELECT*FROM idnum WHERE userid='$userid'"; //check for userid present in idnum table before inserting 
    $Z=mysqli_query($con,$K);
    $count=mysqli_num_rows($Z);

    if($count==1){ //statement perfomed if userid is present in idnum table

        $select="SELECT*FROM election3 WHERE userid='$userid'"; //search if userid is already inserted in a table election3
        $result=mysqli_query($con,$select);
        $count=mysqli_num_rows($result);

        if($count==0){ //statement performed if userid is not present and data inserted in aelection3 table
    
        $db="INSERT INTO election3 (firstname,lastname,userid,password) VALUES ('$firstname','$lastname','$userid','$password')";

        
        if (mysqli_query($con, $db)) {
            echo "";
            header('location:login.php'); //redirect to login page is data is registerd successfully
            
        } else {
            echo "" . $db . "" . mysqli_error($con); 
            
        }
    }
    else{
        echo "".mysqli_error($con);
        $error=true;
        $erroruserid="userid registered";
    }
    }
    else{
        $error=true;
        $erroruserid="the userid not exist";
    }



}
mysqli_close($con);
}


?>
<html>

<head>
    <title>OVS signup</title>
    <link rel="stylesheet" href="bootstrap2/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/signup.css">

</head>

<body>
    <h1 align="center">OVS signup</h1>
    <form action="signup.php" method="POST">
        <div class="form-group" align="center">
            <label for="firstname">FIRST NAME</label>
            <input type="text" name="fname" class="form-control" id="fname" required style="width: 300px">
        </div>
        <div class="form-group" align="center">
            <label for="lastname"> LAST NAME</label>
            <input type="text" name="lname" class="form-control" id="lname" required style="width: 300px">
        </div>
        <div class="form-group" align="center">
            <label for="userid">User id</label>
            <input type="text" name="userid" class="form-control" id="userid" required style="width: 300px">
            <span class="text-danger"><?php if(isset($erroruserid)) echo $erroruserid; ?></span>
        </div>
        <div class="form-group" align="center">
            <label for="password"> PASSWORD</label>
            <input type="password" name="password" class="form-control" id="password" required style="width: 300px">
            
        </div>

        <div class="form-group" align="center">
            <label for="confirm_password">Confirm passowrd</label>
            <input type="password" name="confirm" class="form-control" id="confirm" required  style="width: 300px">
            <span class="text-danger"><?php if(isset($errorConfirm)) echo $errorConfirm; ?></span>
        </div>


        <div align="center">
            <button type="submit" name="submit" class="btn btn-primary">submit</button>

        </div>

    </form>
    <p align="center">have an account <a href="login.php">login</a></p>

</body>

</html>