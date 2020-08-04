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
<h3>Current Week Scheduler</h3>   


   
<div class="col-md-10">
<h4>Update/Add New Slot</h4>
<form action="savementorfreeslot.php" method="post">
<table class="table table-hover">
<tr>
    <td>&nbsp;</td>
    <td>Monday</td>
    <td>Tuesday</td>
    <td>Wednesday</td>
    <td>Thursday</td>
    <td>Friday</td>
</tr>
<tr>
    <td>9am to 10am</td>
    <td> 
        <select class="form-control" name="mon9to10">
            <option value="occupied">occupied</option>
            <option value="free">free</option>
        </select> 
    </td>
    <td> 
        <select class="form-control" name="tue9to10">
            <option value="occupied">occupied</option>
            <option value="free">free</option>
        </select> 
    </td>
    <td> 
        <select class="form-control" name="wed9to10">
            <option value="occupied">occupied</option>
            <option value="free">free</option>
        </select> 
    </td>
    <td> 
        <select class="form-control" name="thu9to10">
            <option value="occupied">occupied</option>
            <option value="free">free</option>
        </select> 
    </td>
    <td> 
        <select class="form-control" name="fri9to10">
            <option value="occupied">occupied</option>
            <option value="free">free</option>
        </select> 
    </td>
</tr>

<tr>
    <td>10am to 11am</td>
    <td> 
        <select class="form-control" name="mon10to11">
            <option value="occupied">occupied</option>
            <option value="free">free</option>
        </select> 
    </td>
    <td> 
        <select class="form-control" name="tue10to11">
            <option value="occupied">occupied</option>
            <option value="free">free</option>
        </select> 
    </td>
    <td> 
        <select class="form-control" name="wed10to11">
            <option value="occupied">occupied</option>
            <option value="free">free</option>
        </select> 
    </td>
    <td> 
        <select class="form-control" name="thu10to11">
            <option value="occupied">occupied</option>
            <option value="free">free</option>
        </select> 
    </td>
    <td> 
        <select class="form-control" name="fri10to11">
            <option value="occupied">occupied</option>
            <option value="free">free</option>
        </select> 
    </td>
</tr>


<tr>
    <td>11am to 12pm</td>
    <td> 
        <select class="form-control" name="mon11to12">
            <option value="occupied">occupied</option>
            <option value="free">free</option>
        </select> 
    </td>
    <td> 
        <select class="form-control" name="tue11to12">
            <option value="occupied">occupied</option>
            <option value="free">free</option>
        </select> 
    </td>
    <td> 
        <select class="form-control" name="wed11to12">
            <option value="occupied">occupied</option>
            <option value="free">free</option>
        </select> 
    </td>
    <td> 
        <select class="form-control" name="thu11to12">
            <option value="occupied">occupied</option>
            <option value="free">free</option>
        </select> 
    </td>
    <td> 
        <select class="form-control" name="fri11to12">
            <option value="occupied">occupied</option>
            <option value="free">free</option>
        </select> 
    </td>
</tr>


<tr>
    <td>12pm to 1pm</td>
    <td> 
        <select class="form-control" name="mon12to1">
            <option value="occupied">occupied</option>
            <option value="free">free</option>
        </select> 
    </td>
    <td> 
        <select class="form-control" name="tue12to1">
            <option value="occupied">occupied</option>
            <option value="free">free</option>
        </select> 
    </td>
    <td> 
        <select class="form-control" name="wed12to1">
            <option value="occupied">occupied</option>
            <option value="free">free</option>
        </select> 
    </td>
    <td> 
        <select class="form-control" name="thu12to1">
            <option value="occupied">occupied</option>
            <option value="free">free</option>
        </select> 
    </td>
    <td> 
        <select class="form-control" name="fri12to1">
            <option value="occupied">occupied</option>
            <option value="free">free</option>
        </select> 
    </td>
</tr>


<tr>
    <td>1pm to 2pm</td>
    <td> 
        <select class="form-control" name="mon1to2">
            <option value="occupied">occupied</option>
            <option value="free">free</option>
        </select> 
    </td>
    <td> 
        <select class="form-control" name="tue1to2">
            <option value="occupied">occupied</option>
            <option value="free">free</option>
        </select> 
    </td>
    <td> 
        <select class="form-control" name="wed1to2">
            <option value="occupied">occupied</option>
            <option value="free">free</option>
        </select> 
    </td>
    <td> 
        <select class="form-control" name="thu1to2">
            <option value="occupied">occupied</option>
            <option value="free">free</option>
        </select> 
    </td>
    <td> 
        <select class="form-control" name="fri1to2">
            <option value="occupied">occupied</option>
            <option value="free">free</option>
        </select> 
    </td>
</tr>



<tr>
    <td>2pm to 3pm</td>
    <td> 
        <select class="form-control" name="mon2to3">
            <option value="occupied">occupied</option>
            <option value="free">free</option>
        </select> 
    </td>
    <td> 
        <select class="form-control" name="tue2to3">
            <option value="occupied">occupied</option>
            <option value="free">free</option>
        </select> 
    </td>
    <td> 
        <select class="form-control" name="wed2to3">
            <option value="occupied">occupied</option>
            <option value="free">free</option>
        </select> 
    </td>
    <td> 
        <select class="form-control" name="thu2to3">
            <option value="occupied">occupied</option>
            <option value="free">free</option>
        </select> 
    </td>
    <td> 
        <select class="form-control" name="fri2to3">
            <option value="occupied">occupied</option>
            <option value="free">free</option>
        </select> 
    </td>
</tr>


<tr>
    <td>3pm to 4pm</td>
    <td> 
        <select class="form-control" name="mon3to4">
            <option value="occupied">occupied</option>
            <option value="free">free</option>
        </select> 
    </td>
    <td> 
        <select class="form-control" name="tue3to4">
            <option value="occupied">occupied</option>
            <option value="free">free</option>
        </select> 
    </td>
    <td> 
        <select class="form-control" name="wed3to4">
            <option value="occupied">occupied</option>
            <option value="free">free</option>
        </select> 
    </td>
    <td> 
        <select class="form-control" name="thu3to4">
            <option value="occupied">occupied</option>
            <option value="free">free</option>
        </select> 
    </td>
    <td> 
        <select class="form-control" name="fri3to4">
            <option value="occupied">occupied</option>
            <option value="free">free</option>
        </select> 
    </td>
</tr>


<tr>
    <td>4pm to 5pm</td>
    <td> 
        <select class="form-control" name="mon4to5">
            <option value="occupied">occupied</option>
            <option value="free">free</option>
        </select> 
    </td>
    <td> 
        <select class="form-control" name="tue4to5">
            <option value="occupied">occupied</option>
            <option value="free">free</option>
        </select> 
    </td>
    <td> 
        <select class="form-control" name="wed4to5">
            <option value="occupied">occupied</option>
            <option value="free">free</option>
        </select> 
    </td>
    <td> 
        <select class="form-control" name="thu4to5">
            <option value="occupied">occupied</option>
            <option value="free">free</option>
        </select> 
    </td>
    <td> 
        <select class="form-control" name="fri4to5">
            <option value="occupied">occupied</option>
            <option value="free">free</option>
        </select> 
    </td>
</tr>





</table>
<button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>

<div class="col-md-10">
  <div class="form-group">
    <label for="pwd">Currently Free Slots</label>
    <select class="form-control" name="depid">
        <?php
        $currlogged=$_COOKIE['loggedin'];
        $result = mysqli_query($conn,"SELECT * FROM slottbl WHERE staffid=\"$currlogged\"");
        while($row = mysqli_fetch_array($result)) {
            echo "<option value=\"".$row["slotname"]."\">".$row["slotname"]."</option>";
        }
        ?>  
        </select>
  </div>
  

</div>

</div>

</body>
</html>
