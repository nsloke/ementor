<?php
require_once 'DbConnect.php';
$currlogged=$_COOKIE['loggedin'];

$slot1=$_REQUEST["mon9to10"];
$slot2=$_REQUEST["tue9to10"];
$slot3=$_REQUEST["wed9to10"];
$slot4=$_REQUEST["thu9to10"];
$slot5=$_REQUEST["fri9to10"];
$slot6=$_REQUEST["mon10to11"];
$slot7=$_REQUEST["tue10to11"];
$slot8=$_REQUEST["wed10to11"];
$slot9=$_REQUEST["thu10to11"];
$slot10=$_REQUEST["fri10to11"];
$slot11=$_REQUEST["mon11to12"];
$slot12=$_REQUEST["tue11to12"];
$slot13=$_REQUEST["wed11to12"];
$slot14=$_REQUEST["thu11to12"];
$slot15=$_REQUEST["fri11to12"];
$slot16=$_REQUEST["mon12to1"];
$slot17=$_REQUEST["tue12to1"];
$slot18=$_REQUEST["wed12to1"];
$slot19=$_REQUEST["thu12to1"];
$slot20=$_REQUEST["fri12to1"];
$slot21=$_REQUEST["mon1to2"];
$slot22=$_REQUEST["tue1to2"];
$slot23=$_REQUEST["wed1to2"];
$slot24=$_REQUEST["thu1to2"];
$slot25=$_REQUEST["fri1to2"];
$slot26=$_REQUEST["mon2to3"];
$slot27=$_REQUEST["tue2to3"];
$slot28=$_REQUEST["wed2to3"];
$slot29=$_REQUEST["thu2to3"];
$slot30=$_REQUEST["fri2to3"];
$slot31=$_REQUEST["mon3to4"];
$slot32=$_REQUEST["tue3to4"];
$slot33=$_REQUEST["wed3to4"];
$slot34=$_REQUEST["thu3to4"];
$slot35=$_REQUEST["fri3to4"];
$slot36=$_REQUEST["mon4to5"];
$slot37=$_REQUEST["tue4to5"];
$slot38=$_REQUEST["wed4to5"];
$slot39=$_REQUEST["thu4to5"];
$slot40=$_REQUEST["fri4to5"];

$stmt = $conn->prepare("DELETE FROM slottbl WHERE staffid=?");
					$stmt->bind_param("s",$currlogged);
                    $stmt->execute();


if($slot1=='free')   
{
    $defnopo="mon9to10";
    $statsy="free";
    $stmt = $conn->prepare("INSERT INTO slottbl(staffid,slotname,statuss) VALUES(?,?,?)");
					$stmt->bind_param("sss", $currlogged,$defnopo,$statsy);
                    $stmt->execute();
                   
}  
if($slot2=='free')   
{
    $defnopo="tue9to10";
    $statsy="free";
    $stmt = $conn->prepare("INSERT INTO slottbl(staffid,slotname,statuss) VALUES(?,?,?)");
					$stmt->bind_param("sss", $currlogged,$defnopo,$statsy);
                    $stmt->execute();
                   
}  
if($slot3=='free')   
{
    $defnopo="wed9to10";
    $statsy="free";
    $stmt = $conn->prepare("INSERT INTO slottbl(staffid,slotname,statuss) VALUES(?,?,?)");
					$stmt->bind_param("sss", $currlogged,$defnopo,$statsy);
                    $stmt->execute();
                   
}                 
if($slot4=='free')   
{
    $defnopo="thu9to10";
    $statsy="free";
    $stmt = $conn->prepare("INSERT INTO slottbl(staffid,slotname,statuss) VALUES(?,?,?)");
					$stmt->bind_param("sss", $currlogged,$defnopo,$statsy);
                    $stmt->execute();
                   
}  
if($slot5=='free')   
{
    $defnopo="fri9to10";
    $statsy="free";
    $stmt = $conn->prepare("INSERT INTO slottbl(staffid,slotname,statuss) VALUES(?,?,?)");
					$stmt->bind_param("sss", $currlogged,$defnopo,$statsy);
                    $stmt->execute();
                   
}  

if($slot6=='free')   
{
    $defnopo="mon10to11";
    $statsy="free";
    $stmt = $conn->prepare("INSERT INTO slottbl(staffid,slotname,statuss) VALUES(?,?,?)");
					$stmt->bind_param("sss", $currlogged,$defnopo,$statsy);
                    $stmt->execute();
                   
}  

if($slot7=='free')   
{
    $defnopo="tue10to11";
    $statsy="free";
    $stmt = $conn->prepare("INSERT INTO slottbl(staffid,slotname,statuss) VALUES(?,?,?)");
					$stmt->bind_param("sss", $currlogged,$defnopo,$statsy);
                    $stmt->execute();
                   
}  
if($slot8=='free')   
{
    $defnopo="wed10to11";
    $statsy="free";
    $stmt = $conn->prepare("INSERT INTO slottbl(staffid,slotname,statuss) VALUES(?,?,?)");
					$stmt->bind_param("sss", $currlogged,$defnopo,$statsy);
                    $stmt->execute();
                   
}  
if($slot9=='free')   
{
    $defnopo="thu10to11";
    $statsy="free";
    $stmt = $conn->prepare("INSERT INTO slottbl(staffid,slotname,statuss) VALUES(?,?,?)");
					$stmt->bind_param("sss", $currlogged,$defnopo,$statsy);
                    $stmt->execute();
                   
}  

if($slot10=='free')   
{
    $defnopo="fri10to11";
    $statsy="free";
    $stmt = $conn->prepare("INSERT INTO slottbl(staffid,slotname,statuss) VALUES(?,?,?)");
					$stmt->bind_param("sss", $currlogged,$defnopo,$statsy);
                    $stmt->execute();
                   
}  


if($slot11=='free')   
{
    $defnopo="mon11to12";
    $statsy="free";
    $stmt = $conn->prepare("INSERT INTO slottbl(staffid,slotname,statuss) VALUES(?,?,?)");
					$stmt->bind_param("sss", $currlogged,$defnopo,$statsy);
                    $stmt->execute();
                   
}  
if($slot12=='free')   
{
    $defnopo="tue11to12";
    $statsy="free";
    $stmt = $conn->prepare("INSERT INTO slottbl(staffid,slotname,statuss) VALUES(?,?,?)");
					$stmt->bind_param("sss", $currlogged,$defnopo,$statsy);
                    $stmt->execute();
                   
} 

if($slot13=='free')   
{
    $defnopo="wed11to12";
    $statsy="free";
    $stmt = $conn->prepare("INSERT INTO slottbl(staffid,slotname,statuss) VALUES(?,?,?)");
					$stmt->bind_param("sss", $currlogged,$defnopo,$statsy);
                    $stmt->execute();
                   
} 

if($slot14=='free')   
{
    $defnopo="thu11to12";
    $statsy="free";
    $stmt = $conn->prepare("INSERT INTO slottbl(staffid,slotname,statuss) VALUES(?,?,?)");
					$stmt->bind_param("sss", $currlogged,$defnopo,$statsy);
                    $stmt->execute();
                   
} 
if($slot15=='free')   
{
    $defnopo="fri11to12";
    $statsy="free";
    $stmt = $conn->prepare("INSERT INTO slottbl(staffid,slotname,statuss) VALUES(?,?,?)");
					$stmt->bind_param("sss", $currlogged,$defnopo,$statsy);
                    $stmt->execute();
                   
} 


if($slot16=='free')   
{
    $defnopo="mon12to1";
    $statsy="free";
    $stmt = $conn->prepare("INSERT INTO slottbl(staffid,slotname,statuss) VALUES(?,?,?)");
					$stmt->bind_param("sss", $currlogged,$defnopo,$statsy);
                    $stmt->execute();
                   
} 

if($slot17=='free')   
{
    $defnopo="tue12to1";
    $statsy="free";
    $stmt = $conn->prepare("INSERT INTO slottbl(staffid,slotname,statuss) VALUES(?,?,?)");
					$stmt->bind_param("sss", $currlogged,$defnopo,$statsy);
                    $stmt->execute();
                   
}
if($slot18=='free')   
{
    $defnopo="wed12to1";
    $statsy="free";
    $stmt = $conn->prepare("INSERT INTO slottbl(staffid,slotname,statuss) VALUES(?,?,?)");
					$stmt->bind_param("sss", $currlogged,$defnopo,$statsy);
                    $stmt->execute();
                   
}
if($slot19=='free')   
{
    $defnopo="thu12to1";
    $statsy="free";
    $stmt = $conn->prepare("INSERT INTO slottbl(staffid,slotname,statuss) VALUES(?,?,?)");
					$stmt->bind_param("sss", $currlogged,$defnopo,$statsy);
                    $stmt->execute();
                   
}
if($slot20=='free')   
{
    $defnopo="fri12to1";
    $statsy="free";
    $stmt = $conn->prepare("INSERT INTO slottbl(staffid,slotname,statuss) VALUES(?,?,?)");
					$stmt->bind_param("sss", $currlogged,$defnopo,$statsy);
                    $stmt->execute();
                   
}

if($slot21=='free')   
{
    $defnopo="mon1to2";
    $statsy="free";
    $stmt = $conn->prepare("INSERT INTO slottbl(staffid,slotname,statuss) VALUES(?,?,?)");
					$stmt->bind_param("sss", $currlogged,$defnopo,$statsy);
                    $stmt->execute();
                   
}
if($slot22=='free')   
{
    $defnopo="tue1to2";
    $statsy="free";
    $stmt = $conn->prepare("INSERT INTO slottbl(staffid,slotname,statuss) VALUES(?,?,?)");
					$stmt->bind_param("sss", $currlogged,$defnopo,$statsy);
                    $stmt->execute();
                   
}
if($slot23=='free')   
{
    $defnopo="wed1to2";
    $statsy="free";
    $stmt = $conn->prepare("INSERT INTO slottbl(staffid,slotname,statuss) VALUES(?,?,?)");
					$stmt->bind_param("sss", $currlogged,$defnopo,$statsy);
                    $stmt->execute();
                   
}
if($slot24=='free')   
{
    $defnopo="thu1to2";
    $statsy="free";
    $stmt = $conn->prepare("INSERT INTO slottbl(staffid,slotname,statuss) VALUES(?,?,?)");
					$stmt->bind_param("sss", $currlogged,$defnopo,$statsy);
                    $stmt->execute();
                   
}
if($slot25=='free')   
{
    $defnopo="fri1to2";
    $statsy="free";
    $stmt = $conn->prepare("INSERT INTO slottbl(staffid,slotname,statuss) VALUES(?,?,?)");
					$stmt->bind_param("sss", $currlogged,$defnopo,$statsy);
                    $stmt->execute();
                   
}

if($slot26=='free')   
{
    $defnopo="mon2to3";
    $statsy="free";
    $stmt = $conn->prepare("INSERT INTO slottbl(staffid,slotname,statuss) VALUES(?,?,?)");
					$stmt->bind_param("sss", $currlogged,$defnopo,$statsy);
                    $stmt->execute();
                   
}
if($slot27=='free')   
{
    $defnopo="tue2to3";
    $statsy="free";
    $stmt = $conn->prepare("INSERT INTO slottbl(staffid,slotname,statuss) VALUES(?,?,?)");
					$stmt->bind_param("sss", $currlogged,$defnopo,$statsy);
                    $stmt->execute();
                   
}
if($slot28=='free')   
{
    $defnopo="wed2to3";
    $statsy="free";
    $stmt = $conn->prepare("INSERT INTO slottbl(staffid,slotname,statuss) VALUES(?,?,?)");
					$stmt->bind_param("sss", $currlogged,$defnopo,$statsy);
                    $stmt->execute();
                   
}
if($slot29=='free')   
{
    $defnopo="thu2to3";
    $statsy="free";
    $stmt = $conn->prepare("INSERT INTO slottbl(staffid,slotname,statuss) VALUES(?,?,?)");
					$stmt->bind_param("sss", $currlogged,$defnopo,$statsy);
                    $stmt->execute();
                   
}
if($slot30=='free')   
{
    $defnopo="fri2to3";
    $statsy="free";
    $stmt = $conn->prepare("INSERT INTO slottbl(staffid,slotname,statuss) VALUES(?,?,?)");
					$stmt->bind_param("sss", $currlogged,$defnopo,$statsy);
                    $stmt->execute();
                   
}
if($slot31=='free')   
{
    $defnopo="mon3to4";
    $statsy="free";
    $stmt = $conn->prepare("INSERT INTO slottbl(staffid,slotname,statuss) VALUES(?,?,?)");
					$stmt->bind_param("sss", $currlogged,$defnopo,$statsy);
                    $stmt->execute();
                   
}
if($slot32=='free')   
{
    $defnopo="tue3to4";
    $statsy="free";
    $stmt = $conn->prepare("INSERT INTO slottbl(staffid,slotname,statuss) VALUES(?,?,?)");
					$stmt->bind_param("sss", $currlogged,$defnopo,$statsy);
                    $stmt->execute();
                   
}
if($slot33=='free')   
{
    $defnopo="wed3to4";
    $statsy="free";
    $stmt = $conn->prepare("INSERT INTO slottbl(staffid,slotname,statuss) VALUES(?,?,?)");
					$stmt->bind_param("sss", $currlogged,$defnopo,$statsy);
                    $stmt->execute();
                   
}
if($slot34=='free')   
{
    $defnopo="thu3to4";
    $statsy="free";
    $stmt = $conn->prepare("INSERT INTO slottbl(staffid,slotname,statuss) VALUES(?,?,?)");
					$stmt->bind_param("sss", $currlogged,$defnopo,$statsy);
                    $stmt->execute();
                   
}
if($slot35=='free')   
{
    $defnopo="fri3to4";
    $statsy="free";
    $stmt = $conn->prepare("INSERT INTO slottbl(staffid,slotname,statuss) VALUES(?,?,?)");
					$stmt->bind_param("sss", $currlogged,$defnopo,$statsy);
                    $stmt->execute();
                   
}
if($slot36=='free')   
{
    $defnopo="mon4to5";
    $statsy="free";
    $stmt = $conn->prepare("INSERT INTO slottbl(staffid,slotname,statuss) VALUES(?,?,?)");
					$stmt->bind_param("sss", $currlogged,$defnopo,$statsy);
                    $stmt->execute();
                   
}
if($slot37=='free')   
{
    $defnopo="tue4to5";
    $statsy="free";
    $stmt = $conn->prepare("INSERT INTO slottbl(staffid,slotname,statuss) VALUES(?,?,?)");
					$stmt->bind_param("sss", $currlogged,$defnopo,$statsy);
                    $stmt->execute();
                   
}
if($slot38=='free')   
{
    $defnopo="wed4to5";
    $statsy="free";
    $stmt = $conn->prepare("INSERT INTO slottbl(staffid,slotname,statuss) VALUES(?,?,?)");
					$stmt->bind_param("sss", $currlogged,$defnopo,$statsy);
                    $stmt->execute();
                   
}
if($slot39=='free')   
{
    $defnopo="thu4to5";
    $statsy="free";
    $stmt = $conn->prepare("INSERT INTO slottbl(staffid,slotname,statuss) VALUES(?,?,?)");
					$stmt->bind_param("sss", $currlogged,$defnopo,$statsy);
                    $stmt->execute();
                   
}
if($slot40=='free')   
{
    $defnopo="fri4to5";
    $statsy="free";
    $stmt = $conn->prepare("INSERT INTO slottbl(staffid,slotname,statuss) VALUES(?,?,?)");
					$stmt->bind_param("sss", $currlogged,$defnopo,$statsy);
                    $stmt->execute();
                   
}

 header( "Location: homestaff.php" );

?>