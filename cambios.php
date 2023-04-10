<html>
<head>
    <title>Registro de Alumnos</title>
<link rel="stylesheet" type="text/css" href="stilo.css" media="screen" title="Normal">
</head> 
<div id="encabezado">
<h1 class="sitio_nombre">Registro de Alumnos</h1>
<h3 class="slogan">ITL</h3>
</div>
<div id="publicacion">
<center>
    <h2 class="titulo">Cambios:</h2>
</center>
</div>
<body>
<?php
if ($_POST['control']!="")
include("conexion.php");
$busca=mysqli_query($con, "select* from alumnos where nombre=$_POST[control]");
$row = mysqli_fetch_array($busca);
$id=$row[0];
$nombre=$row[1];
$apellido_paterno=$row[2];
$apellido_materno=$row[3];
$correo=$row[4];
$datos=mysqli_fetch_row($busca);
echo ("<form name = formulario action-cambiar.php method=POST> 
<center>
<b>Modifica el formulario</b><br>
<table>
<tr>
<td>id:</td> 
<td><input type=text name=id value='$id'><br>
</td>
</tr>
<tr>
<td>Nombre:</td> 
<td><input type=text name=ci value='$ci'><br>
</td>
</tr>
<tr>
<td>Nombre:</td> 
<td><input type=text name=nombre value='$nombre'><br>
</td>
</tr>
<tr>
<td>Apellido paterno:</td>
<td><input type=text name=apellido_materno value='$apellido_paterno'><br></td>
</tr>
<tr>
<td>Apellido materno:</td>
<td><input type=text name=apellido_materno value='$apellido_materno'><br></td>
</tr>
<tr>
<td>No. Control:</td>
<td><input type=text name=no_control value='$no_control'><br></td>
</tr> 
<tr>
<td>Carrera:</td> 
<td><input type=text name=carrera value='$carrera'><br></td>
</tr>
<tr>
<td>Correo:</td> 
<td><input type=text name=correo value='$correo'><br></td>
</tr>
<tr>
<td>Ingreso:</td> 
<td><input type=text name=ingreso value='$ingreso'><br></td>
</tr>
<tr>
<td>Egreso:</td> 
<td><input type=text name=egreso value='$egreso'><br></td>
</tr>
<tr>
<td><input type=submit value-enviarDatos name=enviarDatos></td>
</tr>
</form>
</table>
</center>");

echo ("No se encontro el numero de control seleccionado");

} else

header("Location: frmbusqueda.html");

?>

</body>

</html>