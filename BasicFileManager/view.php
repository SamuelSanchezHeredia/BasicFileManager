<?php
    require('clases/BasicFileManager.php');
    
    $contenido = BasicFileManager::getIndex();
?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>View</title>
</head>
<body>
    <h1>Source View</h1>
    <div>
        <?= highlight_file("archivos/index.html", true) ?>
    </div>
    <a href="archivos/index.html" target="_BLANK">Ver página HTML resultante</a>
</body>
</html>