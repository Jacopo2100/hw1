<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="adventure.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="adventure.js" defer></script>
    <title>Adventure</title>


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

    <div class="titolo">Adventure 390</div>

    <figure class="figure-container">
        <img src="https://azwecdnepstoragewebsiteuploads.azureedge.net/PHO_BIKE_90_RE_MY24-KTM-390-Adventure-WHITE-90-RIGHTt-EU_%23SALL_%23AEPI_%23V1.png">
        <figcaption>
            <h2>2024 KTM Adventure 390</h2>
            <p>La KTM 390 ADVENTURE del 2024 unisce la versatilità off-road e l'affidabilità comprovata <br>
                con prestazioni reali nel mondo reale, rendendo l'avventura una possibilità quotidiana. <br>
                Alimentato da un collaudato motore da 373 cc che eroga 44 CV attraverso un cambio a 6 marce, <br>
                con un telaio leader nel suo segmento e un'autonomia del serbatoio di 400 km grazie a un serbatoio <br>
                da 14,5 litri, si lancia sulla strada con determinazione. Inoltre, le forcelle WP APEX regolabili <br>
                da 43 mm, una corsa di ruota di 170 mm, la modalità OFFROAD e l'opzione di ruote a raggi robusti <br>
                da 19/17" lo rendono perfettamente adatto anche per il trail. È possibile scaricare la scheda <br>
                tecnica completa in fondo alla pagina per ulteriori informazioni</p>
        </figcaption>
    </figure>

    <div class="titolo">Adventure 890</div>


    <figure class="figure-container">
        <img src="https://azwecdnepstoragewebsiteuploads.azureedge.net/PHO_BIKE_90_RE_KTM-890-ADV-orange_%23SALL_%23AEPI_%23V1.png">
        <figcaption>
            <h2>2024 KTM Adventure 890</h2>
            <p>In poche parole, la KTM 890 ADVENTURE è una moto da viaggio adventure che non teme rivali. <br>
                Aggiornata per il 2024, la KTM 890 ADVENTURE offre ovunque una guidabilità straordinaria, <br>
                dalle autostrade ai passaggi tecnici su ghiaia e sassi. Grazie alla sospensione regolabile <br>
                rivista, alla sella più comoda e alla maggiore protezione dal vento, la KTM 890 ADVENTURE <br>
                2024 è pronta per portarti alla scoperta degli angoli più remoti.</p>
        </figcaption>
    </figure>

    <div class="titolo">Adventure 1290 R</div>


    <figure class="figure-container">
        <img src="https://azwecdnepstoragewebsiteuploads.azureedge.net/PHO_BIKE_90_RE_1290-Super-Adventure-R-M23-EU-90-Degree-Right_%23SALL_%23AEPI_%23V1.png">
        <figcaption>
            <h2>2024 KTM Adventure 1290 R</h2>
            <p>Scegli un punto a caso su una cartina, metti uno spillo e scendi in strada. La KTM 1290 <br>
                SUPER ADVENTURE R è stata progettata per attraversare i terreni più selvaggi e impegnativi <br>
                con capacità ineguagliabili e prestazioni ai vertici della categoria. Non ci resta che dire: <br>
                territori inesplorati, state all’erta! La KTM 1290 SUPER ADVENTURE R è carica al massimo ed <br>
                è pronta per piantare la sua bandierina in qualunque luogo del pianeta.</p>
        </figcaption>
    </figure>

    <div id="videoyt"></div>

    <script>
     const videoyt = document.querySelector('#videoyt');

fetch('https://youtube.googleapis.com/youtube/v3/playlistItems?part=snippet&maxResults=1&playlistId=PL_v8Ikklpx7n4-8zefONJXbBB3bUAIZ0H&key=AIzaSyBbt4NRSm7x9H8LDbNh9gMMKQutxUft_ZE')
    .then(res => res.json())
    .then(data => {
        data.items.forEach(el => {
            videoyt.innerHTML += `
                <a target="_blank" href="https://www.youtube.com/watch?v=${el.snippet.resourceId.videoId}" class="yt-video">
                    <img src="${el.snippet.thumbnails.maxres.url}" />
                    <h3>${el.snippet.title}</h3>
                </a>`;
        });
    })
    .catch(error => {
        console.error('Si è verificato un errore durante il recupero dei dati da YouTube:', error);
    });

    </script>

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