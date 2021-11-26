<?php
    require_once('../fpdf/fpdf.php');
    require_once("../includes/utilities/debugging.php");
    require_once("../connect/connect.php");


    date_default_timezone_set("America/Bogota");

    $report = new FPDF();
    $report->AddPage();
    $report->SetFont('Arial','B',16);
    $report->Ln(20);
    $report->Cell(90,20,'Fecha: '.date('d.m.Y.H.i.s').'',0);
    $report->Ln(10);
    $report->Cell(100,20,utf8_decode('REPORTES PDF INVENTARIO'));
    $report->Ln(10);
    $report->SetFont('Arial','B',10);
    $report->Cell(20,20,'Producto');
    $report->Cell(25,20,'Cantidad');
    $report->Cell(30,20,'Precio');

    $report->Ln(10);

    $report->SetFont('Arial','B',10);

    opendb();
    $query = 'SELECT * FROM personas';
    $result = mysqli_query($link,$query);

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
    $report->Cell(25,20, utf8_decode($row['nombre']), 0);
    $report->Cell(25,20, utf8_decode($row['cantidad']), 0);
    $report->Cell(40,20, utf8_decode($row['precio']), 0);
    $report->Ln(10);
        }
    }
    $report->Output();
    closedb();

?>
