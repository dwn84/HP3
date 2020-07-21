<!DOCTYPE html><!---Plantilla de vista-->
<html>
	
	<head>
		<title>Intro</title>
		<link rel="stylesheet" type="text/css" href="css/estilo.css" media="screen" />
	</head>
	
	<body>
		
		<header>
			<h1>Logo</h1>
		</header>
		<?php
		include 'views/modulos/navegacion.php';
		?>
		<section>
		<?php
			$mvc = new MvcController();
			$mvc -> paginasControler();
		?>
		</section>
	</body>

</html>
