<?php
//session_start();

include("conexion.php");
include("bajas.php");
$id = $_POST["id"];

$eliminado = "DELETE FROM alumnos WHERE id = '$id'";
$resultado = mysqli_query($conexion, $eliminado);

if($resultado){

//session_destroy();
//header("Location: ../PAGINAS/index.php");

}else{
echo "error";
}

?>