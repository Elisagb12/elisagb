<!DOCTYPE html>
<html lang="es">
<head>
	<title>Elisa GB</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon.ico">

    <link rel="stylesheet" type="text/css" href="plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="plugins/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="plugins/fontawesome/all.css">
    <link href="https://fonts.googleapis.com/css?family=Calligraffitti|Clicker+Script|Great+Vibes|Marck+Script|Tangerine|Dosis|Economica:400,700,700i|" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/style.css">
    
</head>
<body class="container">
	<div class="header row">
		<div class="logo col-sm-2 col">
			<a href="home"><img src="img/logo.png" width="100%"></a>
        </div>

        <div class="menu col-sm-10 col-6 hidden-xs">
        	<ul class="menu-list">
        		<li><a href="home">INICIO</a></li>
        		<li><a href="about-me">SOBRE DE MI</a></li>
        		<li><a href="portfolio">PORTFOLIO</a></li>
        		<li><a href="contacto">CONTACTO</a></li>
        	</ul>
        </div>

        <div class="btn-movil-menu visible-xs shadow-lg" onclick="showMenuMovil()">
        	<i class="fas fa-bars fa-2x"></i>
        </div>
		<div class="movil-menu invisible animation">
			<ul>
				<li class="list-items"><a href="/">INICIO</a></li>
        		<li class="list-items"><a href="about-me">SOBRE DE MI</a></li>
        		<li class="list-items"><a href="portfolio">PORTFOLIO</a></li>
        		<li class="list-items"><a href="contacto">CONTACTO</a></li>
				<li onclick="closeMenuMovil()" style="font-size: 20px; margin-top: 30px"><i class="fas fa-arrow-left"></i> cerrar</li>
			</ul>
		</div>
	</div>
