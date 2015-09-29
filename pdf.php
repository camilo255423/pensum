<?php
require_once("dompdf/dompdf_config.inc.php");
require_once("Estudiante.php"); 
$cedula = $_GET["cedula"];
$fecha = getdate(); 
$fecha_consulta= "Fecha de consulta: $fecha[mday]/$fecha[mon]/$fecha[year]"; 
$e= new Estudiante($cedula); 	

$head = require_once('head.php');
$body = require_once('body.php');

$leyenda= require_once('leyenda.php');
$html =
  '<html><head>'.$head.'</head>'.
  '<body>'
  .$body.
  $leyenda.
  '</br></br></br>'.
  $fecha_consulta.
  '</body></html>';

$dompdf = new DOMPDF();
$dompdf->load_html($html);
$dompdf->set_paper('letter', 'landscape');
$dompdf->render();
$dompdf->stream($e->nombre.".pdf");


?>
