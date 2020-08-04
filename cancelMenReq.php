<?php
    require_once 'DbConnect.php';
    $valx=$_REQUEST["val"];
    $strx=$_COOKIE['loggedin'];
    $studx="";
    $slot="";
    $sttus="Cancelled";


$result = mysqli_query($conn,"SELECT * FROM allotslot WHERE allotid='$valx'");
while($row = mysqli_fetch_array($result)){
 $studx=$row["studid"];
 $slot=$row["slot"];
}

$msg="Meeting request cancelled by mentor";
$stmt = $conn->prepare("INSERT INTO menteenotif(menteeid,notif) VALUES(?,?)");
					$stmt->bind_param("ss", $studx,$msg);
                    $stmt->execute();
    
$stmt = $conn->prepare("DELETE FROM allotslot WHERE allotid=?");
$stmt->bind_param("s",$valx);
$stmt->execute();
    header( "Location: viewmentees.php" );
?>