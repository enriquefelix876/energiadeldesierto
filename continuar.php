<?php 
	$titular= $_POST['titular'];
	$estado= $_POST['estado'];
	$municipio= $_POST['municipio'];
	$frecuencia_pago= $_POST['frecuencia_pago'];
	$tarifa= $_POST['tarifa'];
	$servicio= $_POST['servicio'];
	$mes= $_POST['recibo'];
	
	if(!isset($titular)){
	  header('Location: '."discover.php");
	}
?>
    
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Descubre tu paquete recomendado</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Font Awesome Icons -->
		<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
		<link rel="icon" href="img/icon.png" type="image/x-icon" />
        <script src="js/jquery-3.3.1.js"></script>
        <script src="js/main.js"></script>
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

        <div class="container mt-3">
            <div class="row justify-content-center">
                <div class="col-md-5 border datos rounded">
                    <span class="font-weight-bold"><?php echo $titular ?>
                        </span class="font-weight-bold"><br>
					<span class="font-weight-bold">Frecuencia de pago: <?php echo $frecuencia_pago ?></span><br>
                    <span class="font-weight-bold">NO. DE SERVICIO:</span><?php echo " ". $servicio ?><br>
                    <?php echo $municipio.", ".$estado?><br>
                    <span class="font-weight-bold">TARIFA:</span><?php echo " ". $tarifa ?><br>
                </div>
            </div>
        </div>

		<div class="container mt-3">
			<div class="row justify-content-center">
				<div style="background-color:#118D6B; border-radius: 30px 0px 0px 0px" 
					class="col-lg-3 col-md-4 col-sm-6 col-xs-6 p-3 text-center">
					<span class="font-weight-bold" style="color:white">Periodo</span> 
				</div>
				<div style="background-color:#118D6B; border-radius: 0px 30px 0px 0px" 
					class="col-lg-3 col-md-4 col-sm-6 col-xs-6 p-3 text-center">
					<span class="font-weight-bold" style="color:white">Consumo total kW</span> 
				</div>
            </div>
            
            <form action="cotizacion.php" method="POST">

				<!-- Atributos ocultos en el formulario -->
				<input type="text" name="titular" id="titular" hidden value="<?php echo $titular ?>">
				<input type="text" name="estado" id="estado" hidden value="<?php echo $estado ?>"> 
				<input type="text" name="municipio" id="municipio" hidden value="<?php echo $municipio ?>">
				<input type="text" name="codigopostal" id="codigopostal" hidden value="<?php echo $codigopostal ?>">
				<input type="text" name="tarifa" id="tarifa" hidden value="<?php echo $tarifa ?>">
				<input type="text" name="servicio" id="servicio" hidden value="<?php echo $servicio ?>">
				<input type="text" name="mes" id="mes" hidden value="<?php echo $mes ?>">
				<input type="text" name="frecuencia_pago" id="frecuencia_pago"  
				hidden value="<?php echo $frecuencia_pago ?>">
				<input type="text" name="capacidad" id="capacidad" hidden value="1.2">

				<div class="row justify-content-center mt-2">
					<div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 text-center">
						<span name="mes1txt" id="mes1txt">DIC 2017</span>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 text-center">
						<input type="text" name="mes1" id="mes1" class="form-control">
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 text-center">
						<span name="mes" id="mes2txt">ENE 2018</span>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 text-center">
						<input type="text" name="mes2" id="mes2" class="form-control">
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 text-center">
						<span name="mes3txt" id="mes3txt">FEB 2018</span>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 text-center">
						<input type="text" name="mes3" id="mes3" class="form-control">
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 text-center">
						<span name="mes4txt" id="mes4txt">MAR 2018</span>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 text-center">
						<input type="text" name="mes4" id="mes4" class="form-control">
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 text-center">
						<span name="mes5txt" id="mes5txt">ABR 2018</span>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 text-center">
						<input type="text" name="mes5" id="mes5" class="form-control">
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 text-center">
						<span name="mes6txt" id="mes6txt">MAY 2018</span>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 text-center">
						<input type="text" name="mes6" id="mes6" class="form-control">
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 text-center">
						<span name="mes7txt" id="mes7txt">JUN 2018</span>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 text-center">
						<input type="text" name="mes7" id="mes7" class="form-control">
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 text-center">
						<span name="mes8txt" id="mes8txt">JUL 2018</span>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 text-center">
						<input type="text" name="mes8" id="mes8" class="form-control">
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 text-center">
						<span name="mes9txt" id="mes9txt">AGO 2018</span>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 text-center">
						<input type="text" name="mes9" id="mes9" class="form-control">
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 text-center">
						<span name="mes10txt" id="mes10txt">SEP 2017</span>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 text-center">
						<input type="text" name="mes10" id="mes10" class="form-control">
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 text-center">
						<span name="mes11txt" id="mes11txt">OCT 2017</span>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 text-center">
						<input type="text" name="mes11" id="mes11" class="form-control">
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 text-center">
						<span name="mes12txt" id="mes12txt">NOV 2017</span>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 text-center">
						<input type="text" name="mes12" id="mes12" class="form-control">
					</div> 
				</div>
				<div class="row justify-content-center mt-4 mb-4">
					<div class="col text-center">
						<button type="submit" class="btn btn-primary">Continuar</button>
					</div>
				</div>
            </form>
		</div>
    </body>
    
    <script>
        generarMeses("<?php echo $mes ?>","<?php echo $frecuencia_pago ?>");
    </script>
</html>