<?php
require_once 'DbConnect.php';
$studid="";
$studname="";
$studdep="";
$studepid="";
$target_path = "uimgs/";
$strx=$_COOKIE['loggedin'];
$resultx = mysqli_query($conn,"SELECT s.studid,s.studname,d.depname,s.depid FROM studtbl s,depttbl d WHERE s.studid=$strx AND s.depid=d.depid");
while($rowx=mysqli_fetch_array($resultx)) {
 $studid=$rowx["studid"];
 $studname=$rowx["studname"];
 $studdep=$rowx["depname"];
 $studepid=$rowx["depid"];
}


$appeariit=$_POST["appeariit"];
$moi=$_POST["moi"];
$mobno=$_POST["mobno"];
$resphno=$_POST["resphno"];
$resaddr=$_POST["resaddr"];
$emgcon=$_POST["emgcon"];
$rels=$_POST["relat"];
$addr=$_POST["addr"];
$telno=$_POST["telno"];
$emal=$_POST["emal"];
$sibledu=$_POST["sibledu"];
$fambgr=$_POST["fambgr"];
$anninc=$_POST["anninc"];
$modtrav=$_POST["modtrav"];
$nativeplc=$_POST["nativeplc"];
$freqnativeplc=$_POST["freqnativeplc"];
$medhist=$_POST["medhist"];
$hobbies=$_POST["hobbies"];
$strength=$_POST["strength"];
$weakness=$_POST["weakness"];

$target_path = $target_path . basename( $_FILES['uploadedfile']['name']); 

if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
    echo "The file ".  basename( $_FILES['uploadedfile']['name']). 
    " has been uploaded";
    chmod ("uprofiledata/".basename( $_FILES['uploadedfile']['name']), 0777);
} else{
    echo "There was an error uploading the file, please try again!";
    echo "filename: " .  basename( $_FILES['uploadedfile']['name']);
    echo "target_path: " .$target_path;
}


$stmt = $conn->prepare("UPDATE studtbl SET infupd='yes' WHERE studid=?");
					$stmt->bind_param("s",$studid);
                    $stmt->execute();

                   $phto= basename( $_FILES['uploadedfile']['name']);
$stmt = $conn->prepare("INSERT INTO studinftbl(studid,studname,branch,iitentr,medofinc,mobno,resphno,resaddr,emgrcon,relcon,emgaddr,emgtel,email,sibedu,fambgr,income,modtrav,nativpl,freqnativ,medhist,hobby,strength,weakness,photo) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
					$stmt->bind_param("ssssssssssssssssssssssss", $studid,$studname,$studepid,$appeariit,$moi,$mobno,$resphno,$resaddr,$emgcon,$rels,$addr,$telno,$emal,$sibledu,$fambgr,$anninc,$modtrav,$nativeplc,$freqnativeplc,$medhist,$hobbies,$strength,$weakness,$phto);
                    //echo 'Error: ' . $stmt->error . "<BR />\n"; 
                    $stmt->execute();
                    header( "Location: homementee.php" );
?>