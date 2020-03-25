jQuery(document).ready( $ => {
    $('.site-header .main-menu .menu').slicknav({
        label: '',
        appendTo: '.site-header'
    });

// Leaflet Map //

const   lat = document.queryselector('#lat').value,
        lng = document.queryselector('#lng').value,
        direccion = document.queryselector('#direccion').value;

if (lat && lng & direccion) {
    var map = L.map('mapa').setView([lat, lng] 13);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

L.marker([51.5, -0.09]).addTo(map)
    .bindPopup(direccion)
    .openPopup();
    }

});

