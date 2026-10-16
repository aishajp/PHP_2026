<?php
$nombre = "Aisha";
$apellidos = "Juan-Aracil Proenza";
$edad = 21;
$ciudad = "Piedras Blancas";
$email = "aishajp09@educastur.es";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Datos personales</title>
</head>
<body>
    <h1>Datos personales</h1>
    <ul>
        <li><strong>Nombre:</strong> <?= htmlspecialchars($nombre) ?></li>
        <li><strong>Apellidos:</strong> <?= htmlspecialchars($apellidos) ?></li>
        <li><strong>Edad:</strong> <?= $edad ?></li>
        <li><strong>Ciudad:</strong> <?= htmlspecialchars($ciudad) ?></li>
        <li><strong>Email:</strong> <?= htmlspecialchars($email) ?></li>
    </ul>
</body>
</html>