<?php
require_once('C:\xampp\htdocs\veenus\TCPDF-main\tcpdf\tcpdf.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user input
    $name = $_POST["name"];

    // Create a PDF document
    $pdf = new TCPDF();
    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetAuthor('Your Name');
    $pdf->SetTitle('PDF Example');
    $pdf->SetSubject('Generating PDF in PHP');
    $pdf->SetKeywords('PDF, example, test, guide');

    $pdf->setPrintHeader(false);
    $pdf->setPrintFooter(false);

    $pdf->AddPage();
    $pdf->SetFont('helvetica', '', 12);
    $pdf->Cell(0, 10, "Hello, $name! This is a sample PDF generated using TCPDF.", 0, true, 'C');

    // Output the PDF as a download
    $pdf->Output('generated_pdf.pdf', 'D');
} else {
    header("Location: pdf.php");
    exit();
}
