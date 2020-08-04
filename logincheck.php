<?php
$usr=$_REQUEST['enrollid'];
$pass=$_REQUEST['passwd'];
$servername = "localhost";
$username = "root";
$password = "";
$database = "ementor";
 
 
//creating a new connection object using mysqli 
$conn = new mysqli($servername, $username, $password, $database);
 
//if there is some error connecting to the database
//with die we will stop the further execution by displaying a message causing the error 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM studtbl WHERE studid='$usr' and passwd = '$pass'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		//echo $count;
      if($count == 1) {
            setcookie('loggedin',$usr,time() + (86400 * 7));
            header( "Location: homementee.php" );
			
      }
      else {
            header( "Location: index.php" );
      }

?>
