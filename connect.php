<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'doctor');
define('DB_USER', 'root');
define('DB_PASS', '');

$dbcon = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME) or die("failed to connect to database:" .mysqli_error($con));
//echo"connected to db";


?>