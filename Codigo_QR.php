<?php

/**
 * LOS REQUERIMIENTOS DEL DE LA LIBRERIA
*/
require_once('TCPDF/examples/tcpdf_include.php');
require_once('TCPDF/tcpdf.php');
// crea un nuevo documento pdf
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// establecer información del documento
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Efrin');
$pdf->SetTitle('TCPDF Ejemplo');
$pdf->SetSubject('TUTORIAL');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');


// Establezca los datos predeterminados del encabezado
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.'', PDF_HEADER_STRING);


// ? conjunto de márgenes
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

//? Establecer saltos de página automática
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

//? Establecer factor de escala de imagen

// $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);


// ? colocar fuente
// $pdf->SetFont('helvetica', '', 11);

// ? Añadir pagina
$pdf->AddPage();


// $pdf->SetFont('helvetica', '', 10);

// - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

// Estilo establecido para el código de barras
$style = array(
	'border' => 0,// margen 1
	'vpadding' => 'auto',
	'hpadding' => 'auto',
	'fgcolor' => array(0,0,0), //array(179,126,10),
	'bgcolor' => array(255,255,255), //array(255,230,140)
	'module_width' => 1, // Ancho de un solo módulo en puntos.
	'module_height' => 1 // Altura de un solo módulo en puntos.
);

// Aqui se declarado en codigo QR

$pdf->write2DBarcode('http://www.uatf.edu.bo/', 'QRCODE,L', 35, 75, 150, 150, $style, 'N');
// Configuracion del titulo
$pdf->Text(85, 65, 'SCANEE EL CÓDIGO QR');
// cambiar el enlace de la universidad


//Documento PDF de cierre y salida
$pdf->Output('CodigoQR_Ingreso.pdf', 'I');


?>
