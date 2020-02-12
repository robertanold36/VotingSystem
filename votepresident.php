<!DOCTYPE html>
<?php 
include_once('connect.php');
$error=false;
if(isset($_POST['submit'])){
$userid=$_POST['userid'];
$select=$_POST['president'];


$check="SELECT*FROM election3 WHERE userid='$userid'"; //check for present of entered userid in a database of table idnum
 $Z=mysqli_query($con,$check);
 $count=mysqli_num_rows($Z);

if($count==1){  //statement performed if userid entered is present in a database

   $id="SELECT*FROM president WHERE userid='$userid'"; //check if userid present before inserting data
   $result=mysqli_query($con,$id);
   $count=mysqli_num_rows($result);

   if($count==0){ //satement perfomed if userid is not present in table president
       $insert="INSERT INTO president (userid,president)
       VALUES ('$userid','$select')";

       if(mysqli_query($con,$insert)){ //the statement performed if data is inserted and update table candidate
           $update="UPDATE candidate SET candidate_votes=candidate_votes+1 WHERE candidate_name='$select'";

           if(mysqli_query($con,$update)){
               echo header('location:votesenetor.php'); //redirect to homepage if data is well updated
           }
           else{
               echo "not updated".mysqli_error($con);
           }
       }
       else{
           echo "not inserted".mysqli_error($con);
       }
   }
   else{
       $error=true;
       $erroruserid="the account is already vote";
   }

}
else{
    $error=true;
    $erroruserid="accont not exist";
}
}
mysqli_close($con);
?>
<html>

<head>
    <title>vote</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/pagecss.css">

    <meta charset="uft-8">
</head>

<body>
    <div class="head">
        <h1>ONLINE VOTING SYSTEM</h1>
    </div>
    <!-- navigation bar heade-->
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">OVS system</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="homepage.html">Home</a></li>
                <li><a href="candidete.html">candidate</a></li>
                <li><a href="votepresident.php">vote</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="result.html">result</a></li>

            </ul>
        </div>
    </nav>
    <!-- end of the navigation bar !-->

    <h1> Welcome to the voting platform..!</h1>
    <h2 align="center" style="color: darkkhaki">VOTE FOR PRESIDENT BY FILL THE FORM BELOW</h2>
    <form action="votepresident.php" method="POST">
        <div align="center" class="form-group">
            <label for="userid">User ID</label>
            <input type="text" class="form-control" id="userid" name="userid" style="width: 300px" required>
        </div>

        <div align="center" class="form-group">
            <label for="password">select</label>
            <select name="president" required style="width: 150px" class="form-control">
                    <option></option>
                    <option value="robert">robert</option>
                    <option value="jason">jason</option>
                    <option value="juma">juma</option>
        </select>
        <span class="text-danger"><?php if(isset($erroruserid)) echo $erroruserid; ?></span>
        </div>

        <div align="center">
            <button type="submit" name="submit" class="btn btn-primary">submit</button>
        </div>
    </form>




    
</body>

</html>