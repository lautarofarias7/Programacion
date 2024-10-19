<?php
require_once("../includes/db.php");
$usuario = "1";
$titulo = isset($_POST["titulo"]) ? $_POST["titulo"] : "";
$descripcion = isset($_POST["descripcion"]) ? $_POST["descripcion"] : "";
$categoria = isset($_POST["categorias"]) ? $_POST["categorias"] : "";
$carpetaASubir = "../img/upload/";
$rutaFinal = $carpetaASubir . $_FILES["upload"]["name"];

if (move_uploaded_file($_FILES["upload"]["tmp_name"], $rutaFinal)){
    $sql = "INSERT INTO noticias (titulo, imagen, descripcion, id_categoria, fecha_publicado, id_usuario) VALUES (?, ?, ?, ?, now(), ?)";
    $stmt = $conx->prepare($sql);
    $stmt->bind_param("sssis", $titulo, $rutaFinal, $descripcion, $categoria, $usuario);
    $stmt->execute();
    $stmt->close();

    header("Location: /noti/views/noticias/index.php");
}else {
    echo "Error al subir el archivo";
}