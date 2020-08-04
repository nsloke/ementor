<!DOCTYPE html>
<html lang="en">
<head>
  <title>Mentor Login</title>
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
      <a class="nav-link" href="index.php">Mentees Login</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="mentorlogin.php">Mentors Login</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="adminlogin.php">Admin Login</a>
    </li>
  </ul>
</nav>
<br>
<div class="container">
    
<div class="col-md-6">
<h3>Mentor Login</h3>
 <form action="stafflogincheck.php" method="post">
 <div class="form-group">
    <label for="enrollment">Staff ID</label>
    <input type="number" class="form-control" id="enrollid" name="enrollid" placeholder="Enter Mentor ID" onkeydown="limit(this);" onkeyup="limit(this);>
   </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" id="passwd" name="passwd">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>  
</div>

</body>
</html>
