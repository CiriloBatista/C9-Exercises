<?php session_start(); 
//datos para establecer la conexion con la base de mysql.
require "cfg/conexion.php";

// verificamos si se han enviado ya las variables necesarias.
if (isset($_GET["nombre"])) {
    $name = $_GET["nombre"];
    $responsable = $_GET["responsable"];
    $telefono = $_GET["telefono"];
    $email = $_GET["email_responsable"];
    $ip = $_GET["ip"];
    $isdn = $_GET["isdn"];
    
    
    
    // Hay campos en blanco
    if($name==NULL|$responsable==NULL|$telefono==NULL|$email==NULL|$ip==NULL|$isdn==NULL) {
        echo "Cuidado un campo est&aacute; vac&iacute;o. ";
        //formRegistro();
    }else{

                $query = 'INSERT INTO SALA_REMOTA (nombre, responsable, telefono, email_responsable, ip, isdn) VALUES ("'.$name.'","'.$responsable.'","'.$telefono.'","'.$email.'","'.$ip.'","'.$isdn.'")';
                mysql_query($query) or die(mysql_error());
                echo 'La sala '.$name.' ha sido registrada de manera satisfactoria.</br>';
   header('Location: listar.php');
            }
}

?>