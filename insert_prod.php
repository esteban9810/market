<?php
include("database.php");
$nombre = $_POST["nomprod"];
$codigo = $_POST["codprod"];
$cantidad = $_POST["cantprod"];
$estado = $_POST["estprod"];

$sql = "INSERT INTO productos (nombre_prod,codigo_prod,cantidad,estado) Values ('$nombre','$codigo','$cantidad','$estado')";

if($conn->query($sql) === TRUE){
  echo "Producto registrado con exito<br>";
  echo "<a href='index.php'>Regresar</a>";
  echo "<script languaje='javascript'>alert (':::Producto registrado con exito:::')</script>";
  header("Refresh:0;url=index.php");
}else{
  die("Error: " . $conn->error);
}
 ?>
