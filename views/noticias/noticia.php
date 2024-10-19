<?php
include_once("../../includes/db.php");
@session_start();
if (isset($_GET["noti"])){
    $noti = $_GET["noti"];
    $sentencia = $conx->prepare("SELECT N.*, C.* FROM noticias N INNER JOIN categorias C ON N.id_categoria = C.categoria_id WHERE N.id = ?");
    $sentencia->bind_param("s", $noti);
    $sentencia->execute();
    $resultado = $sentencia->get_result();
}else {
    header("Location: /noti/views/noticias/index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../includes/otrostyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta charset="UTF-8">
    <title>Que pensas PHP</title>
</head>
<body>
    <?php
    include_once("../../includes/barrasup.php");
    $fila = $resultado->fetch_object()
    ?>
    <div>
        <div class="foto">
            <img src="../<?php echo $fila->imagen?>">
        </div>
        <div>
            <h1><?php echo $fila->titulo?></h1>
        </div>
        <div>
            <p><?php echo $fila->descripcion?></p>
        </div>
        <div>
            <p>Subido por: <?php echo $fila->nombre?></p>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>