<?php
require_once 'DbConnect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Mentee Home</title>
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
    var max_chars = 10;

    if(element.value.length > max_chars) {
        element.value = element.value.substr(0, max_chars);
    }
}

function limitz(element)
{
    var max_chars = 14;

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
      <a class="nav-link" href="homementee.php">Mentees Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="schedmeeting.php">Schedule a Meeting</a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="menteefeedback.php">Mentee's Feedback</a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="menteenotif.php">Notifications</a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="logout.php">Logout</a>
    </li>
  </ul>
</nav>
<br>
<div class="container">
    
<div class="col-md-8">
<h3>Mentee Home</h3>
<?php
$usnd=$_COOKIE['loggedin'];
$namd="";
$result = mysqli_query($conn,"SELECT * FROM studtbl WHERE studid='$usnd'");
while($row = mysqli_fetch_array($result)){
 $namd=$row["studname"];  
}
echo "<h3>Welcome, ".$namd."</h3><br><br>";
?>

<?php
$strx=$_COOKIE['loggedin'];
$keyz="";
$result = mysqli_query($conn,"SELECT * FROM studtbl WHERE studid='$strx'");
while($row = mysqli_fetch_array($result)){
 $keyz=$row["infupd"];  
}
if($keyz=="no")
{
  $mentz="";
  $result = mysqli_query($conn,"SELECT * FROM mentorass m,stafftbl s WHERE m.mentorid=s.staffid AND m.menteeid=$strx");
while($row = mysqli_fetch_array($result)){
 $mentz=$row["staffname"];  
}
if($mentz==""){
echo "<h3>Mentor not assigned yet.</h3><br><br>";
}
else
{
  echo "<h3>Mentor:".$mentz."</h3><br><br>";
}

?>

<form action="savementeeinfo.php" method="post" enctype="multipart/form-data">

<div class="form-group">
    <label for="enrollment">Photo</label>
    <input type="file" name="uploadedfile">
   </div>

 <div class="form-group">
    <label for="enrollment">Appeared for IIT</label>
    <select class="form-control" name="appeariit">
       <option value="yes">Yes</option>
       <option value="no">No</option> 
        </select>
   </div>
  <div class="form-group">
    <label for="mediumofinc">Medium of Instructions till HSC</label>
    <input type="text" class="form-control" id="moi" placeholder="Medium of Instructions till HSC"  name="moi">
  </div>

  <div class="form-group">
    <label for="mediumofinc">Mobile No.</label>
    <input type="number" class="form-control" id="mobno" placeholder="Mobile No."  name="mobno" onkeydown="limit(this);" onkeyup="limit(this);">
  </div>

  <div class="form-group">
    <label for="mediumofinc">Residential Phone No.</label>
    <input type="number" class="form-control" id="resphno" placeholder="Residential Phone No."  name="resphno" onkeydown="limit(this);" onkeyup="limit(this);">
  </div>

  <div class="form-group">
    <label for="residence">Residential Address</label>
    <textarea class="form-control" id="resaddr"  name="resaddr"></textarea>
  </div>
  
  <div class="form-group">
    <label for="mediumofinc">Emergency Contact</label>
    <input type="number" class="form-control" id="emgcon" placeholder="Emergency Contact"  name="emgcon" onkeydown="limit(this);" onkeyup="limit(this);">
  </div>

  <div class="form-group">
    <label for="relation">Relations</label>
    <input type="text" class="form-control" id="relat" placeholder="Relations"  name="relat" >
  </div>


  <div class="form-group">
    <label for="addr">Address</label>
    <textarea class="form-control" id="addr"  name="addr"></textarea>
  </div>

  <div class="form-group">
    <label for="telno">Telephone</label>
    <input type="number" class="form-control" id="telno" placeholder="Telephone"  name="telno" onkeydown="limitz(this);" onkeyup="limitz(this);">
  </div>


  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="emal" placeholder="Email"  name="emal" >
  </div>


  <div class="form-group">
    <label for="addr">Siblings and Educational Status</label>
    <textarea class="form-control" id="sibledu"  name="sibledu"></textarea>
  </div>

  <div class="form-group">
    <label for="addr">Family Background</label>
    <textarea class="form-control" id="fambgr"  name="fambgr"></textarea>
  </div>


  <div class="form-group">
    <label for="enrollment">Overall Annual Income</label>
    <select class="form-control" name="anninc">
       <option value="lt1l">Less than 1 lac</option>
       <option value="ut3l">Upto 3 lacs</option> 
       <option value="gt3l">More than 3 lacs</option>
        </select>
   </div>

   <div class="form-group">
    <label for="modtrav">Mode of Travel to College</label>
    <input type="text" class="form-control" id="modtrav" placeholder="Mode of Travel"  name="modtrav" >
  </div>

  <div class="form-group">
    <label for="nativeplc">Native Place</label>
    <input type="text" class="form-control" id="nativeplc" placeholder="Native Place"  name="nativeplc" >
  </div>

  <div class="form-group">
    <label for="nativeplc">Frequency to visit Native Place</label>
    <input type="text" class="form-control" id="freqnativeplc" placeholder="Frequency to visit Native Place"  name="freqnativeplc" >
  </div>
  

  <div class="form-group">
    <label for="medhist">Medical History</label>
    <textarea class="form-control" id="medhist"  name="medhist"></textarea>
  </div>

  <div class="form-group">
    <label for="hobbies">Hobbies and Interest</label>
    <textarea class="form-control" id="hobbies"  name="hobbies"></textarea>
  </div>

  <div class="form-group">
    <label for="strength">Strength</label>
    <textarea class="form-control" id="strength"  name="strength"></textarea>
  </div>

  <div class="form-group">
    <label for="weakness">Weakness</label>
    <textarea class="form-control" id="weakness"  name="weakness"></textarea>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>







<?php
}
else if($keyz=="yes") 
{
  $mentz="";
  $result = mysqli_query($conn,"SELECT * FROM mentorass m,stafftbl s WHERE m.mentorid=s.staffid AND m.menteeid='$strx'");
while($row = mysqli_fetch_array($result)){
 $mentz=$row["staffname"];  
}
if($mentz==""){
echo "<h3>Mentor not assigned yet.</h3><br><br>";
}
else
{
  echo "<h3>Mentor:".$mentz."</h3><br><br>";
}
?>





<?php
}
?>






</div>  
</div>

</body>
</html>
