<?php session_start(); ?>
<?php if(!isset($_SESSION["clave"])) header("Location: index.php"); ?>

<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="css/bootstrap.css" type="text/css">

</head>
<div class="jumbotron vertical-center">
<div class="container text-center">


<form method="POST" action="semaforo.php">
<div><a href="logout.php">Logout</a></div> 		
  <div>Documento del estudiante</div>	
  <div><input type="text" name="cedula"/></div>
  <div><input type="submit" /></div>


 </fom> 	
 <div>
 </div>