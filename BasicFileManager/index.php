<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FileManager</title>
</head>

<body>
    <h2>Manda hasta 4 bloques de tu web y nosotros te la montamos en segundos!!</h2>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <div class="containerIn">
            <label for="headFile">HEAD</label>
            <input type="file" id="headFile" name="headFile">
            <label for="mainFile">MAIN</label>
            <input type="file" id="mainFile" name="mainFile">
        </div>
        <div class="containerIn">
            <label for="headerFile">HEADER</label>
            <input type="file" id="headerFile" name="headerFile">
            <label for="footerFile">FOOTER</label>
            <input type="file" id="footerFile" name="footerFile">
        </div>
        
        <button type="submit">Juntar archivos</button>
    </form>
</body>

</html>