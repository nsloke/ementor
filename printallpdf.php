<?php
require('fpdf.php');
require_once 'DbConnect.php';
class PDF extends FPDF
{
function Header()
{
	global $title;

	// Arial bold 15
	$this->SetFont('Arial','B',15);
	// Calculate width of title and position
	$w = $this->GetStringWidth($title)+6;
	$this->SetX((210-$w)/2);
	// Colors of frame, background and text
	$this->SetDrawColor(0,80,180);
	$this->SetFillColor(230,230,0);
	$this->SetTextColor(220,50,50);
	// Thickness of frame (1 mm)
	$this->SetLineWidth(1);
	// Title
	$this->Cell($w,9,$title,1,1,'C',true);
	// Line break
	$this->Ln(10);
}

function Footer()
{
	// Position at 1.5 cm from bottom
	$this->SetY(-15);
	// Arial italic 8
	$this->SetFont('Arial','I',8);
	// Text color in gray
	$this->SetTextColor(128);
	// Page number
	$this->Cell(0,10,'Page '.$this->PageNo(),0,0,'C');
}

function ChapterTitle($num, $label)
{
	// Arial 12
	$this->SetFont('Arial','',12);
	// Background color
	$this->SetFillColor(200,220,255);
	// Title
	$this->Cell(0,6,"Chapter $num : $label",0,1,'L',true);
	// Line break
	$this->Ln(4);
}

function ChapterBody($file)
{
	// Read text file
	$txt = file_get_contents($file);
	// Times 12
	$this->SetFont('Times','',12);
	// Output justified text
	$this->MultiCell(0,5,$txt);
	// Line break
	$this->Ln();
	// Mention in italics
	$this->SetFont('','I');
	$this->Cell(0,5,'(end of excerpt)');
}

function PrintChapter($num, $title, $file)
{
	$this->AddPage();
	$this->ChapterTitle($num,$title);
	$this->ChapterBody($file);
}
}


$pdf = new PDF();
$title = 'Mentor-Mentee Table';
$pdf->SetTitle($title);
$pdf->SetAuthor('Admin');
$pdf->AddPage();
$pdf->SetFont('Arial','',12);

$resultx = mysqli_query($conn,"SELECT * FROM stafftbl s,depttbl d WHERE s.depid=d.depid");
$zx=1;
    while($rowx = mysqli_fetch_array($resultx)) {
        $pdf->Cell(0,6,"Mentor #".$zx.":".$rowx["staffname"]."        Dept:".$rowx["depname"]."",0,1,'L',false);
        $stid=$rowx["staffid"];
        $resulty = mysqli_query($conn,"SELECT * FROM mentorass m, studtbl s WHERE m.mentorid='$stid' AND s.studid=m.menteeid");        
        $ix=1;
        while($rowz = mysqli_fetch_array($resulty)){
           $pdf->Cell(0,6,"Mentee #".$ix.":".$rowz["studname"]."",0,1,'L',false);
           $ix=$ix+1;
        }
        $pdf->Cell(0,6," ",0,1,'L',false);
        $pdf->Cell(0,6," ",0,1,'L',false);
        $zx=$zx+1;
    }


//$pdf->Cell(0,6,"Text",0,1,'L',false);
$pdf->Output();

?>