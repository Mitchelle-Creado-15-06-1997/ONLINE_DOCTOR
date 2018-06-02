
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <meta name="author" content="">
    <title>PATIENT</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body class="fixed-nav sticky-footer bg-dark" id="page-top" style="background-image: url(logo.jpg);background-repeat: no-repeat;background-size: cover; color: white ">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg  fixed-top" id="mainNav" style="background-color: #003366 ; color: white">
      <a class="navbar-brand" href="main.html" style="color:white;">PATIENT</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive" style="background-color: #003366 ; color: white">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion" style="background-color: #003366 ; color: white">
          <li class="nav-item active" data-toggle="tooltip" data-placement="right" title="Dashboard">
            <a class="nav-link" href="patient.php">
              <i class="fa fa-fw fa-plus" style="color: white"></i>
              <span class="nav-link-text" style="color: white;"> 
                PATIENT</span>
            </a>
          </li>
          
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="doctor">
            <a class="nav-link" href="doctors_list_pat.php">
              <i class="fa fa-fw fa-search"></i>
              <span class="nav-link-text" style="color: white">
                DOCTORS LIST</span>
            </a>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
              <i class="fa fa-fw fa-envelope"></i>
              <span class="nav-link-text" style="color: white">
                FORUM</span>
            </a>
            <ul class="sidenav-second-level collapse" id="collapseComponents" style="color: white">
             
              <li>
                <a href="doctor_patient_forumpat.php">DOCTOR-PATIENT-FORUM</a>
              </li>
            </ul>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
            <a class="nav-link" href="profile_pat.php">
              <i class="fa fa-fw fa-user"></i>
              <span class="nav-link-text" style="color: white">
              PROFILE</span>
            </a>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
            <a class="nav-link" href="appoinments_pat.html">
              <i class="fa fa-fw fa-area-chart"></i>
              <span class="nav-link-text" style="color: white">
                APPOINMENTS</span>
            </a>
          </li>
            
              </li>
            </ul>
          </li>
         
        </ul>
        <ul class="navbar-nav sidenav-toggler">
          <li class="nav-item">
            <a class="nav-link text-center" id="sidenavToggler">
              <i class="fa fa-fw fa-angle-left"></i>
            </a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto" style="color: white">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle mr-lg-2" href="#" id="messagesDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-fw fa-envelope"></i>
              <span class="d-lg-none">Messages
                <span class="badge badge-pill badge-primary">12 New</span>
              </span>
              <span class="new-indicator text-primary d-none d-lg-block">
                <i class="fa fa-fw fa-circle"></i>
                <span class="number">12</span>
              </span>
            </a>
            <div class="dropdown-menu" aria-labelledby="messagesDropdown" >
              <h6 class="dropdown-header">New Messages:</h6>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
                <strong>David Miller</strong>
                <span class="small float-right text-muted">11:21 AM</span>
                <div class="dropdown-message small">Hey there! This new version of SB Admin is pretty awesome! These messages clip off when they reach the end of the box so they don't overflow over to the sides!</div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
                <strong>Jane Smith</strong>
                <span class="small float-right text-muted">11:21 AM</span>
                <div class="dropdown-message small">I was wondering if you could meet for an appointment at 3:00 instead of 4:00. Thanks!</div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
                <strong>John Doe</strong>
                <span class="small float-right text-muted">11:21 AM</span>
                <div class="dropdown-message small">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item small" href="#">
                View all messages
              </a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle mr-lg-2" href="#" id="alertsDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-fw fa-bell"></i>
              <span class="d-lg-none">Alerts
                <span class="badge badge-pill badge-warning">6 New</span>
              </span>
              <span class="new-indicator text-warning d-none d-lg-block">
                <i class="fa fa-fw fa-circle"></i>
                <span class="number">6</span>
              </span>
            </a>
            <div class="dropdown-menu" aria-labelledby="alertsDropdown">
              <h6 class="dropdown-header">New Alerts:</h6>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
                <span class="text-success">
                  <strong>
                    <i class="fa fa-long-arrow-up"></i>
                    Status Update</strong>
                </span>
                <span class="small float-right text-muted">11:21 AM</span>
                <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
                <span class="text-danger">
                  <strong>
                    <i class="fa fa-long-arrow-down"></i>
                    Status Update</strong>
                </span>
                <span class="small float-right text-muted">11:21 AM</span>
                <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
                <span class="text-success">
                  <strong>
                    <i class="fa fa-long-arrow-up"></i>
                    Status Update</strong>
                </span>
                <span class="small float-right text-muted">11:21 AM</span>
                <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item small" href="#">
                View all alerts
              </a>
            </div>
          </li>
          
          <li class="nav-item">
            <a href="index.php" class="nav-link" data-toggle="modal" data-target="#exampleModal">
              <i class="fa fa-fw fa-sign-out"></i>
              Logout</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="content-wrapper" style="background-color: #336699">

      <div class="container-fluid" style="background-color: #336699">

        <!-- Breadcrumbs -->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">

          </li>
          
        </ol>

        
      </div>
      <!-- /.container-fluid -->
   <!--  <center><img src="m/img/member6.jpg" style="width:200px; height:200px;"> -->
      </center>


<center ><h3>
<?php
require('config.php');
$query = "SELECT name, dise, age from patprofile";
$response = mysqli_query($con,$query);

$b = mysqli_query($con,"SELECT fname from patient ");
//$comp = mysqli_query($con,$b);
//$ema = $row['fname']
$a = mysqli_query($con,"SELECT email from patientinfo ");
//$compare = mysqli_query($con,$a);

 
//$b=$row['name'];
if ($response) {
  // echo "<table>
  // <tr><td><u>  name</u> </td>
  // <td> <u> spec</u> </td>
  // <td><u> age</u> </td>
  // </tr>";
  while($row=mysqli_fetch_array($response))
  {
    echo "<BR>Name:&nbsp".$row['name']."<BR>Disease:&nbsp".$row['dise']."<BR>Age:&nbsp".$row['age']."<BR>";
  }
  echo "</table>";
  # code...
}
else{
  echo "could not use database querry";
  echo mysquli_error($con);

}
//mysqli_close($con);


$query = "SELECT * FROM documentss ";
$queryl = mysqli_query($con,$query);

while ($row = mysqli_fetch_array($queryl))
 {
  $path = $row['path'];
  $id= $row['id'];
  echo '<img src ="'.$path.'" width="100px" height="100px"/>';

}
  # code...

//$id = $_GET['id'];    WHERE id='$id'
$query =  "SELECT * from documentss";
$queryl = mysqli_query($con,$query);
while ($row = mysqli_fetch_array($queryl))
 {
  $path = $row['path'];
 // header('content-Disposition; attachment; filename = '.$path.'');
 // header('content-type;application/octest-stress');
 // header('content-length=' .filesize($path));
 // readfile($path);
  # code...
}



//$query = "SELECT * FROM patientinfo, patient WHERE  fname=email";

$query = "SELECT * FROM patientinfo";
$queryl = mysqli_query($con,$query);
//if($a === $b)
{
while ($row = mysqli_fetch_array($queryl))
 {
 	// $qu= "SELECT name FROM patientinfo "
 	// $re = mysqli_query($con,$qu);
$name = $row['name'];
  $path = $row['path'];
  $id= $row['id'];
  echo '<br><a href ="'.$path.'"  > '.$name.'</a>';
}
}
  # code...

//$id = $_GET['id'];    WHERE id='$id'
$query =  "SELECT * from patientinfo";
$queryl = mysqli_query($con,$query);
while ($row = mysqli_fetch_array($queryl))
 {
  $path = $row['path'];
 // header('content-Disposition; attachment; filename = '.$path.'');
 // header('content-type;application/octest-stress');
 // header('content-length=' .filesize($path));
 // readfile($path);
  # code...
}

 if(isset($_POST['sub']))
 {
 //include('connect.php');
 $id=$_POST['id'];

 $queryll = "Select status from users where id='$id' ";
 $data = mysqli_query($con,$queryll) or die (mysqli_error($con));
 while ($row = mysqli_fetch_array($data))
 {
  $sta = $row['status'];
}
if($id)
{
 if ($sta) {
		echo "<script type='text/javascript'>alert('your appoinment has been confirmed')</script>";
	//header('Location: appoinments_pat.html');
	}
	else echo "<script type='text/javascript'>alert('your appoinment has not been confirmed')</script>";
}
}
?>
</center></h3>

    </div>
    <!-- /.content-wrapper -->

    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright &copy; dbitians</small>
        </div>
      </div>
    </footer>

    <!-- Scroll to Top Button -->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up" style="background-color: white"></i>
    </a>

    <!-- Logout Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Select "Logout" below if you are ready to end your current session.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="index.php">Logout</a>
          </div>

        </div>
      </div>

    </div>
  <?php

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


