<?php 
include_once("../../includes/db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../includes/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Usuario</title>
</head>
<body>
    <div class="bodyDash">
        <div class="contenedor">
            <div class="main">
                <div class="barra1">
                    <a href="">Cerrar sesion</a>
                    <a href="">Ayuda</a>
                    <a href="/noti/views/noticias/index.php">Inicio</a>
                </div>
                <div class="row">
                    <div class="col-md-4 mt-1">
                        <div class="card text-center sidebar">
                            <div class="card body">
                                <img src="../../img/nperfil.jpg" class="rounder-circle" width="150">
                                <div class="mt-3">
                                    <h3>Usuario Nuevo</h3>
                                    <a href="">Inventario</a>
                                    <a href="">Configuracion</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 mt-1">
                        <div class="card mb-3 content">
                            <h1 class="m-3 pt-3">About</h1>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <h5>Nombre completo</h5>
                                    </div>
                                    <div class="col-md-9 text-secondary">
                                        Usuario Nuevo
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-3">
                                        <h5>Email</h5>
                                    </div>
                                    <div class="col-md-9 text-secondary">
                                        usuario@usuario.com
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-3">
                                        <h5>Estado</h5>
                                    </div>
                                    <div class="col-md-9 text-secondary">
                                        Usuario
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>



