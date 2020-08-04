<?php
require_once 'DbConnect.php';
$faclty=$_REQUEST["faculty"];
$subj=$_REQUEST["subject"];
$syll=$_REQUEST["syll"];
$syst=$_REQUEST["syst"];
$simcom=$_REQUEST["simcomp"];
$rcnotes=$_REQUEST["rcnotes"];
$suggs=$_REQUEST["txtsugg"];

$usnd=$_COOKIE['loggedin'];
$vlx=$_COOKIE['valex'];

$stmt = $conn->prepare("INSERT INTO feedbkstaff(alid,staffid,studid,subjid,syll,syst,simcomp,rcnotes,suggs) VALUES(?,?,?,?,?,?,?,?,?)");
					$stmt->bind_param("sssssssss", $vlx,$faclty,$usnd,$subj,$syll,$syst,$simcom,$rcnotes,$suggs);
                    $stmt->execute();

                    $stmt = $conn->prepare("UPDATE allotslot SET feedbackmtr='yes' WHERE allotid=?");
					$stmt->bind_param("s", $vlx);
                    $stmt->execute();

                    header( "Location: homestaff.php" );
?>