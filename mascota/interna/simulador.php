<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Happy Pets</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
	<link rel="icon" href="../images/logo.png" sizes="32x32" />
    <link rel="icon" href="../images/logo.png" sizes="192x192" />
    <link rel="apple-touch-icon" href=".//images/logo.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
</head>
<body>
<div class="contenedor">
	<header class="cabeceraPrincipal">
		<section class="logotipo"><img src="../images/logotipoPet.png"></section>
		<nav class="menuPrincipal">
			<a href="#">Inicio</a>
			<a href="servicios.php">Servicios</a>
			<a href="#">Productos</a>
			<a href="internas/adopcion.php">Adopción</a>
			<a href="internas/simulador.php">Simulador</a>
		</nav>
	</header>
	<main>
		<h2>CALCULADORA DEL IMC CANINO</h2>
		<form method="post" action="calcular.php">
			<div class="grupInput">
				<label form="nombres">Nombre <span class="alerta">*</span></label>
				<input type="text" name="nombres" id="nombres" placeholder="Ingrese sus nombres" required/>
			</div>
			<div class="grupInput">
				<label form="apellidos"> Elija el tipo Calculo<span class="alerta">*</span></label>
				<select name= "select">
					<option name= "IMC" required>IMC</option>
					<option name = "GM" required>Grasa corporal en machos</option>
					<option name= "GH" required>Grasa corporal en hembras</option>
				</select>
			</div>
			<div class="grupInput">
				<label form="HSH">Altura Hombro <span class="alerta">*</span></label>
				<input type="number" name="HSH" id="HSH" placeholder="Ingrese altura hombro" required>
			</div>
			<div class="grupInput">
				<label form="OP">Distancia occipucio a la base de la cola</label>
				<input type="number" name="OP" id="OP" placeholder="Ingrese distancia cola" required>
			</div>
			<div class="grupInput">
				<label form="CP">Circunferencia pélvica (cm)</label>
				<input type="number" name="CP" id="CP" placeholder="Ingrese circufenrencia pelvica" required>
			</div>
			<div class="grupInput">
				<label form="HS">HS (cm)</label>
				<input type="number" name="HS" id="HS" placeholder="Ingrese HS" required>
			</div>
			<div class="grupInput">
				<label form="PC">Peso corporal</label>
				<input type="number" name="PC" id="PC" placeholder="Ingrese peso corporal" required>
			</div>
			<div class="centrado">
				<button class="boton" type="submit">Guardar</button>
			</div>
		</form>
	</main>
	<section class="sponsor">
		<section class="logoDog">
			<img src="../images/logotipoPet.png">
		</section>
		<section class="logoUtpl">
			<img src="../images/logo_blanco_utpl.jpeg">
		</section>
	</section>
	<footer class="piePagina">
		<section class="derechos">
			<h6>Derechos Reservados UTPL 2022</h6>
		</section>
		<nav class="redesSociales">
			<a href="#"><i class="fa-brands fa-facebook"></i> Facebook </a>
			<a href="#"><i class="fa-brands fa-instagram"></i> Instagram </a>
			<a href="#"><i class="fa-brands fa-twitter"></i> Twitter </a>

		</nav>
	</footer>
</div>
</body>
</html>