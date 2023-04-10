<html>
    <head>
    <TITLE>registro de alumnos</TITLE>
    
    <link rel="stylesheet" type="text/css" href="stilo.css" media="screen" title="normal">
    </head>
    <div id="encabezado">
        <h1 class="sitio_nombre">registro de alumnos</h1>
        <h3 class="slogan">ITL</h3>
    </div>
    <div id="publicacion">
    <center><h2 class="titulo">bajas:</h2></center>
    </div>
    <body>
    <?php
         include("conexion.php"); 
        $consulta= mysqli_query($con, "select* from alumnos");
         ?>
    <center>
        <table border="1" cellspacing="1">
        <tr>
            <td>&nbsp;<b>nombre</b></td>
            <td>&nbsp;<b>apellido_paterno</b></td>
            <td>&nbsp;<b>apellido_materno</b></td>
            <td>&nbsp;<b>correo</b></td>
            <td>&nbsp;<b>borrar</b></td>
        </tr>
        
    <center><a href="index2.html">volver</a></center>
    <?php
       
    while($row=mysqli_fetch_array($consulta))
    {
    printf("<tr>
    <td>&nbsp;%s</td>
    <td>&nbsp;%s</td>
    <td>&nbsp;%s</td>
    <td>&nbsp;%s</td>
    <td>&nbsp;%s</td>
    <td>
    
    <a href=\"borra.php?id=".$row["id"]."\">borra</a>
    </td>
    </tr>"
    ,$row["nombre"]
    ,$row["apellido_paterno"]
    ,$row["apellido_materno"]
    ,$row["correo"]
    ,$row["id"]);
    }
    mysqli_fetch_array($consulta);
    ?>

    </table>
    </center>
    </body>
</html>
