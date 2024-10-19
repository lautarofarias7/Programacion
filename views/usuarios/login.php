<?php
include_once("../../includes/db.php");
@session_start();
$subir = isset($_GET["subir"]) ? $_GET["subir"] : "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../includes/otrostyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta charset="UTF-8">
    <title>Noticias</title>
</head>
<body>
    <?php
        include_once("../../includes/barrasup.php");
    ?>
    <div>
        <form action="../../controllers/validar.php" method="POST">
            <h2>Inicio Sesion</h2>
            <label>Email</label><br>
            <input type="text" placeholder="Email" name="email"><br><br>
            <label>Contraseña</label><br>
            <input type="text" placeholder="Contraseña" name="contra"><br><br>
            <button class="boton1">Login</button>

        </form>
</body>
</html>