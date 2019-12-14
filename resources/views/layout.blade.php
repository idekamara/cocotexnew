<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>CocoTex Shop</title>

  <!-- Bootstrap core CSS -->
  <link href="{{asset('css/app.css')}}" rel="stylesheet">
  <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">


  <!-- Custom styles for this template -->
  <link href="{{asset('css/all.css')}}" rel="stylesheet">
  <link href="{{asset('js/app.js')}}" rel="stylesheet">
  <link href="{{asset('css/shop-homepage.css')}}" rel="stylesheet">


</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#"><h2>CocoTex SHOP</h2></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">

          <li class="nav-item active">
            <div class="top-right links">
            <a class="nav-link" href="{{route('home')}}">Accueil
              <span class="sr-only">(current)</span>
                 </a> 
                 <li class="nav-item">
                 <a class="nav-link" href="#" color=''>A Propos</a>
                 <span class="sr-only">(current)</span>
                  </li>
                     @guest
                          <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Connexion') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Inscription') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('home') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Déconnexion') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
              <li class="nav-item">
            <a class="nav-link" href="#">Nos Contacts</a>
          </li>
        </div>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <!-- <div class="container">
    <div class="row">
      <div class="col-lg-3" >
        <h4 class="my-4"><marquee behavior="alternate" direction="" scrollamount="" height="" width="" > L'Élégance du Textile</marquee></h4>
      <div id="menu">
        <div class="list-group">
          <a href="#" class="list-group-item">Pagnes Africains</a>
          <a href="#" class="list-group-item">Costumes Africains</a>
          <a href="#" class="list-group-item">Chemises Tissees</a>
          <a href="#" class="list-group-item">Chemises Patchees</a>
          <a href="#" class="list-group-item">Bombers Woodin</a>
          <a href="#" class="list-group-item">Chaussures Tissees</a>
          <a href="#" class="list-group-item">Chaussures Woodin</a>
          <a href="#" class="list-group-item">Produits Cosmetiques BIO</a>
        </div>
     </div>
     </div>
      < !-- /.col-lg-3 -->
      <!-- /.col-lg-9 ->
    < /div> -->
    <!-- /.row -->

  <!-- /.container -->

  <div class="container">
    @yield("corps_page")
  </div>

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; CocoTex 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('js/jquery.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

</body>

</html>
