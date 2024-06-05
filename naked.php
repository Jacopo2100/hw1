<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="duke.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="naked.js" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


    <title>Naked</title>


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

    <div class="titolo">Duke 125</div>

<figure class="figure-container">
    <img src="https://azwecdnepstoragewebsiteuploads.azureedge.net/PHO_BIKE_90_RE_MY24-KTM-125-DUKE-ORANGE-90-RIGHT-2_%23SALL_%23AEPI_%23V1.png">
    <figcaption>
        <h2>2024 KTM Duke 125</h2>
        <p>La KTM 125 DUKE avrà anche solo 125 cm³, ma non ci sono dubbi: questa moto è 125% DUKE! <br>
            Costruita con la stessa filosofia NAKED dei modelli di maggiore cilindrata,<br>
            la KTM 125 DUKE 2024 vanta un'attitudine tutta nuova e muscolosa, completa di un nuovo telaio,<br>
            un pacchetto di sospensioni, luci a LED, tecnologia di guida e aggressività da strada e da curva.</p>
    </figcaption>
</figure>

<div class="titolo">Duke 990</div>


<figure class="figure-container">
    <img src="https://azwecdnepstoragewebsiteuploads.azureedge.net/PHO_BIKE_90_RE_MY24-KTM-990-Duke-ORANGE-EU-GLOBAL-90Right-Studio_%23SALL_%23AEPI_%23V1.png">
    <figcaption>
        <h2>2024 KTM Duke 990</h2>
        <p>In grado di centrare qualsiasi obiettivo con una precisione devastante, la nuovissima KTM <br>
            990 DUKE porta in strada livelli di precisione senza eguali. Con 123 CV e 103 Nm racchiusi <br>
            in un telaio completamente nuovo, sospensione WP APEX regolabile e un'elettronica estremamente <br>
            ottimizzata, questa è - in poche parole - la moto NAKED di classe media più leggera, precisa <br>
            e orientata alle prestazioni tra quelle dotate di targhetta di identificazione DUKE.</p>
    </figcaption>
</figure>

<div class="titolo">Duke 1390</div>


<figure class="figure-container">
    <img src="https://azwecdnepstoragewebsiteuploads.azureedge.net/PHO_BIKE_90_RE_MY24-KTM-1390-SUPER-DUKE-R-BLACK-EU-90-Right-Studio_%23SALL_%23AEPI_%23V1.png">
    <figcaption>
        <h2>2024 KTM Duke 1390</h2>
        <p>Si dice che ai vertici ci si senta soli. Ma solo perché si è divorato il sentiero che porta alla vetta. <br>
            La KTM 1390 SUPER DUKE R guadagna il titolo di dominatrice indiscussa del gruppo delle NAKED e si fa notare, <br>
            sfrontata, a ogni colpo di acceleratore.</p>
    </figcaption>
</figure>


    <div id="videoyt"></div>

    <script>
     const videoyt = document.querySelector('#videoyt');

fetch('https://youtube.googleapis.com/youtube/v3/playlistItems?part=snippet&maxResults=1&playlistId=PL_v8Ikklpx7m74Od4-F7nRS28C-JKwyjp&key=AIzaSyBbt4NRSm7x9H8LDbNh9gMMKQutxUft_ZE')
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