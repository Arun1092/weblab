<?php
$server_name="localhost";
$user_name="root";
$password="";
$database="stud";
$connection=mysqli_connect($server_name,$user_name,$password,$database);
if ($connection)
{
 echo"connection successfully";   
}
else
{
    die('not connected');
}
$name=$_POST['name'];
$email=$_POST['email'];
$phno=$_POST['phno'];
$address=$_POST['address'];
$sql="INSERT INTO student_details(name,email,phno,address) VALUES('$name','$email','$phno','$address')";
mysqli_query($connection,$sql);
mysqli_close($connection);