<?php
include_once("../includes/db.php");
@session_start();
$subir = isset($_GET["subir"]) ? $_GET["subir"] : "";
$email = isset($_POST["email"]) ? $_POST["email"] : "";
$contra = isset($_POST["contra"]) ? $_POST["contra"] : "";

$stmt= $conx->prepare("SELECT * FROM usuarios WHERE email = ? AND contra = ?");
$stmt->bind_param("ss",$email,$contra);
$stmt->execute();
$resultado = $stmt->get_result();
$stmt->close();


$usuario = $resultado->fetch_object();

if ($subir == "sub"){
    if($usuario === NULL){
        header("Location: /noti/views/usuarios/login.php?subir=sub");
        exit();
    } else {
     $_SESSION["id"]=$usuario->id;
     header("Location: /noti/views/noticias/formulario.php");
     exit();
    };    
}
if ($subir == "us"){
    if($usuario === NULL){
        header("Location: /noti/views/usuarios/login.php?subir=sub");
        exit();
    } else {
     $_SESSION["id"]=$usuario->id;
     header("Location: /noti/views/noticias/formulario.php");
     exit();
    }; 
}else {
    if($usuario === NULL){
        header("Location: /noti/views/usuarios/login.php");
        exit();
    } else {
     $_SESSION["id"]=$usuario->id;
     header("Location: /noti/views/usuarios/index.php");
     exit();
    }; 
}
header("Location: /noti/views/usuarios/login.php?sub=sub");
  

