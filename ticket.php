<?php
require_once "crud/conexion.php";
require_once "templates/headerTicket.php";
?>
<?php
$id =$_GET['id'];
$consultaSQL = "SELECT * FROM pedidos WHERE id =" . $id; // Capturar el id de la tabla pedidos
$sentencia = $conexion->query($consultaSQL);
$pedido = $sentencia->fetch_object();
  $id = $pedido->id;
  $nombre = $pedido->nombre;
  $precio = $pedido->precio;
  $imagen = $pedido->imagen;
  $categoria = $pedido->categoria;
  echo "<table style='color:white; border: 2px solid; margin-top: 1em; margin-left: 27.7em'>";
  echo "<tr style='display:flex; flex-direction:column; justify-content:center;'>";
  echo" <td><h1 class='h1'><i>Venty 24</i></h1></td>";
  echo" <td><h2 class='h2'>Resumen de tu pedido</h2></td>";
  echo" <td><h3 style='text-align:center'>Muchas Gracias!</h3><hr></td>";
  echo "<td><h5 style='text-shadow: 10px 2px 10px white; font-weight: 600; font-size: 1.5rem;	letter-spacing: 0.2rem; color: white;'>" . $nombre . "</h5><hr></td>";
  echo "<td><h5 style='text-shadow: 10px 2px 10px white; font-weight: 600; font-size: 1.5rem;	letter-spacing: 0.2rem; color: white;'>PvP: " . $precio . "€</h5><hr></td>";
  echo "<td><h4 class=''h4> Vuelve pronto..Buen día! </h4></td>";
  echo "</tr>";
  echo "</table>";
  echo "<p><a href ='index.php?id=$id'><input type = 'submit' class='btn btn-secondary active btn-lg' id='btnPer' value = 'Inicio..'></a></p>";
?>
<?php require_once "templates/footerTicket.php"; ?>