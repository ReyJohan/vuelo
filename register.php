<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Registro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- MATERIAL DESIGN ICONIC FONT -->
    <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

    <link href="assets/Imagenes que se pueden ocupar/airport-MMAA.png" rel="icon">
    <link href="assets/Imagenes que se pueden ocupar/protesis.jpg" rel="apple-touch-icon">
    <!-- STYLE CSS -->
    <link rel="stylesheet" href="assets3/css/style.css">
</head>

<body>
    <div class="wrapper" style="background-image: url('Assets3/images/Cabina.jpg');">
        <div class="inner">
            <div class="image-holder">
                <br><br><br><br><br>
                <img src="assets3/images/pilota.jpg" alt="">
                <br><br><br><br><br><br><br>
                <a href="Login.php">
                    <button>Iniciar sesión
                        <i class="zmdi zmdi-arrow-right"></i>
                    </button>
                </a>
            </div>
            <form action="BDRegistro.php" method="POST" class="formulario" name="login">
                <h3>Formulario de Registro</h3>
                <div class="form-group">
                    <input name="nombre" type="text" placeholder="Nombre" class="form-control" required>
                    <input name="apellidos" type="text" placeholder="Apellidos" class="form-control" required>
                </div>
                <div class="form-wrapper">
                    <input name="usuario" type="text" placeholder="Nombre de Usuario" class="form-control" required>
                    <i class="zmdi zmdi-account"></i>
                </div>
                <div class="form-wrapper">
                    <input name="email" type="email" placeholder="Correo Electronico" class="form-control" required>
                    <i class="zmdi zmdi-email"></i>
                </div>
                <div class="form-wrapper">
                    <select name="cargo" class="form-control" required>
                        <option value="" disabled selected>Cargo</option>
                        <option value="vendedor">Vendedor</option>
                        <option value="administrador">Administrador</option>
                    </select>
                    <i class="zmdi zmdi-caret-down" style="font-size: 17px"></i>
                </div>
                <div class="form-wrapper">
                    <select name="genero" class="form-control" required>
                        <option value="" disabled selected>Genero</option>
                        <option value="masculino">Masculino</option>
                        <option value="femenino">Femenino</option>
                        <option value="otro">Prefiero no decirlo</option>
                    </select>
                    <i class="zmdi zmdi-caret-down" style="font-size: 17px"></i>
                </div>
                <div class="form-wrapper">
                    <input name="password" type="password" placeholder="Contraseña" class="form-control" required>
                    <i class="zmdi zmdi-lock"></i>
                </div>
                <div class="form-wrapper">
                    <input name="confirm_password" type="password" placeholder="Confirmar Contraseña" class="form-control" required>
                    <i class="zmdi zmdi-lock"></i>
                </div>
                <button type="submit">Registrate
                    <i class="zmdi zmdi-arrow-right"></i>
                </button>
            </form>
        </div>
    </div>
</body>
</html>
