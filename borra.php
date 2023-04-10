<?php
    include("conexion.php"); 
    include("bajas.php");
    
    mysqli_query($con,"DELETE FROM alumnos where id=".$_GET['id']);
    
    ?>