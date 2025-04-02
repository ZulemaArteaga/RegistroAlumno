<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Formulario de Registro</title>
    <link rel="stylesheet" href="style_index.css">
</head>
<body>
    <form action="card.php" method="POST">
        <div class="register_container" id="register_container">
            <h1><p>Registrar Alumno</p></h1>
            <h5><p>Nombre</p></h5><input type="text" name="nombre">
            <h5><p>Apellidos</p></h5><input type="text" name="apellido">
            <h5><p>Edad</p></h5><input type="number" name="edad">
            <h5><p>Correo</p></h5><input type="email" name="correo">
            <h5><p>Contraseña</p></h5><input type="password" name="password">
            <br><br>
            <button type="submit" class="button">Registrar</button>
        </div>
    </form>
</body>
</html>