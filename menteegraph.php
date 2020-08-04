<?php
require_once 'DbConnect.php';
require "Chart.php";
use Antoineaugusti\EasyPHPCharts\Chart;
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

  <link rel="stylesheet" href="chart.css">
	<style>
		*{margin: 0; padding: 0;}
		@import url(http://fonts.googleapis.com/css?family=Roboto);
		body{background: #FFF; font-family: 'Roboto', sans-serif;font-weight: 400}
		#content{background: #FFF; width: 1000px; padding: 20px; margin: 0 auto}
		h2{color: #4081BD; margin-bottom: 20px; font-weight: 400}
		.clearBoth:after{width: 300px; border: 1px solid #EEE; margin: 50px 0; display: block;}
		.containerChartLegend{width: 480px;padding-left: 20px}
	</style>
	<script src="ChartJS.min.js"></script>


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
<h3>Mentee Graphs</h3>   


   
<div class="col-md-10">
<form name="form1" action="menteegraph.php" method="post">
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

</div>

<?php
if(isset($_POST["mentee"])){
  $mentename=$_POST["mentee"];
  $response["attend"] = array();
  $result = mysqli_query($conn,"SELECT * FROM studmrk WHERE studid=$mentename");
  $datax=array();
  $legex=array();
  $ix=0;
  
  $nxc=0;

  while($row = mysqli_fetch_array($result)){
    $tmpxx = $row["perc"];
    $psr=$row["exspec"];
    $nxc=$nxc+$tmpxx;
    array_push($datax,$tmpxx);
    array_push($legex,$psr);
    $ix=$ix+1;
  }

  

  if($ix>0){

    $dfer=$nxc/$ix;
    if($dfer<50)
    {
      echo "Student's marks are very low. Counselling is suggested for this ward. Consider informing him during meet <br>";
    }

   
  echo "Student Class Test Percentage";
  $barChart = new Chart('line', 'menteebar2');
		$barChart->set('data', array($datax));
    $barChart->set('legend', $legex);
    $barChart->set('legendData', array('Marks'));
		echo $barChart->returnFullHTML();
  }

  

  $result = mysqli_query($conn,"SELECT * FROM studattn s,subjtbl j WHERE s.studid=$mentename  AND s.attnsec=j.subjid");
  $datax=array();
  $legex=array();
  $ix=0;

  
$ddc=0;
  while($row = mysqli_fetch_array($result)){
    $tmpxx = $row["attnval"];
    $psr=$row["subjname"];
    $ddc=$ddc+$tmpxx;
    array_push($datax,$tmpxx);
    array_push($legex,$psr);
    $ix=$ix+1;
  }

  if($ix>0){

    $ffer=$ddc/$ix;
    if($ffer<50)
    {
      echo "Student's attendance is very low. Counselling is suggested for this ward. <br>";
    }

    echo "<br><br>Student Subjectwise Attendance Marks";
    $barChart2 = new Chart('line', 'menteebar');
      $barChart2->set('data', array($datax));
      $barChart2->set('legend', $legex);
      $barChart2->set('legendData', array('Marks'));
      $barChart2->set('colors', '#ffffff');
      echo $barChart2->returnFullHTML();
    }



} 
 ?>


</div>

</body>
</html>
