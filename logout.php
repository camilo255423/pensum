<?php session_start(); ?>
<?php
unset($_SESSION["clave"]);
header("Location: index.php");
?>
