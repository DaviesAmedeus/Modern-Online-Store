// const products = document.getElementById("products");


import LatLon from 'https://cdn.jsdelivr.net/npm/geodesy@2/latlon-spherical.min.js';
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelector('#calc-dist').onclick = function() {
                calculateDistance();
            }
        });
        function calculateDistance() {
            const p1 = LatLon.parse(document.querySelector('#point1').value);
            const p2 = LatLon.parse(document.querySelector('#point2').value);
            const dist = parseFloat(p1.distanceTo(p2).toPrecision(4));
            document.querySelector('#result-distance').textContent = dist + ' metres';
        }

let latitudeArray = [];
let longitudeArray   = [];
let distances = [];
let latElements = document.querySelectorAll('.latitude');
let longElements = document.querySelectorAll('.longitude');


latElements.forEach(latElement => {
    latitudeArray.push(latElement.innerHTML);
  });

longElements.forEach(longElement => {
    longitudeArray.push(longElement.innerHTML);
});




