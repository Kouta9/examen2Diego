<?php
    // Obtener el ID desde la URL
    $idIngreso = isset($_GET['id']) ? $_GET['id'] : 'No se proporcionó ID';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumnos</title>
</head>
<body>
    <h1>Bienvenido, tu ID es: <?php echo htmlspecialchars($idIngreso); ?></h1>
</body>
</html>
