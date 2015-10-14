<?php

class Conexion{



static function getConexion()
{

 $user="root";
 $pass="root";
 $dbh = null;

try {
    return new PDO('mysql:host=localhost;dbname=pensum', $user, $pass);
    

} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

}
}
?>
