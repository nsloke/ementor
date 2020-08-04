<?php
 require_once 'DbConnect.php';
 $mentor=$_POST['staffid'];
 $stafdx="";

 $result = mysqli_query($conn,"SELECT * FROM stafftbl WHERE staffid='$valx'");
while($row = mysqli_fetch_array($result)){
 $stafdx=$row["staffname"];
}

  if(!empty($_POST['chk_lst'])){
    // Loop to store and display values of individual checked checkbox.
    foreach($_POST['chk_lst'] as $selected){
    //echo $selected." pairs ".$mentor."</br>";
    $stmt = $conn->prepare("DELETE FROM mentorass WHERE menteeid=?");
					$stmt->bind_param("s", $selected);
                    $stmt->execute();



    $stmt = $conn->prepare("INSERT INTO mentorass(mentorid,menteeid) VALUES(?,?)");
					$stmt->bind_param("ss", $mentor,$selected);
                    $stmt->execute();


                    $msg="You've been assigned a new mentor,".$stafdx;
                    $stmt = $conn->prepare("INSERT INTO menteenotif(menteeid,notif) VALUES(?,?)");
                                        $stmt->bind_param("ss", $studx,$msg);
                                        $stmt->execute();
    }
    header( "Location: transfermentee.php" );
}
?>