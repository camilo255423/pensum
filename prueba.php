<?php
require_once("dompdf/dompdf_config.inc.php");
$head = require_once('head.php');
$body = require_once('test.php');
$html =
  '<html><head>'.$head.'</head>'.
  '<body>'.
  $body.
  'templating system.</p>'.
  '</body></html>';

$dompdf = new DOMPDF();
$dompdf->load_html($html);
$dompdf->set_paper('letter', 'landscape');
$dompdf->render();
$dompdf->stream("sample.pdf");


echo $html;

?>
