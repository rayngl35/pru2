<?php
    ini_set('display_errors',0);
    include("funciones.php");
    include("conexion.php");
    $id=$_POST["id"];
    $nombre=$_POST["nombre"];
    $apellido_paterno=$_POST["apellido_paterno"];
    $apellido_materno=$_POST["apellido_materno"];
    $correo=$_POST["correo"];
    $sql=0;
           $sql="INSERT INTO alumnos (nombre,apellido_paterno,apellido_materno,correo)VALUES('$nombre','$apellido_paterno','$apellido_materno','$correo')"; 
        
    if(!mysqli_query($con,$sql))
    echo"no se pudieron registrar los datos";

    else
    
    
    echo("<center>el registro se ha realizado satisfactoriamente<br><br>
    <b>nombre:</b>".$nombre."<br>
    <b>apellido paterno:</b>".$apellido_paterno."<br>
    <b>apellido materno:</b>".$apellido_materno."<br>
    <b>correo:</b>".$correo."<br>");
?>
<br><br>
<a href="index2.html">volver</a>