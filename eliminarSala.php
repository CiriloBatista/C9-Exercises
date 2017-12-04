<?php session_start(); 
//datos para establecer la conexion con la base de mysql.
require "/home/ubuntu/workspace/cfg/conexion.php";

// verificamos si se han enviado ya las variables necesarias.
if (isset($_GET["id_sala_remota"])) {
    $id = $_GET["id_sala_remota"];

        $query = 'DELETE FROM SALA_REMOTA WHERE id_sala_remota="'.$id.'"';
         mysql_query($query) or die(mysql_error());
}

   header('Location: index.php');
?>