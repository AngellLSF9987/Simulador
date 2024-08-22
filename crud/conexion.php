<?php
/*
$url = $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];

$conexion = new mysqli("localhost", "angel", "Murcia2022");
$consulta = "DROP DATABASE h0122u0007_angelsaorin;";
$conexion->query($consulta);
*/
/*
if (strpos($url, "microinformaticos")) {
$conexion = new mysqli("localhost", "angel", "Murcia2022");
$consulta = "CREATE DATABASE IF NOT EXISTS h0122u0007_angelsaorin;";
$conexion->query($consulta);
} else {
$conexion = new mysqli("localhost", "root", "");
$consulta = "CREATE DATABASE IF NOT EXISTS maquina;";
$conexion->query($consulta);
}
*/
//Conectamos con el servidor 
$conexion = new mysqli("localhost", "root", "", "simulador");

/*
//Creamos la base de datos si no existe
$consulta = "CREATE DATABASE IF NOT EXISTS maquina;";
$conexion->query($consulta);


//Seleccionamos la base de datos y creamos la tabla si no existe
$conexion->select_db("maquina");
$consulta = "CREATE TABLE IF NOT EXISTS categorias (
    id INT(2) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(30) NOT NULL,
    imagen VARCHAR(255) NOT NULL 
    );";

$conexion->query($consulta);


//Seleccionamos la base de datos y creamos la tabla si no existe
$conexion->select_db("maquina");
$consulta = "CREATE TABLE IF NOT EXISTS pedidos (
        id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        nombre VARCHAR(30) NOT NULL,
        precio DECIMAL(2,2) NOT NULL,
        imagen VARCHAR(255) NOT NULL,
        categoria INT (11) UNSIGNED NOT NULL);";
$conexion->query($consulta);


$conexion->select_db("maquina");
$consulta = "ALTER TABLE pedidos
    ADD CONSTRAINT categorias_FK FOREIGN KEY (categoria) REFERENCES categorias(id);";

$conexion->query($consulta);

//Si la tabla "categorias" está vacía, añadimos datos de ejemplo
$conexion->select_db("maquina");
$consulta = "SELECT nombre FROM categorias";
$resultado = $conexion->query($consulta);
if ($resultado !== false && $resultado->num_rows < 1) {
  
  $consulta = "INSERT INTO categorias (nombre, imagen) 
          VALUES ('Cafe en Grano','grano.jpg');";
  $conexion->query($consulta);

  $consulta = "INSERT INTO categorias (nombre, imagen) 
          VALUES ('Cafes Solubles', 'soluble.jpg');";
  $conexion->query($consulta);

  $consulta = "INSERT INTO categorias (nombre, imagen) 
          VALUES ('Capuchinos y Mocachinos', 'capuccinomocaccino.jpg');";
  $conexion->query($consulta);

  $consulta = "INSERT INTO categorias (nombre, imagen) 
          VALUES ('Chocolates', 'chocolates.jpg');";
  $conexion->query($consulta);

  $consulta = "INSERT INTO categorias (nombre, imagen) 
          VALUES ('Infusiones', 'infusiones.jpg');";
  $conexion->query($consulta);

  $consulta = "INSERT INTO categorias (nombre, imagen) 
          VALUES ('Productos sin vaso');";
  $conexion->query($consulta);
}

//Si la tabla "grano" está vacía, añadimos datos de ejemplo
$conexion->select_db("maquina");
$consulta = "SELECT nombre FROM pedidos";
$resultado = $conexion->query($consulta);
if ($resultado !== false && $resultado->num_rows < 1) {

  $consulta = "INSERT INTO pedidos (nombre, precio, imagen, categoria) 
          VALUES ('Expresso corto', '0.50', 'expresso.png','1');";

  $consulta = "INSERT INTO pedidos (nombre, precio, imagen, categoria)
  VALUES ('Descafeinado Expresso corto', '0.50', 'expresso.png', '1');";
  $conexion->query($consulta);

  $consulta = "INSERT INTO pedidos (nombre, precio, imagen, categoria)
  VALUES ('Ristretto','0.50', 'ristretto.png', '1');";
  $conexion->query($consulta);

  $consulta = "INSERT INTO pedidos (nombre, precio, imagen, categoria)
  VALUES ('Ristretto Descafeinado', '0.50', 'ristretto.png', '1');";
  $conexion->query($consulta);

  $consulta = "INSERT INTO pedidos (nombre, precio, imagen, categoria)
  VALUES ('Cafe Largo Expresso', '0.70', 'expresso.png','1');";
  $conexion->query($consulta);

  $consulta = "INSERT INTO pedidos (nombre, precio, imagen, categoria)
  VALUES ('Cafe Largo Descafeinado', '0.70', 'expresso.png', '1');";
  $conexion->query($consulta);

  $consulta = "INSERT INTO pedidos (nombre, precio, imagen, categoria)
  VALUES ('Cafe Doble','0.80', 'expresso.png', '1');";
  $conexion->query($consulta);

  $consulta = "INSERT INTO pedidos (nombre, precio, imagen, categoria)
  VALUES ('Cafe Doble Descafeinado', '0.80', 'expresso.png', '1');";
  $conexion->query($consulta);

  $consulta = "INSERT INTO pedidos (nombre, precio, imagen, categoria)
  VALUES ('Cafe con Leche', '1.10', 'conleche.png', '1');";
  $conexion->query($consulta);

  $consulta = "INSERT INTO pedidos (nombre, precio, imagen, categoria)
  VALUES ('Cafe con Leche Descafeinado', '1.10', 'conleche.png', '1');";
  $conexion->query($consulta);

  $consulta = "INSERT INTO pedidos (nombre, precio, imagen, categoria)
  VALUES ('Cafe Cortado', '0.90', 'cortado.png', '1');";
  $conexion->query($consulta);

  $consulta = "INSERT INTO pedidos (nombre, precio, imagen, categoria)
  VALUES ('Cafe Cortado Descafeinado', '0.90', 'cortado.png', '1');";
  $conexion->query($consulta);

  $consulta = "INSERT INTO pedidos (nombre, precio, imagen, categoria)
  VALUES ('Infusión de Tila', '0.80', 'tila.png', '5');";
  $conexion->query($consulta);

  $consulta = "INSERT INTO pedidos (nombre, precio, imagen, categoria)
  VALUES ('infusión de Manzanilla', '0.80', 'manzanilla.png', '5');";
  $conexion->query($consulta);

  $consulta = "INSERT INTO pedidos (nombre, precio, imagen, categoria)
  VALUES ('Infusión de Poleo Menta', '0.80', 'poleo.png', '5');";
  $conexion->query($consulta);

  $consulta = "INSERT INTO pedidos (nombre, precio, imagen, categoria)
  VALUES ('Infusión de Té', '0.80', 'te.png', '5');";
  $conexion->query($consulta);

  $consulta = "INSERT INTO pedidos (nombre, precio, imagen, categoria)
  VALUES ('Chocolate a la Taza', '1.20', 'choco.png', '4');";
  $conexion->query($consulta);

  $consulta = "INSERT INTO pedidos (nombre, precio, imagen, categoria)
  VALUES ('Mocaccino', '1.20', 'mocaccino.png', '3');";
  $conexion->query($consulta);
}
*/
function escapar($html)
{
  return htmlspecialchars($html, ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8");
}

function csrf()
{
  session_start();

  if (empty($_SESSION['csrf'])) {
    if (function_exists('random_bytes')) {
      $_SESSION['csrf'] = bin2hex(random_bytes(32));
    } else if (function_exists('mcrypt_create_iv')) {
      $_SESSION['csrf'] = bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM));
    } else {
      $_SESSION['csrf'] = bin2hex(openssl_random_pseudo_bytes(32));
    }
  }
}
?>
