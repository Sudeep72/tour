<?php
session_start();
include('includes/config.php');
require('fpdf/fpdf.php');

if(isset($_REQUEST['bkid'])) {
    $bid = intval($_GET['bkid']);
    $email = $_SESSION['login'];

    $sql = "SELECT tblbooking.*, tbltourpackages.PackageName FROM tblbooking 
            JOIN tbltourpackages ON tbltourpackages.PackageId = tblbooking.PackageId 
            WHERE UserEmail=:email AND BookingId=:bid";
    $query = $dbh->prepare($sql);
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->bindParam(':bid', $bid, PDO::PARAM_STR);
    $query->execute();
    $result = $query->fetch(PDO::FETCH_ASSOC);

    if ($query->rowCount() > 0) {
        $pdf = new FPDF();
        $pdf->AddPage();

        
        $pdf->SetFont('Arial', 'B', 16);
        $pdf->Cell(0, 10, 'Invoice', 0, 1, 'C');

        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(40, 10, 'Booking ID:', 0, 0);
        $pdf->Cell(0, 10, '#BK' . $result['BookingId'], 0, 1);

        $pdf->Cell(40, 10, 'Package Name:', 0, 0);
        $pdf->Cell(0, 10, $result['PackageName'], 0, 1);

        $pdf->Cell(40, 10, 'Paid', 0, 0);

        $pdf->Output('invoice.pdf', 'D'); 
    } else {
        echo 'No booking found.';
    }
} else {
    echo 'Invalid request.';
}
?>
