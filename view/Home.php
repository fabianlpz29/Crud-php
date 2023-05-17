<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
<?php
include_once "../models/Conexion.php";

$conectar = new ConexionPDO($host,$db,$user,$password);

$conectar->Conectar();
echo "<br>";
$conectar->Desconectar();
?>
</body>
</html>