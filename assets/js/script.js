var map = L.map('map').setView([-7.472613, 112.667542], 13);


L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);


var marker = L.marker([-7.472613, 112.667542]).addTo(map);

var polygon = L.polygon([
    [-7.472, 112.667],
    [-7.572, 112.557],
    [-7.627, 112.447]
]).addTo(map);


var circle = L.circle([-7.472613, 112.667542], {
    color: 'red',
    fillColor: '#f03',
    fillOpacity: 0.5,
    radius: 500
}).addTo(map);