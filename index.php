<?php

require_once "crud/conexion.php";

csrf();
if (isset($_POST['submit']) && !hash_equals($_SESSION['csrf'], $_POST['csrf'])) {
    die();
}

?>

<?php include "templates/header.php"; ?>

<?php

$consulta = $conexion->query("SELECT * FROM categorias");
while ($elemento = $consulta->fetch_object()) {
    $id = $elemento->id;
    $nombre = $elemento->nombre;
    $imagen = $elemento->imagen;
    echo "<h4 class='h4'>" . $nombre . "</h4>";
    echo "<img src ='uploads/" . $imagen . " 'class='img'><hr>";
    echo "<a href ='listado.php?id=$id' ><input type = 'submit' class='btn' value = 'Elige..'></a><hr>";
}
//$id =isset ($_GET['id']) ? $_GET["id"]:1; // Arrastramos el id
?>
<?php
require_once "templates/footer.php";
?>