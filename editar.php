<?php
session_start(); 
//datos para establecer la conexion con la base de mysql.
require "/home/ubuntu/workspace/cfg/conexion.php";

// verificamos si se han enviado ya las variables necesarias.
if (isset($_GET["nom"])) {
    $name = $_GET["nom"];
    $responsable = $_GET["res"];
    $telefono = $_GET["tel"];
    $email = $_GET["mail"];
    $ip = $_GET["ip"];
    $isdn = $_GET["isdn"];
    $id = $_GET["id"];
    
    
    }
    // Hay campos en blanco
    if($name==""| $responsable==""| $telefono==""| $email==""| $ip==""| $isdn=="") {
        echo "Cuidado! un campo est&aacute; vac&iacute;o. ";
        //formRegistro();
    }else{
        $query = 'UPDATE SALA_REMOTA SET nombre="'.$name.'", responsable="'.$responsable.'", telefono="'.$telefono.'", email_responsable="'.$email.'", ip="'.$ip.'", isdn="'.$isdn.'" WHERE id_sala_remota='.$id;
        mysql_query($query) or die(mysql_error());
        echo 'La sala "'.$name.'" se ha modificado satisfactoriamente.<br/>';
    header("Location: listar.php");
    }
        

?>