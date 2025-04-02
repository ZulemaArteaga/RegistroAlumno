<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Datos de Alumno Registrado</title>
    <link rel="stylesheet" href="card.css">
</head>
<body>
    <div class="card_data">
        <h2>Alumno</h2>
        <img src="student.png" alt="image" id="photo" class="profile-pic">
        <p><strong>Nombre:</strong> <?php echo htmlspecialchars($_POST['nombre'] . ' ' . $_POST['apellido']); ?></p>
        <p><strong>Edad:</strong> <?php echo htmlspecialchars($_POST['edad']); ?> años</p>
        <p><strong>Email:</strong> <?php echo htmlspecialchars($_POST['correo']); ?></p>
    </div>
    </div>
</body>
</html>

