<?php
require_once 'DbConnect.php';
$mente=$_REQUEST["mentee"];
$msg=$_REQUEST["message"];

$stmt = $conn->prepare("INSERT INTO menteenotif(menteeid,notif) VALUES(?,?)");
					$stmt->bind_param("ss", $mente,$msg);
                    $stmt->execute();
                    header( "Location: viewmentees.php" );
?>