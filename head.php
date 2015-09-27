<?php require("Estudiante.php"); 


$aprobada="{background: #A9F5BC;}"; 
$una_vez="{background: rgba(240, 243, 36, 0.63);}";
$dos_veces="{background: rgba(243, 98, 36, 0.8);}";
$tres_veces="{background: rgba(204, 4, 4, 0.8); color: white;} ";
$cursando = '{
   color: blue;
   
  
}';
$colores = array("",$una_vez,$dos_veces,$tres_veces);

$e= new Estudiante("1019029861"); 

$texto="";
foreach($e->getReprobadas() as $row) { 
$texto = $texto . "#m".$row["MATERIA"].$colores[$row["NUMERO_VECES"]]."\n";  
 } 

foreach($e->getAprobadas() as $row) { 
$texto = $texto . "#m".$row["MATERIA"].$aprobada."\n"; 
 }

foreach($e->getCursando() as $row) { 
$texto = $texto . "#m".$row["MATERIA"].":before".$cursando."\n"; 
 } 


$res = <<<h

<meta charset="utf-8">

	
<style type="text/css">


   .Table
    {
        display: table;
    }
    .Title
    {
        display: table-caption;
        text-align: center;
        font-weight: bold;
        font-size: larger;
    }
    .Heading
    {
        display: table-row;
        font-weight: bold;
        text-align: center;
    }
    .Row
    {
        display: table-row;
    }
    .Cell
    {
        display: table-cell;
        border-width: thin;
        padding-left: 5px;
        padding-right: 5px;
    }

 
.materia{
    border-radius: 5px;
    background: #E3E3E2;
    padding: 2px; 
    text-align: center;
    color: black;
    font-size: 80%;
     
}

$texto

</style>

h;
return $res;