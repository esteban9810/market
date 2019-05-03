<<?php

  $codigo=$_GET['cod'];
  //1. conectar a la base de datos
  include ("database.php");

  //2. Crear SQL para eliminar
  $sql="DELETE FROM productos
  WHERE codigo_prod = '$codigo'";
  $conn-> query($sql);
  echo "<script languaje='javascript'>alert (':::Producto eliminado con exito:::')</script>";
  header("Refresh:0;url=index.php");
 ?>
