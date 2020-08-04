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
  <script src="js/jquery.tableCheckbox.js"></script>
  <script src="js/jquery.tableCheckbox.min.js"></script>
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
$('table').tableCheckbox({

// The class that will be applied to selected rows.
selectedRowClass: 'warning',

// The selector used to find the checkboxes on the table. 
// You may customize this in order to match your table layout
//  if it differs from the assumed one.
checkboxSelector: 'td:first-of-type input[type="checkbox"],th:first-of-type input[type="checkbox"]',

// A callback that is used to determine wether a checkbox is selected or not.
isChecked: function($checkbox) {
  return $checkbox.is(':checked');
}

});
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

<h3>Assign Mentor to Mentees</h3>

<form name="form1" action="assignmentor.php" method="post">
<div class="form-group">
    <label for="pwd">Select Department</label>
    <select class="form-control" name="depid" onchange='this.form.submit()'>
        <?php
        $result = mysqli_query($conn,"SELECT * FROM depttbl");
        echo "<option value=\"".$row["depid"]."\">".$row["depname"]."</option>";
        while($row = mysqli_fetch_array($result)) {
            echo "<option value=\"".$row["depid"]."\">".$row["depname"]."</option>";
        }
        ?>  
        </select>
  </div>
  </form>
  

<?php
if(isset($_POST["depid"])){
    echo "<form action=\"saveassignmentor.php\" method=\"post\">";
    echo "<h3>List of Mentees</h3><br>";
    $depid=$_POST["depid"];
    echo "<table class=\"table table-hover\">";
    echo "<thead>";
    echo "<th style=\"width:20px;\">&nbsp;</th>";
    echo "<th>Mentees Name</th>";
    echo "<th>Dept Name</th>";
    echo "</thead>";
    echo "<tbody>";
    $result = mysqli_query($conn,"SELECT s.studid,s.studname,d.depname FROM studtbl s, depttbl d WHERE s.depid=d.depid AND s.depid='$depid' AND s.menass='no'");
while($row = mysqli_fetch_array($result)){
  echo "<tr>";
  echo "<td><input type=\"checkbox\" name=\"chk_lst[]\" value=\"".$row["studid"]."\"></td>";
  echo "<td>".$row["studname"]."</td>";
  echo "<td>".$row["depname"]."</td>";
  echo "</tr>";

}
    echo "</tbody>";
    echo "</table>";
    echo "<br><br>";

    echo "<div class=\"form-group\">";
    echo "<label for=\"pwd\">Select Mentor</label>";
    echo "<select class=\"form-control\" name=\"staffid\">";
       
        $result = mysqli_query($conn,"SELECT * FROM stafftbl WHERE depid='$depid'");
        while($row = mysqli_fetch_array($result)) {
            echo "<option value=\"".$row["staffid"]."\">".$row["staffname"]."</option>";
        }
          
        echo "</select>";
    echo "</div>";
    
    echo "<button type=\"submit\" class=\"btn btn-primary\">Submit</button>";    
    echo "</form>";
}
?>
  



</div>  
</div>

</body>
</html>
