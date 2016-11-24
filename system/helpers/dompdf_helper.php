<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// function generate_pdf($object, $filename='', $direct_download){
// 	require_once("dompdf/dompdf_config.inc.php");
// 	$dompdf = new DOMPDF();
// 	$dompdf->load_html($object);
// 	$dompdf->render();
// 	if ($direct_download == TRUE)
// 		$dompdf->stream($filename);
// 	else
// 		return $dompdf->output();	
// }

function generate_pdf($object, $filename=''){
	require_once("dompdf/dompdf_config.inc.php");
	$dompdf = new DOMPDF;
	$dompdf->load_html($object);
	$dompdf->render();
	$dompdf->stream($filename);	
}

function generate_pdf_sample($html, $filename=''){
	require_once("dompdf/dompdf_config.inc.php");
	$dompdf = new DOMPDF();
	$dompdf->load_html($html);
	$dompdf->render();
	$dompdf->stream($filename);	
}

function pdf_create($html, $filename='', $stream=TRUE) 
{
    require_once("dompdf/dompdf_config.inc.php");
    $dompdf = new DOMPDF();
    $dompdf->load_html($html);
    $dompdf->render();
    if ($stream) {
        $dompdf->stream($filename.".pdf");
    } else {
        return $dompdf->output();
    }
}