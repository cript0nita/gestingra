<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
     <!-- BEGIN: ERRORES -->
     <?php if (isset($errores) && $errores): ?>
        <?php echo $errores; ?>
    <?php endif; ?>
    <!-- END: ERRORES -->

    <!-- MENSAJES -->
    <?php if (isset($mensaje) && $mensaje): ?>
        <?php echo $mensaje; ?>
    <?php endif; ?>
    <!-- END: MENSAJES -->

    <!-- BEGIN: FORMULARIO -->
    <h2>Introduzca servicio</h2>
    <form method="POST">

        <label>Descripcion</label>
        <br>
        <input type="text" name="descripcion">
        <br>

        <label>Sector</label>
        <br>
        <select name="sector">
            <option value="">-- Selecciona --</option>
            <?php foreach($sectores as $sector): ?>
                <option value="<?php echo $sector['id_sector']; ?>">
                    <?php echo $sector['descripcion']; ?>
                </option>
            <?php endforeach; ?>
        </select>
        <br>

        <label>Precio</label>
        <br>
        <input type="text" name="precio">
        <br>
        <br>

        <input type="submit" name="Guardar">
       
    </form>
    <!-- END: FORMULARIO -->

    <hr>
    <a href="index.php" class="button">Menú principal</a>

</body>
</html>