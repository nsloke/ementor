<?php
    require_once 'DbConnect.php';
    $staffid=$_REQUEST["val"];
    
   // $defpass="123";

    $stmt = $conn->prepare("DELETE FROM stafftbl WHERE staffid=?");
					$stmt->bind_param("s",$staffid);
                    $stmt->execute();
                    header( "Location: mentoradmview.php" );
?>  