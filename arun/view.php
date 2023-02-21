<?php
$server_name="localhost";
$user_name="root";
$password="";
$database="employee";
$connection=mysqli_connect($server_name,$user_name,$password,$database);
if ($connection)
{
 echo"connection successfully";   
}
else
{
    die('not connected');
}
$sql="SELECT * FROM employee_details";
$result=mysqli_query($connection,$sql);
if(mysqli_num_rows($result)>0)
{
echo "<table border=2><tr><th>sl_no</th>";
echo "<th>empname</th>";
echo "<th>age</th>";
echo "<th>phonenumber</th>";
echo "<th>address</th></tr>";
while($row=mysqli_fetch_assoc($result))
{
echo "<tr><td>$row[sl_no]</td>";
echo "<td>$row[empname]</td>";
echo "<td>$row[age]</td>";
echo "<td>$row[phonenumber]</td>";
echo "<td>$row[address]<td></tr>";
}
}
