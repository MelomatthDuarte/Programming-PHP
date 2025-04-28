<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario en PHP</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="contenedor">
        <form action="validacion.php" method="post">
            <h2>Login</h2>
            <br>

            <!--
            <?php if (isset($_GET['error']) && $_GET['error'] == 1) : ?>
                <div class="error">Por favor, completa todos los campos.</div>
                <br>
            <?php endif; ?>
            -->

            <label for="">Correo:</label>
            <br>
            <input type="email" name="email" id="">
            <br>
            <br>
            <label for="">Contraseña:</label>
            <br>
            <input type="password" name="password" id="">
            <br>
            <br>
            <button type="submit">Ingresar</button>
        </form>
    </div>
<?php


?>  
</body>
</html>
