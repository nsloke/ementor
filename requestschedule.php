<?php
require_once 'DbConnect.php';
$strx=$_COOKIE['loggedin'];
$reason=$_POST["reason"];
$mentor=$_POST["mentor"];
$slot=$_POST["slot"];

$stats="Unconfirmed";
$feedback="no";

$stmt = $conn->prepare("INSERT INTO allotslot(staffid,studid,reason,slot,statuss,feedback,feedbackmtr) VALUES(?,?,?,?,?,?,?)");
					$stmt->bind_param("sssssss", $mentor,$strx,$reason,$slot,$stats,$feedback,$feedback);
                    $stmt->execute();

$stmn="Meet request scheduled ".$slot." for ".$reason;
                    $stmt = $conn->prepare("INSERT INTO mentornotif(mentorid,notif) VALUES(?,?)");
					$stmt->bind_param("ss", $mentor,$stmn);
                    $stmt->execute();
                    
                    header( "Location: schedmeeting.php" );

?>