<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Formularios Vuelos</title>
    <link href="assets/Imagenes que se pueden ocupar/airport-MMAA.png" rel="icon">
    <link href="assets/Imagenes que se pueden ocupar/protesis.jpg" rel="apple-touch-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/fontAwesome.css">
    <link rel="stylesheet" href="css/hero-slider.css">
    <link rel="stylesheet" href="css/owl-carousel.css">
    <link rel="stylesheet" href="css/datepicker.css">
    <link rel="stylesheet" href="css/tooplate-style.css">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>

<body>
    <section style="background:khaki" class="banner" id="fixed-top">
        <div class="container">
            <div class="row">
                <div class="container d-flex align-items-center justify-content-lg-between">
                    <section id="first-tab-group" class="tabgroup">
                        <div id="tab1">
                            <div class="submit-form">
                                <h4>Formulario<em> crear vuelos</em>!</h4>
                                <form id="form-submit" action="BDVuelos.php" method="POST">
                                    <div class="row">
                                        <div class="form-wrapper">
                                            <label for="operador">Operador:</label>
                                            <input name="operador" type="text" placeholder="Nombre de Operador" required>
                                            <br>
                                            <label for="subOperador">Sub - Operador:</label>
                                            <input name="subOperador" type="text" placeholder="Nombre del Sub-Operador" required>
                                            <br>
                                            <label for="matricula">Matricula del Avión:</label>
                                            <input name="matricula" type="text" placeholder="Matricula del avión" required>
                                            <br>
                                            <label for="empresa">Empresa:</label>
                                            <input name="empresa" type="text" placeholder="Empresa" required>
                                            <br>
                                            <label for="precio">Precio:</label>
                                            <input name="precio" type="text" placeholder="Precio" required>
                                        </div>
                                        <div class="col-md-6">
                                            <fieldset>
                                                <label for="origen">De:</label>
                                                <select name="origen" required>
                                                    <option value="" disabled selected>Selecciona tu localización</option>
                                                    <option>Aeropuerto Internacional de la ciudad de México Benito Júarez (AICM)</option>
                                                    <option>Aeropuerto Internacional General Juan N. Álvarez "Acapulco"(AIA)</option>
                                                    <option>Aeropuerto Internacional de Guadalajara Don Miguel Hidalgo y Costilla</option>
                                                    <option>Aeropuerto Internacional de Cancún</option>
                                                    <option>Aeropuerto Internacional Monterrey</option>
                                                    <option>Aeropuerto Internacional Lic. Adolfo Lopez Mateos "Toluca" (AIT)</option>
                                                    <option>Aeropuerto Internacional de Tijuana</option>
                                                    <option>Aeropuerto Internacional de Puerto Vallarta (Lic. Gustavo Diaz Ordaz)</option>
                                                    <option>Aeropuerto Internacional Los Cabos</option>
                                                    <option>Aeropuerto Internacional Manuel Crescencio Rejón "Merida" (AIM)</option>
                                                    <option>Aeropuerto Internacional Federal de Culiacán</option>
                                                    <option>Aeropuerto Internacional Guanajuato</option>
                                                    <option>Aeropuerto Internacional de Hermosillo</option>
                                                    <option>Aeropuerto Internacional General Heriberto Jara (AIV)</option>
                                                </select>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-6">
                                            <fieldset>
                                                <label for="destino">A:</label>
                                                <select name="destino" required>
                                                    <option value="" disabled selected>Selecciona la localización</option>
                                                    <option>Aeropuerto Internacional de la ciudad de México Benito Júarez (AICM)</option>
                                                    <option>Aeropuerto Internacional General Juan N. Álvarez "Acapulco"(AIA)</option>
                                                    <option>Aeropuerto Internacional de Guadalajara Don Miguel Hidalgo y Costilla</option>
                                                    <option>Aeropuerto Internacional de Cancún</option>
                                                    <option>Aeropuerto Internacional Monterrey</option>
                                                    <option>Aeropuerto Internacional Lic. Adolfo Lopez Mateos "Toluca" (AIT)</option>
                                                    <option>Aeropuerto Internacional de Tijuana</option>
                                                    <option>Aeropuerto Internacional de Puerto Vallarta (Lic. Gustavo Diaz Ordaz)</option>
                                                    <option>Aeropuerto Internacional Los Cabos</option>
                                                    <option>Aeropuerto Internacional Manuel Crescencio Rejón "Merida" (AIM)</option>
                                                    <option>Aeropuerto Internacional Federal de Culiacán</option>
                                                    <option>Aeropuerto Internacional Guanajuato</option>
                                                    <option>Aeropuerto Internacional de Hermosillo</option>
                                                    <option>Aeropuerto Internacional General Heriberto Jara (AIV)</option>
                                                </select>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-6">
                                            <fieldset>
                                                <label for="fechaSalida">Fecha de Salida:</label>
                                                <input name="fechaSalida" type="date" class="form-control" required>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-6">
                                            <fieldset>
                                                <label for="fechaLlegada">Fecha de Llegada:</label>
                                                <input name="fechaLlegada" type="date" class="form-control" required>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-6">
                                            <fieldset>
                                                <label for="hora">Hora:</label>
                                                <select name="hora" required>
                                                    <option value="" disabled selected>Selecciona la hora de vuelo</option>
                                                    <option>12:00 - 1:00</option>
                                                    <option>1:00 - 2:00</option>
                                                    <option>2:00 - 3:00</option>
                                                    <option>3:00 - 4:00</option>
                                                    <option>4:00 - 5:00</option>
                                                    <option>5:00 - 6:00</option>
                                                    <option>7:00 - 8:00</option>
                                                    <option>8:00 - 9:00</option>
                                                    <option>9:00 - 10:00</option>
                                                    <option>10:00 - 11:00</option>
                                                    <option>11:00 - 12:00</option>
                                                </select>
                                                <select name="horario" required>
                                                    <option value="" disabled selected>Selecciona el Horario</option>
                                                    <option>AM</option>
                                                    <option>PM</option>
                                                </select>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-6">
                                            <fieldset>
                                                <label for="tipoVuelo">Tipo de vuelo:</label>
                                                <select name="tipoVuelo" required>
                                                    <option value="" disabled selected>Selecciona el Tipo de vuelo</option>
                                                    <option>Comercial</option>
                                                    <option>Privado</option>
                                                </select>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-6">
                                            <fieldset>
                                                <label for="modoVuelo">Modo de vuelo:</label>
                                                <select name="modoVuelo" required>
                                                    <option value="" disabled selected>Selecciona el modo de vuelo</option>
                                                    <option>Redondo</option>
                                                    <option>Solo Vuelo</option>
                                                </select>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" id="form-submit" class="btn" style="width: 500px; height: 35px; background:gold">Crear Vuelo Ahora</button>
                                        </div>
                                    </div>
                                </form>