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

  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center white-text"><span style="font-size:  7rem">T</span>AO <span style="font-size:  7rem">K</span>EOMONY</h1>
        <div class="row center">
          <h5 class="header col s12 light">DEVELOPPEUR - WEB DESIGNER</h5>
        </div>
        <div class="row center">
          <img src="../image/moi.png" alt="">
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="../parallax-template/images/wind.jpg" alt=""></div>
  </div>

  @foreach($panel_homes as $panel_home)
  <div class="container">
    <div class="section">
      <div class="row" style="margin:0">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center black-text"><i class="material-icons">face</i></h2>
            <h5 class="center">Tao Keomony</h5>

            <p class="light">{!! $panel_home->presentation !!}</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center black-text"><i class="material-icons">brush</i></h2>
            <h5 class="center">Web Design</h5>

            <p class="light">{!! $panel_home->front_end !!}</p>

            <h5>Compétences :</h5>
            <ul class="left" style="list-style-type:disc; margin:0">
              <blockquote style="margin:0; border-left: 5px solid #2196F3;">    
                {!! $panel_home->comp_front !!}
              </blockquote>
            </ul>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center black-text"><i class="material-icons">laptop_windows</i></h2>
            <h5 class="center">Développement</h5>

            <p class="light">{!! $panel_home->back_end !!}</p>

            <h5>Compétences :</h5>
            <ul class="left" style="list-style-type:disc; margin:0">
              <blockquote style="margin:0; border-left: 5px solid #2196F3;">    
                {!! $panel_home->comp_back !!}
              </blockquote>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endforeach

  <div class="container">
    <div class="row">
    <div class="col s4 m5"></div>
      <div class="col s7 m3 center-block">
        <a style="color:#FFF" class="btn waves-effect waves-light" href="../image/cv/cv_tao_keomony.pdf">Télécharger mon CV<i class="material-icons right">file_download</i></a>
      </div>
      <div class="col s4 m5"></div>
    </div>
  </div>


  <br>
  <em><h5 class="center" style="margin-top:15px">"Si debugger, c’est supprimer des bugs, alors programmer ne peut être que les ajouter" – Edsger Dijkstra</h2></em>
  <br>


  <div class="container">
    <div class="section">
      <div class="row">
        <div class="col s12 m12">
          <h2 class="center"  style="margin-top:0">Loisirs</h2>
          <div class="col s12 m3">
            <div class="icon-block">
              <img class="center-block" src="../parallax-template/images/bow.png" alt="">
              <h5 class="center">Tir à l'arc</h5>
            </div>
          </div>

          <div class="col s12 m3">
            <div class="icon-block">
              <img class="center-block" src="../parallax-template/images/boxe.png" alt="">
              <h5 class="center">Boxe anglaise</h5>
            </div>
          </div>

          <div class="col s12 m3">
            <div class="icon-block">
              <img class="center-block" src="../parallax-template/images/code.png" alt="">
              <h5 class="center">Coder</h5>
            </div>
          </div>

          <div class="col s12 m3">
            <div class="icon-block">
              <img class="center-block" src="../parallax-template/images/link.png" alt="">
              <h5 class="center">Jeux vidéos</h5>
            </div>
          </div>

        </div>
      </div>
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
