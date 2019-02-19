<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Descubre tu paquete recomendado</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome Icons -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS - Includes Bootstrap -->
    <link href="css/creative.min.css" rel="stylesheet">
    <link rel="icon" href="img/icon.png" type="image/x-icon" />
</head>
<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7 border">
                <h1>Proyección de ahorros</h1>
                <h2>Datos de su servicio actual</h2>

                <form class="mt-5" method="POST" action="continuar.php">
                            <div class="form-row">
                                <div class="form-group col">
                                    <label for="titular">Titular del servicio</label>
                                    <input type="text" class="form-control" id="titular" name="titular" placeholder="Titular del servicio">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="estado">Estado</label>
                                    <select id="estado" name="estado" class="form-control">
                                        <option selected>Elegir estado...</option>
                                        <option>Sonora</option>
                                        <!--<option>Sinaloa</option>
                                        <option>Chihuahua</option>
                                        <option>Baja California</option>
                                        <option>Baja California Sur</option>
                                        <option>Durango</option>-->
                                    </select>
                                </div>
                                <div class="form-group col-md-5">
                                    <label for="municipio" >Municipio</label>
                                    <input type="text" class="form-control" id="municipio" name="municipio" placeholder="Municipio">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="codigoPostal">Código Postal</label>
                                    <input type="text" class="form-control" id="codigoPostal" 
                                    name="codigoPostal" placeholder="Código Postal" pattern="\d{4,5}$"
                                    title="Introduzca un código postal correcto">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="tarifa">Tarifa</label>
                                    <select id="tarifa" name="tarifa" class="form-control">
                                        <option selected>Elegir tarifa...</option>
                                        <optgroup label="Hogar">
                                            <option value="1">1</option>
                                            <option value="1A">1A</option>
                                            <option value="1B">1B</option>
                                            <option value="1C">1C</option>
                                            <option value="1D">1D</option>
                                            <option value="1E">1E</option>
                                            <option value="1F">1F</option>
                                        </optgroup>
                                        <optgroup label="Negocio">
                                            <option value="PDBT">PDBT</option>
                                        </optgroup>
                                        <optgroup label="Industria">
                                            <option value="GDMTO">GDMTO</option>
                                        </optgroup>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="servicio">No. Servicio</label>
                                    <input type="tel" class="form-control" id="servicio" name="servicio" placeholder="No. Servicio">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="recibo">Período del recibo actual</label>
                                    <select id="recibo" name="recibo" class="form-control" onchange="seleccionarMes()">
                                        <option selected>Elegir mes del recibo...</option>
                                        <option value="Enero">ENERO</option>
                                        <option value="Febrero">FEBRERO</option>
                                        <option value="Marzo" disabled>MARZO</option>
                                        <option value="Abril" disabled>ABRIL</option>
                                        <option value="Mayo" disabled>MAYO</option>
                                        <option value="Junio" disabled>JUNIO</option>
                                        <option value="Julio" disabled>JULIO</option>
                                        <option value="Agosto" disabled>AGOSTO</option>
                                        <option value="Septiembre" disabled>SEPTIEMBRE</option>
                                        <option value="Octubre" disabled>OCTUBRE</option>
                                        <option value="Noviembre" disabled>NOVIEMBRE</option>
                                        <option value="Diciembre" disabled>DICIEMBRE</option>
                                    </select>
                                </div>

                            </div>
                            <div align="center">
                                <button type="submit" class="btn btn-primary">Continuar</button>
                            </div>
                        </form>
            </div>
        </div>
    </div>
    
</body>
</html>