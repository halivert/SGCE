<?php
include("../Modelo/abre_conexion.php");
$id = htmlspecialchars($_POST['value']);
$query = "delete FROM Mensaje WHERE idMensaje = '$id'";
mysqli_query($link, $query);
echo "hecho";
include("../Modelo/cierra_conexion.php");
?>