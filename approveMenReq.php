<?php
    require_once 'DbConnect.php';
    $valx=$_REQUEST["val"];
    $strx=$_COOKIE['loggedin'];
    $studx="";
    $slot="";
    $sttus="Confirmed";
    
$result = mysqli_query($conn,"SELECT * FROM allotslot WHERE allotid='$valx'");
while($row = mysqli_fetch_array($result)){
 $studx=$row["studid"];
 $slot=$row["slot"];
}

$msg="Meeting request confirmed by mentor at".$slot;
$stmt = $conn->prepare("INSERT INTO menteenotif(menteeid,notif) VALUES(?,?)");
					$stmt->bind_param("ss", $studx,$msg);
                    $stmt->execute();

$stmt = $conn->prepare("UPDATE allotslot SET statuss=? WHERE allotid=?");
$stmt->bind_param("ss",$sttus,$valx);
$stmt->execute();
    header( "Location: viewmentees.php" );
?>