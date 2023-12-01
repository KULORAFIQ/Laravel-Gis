// public/js/gis.js

document.addEventListener('DOMContentLoaded', function () {
    // Initialize the map
    var map = L.map('map').setView([37.7749, -122.4194], 6); // Default center: San Francisco

    // Add a tile layer (you can use other providers as needed)
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);

    // Fetch dummy data from the API and add markers to the map
    fetch('/gis/dummy-data')
        .then(response => response.json())
        .then(data => {
            data.forEach(item => {
                L.marker([item.lat, item.lng]).addTo(map)
                    .bindPopup(item.name);
            });
        });
});
