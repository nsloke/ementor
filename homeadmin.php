<?php
require_once 'DbConnect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>


  <style type="text/css">
	.login-form {
		width: 340px;
    	margin: 50px auto;
	}
    .login-form form {
    	margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .btn {        
        font-size: 15px;
        font-weight: bold;
    }

input[type='number'] {
    -moz-appearance:textfield;
}
/* Webkit browsers like Safari and Chrome */
input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    margin: 0;
}
</style>




</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <img src="images/logo.png" alt="logo" >
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="homeadmin.php">Mentees</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="mentoradmview.php">Mentors</a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="assignmentor.php">Assign Mentors</a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="viewmentorass.php">View Mentorship</a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="logout.php">Logout</a>
    </li>
  </ul>
</nav>
<br>
<div class="container">
    
<div class="col-md-8">
<h3>Mentee</h3>
<a href="addmentee.php"><button type="button" class="btn btn-primary">Add Mentee</button></a><br><br>
<div class="table-responsive">
<table class="table table-hover">
    <thead>
      <tr>
        <th>Enrollment ID</th>
        <th>Student Name</th>
        <th>Department</th>
        <th colspan="2">Operation</th>
      </tr>
    </thead>
    <tbody>
    <?php
$result = mysqli_query($conn,"SELECT s.studid,s.studname,d.depname FROM studtbl s, depttbl d WHERE s.depid=d.depid");
while($row = mysqli_fetch_array($result)){
  echo "<tr>";
  echo "<td>".$row["studid"]."</td>";
  echo "<td>".$row["studname"]."</td>";
  echo "<td>".$row["depname"]."</td>";
  echo "<td><a href=\"editmentee.php?val=".$row["studid"]."\"><button type=\"button\" class=\"btn btn-primary\">Edit Info</button></a></td><td><a href=\"deletementee.php?val=".$row["studid"]."\"><button type=\"button\" class=\"btn btn-primary\">Delete Mentee</button></a></td>";
  echo "</tr>";
}
?>
     
    </tbody>
  </table>
</div>
<a href="addmentee.php"><button type="button" class="btn btn-primary">Add Mentee</button></a>
</div>  
</div>

</body>
</html>
