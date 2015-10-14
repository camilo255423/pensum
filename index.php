<?php require("Estudiante.php"); ?>


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
    font-size: 11	0%;
     
}
<?php $e= new Estudiante("1014256763"); ?>
 
<?php foreach($e->getConsulta() as $row) { ?>
<?php echo "#m".$row["MATERIA"]; ?>
{
 background: #99FF33;
 color: black;
  font-family: FontAwesome;
content: "\25AE";
}
<?php } ?>
</style>
</head>
<body>
<?php require("pensum.php"); ?>
</body>
</html>




