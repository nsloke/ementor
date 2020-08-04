<?php
require_once 'DbConnect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Mentor Home</title>
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
      <a class="nav-link" href="homestaff.php">Scheduler</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="mentorfeedback.php">Mentor's Feedback</a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="transfermentee.php">Transfer Mentee</a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="viewmentees.php">View Mentees</a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="menteegraph.php">Mentee Graphs</a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="menteeinfo.php">Mentee Info</a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="mentornotif.php">Notifications</a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="logout.php">Logout</a>
    </li>
  </ul>
</nav>
<br>
<div class="container">
<h3>Transfer Mentee</h3>   


   
<div class="col-md-10">


<?php
 $strx=$_COOKIE['loggedin'];

    echo "<form action=\"savetransfermentor.php\" method=\"post\">";
    echo "<h3>Select Mentees to Transfer</h3><br>";
   
    echo "<table class=\"table table-hover\">";
    echo "<thead>";
    echo "<th style=\"width:20px;\">&nbsp;</th>";
    echo "<th>Mentees Name</th>";
    echo "</thead>";
    echo "<tbody>";
    $result = mysqli_query($conn,"SELECT s.studid,s.studname FROM studtbl s, mentorass m WHERE m.menteeid=s.studid AND m.mentorid='$strx'");
while($row = mysqli_fetch_array($result)){
  echo "<tr>";
  echo "<td><input type=\"checkbox\" name=\"chk_lst[]\" value=\"".$row["studid"]."\"></td>";
  echo "<td>".$row["studname"]."</td>";
  echo "</tr>";

}
    echo "</tbody>";
    echo "</table>";
    echo "<br><br>";

    echo "<div class=\"form-group\">";
    echo "<label for=\"pwd\">Select Mentor</label>";
    echo "<select class=\"form-control\" name=\"staffid\">";
       
        $result = mysqli_query($conn,"SELECT * FROM stafftbl WHERE depid=(SELECT depid FROM stafftbl WHERE staffid='$strx')");
        while($row = mysqli_fetch_array($result)) {
            echo "<option value=\"".$row["staffid"]."\">".$row["staffname"]."</option>";
        }
          
        echo "</select>";
    echo "</div>";
    
    echo "<button type=\"submit\" class=\"btn btn-primary\">Submit</button>";    
    echo "</form>";

?>





</div>



</div>

</body>
</html>
