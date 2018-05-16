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

    <div id="tratamente">
      <p>Cabinetul nostru stomatologic vă oferă o consultaţie gratuită,
tratamente dentare estetice, coroane şi punţi de porţelan,
extracţii şi plombe la preţuri avantajoase!</p>
      <table>
        <tr>
          <th>Tratament</th>
          <th>Pret (RON)</th>
        </tr>
        <?php
        $conn = new mysqli("localhost", "root", "", "cabinet");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        $sql = "SELECT nume, pret FROM tratamente";
        $result = $conn->query($sql);
        if ($result-> num_rows > 0) {
          while ($row = $result-> fetch_assoc()) {
            echo "<tr><td>" . $row["nume"] . "<br></td><td>" . $row["pret"] . "</td></tr>";
          }
          echo "</table>";
        }
        else {
          echo "0 results";
        }

        $conn-> close();
        ?>
      </table>
    </div>

    

    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="/js/bootstrap.min.js"></script>
  </body>
</html>