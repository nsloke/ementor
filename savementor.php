<?php
    require_once 'DbConnect.php';
    $staffid=$_REQUEST["staffid"];
    $staffname=$_REQUEST["staffname"];
    $depid=$_REQUEST["depid"];
    $defpass="123";

    $stmt = $conn->prepare("INSERT INTO stafftbl(staffid,staffname,depid,passwd) VALUES(?,?,?,?)");
					$stmt->bind_param("ssss", $staffid,$staffname,$depid,$defpass);
                    $stmt->execute();
                    header( "Location: mentoradmview.php" );
?>