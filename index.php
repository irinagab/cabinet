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
<!--?<?php echo time(); ?>-->
  <body>
    <nav class="navbar navbar-expand-md custom-navbar fixed-top"><!--expand-sm expand-lg expand-xl-->
      <a class="navbar-brand" href="#"><img src="/images/brand.png">Cabinet Stomatologic</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#meniu">
        <span class="navbar-toggler-icon"></span> <!--clasa pentru meniu telefon 3 liniute-->
      </button>
      <div class="collapse navbar-collapse" id="meniu">
        <ul class="navbar-nav ml-auto"><!--float right-->
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Acasa</a>
          </li>
          <li class="nav-item dropdown">
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
    <div class="jumbotron">
      <h1 class="display-4">Dental Clinic</h1>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <p class="lead">
        <a class="btn btn-primary btn-lg" href="contact.php" role="button">Afla mai mult</a>
      </p>
    </div>

    <div class="card-deck">
      <div class="card">
        <img class="card-img-top" src="/images/card1.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Albire dinti</h5>
          <p class="card-text">Albirea dentara este o procedura ce are rezultat cu efect de lunga durata poate fi obtinut intr-o singura sedinta de maxim 60 minute. Spune adio coloratiilor severe sau dintilor cu nuante de gri. Procedura este sigura si fara durere. Optează pentru un tratament profesional de albire a dintilor și atrage privirile celor din jur cu un zambet irezistibil ca al vedetelor de la Hollywood!</p>
        </div>
      </div>
    
      <div class="card">
        <img class="card-img-top" src="/images/card2.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Aparate dentare Invisalign</h5>
          <p class="card-text">Un aparat dentar Invisalign este alternativa invizibila a aparatului dentar cu bracketi, fiind una dintre cele mai moderne solutii pentru indreptarea dintilor. Acest aparat are structura unei gutiere transparente si permite corectarea unor probleme de aliniere a dintilor. Cu invisalign, nu simti ca porti un aparat dentar datorita faptului ca este aproape invizibil iar zambetul este transformat cu usurinta si cu cel mai mare confort.</p>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="/images/card3.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Program pentru copii</h5>
          <p class="card-text">Pentru a îi oferi celui mic o experiență cât mai plăcută la prima lui vizită la medicul dentist, trebuie să alegi cu grijă clinica stomatologică și medicul care îl va consulta.
          În incinta clinicii noastre, de igiena orală a copilului tău, se vor ocupa medicii specialisti în stomatologie copii.De asemenea, din dorința de a le face vizita cât mai plăcută, am amenajat pentru ei, un loc de joacă special, cu lego, creioane, cărţi de colorat, și chiar o tablă de scris.</p>
        </div>
      </div>
    </div>

   
    


    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="/js/bootstrap.min.js"></script>
  </body>
</html>