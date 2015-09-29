<?php session_start() ?>
<?php 
 if(isset($_POST["clave"]))
 {
 if ($_POST["clave"]=="dtesalacad")
 {
   $_SESSION["clave"]="x12a11";
   header("Location: buscar.php");
 }
 else
 {
  header("Location: index.php");
 }
}
 ?>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="css/bootstrap.css" type="text/css">

</head>
<div class="jumbotron vertical-center">
<div class="container text-center">
<form method="POST" action="">
	Clave
  <input type="password" name="clave"/>
  <input type="submit" />

 </fom> 
</div>
</div>
</head>

