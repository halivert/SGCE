<!DOCTYPE html>
<html>
	<head>
		<title>Modelo</title>
		<meta charset="utf-8">
		<script type="text/javascript" src="Scr/jquery-2.2.0.js"></script>
		<script type="text/javascript" src="Scr/moment.min.js"></script>
		<script type="text/javascript" src="Scr/bootstrap.js"></script>
		<script type="text/javascript" src="Scr/bootstrap-datetimepicker.js"></script>
		<link type="text/css" rel="stylesheet" href="Css/bootstrap.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<style type="text/css">
			@font-face{
				font-family: "Arial";
				src: url("Fonts/arial.ttf") format("truetype");
				font-family: "Arial Rounded";
				src: url("Fonts/arial-rounded.ttf") format("truetype");
				font-family: "Oswald";
				src: url("Fonts/Oswald-Light.ttf") format("truetype");
			}
			#top-bar, #bottom-bar{
				font-family: "Oswald";
				font-size: 18px;
			}
			body {
				font-family: "Arial";
			}
			#logoSGCE, .img-head{
				max-width: 100%;
				height: auto;
				width: auto\9; /* ie8 */
			}
			#map {
				width: 500px;
				height: 400px;
				background-color: #CCC;
      		}
		</style>
	</head>
	<body>
		<?php
		$server = "localhost";
		$user = "root";
		$pass = "6224";    
		$conn = new mysqli($server, $user, $pass);
		?>
		<div class="container-fluid" style="padding-bottom:9px;" id="header">
			<img src="Img/SEP.png" height="64px" style="float:left; padding-left:15px;">
			<img class="img-head" src="Img/logoIPNGris.png" style="float:right; padding-top:15px; padding-right:15px;">
		</div>

		<nav class="navbar navbar-inverse navbar-static-top" style="height:84px;" id="top-bar">
			<div class="container-fluid" style="padding-left:51px; padding-right:51px;">
				<div class="navbar-header">
					<a class="navbar-brand" href=".">
						<img id="logoSGCE" src="Img/logoSGCE.png">
					</a>
					<div style="padding-top:33px;">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-bar" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
				</div>

				<div class="collapse navbar-collapse" id="header-bar">
					<ul class="nav navbar-nav navbar-right" style="padding-top:12px;">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
								<span><img src="Img/bookmarkGreen.png" height="30px"></span> Visitante<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li><a href="#">
									<span><img src="Img/333.png" height="36px"></span>
									Solicitar Cita
								</a></li>
								<li><a href="InformesySugerencias.html">
									<span><img src="Img/22.png" height="36px"></span>
									Informes y Sugerencias
								</a></li>
								<li><a href="#">
									<span><img src="Img/11.png" height="36px"></span>
									Ver mis citas
								</a></li>
							</ul>
						</li>
						<li class="">
							<a href="IniciarSesion.php">
								<span><img src="Img/loginiGreen.png" height="30px"></span> Iniciar sesión (Administrador)
							</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		
		<div id="main-content" class="container-fluid" align="center" style="padding-bottom: 50px;">
			<div class="container col-md-12" style="margin-bottom: 20px;">
				<img class="img-responsive" alt="Responsive image" src="Img/IMG_20160306_153146.jpg">
			</div>
			<div class="row" style="margin-top: 50px; margin-bottom: 20px;">
				<div class="col-md-4 col-md-offset-1" align="left">
					<h4>
						<p><strong>Información de contacto</strong></p>
						<p><strong>Dirección:</strong>
							Av. Juan de Dios Bátiz esq. Av. Miguel Othón de Mendizábal,
							Col. Lindavista. Demarcación Territorial Gustavo A. Madero.
							Ciudad de México C.P. 07738
						</p>
						<p><strong>Correo Electrónico:</strong>
							direccion_escom@ipn.mx
						</p>
						<p><strong>Otros Sitios:</strong>
							www.escom.ipn.mx
						</p>
						<p><strong>Teléfono:</strong>
							57296000 Ext. 46188
						</p>
					</h4>
				</div>
				<div class="col-md-4 col-md-offset-2" align="left">
					<h4><p><strong>Mapa de ubicación</strong></p></h4>
					<div id="map">
					</div>
				</div>
				<script>
					function initMap() {
						var mapDiv = document.getElementById('map');
    					var map = new google.maps.Map(mapDiv, {
							center: {lat: 19.504929, lng: -99.146564},
      						zoom: 17,
						});
					}
				</script>
				<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDKRfb1Z6BSL5qUF8Tlo3SVS_pFlQcbvks&callback=initMap" async defer>
				</script>
			</div>
		</div>

		<nav class="navbar navbar-inverse navbar-fixed-bottom" id="bottom-bar">
			<div class="container-fluid" style="padding-right:51px;">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#footer-bar" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>

				<div class="collapse navbar-collapse" id="footer-bar">
					<ul class="nav navbar-nav navbar-right">
						<p class="navbar-text">@2016 Team Rocket Inc.</p>
						<a class="navbar-brand" href="#">
							<img src="Img/facebookWhite.png" height="24px">
						</a>
						<a class="navbar-brand" href="#">
							<img src="Img/twitterWhite.png" height="24px">
						</a>
						<a class="navbar-brand" href="#">
							<img src="Img/googleWhite.png" height="24px">
						</a>
					</ul>
				</div>
			</div>
		</nav>		

		<script type="text/javascript">
			$(document).ready(function (){
				// Sticky bar plz
				$(window).scroll(function() {
					if ($(window).scrollTop() >= $("#header").height()) {
						$("#top-bar").addClass("navbar-fixed-top");
						$("#main-content").css({"padding-top":"90px"});
					}
					if ($(window).scrollTop() < $("#header").height()) {
						$("#top-bar").removeClass("navbar-fixed-top");
						$("#main-content").css({"padding-top":"0px"});
					}
				});

				if ($(window).width() <= 886) {
					$("#top-bar").removeAttr("style");
				}

				$(window).resize(function() {
					if ($(window).width() > 886) {
						$("#top-bar").attr({"style":"height:84px;"});
					}
					if ($(window).width() <= 886) {
						$("#top-bar").removeAttr("style");
					}
				}); 
			});
		</script>

	</body>
</html>
