<?php
$server_name="localhost";
$user_name="root";
$password="";
$database="employee";
$connection=mysqli_connect($server_name,$user_name,$password,$database);
if($connection)
{
    echo"connection established";
}
else
{
    die("connection failed");

}

$name=$_POST["empname"];
$age=$_POST["age"];
$phone=$_POST["phonenumber"];
$address=$_POST["address"];
$sql="INSERT INTO employee_details(empname,age,phonenumber,address)VALUES($name','$age','$phone','$address')";
mysqli_query($connection,$sql);
mysqli_close($connection);