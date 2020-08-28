
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="ingreso.css">
    <script src="https://kit.fontawesome.com/50f494f78d.js" crossorigin="anonymous"></script>

</head>
<body>
    <div class="caja2">
        <h1>Iniciar Sesión</h1>
        <form action="logear.php" method="POST">
            <label>USUARIO</label><br>
            <div class="texto">
            <i class="fas fa-at"></i> <input type="text" name="user" required><br>
            </div>
            <label>CONTRASEÑA</label><br>
            <div class="texto">
                <i class="fas fa-lock"></i><input type="password" name="clave"  required><br>
            </div>

            <input type="submit" value="Ingresar" name="ingresar" class="sub">
            <a href="clave.php">¿olvidaste tu contraseña?</a><br>   
            <a href="registro.php">Registrate</a>
        </form>
    </div>
</body>
</html>