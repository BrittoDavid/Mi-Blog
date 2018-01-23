<!-- Creamos las funciones para validar los datos-->
<?php 
	
	error_reporting(0);

	function validarLetras($var){
			
		if (!isset($var)) {
			echo "<span class='resul'>Error,Campo no declarado</span>";
		}elseif (empty($var)) {
			echo "<span class='resul'>Error,El campo no puede estar vacio</span>";
		}elseif (ctype_space($var)) {
			echo "<span class='resul'>Por favor ingrese el dato correspondiente</span>";
		}elseif (is_numeric($var)) {
			echo "<span class='resul'>Por favor solo ingrese letras</span>";
		}else{
			echo "<span class='resul'>$var</span>";
		}
	}

 	function validarEmail($email){
	 		
 		if ((filter_var($email,FILTER_VALIDATE_EMAIL)) ? 1:0) {
 			echo "<span class='resul'>$email</span>";
 		}else{
 			echo "<span class='resul'>El correo $email no fue ingresado correctamente</span>";
 		}				
	}


	function validarCuerpo($mensaje){
		
		if (!isset($mensaje)) {
			echo "<span class='resul'>Error,Campo no declarado</span>";
		}elseif (empty($mensaje)) {
			echo "<span class='resul'>Error,El campo no puede estar vacio</span>";
		}elseif (ctype_space($mensaje)) {
			echo "<span class='resul'>Por favor ingrese el dato correspondiente</span>";
		}elseif (strlen($mensaje) > 100) {
			echo "<span class='resul'>Mensaje sobrepaso la cantidad maxima de caracteres</span>";
		}else{
			echo "<span class='resul'>$mensaje</span>";
		}
	}

 ?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>Confirmacion</title>
		<!--Aqui ponemos el icono de la pagina-->	
		<link rel="icon" href="images/icono.png"/>
		<!--Los metas-->
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--Llamamos al JavaScript-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="misEstilos.css" />
		</noscript>
	</head>
	<body class="no-sidebar">
<!-- Header -->
			<div id="header">
				<div class="container">
						
					<!-- Logo -->
						<h1><a href="#" id="logo">Blog personal y profesional<br>de<br>David Britto</a></h1>
					
					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="index.html">Inicio</a></li>
								<li>
									<a href="">Sobre mi</a>
									<ul>
										<li><a href="#">Lorem ipsum dolor</a></li>
										<li><a href="#">Magna phasellus</a></li>
										<li><a href="#">Etiam dolore nisl</a></li>
										<li>
											<a href="">Phasellus consequat</a>
											<ul>
												<li><a href="#">Lorem ipsum dolor</a></li>
												<li><a href="#">Phasellus consequat</a></li>
												<li><a href="#">Magna phasellus</a></li>
												<li><a href="#">Etiam dolore nisl</a></li>
												<li><a href="#">Veroeros feugiat</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li><a href="Hobbies.html">Hobbies</a></li>
								<li><a href="Estudios.html">Estudios</a></li>
								<li><a href="Formulario.html">Contacto</a></li>
							</ul>
						</nav>

				</div>
			</div>

		<!-- Main -->
			<div id="main" class="wrapper style1">
				<div class="container">
					<section>
						<header class="major">
							<h2 class="h2">Señor(a) <?php echo $_POST['nombre']; ?></h2>
							<h3 class="h2">Por favor confirmar sus datos, antes de enviar</h3>

							<?php 
                                
                                echo "<div>";
										
										echo "<div>";
											echo "<span class='pregunta'>NOMBRES:</span>";
											$Nombre = validarLetras($_POST['nombre']);
										echo "</div>";

										

										echo "<div>";
											echo "<span class='pregunta'>APELLIDOS:</span>";	
											$Apellido = validarLetras($_POST['apellido']);
										echo "</div>";
										
										

										echo "<div>";
											echo "<span class='pregunta'>EMAIL:</span>";
											$Correo = validarEmail($_POST['correo']);
										echo "</div>";

									

										echo "<div>";
											echo "<span class='pregunta'>ASUNTO:</span>";
											$Asunto = validarLetras($_POST['asunto']);
										echo "</div>";

										

										echo "<div>";
											echo "<span class='pregunta'>MENSAJE:</span>";
											$Mensaje = validarCuerpo($_POST['cuerpo']);
										echo "</div>"; 


										echo "<div>";
							 				echo"<form action='Mensaje.php'>";
												echo "<input type='submit' value='Confirmar' class='pregunta'>";
											echo"</form>";
							 			echo"</div>";

								echo "</div>";
							 ?>
							 	
							  <script src="js/formulario.js"></script>

						</header>
					</section>
				</div>
			</div>

		<!-- Footer -->
			<div id="footer">
				<div class="container">

					<!-- Lists -->
						<div class="row">
							<div class="8u">
								<section>
									<header class="major">
										<h2>Redes Sociales</h2>
									</header>
									<div class="row">
										<section class="6u">
											<ul class="default">
												<li><a href="https://www.facebook.com/juandavid.brittoargote">Facebook</a></li>
												<li><a href="https://www.instagram.com/david_britto7/">Instagram</a></li>
												<li><a href="https://github.com/BrittoDavid">Github</a></li>
												<li><a href="https://mega.nz/fm/knxxUByD">Mega</a></li>
												<li><a href="https://www.youtube.com/channel/UCejvUnzQvoNfO2ZygppQKnQ?view_as=subscriber">Youtube</a></li>
											</ul>
										</section>
									</div>
								</section>
							</div>
							<div class="4u">
								<section>
									<header class="major">
										<h2>Datos personales</h2>
									</header>
									<ul class="contact">
										<li>
											<span class="address">Direccion</span>
											<span>Trasversal 28 J # 72 L 61<br />Cali-Valle,Colombia</span>
										</li>
										<li>
											<span class="mail">Correo</span>
											<span><a href="#">brittoargote789@gmail.com</a></span>
										</li>
										<li>
											<span class="phone">Telefono</span>
											<span>(+57) 312-710-14-53</span>
										</li>
									</ul>	
								</section>
							</div>
						</div>
				</div>
			</div>

	</body>
</html>