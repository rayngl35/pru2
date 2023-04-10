<?php
ini_set('display_errors',0);
include('conect.php');
$usuario=$_POST['usuario'];
$password=$_POST['password'];
$consulta=0;


$consulta="SELECT* FROM usuarios where usuario='$usuario' and password='$password'";
if(!mysqli_query($con,$consulta))
    echo"incorrectos";
else
    include("index2.html");
//$resultado=mysqli_query($conexion,$consulta);
//
//$filas=mysqli_num_rows($resultado);
//
//if($filas){
//  
//    header("altas.php");
//
//}else{
//    
//    include("index.html");
//  
//}
mysqli_free_result($resultado);
mysqli_close($conexion);





?>
