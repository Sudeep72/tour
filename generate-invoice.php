<?php
session_start();
include('includes/config.php');
require('fpdf/fpdf.php');

if(isset($_REQUEST['bkid'])) {
    $bid = intval($_GET['bkid']);
    $email = $_SESSION['login'];

    $sql = "SELECT tblbooking.*, tbltourpackages.PackageName, pdf.* FROM tblbooking 
    JOIN tbltourpackages ON tbltourpackages.PackageId = tblbooking.PackageId
    JOIN pdf ON pdf.BkiId = tblbooking.BookingId
    WHERE UserEmail=:email AND tblbooking.BookingId=:bid";
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

        $pdf->Cell(40, 10, 'From:', 0, 0);
        $pdf->Cell(0, 10, $result['fdate'], 0, 1);

        $pdf->Cell(40, 10, 'To:', 0, 0);
        $pdf->Cell(0, 10, $result['tdate'], 0, 1);

        $pdf->Cell(40, 10, 'User Preference:', 0, 0);
        $pdf->Cell(0, 10, $result['Comments'], 0, 1);

        $pdf->Cell(40, 10, 'Price:', 0, 0);
        $pdf->Cell(0, 10, 'INR' .' '. $result['Price'], 0, 1);

        $pdf->Cell(40, 10, 'Preferences:', 0, 0);
        $pdf->Cell(0, 10, 'INR' .' '.$result['User Pref'], 0, 1);

        $pdf->Cell(40, 10, 'Total:', 0, 0);
        $pdf->Cell(0, 10, 'INR' .' '. $result['Total'], 0, 1);

        $pdf->Cell(40, 10, 'Payment Status:', 0, 0);
        $pdf->Cell(0, 10, 'Paid', 0, 1);

        $pdf->Cell(40, 10, 'Have a Happy Journey!!', 0, 0);

        $pdf->Output('invoice.pdf', 'D'); 
    } else {
        echo 'No booking found.';
    }
} else {
    echo 'Invalid request.';
}
?>
