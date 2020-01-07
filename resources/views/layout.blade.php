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
  <link href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}" rel="stylesheet">
@yield("css")
</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <p><a class="navbar-brand" href="#"><h4><img src="{{asset('shop/shop.jpg')}}"  style="width:50px;height:50px" title="CocoTex" alt="Logo CocoTex">&nbsp;<b>CocoTex SHOP</b></h4></a></p>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
           <li class="nav-item active"> 
             <a class="nav-link" href="#" title="Recherche...">
              <span class="js-search topbar-search" id="topbar-search">
              <span class="icon icon-search"><i class="fa fa-search fa-lg"></i></span>
              </span>
              </a>
          <li class="nav-item active">
            <div class="top-right links">
            <a class="nav-link" href="{{route('home')}}" title="Page d'Accueil"><i class="fa fa-home fa-fw fa-lg" aria-hidden="true"></i>
            
                 </a> 
                 <li class="nav-item">
                 <a class="nav-link" href="#" color='' title="A Propos">&nbsp;<i class="fa fa-info-circle fa-lg" aria-hidden="true"></i>&nbsp;</a>
                
                  </li>
                     @guest
                          <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}" title="Connexion"><i class="fa fa-sign-in fa-lg" aria-hidden="true"></i>&nbsp;{{ __('') }}
                                </a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}" title="Inscription"><i class="fa fa-user-plus fa-lg" aria-hidden="true"></i></a>&nbsp;{{ __('') }}
                                    
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <i class="fa fa-user fa-lg" style="color: green"></i>&nbsp;{{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                  @can('admin')
                                <a class="dropdown-item" href="{{ route('products.index') }}" title="Gérer les produits"><i class="fa fa-cogs fa-lg" aria-hidden="true" style="color: #000"></i>&nbsp;{{ __('Back Office') }}</a>
                                  @endcan
                                    <a class="dropdown-item" href="{{ route('home') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" title="Quitter">
                                        <i class="fa fa-sign-out fa-lg" aria-hidden="true" style="color: #000"></i>&nbsp;{{ __('Déconnexion') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
              <li class="nav-item">
            <a class="nav-link" href="{{route('contacts.create')}}" title="Nous Contacter"><i class="fa fa-envelope-o fa-lg"></i>&nbsp;</a>
          </li>
        </div>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
 <div class="container">
    @yield("corps_page")
  </div>
  <!-- /.container -->
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
<script src="{{ asset('node_modules/tinymce/tinymce.js') }}"></script>
    <script>
   tinymce.init({
       selector:'textarea.description',
       width: 1000,
       height: 300
   });
</script>



<style type="text/css">
  
  input[type=text],input[type=file], input[type=email], select, .form-control {
  width: 95%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
  background-color:white;
}

input[type=submit], button {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  margin-top: 6px;
  margin-bottom: 16px;
  border-radius: 4px;
  cursor: pointer;
}


a.nav-link:hover{
  background-color: #000;
}
i.fa {
  color: #FFF;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Current/active navbar link */
active {
  background-color: #4CAF50;
}
 

a.icon-search :hover {
  background-color: #000;
 
}

/* Style the submit button */
form.search button {
  float: left;
  width: 20%;
  border-radius: 4px;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none; /* Prevent double borders */
  cursor: pointer;
}

form.search button:hover {
  background : #0b7dda;
}

/* Clear floats */
form.search::after {
  content: "";
  clear: both;
  display: table;
}


</style>

<style>
  #snowflakeContainer {
    position: absolute;
    left: 0px;
    top: 0px;
    display: none;
  }

  .snowflake {
    position: fixed;
    color: #FFF;  
    background-color: #FFF; /*rgb(219, 212, 212);*/
    user-select: none;
    z-index: 1000;
    pointer-events: none;
    border-radius: 50%;
    width: 10px;
    height: 10px;
  }
</style>

<div id="snowflakeContainer">
  <span class="snowflake"><i class="fa fa-snowflake-o fa-lg" aria-hidden="true"></i></span>
</div>

<script>
  // Array to store our Snowflake objects
  var snowflakes = [];

  // Global variables to store our browser's window size
  var browserWidth;
  var browserHeight;

  // Specify the number of snowflakes you want visible
  var numberOfSnowflakes = 50;

  // Flag to reset the position of the snowflakes
  var resetPosition = false;

  // Handle accessibility
  var enableAnimations = false;
  var reduceMotionQuery = matchMedia("(prefers-reduced-motion)");

  // Handle animation accessibility preferences 
  function setAccessibilityState() {
    if (reduceMotionQuery.matches) {
      enableAnimations = false;
    } else { 
      enableAnimations = true;
    }
  }
  setAccessibilityState();

  reduceMotionQuery.addListener(setAccessibilityState);

  //
  // It all starts here...
  //
  function setup() {
    if (enableAnimations) {
      window.addEventListener("DOMContentLoaded", generateSnowflakes, false);
      window.addEventListener("resize", setResetFlag, false);
    }
  }
  setup();

  //
  // Constructor for our Snowflake object
  //
  function Snowflake(element, speed, xPos, yPos) {
    // set initial snowflake properties
    this.element = element;
    this.speed = speed;
    this.xPos = xPos;
    this.yPos = yPos;
    this.scale = 1;

    // declare variables used for snowflake's motion
    this.counter = 0;
    this.sign = Math.random() < 0.5 ? 1 : -1;

    // setting an initial opacity and size for our snowflake
    this.element.style.opacity = (.1 + Math.random()) / 3;
  }

  //
  // The function responsible for actually moving our snowflake
  //
  Snowflake.prototype.update = function () {
    // using some trigonometry to determine our x and y position
    this.counter += this.speed / 5000;
    this.xPos += this.sign * this.speed * Math.cos(this.counter) / 40;
    this.yPos += Math.sin(this.counter) / 40 + this.speed / 30;
    this.scale = .5 + Math.abs(10 * Math.cos(this.counter) / 20);

    // setting our snowflake's position
    setTransform(Math.round(this.xPos), Math.round(this.yPos), this.scale, this.element);

    // if snowflake goes below the browser window, move it back to the top
    if (this.yPos > browserHeight) {
      this.yPos = -50;
    }
  }

  //
  // A performant way to set your snowflake's position and size
  //
  function setTransform(xPos, yPos, scale, el) {
    el.style.transform = `translate3d(${xPos}px, ${yPos}px, 0) scale(${scale}, ${scale})`;
  }

  //
  // The function responsible for creating the snowflake
  //
  function generateSnowflakes() {

    // get our snowflake element from the DOM and store it
    var originalSnowflake = document.querySelector(".snowflake");

    // access our snowflake element's parent container
    var snowflakeContainer = originalSnowflake.parentNode;
    snowflakeContainer.style.display = "block";

    // get our browser's size
    browserWidth = document.documentElement.clientWidth;
    browserHeight = document.documentElement.clientHeight;

    // create each individual snowflake
    for (var i = 0; i < numberOfSnowflakes; i++) {

      // clone our original snowflake and add it to snowflakeContainer
      var snowflakeClone = originalSnowflake.cloneNode(true);
      snowflakeContainer.appendChild(snowflakeClone);

      // set our snowflake's initial position and related properties
      var initialXPos = getPosition(50, browserWidth);
      var initialYPos = getPosition(50, browserHeight);
      var speed = 5 + Math.random() * 40;

      // create our Snowflake object
      var snowflakeObject = new Snowflake(snowflakeClone,
        speed,
        initialXPos,
        initialYPos);
      snowflakes.push(snowflakeObject);
    }

    // remove the original snowflake because we no longer need it visible
    snowflakeContainer.removeChild(originalSnowflake);

    moveSnowflakes();
  }

  //
  // Responsible for moving each snowflake by calling its update function
  //
  function moveSnowflakes() {

    if (enableAnimations) {
      for (var i = 0; i < snowflakes.length; i++) {
        var snowflake = snowflakes[i];
        snowflake.update();
      }      
    }

    // Reset the position of all the snowflakes to a new value
    if (resetPosition) {
      browserWidth = document.documentElement.clientWidth;
      browserHeight = document.documentElement.clientHeight;

      for (var i = 0; i < snowflakes.length; i++) {
        var snowflake = snowflakes[i];

        snowflake.xPos = getPosition(50, browserWidth);
        snowflake.yPos = getPosition(50, browserHeight);
      }

      resetPosition = false;
    }

    requestAnimationFrame(moveSnowflakes);
  }

  //
  // This function returns a number between (maximum - offset) and (maximum + offset)
  //
  function getPosition(offset, size) {
    return Math.round(-1 * offset + Math.random() * (size + 2 * offset));
  }

  //
  // Trigger a reset of all the snowflakes' positions
  //
  function setResetFlag(e) {
    resetPosition = true;
  }
</script>
</body>

</html>
