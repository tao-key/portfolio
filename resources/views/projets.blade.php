<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
	<title>Keomony Tao | Portfolio</title>

	<!-- CSS  -->
	<link rel="icon" type="image/png" href="../image/logo_black.png" />
	<link href='https://fonts.googleapis.com/css?family=Poiret+One|Righteous' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="../parallax-template/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href="../parallax-template/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link rel="stylesheet" type="text/css" href="../parallax-template/css/materialize.min.css"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

</head>

<body style="font-family:Righteous">
	<nav class="grey darken-4">
		<div class="nav-wrapper">
			<a href="{{ url('/home') }}" style="background-color: transparent" class="brand-logo"><img src="../image/logo.png"></a>
			<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons white-text">menu</i></a>
			<ul class="right hide-on-med-and-down">
				<li><a href="{{ url('/home') }}"><i class="material-icons left">home</i>Home</a></li>
				<li><a href="{{ url('/projets') }}"><i class="material-icons left">dashboard</i>Projets</a></li>
				<li><a href="{{ url('/contact_me') }}"><i class="material-icons left">supervisor_account</i>Contact</a></li>
			</ul>
			<ul class="side-nav white" id="mobile-demo">
				<li><a href="{{ url('/home') }}"><i class="material-icons left">home</i>Home</a></li>
				<li><a href="{{ url('/projets') }}"><i class="material-icons left">dashboard</i>Projets</a></li>
				<li><a href="{{ url('/contact_me') }}"><i class="material-icons left">supervisor_account</i>Contact</a></li>
			</ul>
		</div>
	</nav>

	@if(Session::has('success'))
	<div class="alert alert-success" style="margin:0">
		{{ Session::get('success') }}
	</div>
	@endif

	<div id="index-banner" class="parallax-container" style="height: 380px;">
		<div class="section no-pad-bot">
			<div class="container">
				<h1 class="header center white-text" style="font-size: 7.2rem; margin-top: 7.1rem"><span style="font-size:  10.5rem">P</span>ROJETS</h1>
			</div>
			<div class="parallax"><img src="../parallax-template/images/projet.png" alt=""></div>
		</div>
	</div>



	<div class="container col s12 m6" style="margin-top:20px;">
		<div class="row">
			<ul class="collapsible" data-collapsible="accordion">
				<li>
					<div class="collapsible-header"><i class="material-icons">keyboard_arrow_down</i>Maquette HTML/CSS 2</div>
					<div class="collapsible-body"><a class="hoverable" href="../projects/HTML_CSS_Maquette_2/index.html"><img class="responsive-img" src="../image/projets/maquette_2.png"></a></div>
				</li>
				<li>
					<div class="collapsible-header"><i class="material-icons">keyboard_arrow_down</i>Maquette HTML/CSS 3</div>
					<div class="collapsible-body"><a class="hoverable" href="../projects/HTML_CSS_Maquette_3/index.html"><img class="responsive-img" src="../image/projets/maquette_3.png"></a></div>
				</li>
				<li>
					<div class="collapsible-header"><i class="material-icons">keyboard_arrow_down</i>My Weblog</div>
					<div class="collapsible-body"><a class="hoverable" href="../projects/Projet_Web_my_weblog/index.html"><img class="responsive-img" src="../image/projets/my_weblog.png"></a></div>
				</li>
				<li>
					<div class="collapsible-header"><i class="material-icons">keyboard_arrow_down</i>Javascript - Responsive</div>
					<div class="collapsible-body"><a class="hoverable" class="hoverable" href="../projects/CSS_Javascript_Maquette_Responsive/index.html"><img class="responsive-img" src="../image/projets/js_responsive.png"></a></div>
				</li>
				<li>
					<div class="collapsible-header"><i class="material-icons">keyboard_arrow_down</i>CSS - Javascript - JQuery</div>
					<div class="collapsible-body"><a class="hoverable" href="../projects/CSS_Javascript_JQuery/slider.html"><img class="responsive-img" src="../image/projets/css_jquery.png"></a></div>
				</li>
				<li>
					<div class="collapsible-header"><i class="material-icons">keyboard_arrow_down</i>My maps</div>
					<div class="collapsible-body"><a href="../projects/JavaScript_Avance_my_maps/index.html"><img class="responsive-img" src="../image/projets/map.png"></a></div>
				</li>
			</ul>
		</div>
	</div>




	<footer class="page-footer teal grey darken-4">
		<div id="scrollToTop" class="grey darken-4"><a href="javascript:;">Retour haut de page</a></div>
		<div class="container center">
			<div class="row">
				<div class="col l3 s12">
					<h5 class="blue-text">Portfolio</h5>
					<ul>
						<li><a class="transparent white-text" href="{{ url('/home') }}">Home</a></li>
						<li><a class="transparent white-text" href="{{ url('/projets') }}">Projets</a></li>
						<li><a class="transparent white-text" href="{{ url('/contact') }}">Contact</a></li>
					</ul>
				</div>
				<div class="col l3 s12">
					<h5 class="blue-text">Contact</h5>
					<ul>
						<li class="white-text">tao.keomony@gmail.com</li>
						<li class="white-text">06.52.46.90.48</li>
					</ul>
				</div>
				<div class="col l3 s12">
					<h5 class="blue-text">Lien utile</h5>
					<ul>
						<li><a class="transparent white-text" href="https://fr.linkedin.com/in/keomony-tao-36a830101"><i class="fa fa-linkedin-square fa-lg" style="margin-right: 10px"></i>LinkedIn</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="footer-copyright grey darken-2">
			<div class="container center white-text">
				Keomony Tao © 2015
			</div>
		</div>
	</footer>


	<!--Scripts-->
	<script src="https://code.jquery.com/jquery-2.1.4.js"></script>
	<script src="../parallax-template/js/materialize.js"></script>
	<script src="../parallax-template/js/init.js"></script>
	<script src="../js/portfolio.js"></script>

</body>
</html>
