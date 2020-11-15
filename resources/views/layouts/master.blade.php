<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('dist/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/mdb.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/mdb.lite.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/froala_blocks.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/uikit-rtl.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/uikit.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/icofont/icofont.css') }}">
    <title>Eprobat</title>
    <style>
        body {
            font-family: nunito
        }

        @font-face {
            font-family: nunito;
            src: url("{{ asset('dist/fonts/Nunito-Regular.ttf') }}")
        }
    </style>
    @yield('styles')
</head>
<body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark primary-color">

        <!-- Navbar brand -->
        <a class="navbar-brand" href="{{ route('eprobat.home') }}">EPROBAT</a>
  
        <!-- Collapse button -->
        <button class="navbar-toggler border border-white mb-2" type="button" data-toggle="collapse" data-target="#basicExampleNav"
        aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        <span>MENU</span>
        </button>
  
        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="basicExampleNav">
    
        <!-- Links -->
        <ul class="navbar-nav mr-auto">
            <li class="nav-item {{ $page == 'home' ? 'active' : '' }}"">
                <a class="nav-link" href="{{ route('eprobat.home') }}">Accueil
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item {{ $page == 'activities' ? 'active' : '' }}"">
                <a class="nav-link" href="{{ route('eprobat.activites') }}">Nos activités</a>
            </li>
            <li class="nav-item {{ $page == 'realisations' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('eprobat.realisations') }}">Nos réalisations</a>
            </li>
            <li class="nav-item {{ $page == 'contact' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('eprobat.contact') }}">Contact</a>
            </li>
        </ul>
        <!-- Links -->
        </div>
        <!-- Collapsible content -->
    </nav>
    <!--/.Navbar-->

    @yield('content')

    <!-- Footer -->
    <footer class="fdb-block footer-small special-color white-text mt-5 py-5">
        <div class="container py-5">
          <div class="row text-center align-items-center">
            <div class="col-12 col-lg-2 text-lg-left">
                <h3 class="white-text">EPROBAT BTP</h3>
            </div>
      
            <div class="col mt-4 mt-lg-0 text-center">
              <ul class="nav justify-content-center">
                <li class="nav-item {{ $page == 'home' ? 'active' : '' }}">
                  <a class="nav-link white-text" href="{{ route('eprobat.home') }}">Accueil</a>
                </li>
                <li class="nav-item {{ $page == 'activities' ? 'active' : '' }}">
                  <a class="nav-link white-text" href="{{ route('eprobat.activites') }}">Nos activités</a>
                </li>
                <li class="nav-item {{ $page == 'realisations' ? 'active' : '' }}">
                  <a class="nav-link white-text" href="{{ route('eprobat.realisations') }}">Nos réalisations</a>
                </li>
                <li class="nav-item {{ $page == 'contact' ? 'active' : '' }}">
                  <a class="nav-link white-text" href="{{ route('eprobat.contact') }}">Contact</a>
                </li>
              </ul>
            </div>
      
            <div class="col-12 col-lg-2 mt-4 mt-lg-0 text-lg-right">
              <a href="#" class="mx-2"><i class="icofont icofont-twitter white-text" aria-hidden="true"></i></a>
              <a href="#" class="mx-2"><i class="icofont icofont-facebook white-text" aria-hidden="true"></i></a>
              <a href="#" class="mx-2"><i class="icofont icofont-instagram white-text" aria-hidden="true"></i></a>
              <a href="#" class="mx-2"><i class="icofont icofont-linkedin white-text" aria-hidden="true"></i></a>
            </div>
          </div>
      
          <div class="row mt-4">
            <div class="col text-center">
              <p>UNE STRUCTURE – UN BUT – UNE FOI</p>
              © 2020 EPROBAT BTP. Tous Droits Reservés
            </div>
          </div>
        </div>
    </footer>


    <script src="{{ asset('dist/js/jquery.js') }}"></script>
    <script src="{{ asset('dist/js/bootstrap.js') }}"></script>
    <script src="{{ asset('dist/js/mdb.js') }}"></script>
    <script src="{{ asset('dist/js/popper.js') }}"></script>
    <script src="{{ asset('dist/js/uikit.js') }}"></script>
    @yield('extra-js')
</body>
</html>