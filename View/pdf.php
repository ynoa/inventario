<?php
// Incluye la conexión a la base de datos y la clase productos
include_once("../Model/modelo_productos.php");

// Incluye la librería TCPDF
require_once('../TCPDFmain/tcpdf.php');

// Extend TCPDF with custom functions
class MYPDF extends TCPDF {
    public function Header() {
        // Agregar un título grande
        $this->SetY(15);
        $this->SetFont('helvetica', 'B', 24);
        $this->Cell(0, 15, "Listado de Productos", 0, 1, 'C');
        $this->Ln(10);
    }

    public function ProductosTable($header, $data) {
        // Colors, line width and bold font
        $this->SetFillColor(255, 0, 0);
        $this->SetTextColor(255);
        $this->SetDrawColor(128, 0, 0);
        $this->SetLineWidth(0.3);
        $this->SetFont('', 'B');
        
        // Header
        $w = array(10, 80, 20, 20, 70);
        foreach($header as $col)
            $this->Cell($w[array_search($col, $header)], 7, $col, 1, 0, 'C', 1);
        $this->Ln();
        
        // Color and font restoration
        $this->SetFillColor(224, 235, 255);
        $this->SetTextColor(0);
        $this->SetFont('');
        
        // Data
        $fill = 0;
        foreach($data as $row) {
            $this->Cell($w[0], 6, $row['id_producto'], 'LR', 0, 'L', $fill);
            $this->Cell($w[1], 6, $row['nombre_producto'], 'LR', 0, 'L', $fill);
            $this->Cell($w[2], 6, $row['precio_producto'], 'LR', 0, 'R', $fill);
            $this->Cell($w[3], 6, $row['stock_producto'], 'LR', 0, 'R', $fill);
            $this->Cell($w[4], 6, $row['descripcion_producto'], 'LR', 0, 'L', $fill);
            $this->Ln();
            $fill=!$fill;
        }
        $this->Cell(array_sum($w), 0, '', 'T');
    }
}

// Crea una instancia de la clase productos
$instancia_producto4 = new productos();

// Obtiene los productos
$productos = $instancia_producto4->mostar_productos();

// Create new PDF document
$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// Set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Tu Nombre');
$pdf->SetTitle('Lista de Productos');
$pdf->SetSubject('Productos');
$pdf->SetKeywords('TCPDF, PDF, productos, lista');

// Set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// Set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// Set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// Set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// Set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// Set font
$pdf->SetFont('helvetica', '', 10);

// Add a page
$pdf->AddPage();

// Column titles
$header = array('ID', 'Nombre', 'Precio', 'Stock', 'Descripción');

// Print colored table
$pdf->ProductosTable($header, $productos);

// Close and output PDF document
$pdf->Output('productos.pdf', 'I');