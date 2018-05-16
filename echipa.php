<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/style.css" rel="stylesheet" type="text/css">
    <title></title>
  </head>

  <body>
    <nav class="navbar navbar-expand-md custom-navbar fixed-top"><!--expand-sm expand-lg expand-xl-->
      <a class="navbar-brand" href="#"><img src="/images/brand.png">Cabinet Stomatologic</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#meniu">
        <span class="navbar-toggler-icon"></span> <!--clasa pentru meniu telefon 3 liniute-->
      </button>
      <div class="collapse navbar-collapse" id="meniu">
        <ul class="navbar-nav ml-auto"><!--float right-->
          <li class="nav-item">
            <a class="nav-link" href="index.php">Acasa</a>
          </li>
          <li class="nav-item dropdown active">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Despre noi</a>
            <div class="dropdown-menu dropdown-menu-right">
              <a class="dropdown-item" href="echipa.php">Echipa</a>
              <a class="dropdown-item" href="servicii.php">Servicii</a>
              <a class="dropdown-item" href="tarife.php">Preturi</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="programare.php">Programare online</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Login</a>
            <div class="dropdown-menu dropdown-menu-right">
              <a class="dropdown-item" href="loginPacienti.php">Login pacienti</a>
              <a class="dropdown-item" href="loginPersonal.php">Login personal</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>    
        </ul>
      </div>  
    </nav>
    
    <div id="carousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carousel" data-slide-to="0" class="active"></li>
        <li data-target="#carousel" data-slide-to="1"></li>
        <li data-target="#carousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="/images/car1.jpg" alt="First slide">
          <div class="carousel-caption d-none d-md-block">
            <p></p>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="/images/car2.jpg" alt="Second slide">
          <div class="carousel-caption d-none d-md-block">
            <p></p>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="/images/car3.jpeg" alt="Third slide">
          <div class="carousel-caption d-none d-md-block">
            <p></p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    

    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="/js/bootstrap.min.js"></script>
  </body>
</html>