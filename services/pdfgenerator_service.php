<?php
require_once '../vendor/autoload.php';
require_once '../config/database.php';

$tipus = $_POST['tipus'];
$mentes = $_POST['mentes'];
$egyseg = $_POST['egyseg'];

// TCPDF példány létrehozása
$pdf = new TCPDF();
$pdf->AddPage();
$pdf->SetFont('helvetica', '', 12);

// PDF tartalom generálása
$html = "<h1>PDF Generált Sütemény Információk</h1>";
$html .= "<p><strong>Sütemény típusa:</strong> {$tipus}</p>";
$html .= "<p><strong>Mentes opció:</strong> {$mentes}</p>";
$html .= "<p><strong>Egység:</strong> {$egyseg}</p>";

// PDF tartalom hozzáadása
$pdf->writeHTML($html, true, false, true, false, '');

// PDF fájl megjelenítése
$pdf->Output('suti_adatok.pdf', 'I');
?>