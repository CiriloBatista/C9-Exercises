<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>login</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">


</head>
<body>
<?php session_start(); 
require "/home/ubuntu/workspace/cfg/conexion.php";



   $query="select * from SALA_REMOTA";

   $resultado=mysql_query($query);
   echo "<div class='container'>";
   echo "<table class='table table-striped'>";
   echo "<th>Nombre de Sala</th> <th>Responsable de Sala</th> <th>Tel&eacute;fono</th> <th>E-Mail</th> <th>IP</th> <th>ISDN</th> <th>Editar</th> <th>Eliminar</th>";
   while ($dato=mysql_fetch_array($resultado)) {
     echo "<tr>";  
     echo "<td>". $dato['nombre']."</td>";
     echo "<td>". $dato['responsable']."</td>";
     echo "<td>". $dato['telefono']."</td>";
     echo "<td>". $dato ['email_responsable']."</td>";
     echo "<td>". $dato ['ip']."</td>";
     echo "<td>". $dato ['isdn']."</td>";
     echo "<td><a href='editarSala.php' id=". $dato ['id_sala_remota']."'>Editar</a></td>";
     echo "<td><a href='eliminarSala.php' id=". $dato ['id_sala_remota']."'>Eliminar</a></td>";
     echo "</tr>";
   }
   echo "</table>";
?>
   <button type="button" class="btn btn-success" onclick="window.location.href='index.html'">Agregar Sala</button>
   </div>

    <!-- jQuery -->
    <script src="js/jquery-1.11.0.js"></script>
    
    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

</body>
</html>