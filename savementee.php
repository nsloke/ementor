<?php
    require_once 'DbConnect.php';
    $studid=$_REQUEST["studid"];
    $studname=$_REQUEST["studname"];
    $depid=$_REQUEST["depid"];
    $defpass="123";
    $infupd="no";

    $stmt = $conn->prepare("INSERT INTO studtbl(studid,passwd,studname,infupd,depid) VALUES(?,?,?,?,?)");
					$stmt->bind_param("sssss", $studid,$defpass,$studname,$infupd,$depid);
                    $stmt->execute();
                    header( "Location: homeadmin.php" );
?>