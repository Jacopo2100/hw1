document.addEventListener('DOMContentLoaded', function () {
    const slides = ['slide1', 'slide2', 'slide3'];
    let currentSlide = 0;

    function showSlide(index) {
        const slideshow = document.querySelector('#slideshow');
        for (let i = 0; i < slides.length; i++) {
            slideshow.classList.remove(slides[i]);
        }
        slideshow.classList.add(slides[index]);
    }

    function nextSlide() {
        currentSlide = (currentSlide + 1) % slides.length;
        showSlide(currentSlide);
    }

    showSlide(currentSlide);
    setInterval(nextSlide, 5000); // Cambia slide ogni 5 secondi

    // Aggiungi event listener per lo scorrimento delle immagini al clic
    document.querySelector('#slideshow').addEventListener('click', nextSlide);

    // Menu a scomparsa
    const menu = document.querySelector(".menu");
    menu.onclick = function () {
        const navBar = document.querySelector(".nav-bar");
        navBar.classList.toggle("active");
    }

    // Scroll verso l'alto
    const torna_su = document.querySelector(".torna_su");
    window.addEventListener("scroll", function () {
        if (document.documentElement.scrollTop > 600) {
            torna_su.style.display = "block";
        } else {
            torna_su.style.display = "none";
        }
    });

    torna_su.addEventListener("click", function () {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });

    // Google Maps
    window.onload = function () {
        let pos = { lat: 37.5104567, lng: 15.0733899 };
        let map = new google.maps.Map(document.getElementById('map'), { center: pos, zoom: 14 });
        let marker = new google.maps.Marker({
            position: { lat: 37.518227, lng: 15.096807 },
            map: map,
            title: 'negozio'
        });

        marker.addListener("click", function () {
            fetch('./mhw3.json')
                .then(response => response.json())
                .then(data => {
                    let title = data.title;
                    let content = data.content;
                    let image1 = data.image1;
                    let image2 = data.image2;

                    let contentString = `<div>
                        <h2>${title}</h2>
                        <h4>${content}</h4>
                        <img src="${image1}" alt="Immagine 1" style="max-width: 300px; max-height: auto;">
                        <img src="${image2}" alt="Immagine 2" style="max-width: 300px; max-height: auto;">
                    </div>`;

                    let infowindow = new google.maps.InfoWindow({
                        content: contentString
                    });

                    infowindow.open(map, marker);
                })
                .catch(error => {
                    console.error('Si è verificato un errore:', error);
                });
        });
    };

    

  
     // Funzione per ottenere la chiave API di YouTube
     const videoyt = document.querySelector('#videoyt')

     fetch('https://youtube.googleapis.com/youtube/v3/playlistItems?part=snippet&maxResults=1&playlistId=PL_v8Ikklpx7mftMjYA58kf0K9nPzrUHxb&key=AIzaSyBbt4NRSm7x9H8LDbNh9gMMKQutxUft_ZE')
     .then(res => res.json())
     .then(data => {
         
         data.items.forEach(el => {
             videoyt.innerHTML += `
                 <a target="_blank" href="https://www.youtube.com/watch?v=${el.snippet.resourceId.videoId}" class="yt-video">
                     <img src="${el.snippet.thumbnails.maxres.url}"  />
                     <h3>${el.snippet.title}</h3>
                 </a>`
         });
         
     
     })



    // Gestione del menu a tendina per i modelli
    $(document).ready(function () {
        function handleDropdown(event) {
            event.preventDefault();
            var $dropdown = $(this).closest('.models-dropdown');
            $dropdown.toggleClass('active');
            $dropdown.children('.dropdown__menu').slideToggle();
        }

        if ($(window).width() > 690) {
            $('.models-dropdown > a').click(handleDropdown);
        } else {
            $('.models-dropdown > a').on('touchstart', handleDropdown);
        }

        $(document).on('click touchstart', function (event) {
            if (!$(event.target).closest('.models-dropdown').length) {
                $('.models-dropdown').removeClass('active');
                $('.models-dropdown .dropdown__menu').slideUp();
            }
        });

        $('.models-dropdown .dropdown__menu').on('click touchstart', function (event) {
            event.stopPropagation();
        });

        $('.menu').click(function () {
            $('.nav-bar').toggleClass('nav-bar-open');
        });
    });
});
