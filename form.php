<?php
$a=$_POST['fname'];
$b=$_POST['lname'];
$c=$_POST['emailid'];
$d=$_POST['pass'];
$e=mysqli_connect('localhost','root','','form1');
$f="INSERT INTO details(first_name,second_name,email,password)values('$a','$b','$c','$d')";

$r=mysqli_query($e,$f);

if($r)
echo"form submitted successfully";
else
echo"form not submiited";
?>