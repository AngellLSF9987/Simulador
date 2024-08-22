<?php
require_once "crud/conexion.php";

csrf();
if (isset($_POST['submit']) && !hash_equals($_SESSION['csrf'], $_POST['csrf'])) {
    die();
}
?>

<?php require_once "templates/headerListado.php"; ?>

<?php
    $consultaSQL = "SELECT * FROM pedidos WHERE categoria =" . $_GET["id"]; // Capturar el id de la tabla categorias siendo clave foránea en la tabla pedidos
    $sentencia = $conexion->query($consultaSQL);
    while($pedidos = $sentencia->fetch_object()){
        $id = $pedidos->id;
        $nombre = $pedidos->nombre;
        $precio = $pedidos->precio;
        $imagen = $pedidos->imagen;
        $categoria = $pedidos->categoria;
        echo "<h4 class='h4'>" . $nombre . "</h4>";
        echo "<img src ='uploads/" . $imagen . " 'class='img'><hr>";
        echo "<a href ='personalizar.php?id=$id' ><input type = 'submit' class='btn' value = 'Elige..'></a><hr>";
    }

//$id =isset ($_GET['id']) ? $_GET["id"]:1; // Arrastramos el id

?>

<?php require_once "templates/footerListado.php"; ?>