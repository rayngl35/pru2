<html>
<head>
    <title>Registro de Alumnos</title>
<link rel="stylesheet" type="text/css" href="stilo.css" media="screen" title="Normal">
</head>
<div id="encabezado">
<h1 class="sitio_nombre">Registro</h1>
<h3 class="slogan"></h3>
</div>
<div id="publicacion">
<center><h2 class="titulo">Cambios:</h2></center>
</div>
<body>
<?php
//    trim elimina espacios no validos alrededor del dato oficial(limpia cadena)
if (trim($_POST['control'])!="")
{
include("conexion.php");
$busca = mysqli_query($con,"select* from alumnos where nombre like'%".$_POST['control']."%'");
//    el simbolo % tambien limpia cadena
$row = mysqli_fetch_array($busca);
$id=$row[0];
$nombre=$row[1];
$apellido_paterno=$row[2];
$apellido_materno=$row[3];
$correo=$row[4];
$registros = '<p> encontrado '.mysqli_num_rows($busca). ' registros </p>';
echo $registros;
if (mysqli_num_rows($busca)>0)
{
$datos=mysqli_fetch_row($busca);
echo ("<form name=formulario action=cambiar.php method=POST>
<center>
<b>Modifica el formulario</b><br>
<table>
<tr>
<td>id:</td> 
<td><input type=text name=id value='$id'> <br></td>
</tr>
<tr>
<td>Nombre:</td> 
<td><input type=text name=nombre value='$nombre'> <br></td>
</tr>
<tr>
<td>Apellidos:</td> 
<td><input type=text name=apellido_paterno value='$apellido_paterno' ><br></td>
</tr>
<tr>
<td>Apellidos:</td> 
<td><input type=text name=apellido_materno value='$apellido_materno' ><br></td>
</tr>
<tr>
<td>correo:</td>
<td><input type=text name=correo value='$correo' > <br></td></tr>
<tr>
<td><input type=submit name=enviarDatos value=enviarDatos></td>
</tr>
</form>
</table>
</center>");
}
else
echo ("No se encontro el numero de control seleccionado");
}
else 
header("Location: frmbusqueda.html");
?>
</body>
</html>


