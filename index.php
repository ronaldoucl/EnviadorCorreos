<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviador de Correos</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
    <form action="enviar_correo.php" method="post" enctype="multipart/form-data">
        <label for="correo">Correo electrónico:</label>
        <input type="email" id="correo" name="correo" required>
        <label for="asunto">Asunto:</label>
        <input type="text" id="asunto" name="asunto" required>
        <label for="mensaje">Mensaje:</label>
        <textarea id="mensaje" name="mensaje" required></textarea>
        <label for="archivo">Adjuntar Archivo:</label>
        <input type="file" name="archivo" id="archivo">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>

