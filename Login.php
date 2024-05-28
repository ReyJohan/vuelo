<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Iniciar sesión</title>
  <!-- Favicons -->
  <link href="assets/Imagenes que se pueden ocupar/airport-MMAA.png" rel="icon">
  <link href="assets/Imagenes que se pueden ocupar/protesis.jpg" rel="apple-touch-icon">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesign-icon css/materialdesign-icon">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="assetsL/css/login.css">
</head>
<body>
  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-5">
            <img src="assetsL/images/Avion Login 2.jpg" alt="login" class="login-card-img">
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <p class="login-card-description">Inicia sesión en tu cuenta</p>
              <form action="BDlogin.php" method="POST">
                <div class="form-group">
                  <label for="usuario" class="sr-only">Usuario</label>
                  <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Nombre de usuario" required>
                </div>
                <div class="form-group mb-4">
                  <label for="contraseña" class="sr-only">Contraseña</label>
                  <input type="password" name="contraseña" id="contraseña" class="form-control" placeholder="***********" required>
                </div>
                <button type="submit" class="btn btn-block login-btn mb-4">Ingresar</button>
                <a href="index.php"><input name="Regresar" id="Regresar" class="btn btn-block login-btn mb-4" type="button" value="Regresar"></a>
              </form>
              <a href="#!" class="forgot-password-link">¿Olvido la contraseña?</a>
              <p class="login-card-footer-text">¿Aun no tiene cuenta? <a href="register.php" class="text-reset">Registrate aqui.</a></p>
              <h6>
                Solo personal autorizado podrá obtener una cuenta<br>
                ¡De lo contrario habrá cargos en su contra!
              </h6>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
