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
<h3>Mentee Info</h3>   


   
<div class="col-md-10">
<form name="form1" action="menteeinfo.php" method="post">
<div class="form-group">
    <label for="pwd">Select Mentee</label>
    <select class="form-control" name="mentee" onchange='this.form.submit()'>
        <?php
        $strx=$_COOKIE['loggedin'];
        $result = mysqli_query($conn,"SELECT * FROM studtbl s,mentorass m WHERE m.menteeid=s.studid AND m.mentorid='$strx'");
        echo "<option value=\"".$row["studid"]."\">".$row["studname"]."</option>";
        while($row = mysqli_fetch_array($result)) {
            echo "<option value=\"".$row["studid"]."\">".$row["studname"]."</option>";
        }
        ?>  
        </select>
  </div>
  </form>



  <?php
if(isset($_POST["mentee"])){
   $sxr=$_POST["mentee"];
    $result = mysqli_query($conn,"SELECT * FROM studinftbl WHERE studid='$sxr'");
while($row = mysqli_fetch_array($result)){
  echo "<img src=\"uimgs/".$row["photo"]."\" height=80 width=80><br>";
  echo "Stud ID:".$row["studid"]."<br>";
  echo "Student Name:".$row["studname"]."<br>";
  echo "Student's Branch:".$row["branch"]."<br>";
  echo "Appeared for IIT:".$row["iitentr"]."<br>";
  echo "Medium of Instructions:".$row["medofinc"]."<br>";
  echo "Mobile No:".$row["mobno"]."<br>";
  echo "Residential phno:".$row["resphno"]."<br>";
  echo "Student Residential Addr:".$row["resaddr"]."<br>";
  echo "Emergency Contact No:".$row["emgrcon"]."<br>";
  echo "Relation with Contact:".$row["relcon"]."<br>";
  echo "Emergency Addr:".$row["emgaddr"]."<br>";
  echo "Emergency Tel:".$row["emgtel"]."<br>";
  echo "Email:".$row["email"]."<br>";
  echo "Siblings Education:".$row["sibedu"]."<br>";
  echo "Family Background:".$row["fambgr"]."<br>";
  echo "Income:".$row["income"]."<br>";
  echo "Preferred Mode of Transport:".$row["modtrav"]."<br>";
  echo "Native Place:".$row["nativpl"]."<br>";
  echo "Frequency of Visiting native Place:".$row["freqnativ"]."<br>";
  echo "Medical History:".$row["medhist"]."<br>";
  echo "Hobby:".$row["hobby"]."<br>";
  echo "Strength:".$row["strength"]."<br>";
  echo "Weakness:".$row["weakness"]."<br>";
}
    
}
?>





</div>



</div>

</body>
</html>
