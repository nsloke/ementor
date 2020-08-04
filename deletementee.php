<?php
    require_once 'DbConnect.php';
    $studid=$_REQUEST["val"];
    
   // $defpass="123";

    $stmt = $conn->prepare("DELETE FROM studtbl WHERE studid=?");
					$stmt->bind_param("s",$studid);
                    $stmt->execute();
                    header( "Location: homeadmin.php" );
?>  