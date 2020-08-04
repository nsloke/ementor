<?php
    require_once 'DbConnect.php';
    $studid=$_REQUEST["studid"];
    $studname=$_REQUEST["studname"];
    $depid=$_REQUEST["depid"];
   // $defpass="123";

    $stmt = $conn->prepare("UPDATE studtbl SET studname=?,depid=? WHERE studid=?");
					$stmt->bind_param("sss",$studname,$depid,$studid);
                    $stmt->execute();
                    header( "Location: homeadmin.php" );
?>  