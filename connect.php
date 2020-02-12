<?php


$con=mysqli_connect('localhost','root','','election');

if(!$con){
    die('connection failed'.mysqli_connect_error());
}
