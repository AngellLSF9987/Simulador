<?php
require_once "crud/conexion.php";
require_once "templates/headerPersonalizar.php";
?>

<?php

$consultaSQL = "SELECT * FROM pedidos WHERE id =" . $_GET["id"]; // Capturar el id de la tabla pedidos
$sentencia = $conexion->query($consultaSQL);
while ($pedidos = $sentencia->fetch_object()) {
  $id = $pedidos->id;
  $nombre = $pedidos->nombre;
  $precio = $pedidos->precio;
  $imagen = $pedidos->imagen;
  $categoria = $pedidos->categoria;
  echo "<h3 style='text-shadow: 10px 2px 10px white; font-weight: 600; font-size: 1.5rem;	letter-spacing: 0.2rem; color: white;'>" . $nombre . "</h3><hr>";
  echo "<div class = 'imgper'><img src ='uploads/" . $imagen . "'></div><hr>";
  echo "<h6 style='text-shadow: 10px 2px 10px white; font-weight: 600; font-size: 1.5rem;	letter-spacing: 0.2rem; color: white;'>" . $precio . "€</h6><hr>";
  echo "<div class='links' style='display:flex; flex-direction:row; justify-content:space-between; margin: 0px 150px;'>";
  echo "<a href ='ticket.php?id=$id'><input type = 'submit' class='btn btn-secondary active btn-lg' id='btnper' value = 'Lo tomarás con Azúcar..?'></a>";
  echo "<a href ='ticket.php?id=$id'><input type = 'submit' class='btn btn-secondary active btn-lg' id='btnper' value = 'Eliges mejor Edulcorante..?'></a>";
  echo "<a href ='ticket.php?id=$id'><input type = 'submit' class='btn btn-secondary active btn-lg' id='btnper' value = 'Lo prefieres Original..?'></a>";
  echo "</div>";
  echo "</div>";
}
?>

<?php require_once "templates/footer.php"; ?>