<?php
include_once("../../includes/db.php");
@session_start();
$resultado = $conx->query("SELECT N.*, C.* FROM noticias N INNER JOIN categorias C ON N.id_categoria = C.categoria_id");
$catego = $conx->query("SELECT * FROM categorias");
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
    ?>
    <div class="box">
    <?php if (isset($_GET["id"])){?> 
        <h1>Editar Noticia</h1>
    <?php } else { ?>
        <h1>Crear Noticia</h1>

    <?php }?>
    <form method="POST" action="/noti/controllers/accion.php" enctype="multipart/form-data">
        <label>Titulo</label><br>
        <input type="text" name="titulo"><br>
        <label>Descripcion</label><br>
        <textarea name="descripcion"></textarea><br>
        <select name="categorias">
            <?php
                while ($fila = $catego->fetch_object()){?>
                <option value="<?php echo $fila->categoria_id?>"><?php echo $fila->categoria?></option>

            <?php } ?>
        </select><br>


        <input type="file" name="upload" accept=".jpg"><br>
        <input type="submit">
    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>