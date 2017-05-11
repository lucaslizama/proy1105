<!DOCTYPE html>
<html lang="es">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <form action="lib/modulos/agregarProducto.php" method="POST">
            <div>
                <label for="">Nombre</label>
                <input type="text" name="nombre">
            </div>
            <div>
                <label for="">Total USD</label>
                <input type="text" name="total">
            </div>
            <div>
                <label for="">Ano</label>
                <input type="text" name="ano">
            </div>
            <button type="submit">Enviar</button>
        </form>
    </body>
</html>