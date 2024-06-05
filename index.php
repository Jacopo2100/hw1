<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>KTM</title>
  <link rel="stylesheet" href="mhw3.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="mhw3.js" defer></script>
  <script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyBbt4NRSm7x9H8LDbNh9gMMKQutxUft_ZE"></script>
  <script src="https://apis.google.com/js/api.js"></script>

</head>

<body>



  <header id="slideshow" class="slide1">

    <div class="menu">
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
    </div>

    <nav class="nav-bar">

      <ul>

        <li class="models-dropdown">
          <a href="#">Models<i class="fas fa-caret-down"></i></a>
          <div class="dropdown__menu">
            <ul>
              <li><a href="naked.php">Naked</a></li>
              <li><a href="enduro.php">Enduro</a></li>
              <li><a href="adventure.php">Adventure</a></li>
            </ul>
          </div>
        </li>

        <li><a href="#">X-Bow</a></li>
        <li><a href="#">PowerParts & PowerWera</a></li>
        <li><a href="#">Racing</a></li>
        <li><a href="#">Ktm World</a></li>
        <li><a href="#">Service</a></li>
        <li><a href="#">Power Deals</a></li>
        <li><a href="#"> concessionari</a></li>
        <li><a href="#"> lingua</a></li>


      </ul>


    </nav>

    <div class="logo"><a href="index.php"> KTM</a></div>


    <?php
    // Avvia la sessione
    session_start();

    // Controlla se l'utente è già autenticato
    if (isset($_SESSION['username'])) {
      echo '<div class="welcome-container">';
      echo '<div class="logged-in-message">Ciao ' . $_SESSION['username'] . ', sei già loggato.</div>';
      echo '<form action="logout.php" method="POST">';
      echo '<input type="submit" class="logout-button" value="Logout">';
      echo '</form>';
      echo '</div>';
    } else {
      echo '<div class="registrazione"><a target="_blank" href="utente.php">Accedi</a></div>';
    }
    ?>



  </header>

  <div class="test">
    <div id="prenotazione-container">
      <?php


      if (isset($_SESSION['username'])) {
        include 'interazione.php';
      } else {
        // Se l'utente non è autenticato, mostra un'immagine con un link di accesso
        echo '<a href="login.html" class="cliccabile">';
        echo '<img src="https://cdn-9.motorsport.com/images/mgl/YMdmNJl2/s800/bike-of-brad-binder-red-bull-k.jpg">';
        echo '<div class="overlay">';
        echo '<h2>Prenota un test ride</h2>';
        echo '</div>';
        echo '</a>';
      }
      ?>
    </div>
  </div>


  <div id="esposizione">
    <div class="immagine">
      <a href="naked.php">
        <img src="naked.jpeg" alt="Naked Bike">
        <div class="overlay">

          <p>#GET DUKE</p>
          <h2>KTM NAKED</h2>
        </div>
      </a>
    </div>

    <div class="immagine">
      <a href="enduro.php">
        <img src="enduro.jpeg" alt="Enduro Bike">
        <div class="overlay">

          <p>#GET ENDURO</p>
          <h2>KTM ENDURO</h2>
        </div>
      </a>
    </div>
  </div>




  <section class="gallery">
    <figure class="cella"><img src="KTM - KTM expresses thanks to Toby Price as partnership concludes.jpeg">

      <figcaption>
        <strong>
          <h2>KTM EXPRESSES THANKS TO TOBY
            PRICE AS PARTNERSHIP CONCLUDES
          </h2>
        </strong><br><br>
        <p>
          Red Bull KTM Factory Racing would like to thank two-time Dakar Rally
          Champion Toby Price for the many achievements and results he earned
          with the team over the past nine seasons, as his contract concludes.
        </p>
      </figcaption>


    </figure>
    <figure class="cella"><img src="CHASE-SEXTON-RED-BULL-KTM-FACTORY-RACING-INDIANAPOLIS.jpg">

      <figcaption>
        <h2> CHASE SEXTON AND TOM VIALLE
          CLAIM TRIPLE CROWN PODIUMS IN
          Indianapolis
        </h2><br><br>
        <p>
          Red Bull KTM Factory Racing's Chase Sexton and Tom Vialle
          both earned podium results in tonight's 10th round of the
          2024 AMA Supercross Championship at the Indianapolis Triple
          Crown, with Sexton racing tothird overall in 450SX and Vialle.

        </p>
      </figcaption>


    </figure>
    <figure class="cella"><img src="AA_SC_ARG_.jpg">

      <figcaption>

        <h2> SOLID AND STEADY START FOR RED
          BULL KTM AT 2024 MXGP
          OPENER IN ARGENTINA
        </h2><br><br>
        <p>
          World Championship winners and MX2 class defending #1s, Red
          Bull KTM Factory Racing, launched the 2024 MXGP season with
          Andrea Adamo scoring a top five finish in the dark sandy
          volcanic soil of Neuquen for the Grand Prix of
        </p>

      </figcaption>

    </figure>
  </section>




  <div id="map"></div>

  <div id="videoyt"></div>







  <footer>
    <div class="recipiente">

      <div class="footer-stile">
        <h4>THE COMPANY</h4>
        <ul>

          <li><a href="#">KTM AG</a></li>
          <li><a href="#">Valori del marchio</a></li>
          <li><a href="#">Contatti</a></li>
          <li><a href="#">Careers</a></li>
          <li><a href="#">Diventa Concessionario</a></li>
          <li><a href="#">Investor Relations</a></li>
          <li><a href="#">Procurement</a></li>
          <li><a href="#">Press Center</a></li>
          <li><a href="#">Media Libray</a></li>
          <li><a href="#">KTM Motohall</a></li>
        </ul>
      </div>
      <div class="footer-stile">
        <h4>KTM World</h4>
        <ul>

          <li><a href="#">News</a></li>
          <li><a href="#">Racing</a></li>
          <li><a href="#">Stories</a></li>
          <li><a href="#">KTM Motohall</a></li>
          <li><a href="#">Ride KTM</a></li>
          <li><a href="#">KTM Adventure Rally</a></li>
          <li><a href="#">KYM Newsletter</a></li>
          <li><a href="#">Online Configurator</a></li>
          <li><a href="#">Book a Testride</a></li>
        </ul>
      </div>
      <div class="footer-stile">
        <h4>Service</h4>
        <ul>

          <li><a href="#">Garanzia</a></li>
          <li><a href="#">Sicurezza</a></li>
          <li><a href="#">Manuali</a></li>
          <li><a href="#">Manutensione</a></li>
          <li><a href="#">Manutensione e controllo Sicurezza</a></li>
          <li><a href="#">Numero verde Freeride E</a></li>
          <li><a href="#">Spare Parts Finder</a></li>
        </ul>
      </div>
      <div class="footer-stile">
        <h4>Legal</h4>
        <ul>

          <li><a href="#">Colophon</a></li>
          <li><a href="#">Privacy Pollicy</a></li>
          <li><a href="#">Note Legali</a></li>
        </ul>
      </div>
      <div class="footer-stile">
        <h4>CONNECT</h4>
        <div class="social-link">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
      </div>

    </div>




    <div class="barra_separatoria"></div>


    <button class="torna_su">Torna Su</button>



  </footer>




</body>


</html>