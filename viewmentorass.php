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
<h3>View Mentee and Mentor Pairs</h3>

<form name="form1" action="viewmentorass.php" method="post">
<div class="form-group">
    <label for="pwd">Select Mentor</label>
    <select class="form-control" name="staffid" onchange='this.form.submit()'>
        <?php
        $result = mysqli_query($conn,"SELECT * FROM stafftbl");
        echo "<option value=\"".$row["staffid"]."\">".$row["staffname"]."</option>";
        while($row = mysqli_fetch_array($result)) {
            echo "<option value=\"".$row["staffid"]."\">".$row["staffname"]."</option>";
        }
        ?>  
        </select>
  </div>
  
  </form>

  <?php
  if(isset($_POST["staffid"])){
    $stafid=$_POST["staffid"];  
    $resultx = mysqli_query($conn,"SELECT * FROM stafftbl WHERE staffid='$stafid'");
    while($rowx = mysqli_fetch_array($resultx)) {
        echo "<ul>";
        echo "<li>Mentor:".$rowx["staffname"]."</li>";
        $stid=$rowx["staffid"];
        $resulty = mysqli_query($conn,"SELECT * FROM mentorass m, studtbl s WHERE m.mentorid='$stid' AND s.studid=m.menteeid");        
        $ix=1;
        while($rowz = mysqli_fetch_array($resulty)){
           echo"<ul>";
           echo"<li>Mentee #".$ix.":".$rowz["studname"]."</li>";
           echo"</ul>";
           $ix=$ix+1;
        }
        echo "</ul>";
        echo "<a href=\"printpdf.php?val=".$stafid."\"><button class=\"btn btn-primary\" type=\"button\" >Print to PDF</button></a>";
    }
  }

  echo "<br><br>";
  echo "<a href=\"printallpdf.php\"><button class=\"btn btn-primary\" type=\"button\" >Print All Mentor-Mentee Pairs to PDF</button></a>";

  ?>
  

</div>  
</div>

</body>
</html>
