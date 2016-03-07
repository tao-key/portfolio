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
					<h1 class="header center white-text" style="font-size: 7.2rem; margin-top: 7.1rem"><span style="font-size:  10.5rem">M</span>e contacter</h1>
				</div>
				<div class="parallax"><img src="../parallax-template/images/contact.png" alt=""></div>
			</div>
		</div>


		<form class="form-horizontal" role="form" method="POST" action="{{ url('contact_me/send') }}">
			{!! csrf_field() !!}

			<div class="container contact center-block" style="width: 50%">
				<div class="row" style="margin-bottom:0; margin-top:10px">
					<form class="col s12">

						<div class="row" style="margin-bottom:0">
							<div class="col s12 m3"></div>
							<div class="input-field col s6 m6">
								<input id="sujet" name="sujet" type="text" class="validate">
								<label for="sujet" data-error="Erreur" data-success="Valide">Sujet</label>
							</div>
							<div class="col s12 m3"></div>
						</div>

						<div class="row" style="margin-bottom:0">
							<div class="col s12 m3"></div>
							<div class="input-field col s6 m6">
								<input id="last_name" name="name" type="text" class="validate">
								<label for="last_name" data-error="Erreur" data-success="Valide">Nom</label>
							</div>
							<div class="col s12 m3"></div>
						</div>

						<div class="row" style="margin-bottom:0">
							<div class="col s12 m3"></div>
							<div class="input-field col s6 m6">
								<input id="prenom" name="prenom" type="text" class="validate">
								<label for="prenom" data-error="Erreur" data-success="Valide">Prénom</label>
							</div>
							<div class="col s12 m3"></div>
						</div>

						<div class="row" style="margin-bottom:0">
							<div class="col s12 m3"></div>
							<div class="input-field col s12 m6">
								<input id="email" name="email" type="email" class="validate">
								<label for="email" data-error="Erreur" data-success="Valide">E-mail</label>
							</div>
							<div class="col s12 m3"></div>
						</div>
						<div class="row" style="margin-bottom:0">
							<div class="col s12 m3"></div>
							<div class="input-field col s12 m6">
								<textarea id="textarea1" name="content" class="materialize-textarea"></textarea>
								<label for="textarea1">Votre message</label>
							</div>
							<div class="col s12 m3"></div>
						</div>
					</form>
				</div>

				<div class="container" style="width: 50%">
					<div class="col s12 m3"></div>
					<div class="col s12 m6">
						<button class="btn waves-effect waves-light" type="submit" name="action">Envoyer
							<i class="material-icons right">send</i>
						</button>
					</div>
					<div class="col s12 m3"></div>
				</div>
			</div>

		</form>



		<footer class="page-footer teal grey darken-4">
			<div id="scrollToTop" class="grey darken-4"><a href="#">Retour haut de page</a></div>
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
		<script src="../js/drop.js"></script>

	</body>
	</html>
