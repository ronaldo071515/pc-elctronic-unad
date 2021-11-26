<?php
    require_once('../includes/fpdf/fpdf.php');
    require_once("../includes/utilities/debugging.php");
    printdebug(false);

    require_once("../connect/connect.php");


    date_default_timezone_set("America/Bogota");

    $report = new FPDF();
    $report->AddPage();
    $report->Image("../assets/img/logo_pcelectronics.png", 160, 17, 30);
    $report->SetFont('Helvetica','B',24);
    $report->Ln(10);
    $report->Cell(100,20,utf8_decode('REPORTES PDF INVENTARIO'));
    $report->Ln(10);
    $report->SetFont('courier','',10);
    $report->Cell(90,20,'Fecha: '.date('d/m/Y H:i:s').' - Generado por grupo16' ,0);
    $report->Ln(25);
    $report->SetFont('Helvetica','B',10);
    $report->SetFillColor(10, 60, 80);
    $report->SetTextColor(255);
    $report->Cell(26,6,utf8_decode('Código'), 1, 0, 'C', true);
    $report->Cell(85,6,'Producto', 1, 0, 'C', true);
    $report->Cell(30,6,'Marca', 1, 0, 'C', true);
    $report->Cell(16,6,'Cant.', 1, 0, 'C', true);
    $report->Cell(30,6,'Precio unitario', 1, 0, 'C', true);

    $report->Ln(6);

    $report->SetFont('Helvetica','B',10);

    opendb();
    $query = 'SELECT * FROM bdunad16.tabla16';
    $result = mysqli_query($link,$query);

    if ($result != false && mysqli_num_rows($result) > 0) {
        $report->SetFont('Helvetica','',10);
        $report->SetFillColor(230, 230, 230);
        $report->SetTextColor(0);
        $fillcell = false;
        while($row = mysqli_fetch_assoc($result)) {
            $report->Cell(26,7, utf8_decode($row['codigo']), 1, 0, 'L', $fillcell);
            $report->Cell(85,7, utf8_decode($row['nombre']), 1, 0, 'L', $fillcell);
            $report->Cell(30,7, utf8_decode($row['marca']), 1, 0, 'L', $fillcell);
            $report->Cell(16,7, utf8_decode(number_format($row['cantidad'], 0, ",", ".")), 1, 0, 'R', $fillcell);
            $report->Cell(30,7, utf8_decode(number_format($row['precio'], 0, ",", ".")), 1, 0, 'R', $fillcell);
            $report->Ln(7);
            $fillcell = !$fillcell;
        }
    }
    $report->Output();
    closedb();

?>
