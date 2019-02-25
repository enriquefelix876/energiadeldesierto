

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

		<div class="container mt-5 mb-4">
			<div class="row justify-content-center">
				<div class="col-md-7">
					<h1>Proyección de ahorros</h1>
					<h2>Datos de su servicio actual</h2>
                <form class="mt-5" method="POST" action="continuar.php">
                            <div class="form-row">
                                <div class="form-group col">
                                    <label for="titular">Titular del servicio</label>
                                    <input type="text" class="form-control" id="titular" name="titular" 
                                    placeholder="Titular del servicio" pattern="[A-Za-z ]{5,40}" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="estado">Estado</label>
                                    <select id="estado" name="estado" class="form-control" required>
                                        <option>Sonora</option>
                                        <option disabled>Sinaloa</option>
                                        <option disabled>Chihuahua</option>
                                        <option disabled>Baja California</option>
                                        <option disabled>Baja California Sur</option>
                                        <option disabled>Durango</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-5">
                                    <label for="municipio">Municipio</label>
                                    <select name="municipio" id="municipio" class="municipio form-control" required>
                                        <option value="Aconchi">Aconchi</option>
                                        <option value="Agua Prieta">Agua Prieta</option>
                                        <option value="Alamos">Alamos</option>
                                        <option value="Altar">Altar</option>
                                        <option value="Arivechi">Arivechi</option>
                                        <option value="280">Arizpe</option>
                                        <option value=">Atil">Atil</option>
                                        <option value="Bacadehuachi">Bacadehuachi</option>
                                        <option value="Bacanora">Bacanora</option>
                                        <option value="Bacerac">Bacerac</option>
                                        <option value="Bacoachi">Bacoachi</option>
                                        <option value="Bacum">Bacum</option>
                                        <option value="Banamichi">Banamichi</option>
                                        <option value="Baviacora">Baviacora</option>
                                        <option value="Bavispe">Bavispe</option>
                                        <option value="Benjamin Hill">Benjamin Hill</option>
                                        <option value="Caborca">Caborca</option>
                                        <option value="Cananea">Cananea</option>
                                        <option value="Carbo">Carbo</option>
                                        <option value="Cucurpe">Cucurpe</option>
                                        <option value="Cumpas">Cumpas</option>
                                        <option value="Divisaderos">Divisaderos</option>
                                        <option value="Empalme">Empalme</option>
                                        <option value="Etchojoa">Etchojoa</option>
                                        <option value="Fronteras">Fronteras</option>
                                        <option value="Granados">Granados</option>
                                        <option value="Guaymas">Guaymas</option>
                                        <option value="Hermosillo">Hermosillo</option>
                                        <option value="Huachinera">Huachinera</option>
                                        <option value="Huasabas">Huasabas</option>
                                        <option value="Huatabampo">Huatabampo</option>
                                        <option value="Huepac">Huepac</option>
                                        <option value="Imuris">Imuris</option>
                                        <option value="La Colorada">La Colorada</option>
                                        <option value="Magdalena de Kino">Magdalena de Kino</option>
                                        <option value="Mazatan">Mazatan</option>
                                        <option value="Moctezuma">Moctezuma</option>
                                        <option value="Naco">Naco</option>
                                        <option value="Nacori Chico">Nacori Chico</option>
                                        <option value="1188">Nacozari de Garci­a</option>
                                        <option value="Navojoa">Navojoa</option>
                                        <option value="Nogales">Nogales</option>
                                        <option value="Obregon">Obregon</option>
                                        <option value="Onavas">Onavas</option>
                                        <option value="Opodepe">Opodepe</option>
                                        <option value="Oquitoa">Oquitoa</option>
                                        <option value="Pitiquito">Pitiquito</option>
                                        <option value="Puerto Peñasco">Puerto Peñasco</option>
                                        <option value="Quiriego">Quiriego</option>
                                        <option value="Rayon">Rayon</option>
                                        <option value="Rosario">Rosario</option>
                                        <option value="Sahuaripa">Sahuaripa</option>
                                        <option value="San Carlos">San Carlos</option>
                                        <option value="San Felipe de Jesus">San Felipe de Jesus</option>
                                        <option value="San Ignacio Rio Muerto">San Ignacio Rio Muerto</option>
                                        <option value="San Javier">San Javier</option>
                                        <option value="San Luis Rio Colorado">San Luis Rio Colorado</option>
                                        <option value="San Miguel de Horcasitas">San Miguel de Horcasitas</option>
                                        <option value="San Pedro de la Cueva">San Pedro de la Cueva</option>
                                        <option value="Santa Ana">Santa Ana</option>
                                        <option value="Santa Cruz">Santa Cruz</option>
                                        <option value="Saric">Saric</option>
                                        <option value="Sonoyta">Sonoyta</option>
                                        <option value="Soyopa">Soyopa</option>
                                        <option value="Suaqui Grande">Suaqui Grande</option>
                                        <option value="Tepache">Tepache</option>
                                        <option value="Trincheras">Trincheras</option>
                                        <option value="Tubutama">Tubutama</option>
                                        <option value="Ures">Ures</option>
                                        <option value="Villa Hidalgo">Villa Hidalgo</option>
                                        <option value="Villa Juarez">Villa Juarez</option>
                                        <option value="Villa Pesqueira">Villa Pesqueira</option>
                                        <option value="Yecora">Yecora</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="codigoPostal">Código Postal</label>
                                    <input type="text" class="form-control" id="codigoPostal" 
                                    name="codigoPostal" placeholder="Código Postal" pattern="\d{4,5}$"
                                    title="Introduzca un código postal correcto" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="tarifa">Tarifa</label>
                                    <select id="tarifa" name="tarifa" class="form-control" required>
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
                                    <input required type="tel" class="form-control" id="servicio" 
                                    name="servicio" placeholder="No. Servicio" pattern="\d{12}$" 
                                    tittle="El numero de servicio debe tener 12 caracteres numericos"
                                    required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="recibo">Período del recibo actual</label>
                                    <select id="recibo" name="recibo" class="form-control" 
                                    required>
                                        <option selected>Elegir mes...</option>
                                        <option value="Enero">ENERO</option>
                                        <option value="Febrero">FEBRERO</option>
                                        <option value="Marzo">MARZO</option>
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
