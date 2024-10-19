<?php
$servidor = "localhost";
$nombre = "root";
$pass = "";
$base = "noti";


$conx= new mysqli($servidor, $nombre, $pass, $base);

if($conx->connect_errno){
    echo ("error: no existe la base de datos");
};
?>
