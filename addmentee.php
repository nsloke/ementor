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
<script>
function limit(element)
{
    var max_chars = 9;

    if(element.value.length > max_chars) {
        element.value = element.value.substr(0, max_chars);
    }
}
</script>



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
      <a class="nav-link" href="logout.php">Logout</a>
    </li>
  </ul>
</nav>
<br>
<div class="container">
    
<div class="col-md-8">
<h3>Mentee</h3>
<form action="savementee.php">
  <div class="form-group">
    <label for="email">Student ID:</label>
    <input type="number" class="form-control" id="studid" name="studid" onkeydown="limit(this);" onkeyup="limit(this);">
  </div>
  <div class="form-group">
    <label for="pwd">Student Name:</label>
    <input type="text" class="form-control" id="studname" name="studname">
  </div>
  <div class="form-group">
    <label for="pwd">Select Department</label>
    <select class="form-control" name="depid">
        <?php
        $result = mysqli_query($conn,"SELECT * FROM depttbl");
     
        while($row = mysqli_fetch_array($result)) {
            echo "<option value=\"".$row["depid"]."\">".$row["depname"]."</option>";
        }
        ?>  
        </select>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>  
</div>

</body>
</html>
