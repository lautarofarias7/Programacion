<?php
include_once("../../includes/db.php");
@session_start();
$resultado = $conx->query("SELECT * FROM categorias");

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
    <div clas="box">
    <div class="row row-cols-1 row-cols-md-3 g-4 py-5">
    <?php
    while ($fila = $resultado->fetch_object()){?>
            <div class="col">
                <div class="card">
                    <div class="d-flex justify-content-around mb-5">
                        <a href="/noti/views/noticias/index.php?cat=<?php echo $fila->categoria;?>" class="btn btn-primary"><?php echo $fila->categoria;?></a>
                    </div>
                </div>
            </div>
    <?php }
    ?>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>