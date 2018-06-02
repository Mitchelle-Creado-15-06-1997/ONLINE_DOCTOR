<?php
require('config.php');
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$query="INSERT into comment (name,email,phone,message) values('$name','$email','$phone','$message')";
$data=mysqli_query($con,$query) or die (mysqli_error($con));
if ($email!=null) 
{
if($data==true)
{
	echo "<script> alert('your query has been sent')</script>";
}
else
{
	echo "<script> alert('your query not been sent')</script>";
}
}
?>