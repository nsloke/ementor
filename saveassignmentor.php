<?php
 require_once 'DbConnect.php';
 $mentor=$_POST['staffid'];
  if(!empty($_POST['chk_lst'])){
    // Loop to store and display values of individual checked checkbox.
    foreach($_POST['chk_lst'] as $selected){
    //echo $selected." pairs ".$mentor."</br>";
    $stmt = $conn->prepare("UPDATE studtbl SET menass='yes' WHERE studid=?");
					$stmt->bind_param("s", $selected);
                    $stmt->execute();
    $stmt = $conn->prepare("INSERT INTO mentorass(mentorid,menteeid) VALUES(?,?)");
					$stmt->bind_param("ss", $mentor,$selected);
                    $stmt->execute();
    }
    header( "Location: homeadmin.php" );
}
?>