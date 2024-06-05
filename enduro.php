<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="enduro.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="enduro.js" defer></script>
    <title>Enduro</title>


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

    <div class="titolo">250 EXC-F</div>

    <figure class="figure-container">
        <img src="https://azwecdnepstoragewebsiteuploads.azureedge.net/PHO_BIKE_90_RE_MY24-KTM-250-EXC-F-90-RIGHT_%23SALL_%23AEPI_%23V1.png">
        <figcaption>
            <h2>2024 KTM 250 EXC-F</h2>
            <p>La KTM 250 EXC-F rappresenta da anni, a ragione, l'offerta di riferimento per chi non sa <br>
                rinunciare alle uscite nel fine settimana e per i campioni più esperti. La maneggevolezza <br>
                ai vertici della categoria, l'abbondanza di coppia ai bassi regimi e una guidabilità in <br>
                grado di infondere sicurezza consentono una guida veloce e oltre ogni limite. La versione <br>
                2024 è ancora migliore, con un telaio completamente nuovo, sospensione a cartuccia chiusa <br>
                e nuove sovrastrutture: gli unici limiti saranno quelli che deciderai di porre a te stesso.</p>
        </figcaption>
    </figure>

    <div class="titolo">350 EXC-F</div>


    <figure class="figure-container">
        <img src="https://azwecdnepstoragewebsiteuploads.azureedge.net/PHO_BIKE_90_RE_MY24-KTM-350-EXC-F-SixDays-90-Right_%23SALL_%23AEPI_%23V1.png">
        <figcaption>
            <h2>2024 KTM 350 EXC-F SIX DAYS</h2>
            <p>La prima KTM a portare il nome SIX DAYS è arrivata sulle scene nel 1996. Allora, non <br>
                c'era nessuno in grado di battere la KTM 350 EXC per la sua assoluta versatilità. Quasi <br>
                30 anni dopo, la KTM 350 EXC-F SIX DAYS 2024 raccoglie il testimone per continuare la <br>
                tradizione. Con un telaio completamente nuovo, sospensione a cartuccia chiusa, nuove <br>
                sovrastrutture e una rinnovata capacità di lottare per la vittoria, la KTM 350 EXC-F <br>
                SIX DAYS rimane il modello da battere.</p>
        </figcaption>
    </figure>

    <div class="titolo">500 EXC-F</div>


    <figure class="figure-container">
        <img src="https://azwecdnepstoragewebsiteuploads.azureedge.net/PHO_BIKE_90_RE_MY24-KTM-500-EXC-F-90-RIGHT_%23SALL_%23AEPI_%23V1.png">
        <figcaption>
            <h2>2024 KTM 500 EXC-F</h2>
            <p>Partire alla scoperta di una città abbandonata? Fatto. Avventurarsi in offroad in una <br>
                foresta stregata? Semplice. Farsi strada tra profonde dune di sabbia nel deserto? Pronta! <br>
                La KTM 500 EXC-F 2024 non si tira indietro di fronte a nulla. Con una potenza di oltre <br>
                64 CV e il telaio completamente nuovo con sospensione al top della categoria, questo <br>
                modello di grossa cilindrata è sorprendentemente maneggevole, rendendo la KTM 500 EXC-F <br>
                la miglior moto da mezzo litro nell'arsenale da enduro di chiunque. </p>
        </figcaption>
    </figure>

    <div id="videoyt"></div>

    <script>
     const videoyt = document.querySelector('#videoyt');

fetch('https://youtube.googleapis.com/youtube/v3/playlistItems?part=snippet&maxResults=1&playlistId=PL_v8Ikklpx7nJzxzUn1sJPzErhFt9nQh6&key=AIzaSyBbt4NRSm7x9H8LDbNh9gMMKQutxUft_ZE')
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