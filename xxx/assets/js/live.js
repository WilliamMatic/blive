
let videosContainer = document.getElementById('autoplaylive')

// Remplacez 'YOUR_API_KEY' par votre propre clé API YouTube
const API_KEY = 'AIzaSyDO73Lk3wzr1YoERhqjIo86Nak-HxamULo';
const CHANNEL_ID = 'UCGr0_ltrKMMsUDWPvrXvtJw'; // Remplacez par l'ID de la chaîne YouTube

// Requête pour récupérer les vidéos en direct de la chaîne spécifique
fetch(`https://www.googleapis.com/youtube/v3/search?key=${API_KEY}&channelId=${CHANNEL_ID}&part=snippet&type=video&eventType=live`)
    .then(response => response.json())
    .then(data => {


        // Parcourir les résultats et afficher les vidéos en direct
        data.items.forEach(item => {

            console.log(item)

            const videoId = item.id.videoId;
            const videoTitle = item.snippet.title;
            const videoDescription = item.snippet.description;
            const videoThumbnail = item.snippet.thumbnails.default.url;

            videosContainer.innerHTML = `<div class='owl-items'><div class='banner-wrap justify-content-between align-items-center'><div class='left-wrap'><span class='rnd'>LIVE</span><h2>${videoTitle.substring(0, 18)+'...'}</h2><p>${videoDescription}</p><a href='#' class='btn btn-lg btn-video'><img src='assets/images/play.png' alt='icn'>Watch now</a></div><div class='right-wrap' style="background-image: url(assets/images/banner-4.jpg);"></div></div></div>`;
            
        });
    })
    .catch(error => {
        console.error('Une erreur s\'est produite :', error);
    });