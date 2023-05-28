<?php
session_start();
include('includes/config.php');
require('fpdf/fpdf.php');

if(isset($_REQUEST['bkid'])) {
    $bid = intval($_GET['bkid']);
    $email = $_SESSION['login'];

    $sql = "SELECT tblbooking.*, tbltourpackages.PackageName, pdf.*,tblusers.* FROM tblbooking 
    JOIN tbltourpackages ON tbltourpackages.PackageId = tblbooking.PackageId
    JOIN pdf ON pdf.BkiId = tblbooking.BookingId JOIN tblusers ON tblusers.EmailId = tblbooking.UserEmail
    WHERE UserEmail=:email AND tblbooking.BookingId=:bid";
    $query = $dbh->prepare($sql);
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->bindParam(':bid', $bid, PDO::PARAM_STR);
    $query->execute();
    $result = $query->fetch(PDO::FETCH_ASSOC);

    if ($query->rowCount() > 0) {
        $pdf = new FPDF();
        $pdf->AddPage();

        

        // Set invoice title font and color
        $pdf->SetFont('Arial', 'B', 20);
        $pdf->SetTextColor(0, 0, 0);
        $pdf->Cell(0, 20, 'INVOICE', 0, 1, 'C');

        // Set company details font
        $pdf->SetFont('Arial', '', 12);

         // Company logo
         $pdf->Image('images/logo.png', 10, 30, 40);

        // Company name and address
        $pdf->SetXY(60, 30);
        $pdf->Cell(0, 5, 'Travel Hive', 0, 1);
        $pdf->SetX(60);
        $pdf->Cell(0, 5, ' ', 0, 'L');
        $pdf->Cell(0, 5, '47B, College of Engineering Guindy', 0, 'L');
        $pdf->Cell(0, 5, 'Anna University', 0, 'L');
        $pdf->Cell(0, 5, 'Chennai-600025', 0, 'L');

        // Set customer details font
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->SetXY(10, 70);
        $pdf->Cell(0, 5, 'Customer Details:', 0, 1);
        $pdf->SetFont('Arial', '', 12);
        $pdf->SetXY(10, 80);
        $pdf->Cell(0, 5, 'Name: ' . $result['FullName'], 0, 1);
        $pdf->SetX(10);
        $pdf->Cell(0, 5, 'Email: ' . $result['UserEmail'], 0, 1);

        // Invoice details
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->SetXY(10, 110);
        $pdf->Cell(0, 5, 'Invoice Details:', 0, 1);
        $pdf->SetFont('Arial', '', 12);
        $pdf->SetXY(10, 120);
        $pdf->Cell(0, 5, 'Invoice Number: #BK' . $result['BookingId'], 0, 1);
        $pdf->SetX(10);
        $pdf->Cell(0, 5, 'Invoice Date: ' . date('Y-m-d'), 0, 1);

        // Invoice items
        $pdf->SetXY(10, 150);
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(40, 5, 'Description', 1, 0, 'C');
        $pdf->Cell(40, 5, 'Price', 1, 0, 'C');
        $pdf->Cell(40, 5, 'User Preferences', 1, 0, 'C');
        $pdf->Cell(40, 5, 'Amount', 1, 1, 'C');

        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(40, 5, $result['PackageName'], 1, 0, 'C');
        $pdf->Cell(40, 5, 'INR ' . $result['Price'], 1, 0, 'C');
        $pdf->Cell(40, 5, 'INR ' . $result['User Pref'], 1, 0, 'C');
        $pdf->Cell(40, 5, 'INR ' . $result['Total'], 1, 1, 'C');

        // Total amount
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->SetXY(110, 190);
        $pdf->Cell(40, 5, 'Total Amount:', 0, 0, 'R');
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(0, 5, 'INR ' . $result['Total'], 0, 1, 'L');

        // Payment status
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->SetXY(10, 220);
        $pdf->Cell(40, 5, 'Payment Status:', 0, 0);
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(0, 5, 'Paid', 0, 1);

        // Thank you message
        $pdf->SetFont('Arial', 'B', 14);
        $pdf->SetXY(10, 240);
        $pdf->Cell(0, 10, 'Thank you for choosing Travel Hive!', 0, 1);
        $pdf->Cell(0, 10, 'Have a great Journey!', 0, 1);

        $pdf->Output('invoice.pdf', 'D'); 
    } else {
        echo 'No booking found.';
    }
} else {
    echo 'Invalid request.';
}
?>
