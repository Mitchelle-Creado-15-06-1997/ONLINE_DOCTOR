<!DOCTYPE html>
<html>
<head>
	<title>id</title>
</head>
<body>
<center><h1>
<?php
 if(isset($_POST['submit']))
 {
 include('connect.php');
 $pname=$_POST['pname'];
 $dname=$_POST['dname'];
 $email=$_POST['email'];
 $tel=$_POST['tel'];
// $sym=$_POST['sym'];
 $txtDate=$_POST['txtDate'];
 $txtTime=$_POST['txtTime'];
 
 $query = "INSERT INTO users (pname,dname,email,tel,txtDate,txtTime) VALUES ('$pname','$dname','$email','$tel','$txtDate','$txtTime')";
	$data = mysqli_query($dbcon , $query) or die (mysqli_error($con));
 
 if ($data) {
		$query1 = "select id from users where email='$email'";
	$data1 = mysqli_query($dbcon , $query1) or die (mysqli_error($con));
//echo"hello";php

echo"your appoinmmet Id is";	
 echo"<table>";
 //echo"<tr><th>ID</th></tr>";
 while($row=mysqli_fetch_array($data1,MYSQLI_ASSOC))
 { 
 	$roww=$row['id'];
 
	}


 echo $roww;
 
 }
}
 



?>
</h1>
</center>
<center><button>	<a href="appoinments_pat.html">back</a></button></center>
</body>
</html>