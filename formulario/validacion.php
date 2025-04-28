<?php
$correo = $_POST['email'] ?? '';
$contrasena = $_POST['password'] ?? '';

if (empty($correo) || empty($contrasena)) {
    // Redirigir a index.php con el parámetro de error
    header("Location: index.php?error=1");
    exit();
}

// Si todo está bien, puedes continuar con la lógica de bienvenida
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validacion.php</title>
</head>
<body>
    <h2>¡Bienvenido! tu correo es: <?php echo htmlspecialchars($correo); ?></h2>
</body>
</html>
