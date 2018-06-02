<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <meta name="author" content="">
    <title>MEDICO OTHAR</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body class="fixed-nav sticky-footer" id="page-top" style="background-color: #dedede">

    <!-- Navigation -->


    <?php
require('config.php');
$query = "SELECT name, email, phone,message from comment";
$response = mysqli_query($con,$query);
if ($response) {
  echo "<table>
  <tr><td><u>name</u> </td>
  <td> <u>email</u> </td>
  <td><u> phone</u> </td>
  <td><u> message</u> </td>
  </tr>";
  while($row=mysqli_fetch_array($response))
  {
    echo "<tr>
    <td>".$row['name']."</td>
    <td>".$row['email']."</td>
    <td>".$row['phone']."</td>
    <td>".$row['message']."</td>
    <tr>";
  }
  echo "</table>";
  # code...
}
else{
  echo "could not use database querry";
  echo mysquli_error($con);

}
mysqli_close($con);
?>
       
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/sb-admin.min.js"></script>

  </body>

</html>
