<?php require("Estudiante.php"); ?>
<?php
$aprobada="{background: rgba(92, 169, 24, 0.4);}"; 
$una_vez="{background: rgba(240, 243, 36, 0.63);}";
$dos_veces="{background: rgba(243, 98, 36, 0.8);}";
$tres_veces="{background: rgba(204, 4, 4, 0.8); color: white;} ";
$cursando = '{
   font-family: FontAwesome;
   content: "\f0a4";
   color: blue;
   
  
}';
$colores = array("",$una_vez,$dos_veces,$tres_veces);
?>

<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="css/bootstrap.css" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<style>
	
p.materia{
 border-radius: 5px;
    background: #E3E3E2;
    padding: 2px; 
    text-align: center;
    width: 130%;
    color: black;
    font-size: 110%;
     
}
<?php $e= new Estudiante("1019029861"); ?>


<?php foreach($e->getReprobadas() as $row) { 
echo "#m".$row["MATERIA"].$colores[$row["NUMERO_VECES"]]."\n";  
 } ?>

<?php foreach($e->getAprobadas() as $row) { 
echo "#m".$row["MATERIA"].$aprobada."\n"; 
 } ?>

<?php foreach($e->getCursando() as $row) { 
echo "#m".$row["MATERIA"].":before".$cursando."\n"; 
 } ?>


</style>
</head>
<body>
<?php require("pensum.php"); ?>
</body>
</html>




