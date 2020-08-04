<?php
    require_once 'DbConnect.php';
    $staffid=$_REQUEST["staffid"];
    $staffname=$_REQUEST["staffname"];
    $depid=$_REQUEST["depid"];
   // $defpass="123";

    $stmt = $conn->prepare("UPDATE stafftbl SET staffname=?,depid=? WHERE staffid=?");
					$stmt->bind_param("sss",$staffname,$depid,$staffid);
                    $stmt->execute();
                    header( "Location: mentoradmview.php" );
?>  