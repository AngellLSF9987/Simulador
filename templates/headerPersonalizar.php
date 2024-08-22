<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap JavaScript Libraries -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.2/dist/umd/popper.min.js"
        integrity="sha384-q9CRHqZndzlxGLOj+xrdLDJa9ittGte1NksRmgJKeCV9DrM7Kz868XYqsKWPpAmn"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.js"
        integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"
        integrity="sha256-xLD7nhI62fcsEZK2/v8LsBcb4lG7dgULkuXoXB/j91c=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/color/jquery.color-2.2.0.js"
        integrity="sha256-gvMJWDHjgDrVSiN6eBI9h7dRfQmsTTsGU/eTT8vpzNg=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
        </script>
    <link rel="stylesheet" type="text/css" href="css/style.min.css" />
    <title>CAFETISIMA</title>
</head>

<body>
    <header>
        <div class="header">
            <h1 class="h1"><i>CAFETISIMA</i></h1>
            <h2 class="h2">¿Cómo te apetece tomarlo hoy...?</h2>
        </div>
        <hr>
        <?php

        if (isset($_POST['nombre'])) {
            $nombre = $_POST['nombre'];
            $consultaSQL = "SELECT * FROM categorias WHERE nombre LIKE '%$nombre%'";
            $nombre = ($nombre != "") ? 'Selección de Productos (' . $_POST['nombre'] . ')' : 'Selección de Productos';
        } else {
            $consultaSQL = "SELECT * FROM categorias";
            $nombre = 'Selección de Productos';
        }
        echo "<h3 class='h3'>$nombre</h3><hr>";

        ?>
    </header>
    <main>
        <div class="container">