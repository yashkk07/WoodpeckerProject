<?php
$cookie_name = "alarmTime";
$cookie_value = "IDK WHEN";
setcookie($cookie_name, $cookie_value, time() + (86400 * 3), "/"); // 86400 = 1 day
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="arriveoclock,travel,alarm,tracker">
    <meta name="description" content="Your Go-To App for Stress Free Travel Arrivals">
    <title>Arrive O'Clock - Your Ultimate Travel Companion</title>
    <link rel="icon" type="image/x-icon" href="whitelogo.png">
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <style>
      * {
          box-sizing: border-box;
          margin: 0;
          padding: 0;
      }
      body {
          font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
          margin: 0 0 20px 0;
          padding: 0px;
          display: flex;
          flex-direction: column;
          align-items: center;
          background-color: #d5eeff;
          background-image: radial-gradient(circle, #00000069 1px, transparent 1px);
          background-size: 20px 20px;
          color: #333;
          overflow: hidden;
      }
      header {
          background-color: #007cb9;
          display: flex;
          justify-content: space-between;
          align-items: center;
          padding: 10px;
          width: 100%;
      }
      .logo img {
          height: 40px;
      }
      .navigation h1 {
          color: #fff;
          text-align: center;
          margin: 0;
      }
      h1 {
          margin-bottom: 20px;
          color:  #183661;
      }
      form {
          display: flex;
          flex-direction: column;
          width: 100%;
          max-width: 400px;
          background: #fff;
          padding: 20px;
          border-radius: 10px;
          box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      }
      label {
          margin-top: 10px;
          font-weight: bold;
      }
      input[type="text"], input[type="range"] {
          padding: 10px;
          margin-top: 5px;
          border: 1px solid #ddd;
          border-radius: 5px;
      }
      input[type="text"]:hover, input[type="range"]:hover {
        border-color: #999;
      }
      input[type="range"] {
          cursor: pointer;
      }
      .range-output {
          text-align: center;
          margin-top: 10px;
          font-weight: bold;
      }
      button {
          margin-top: 20px;
          padding: 10px;
          background-color: #007cb9;
          color: white;
          border: none;
          border-radius: 5px;
          cursor: pointer;
          transition: background-color 0.3s;
      }
      button:hover {
          background-color:  #183661;
      }
      /* Style for select dropdown */
      select {
          width: 100%;
          padding: 10px;
          border: 1px solid #ccc;
          border-radius: 5px;
          background-color: #fff;
          cursor: pointer;
          outline: none;
      }

      /* Style for dropdown options */
      select option {
          background-color: #fff;
          color: #333;
      }

      /* Style for dropdown when hovered */
      select:hover {
          border-color: #999;
      }

      /* Style for dropdown when focused */
      select:focus {
          border-color: #666;
          box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
      }
      #map {
          width: 98%;
          height: 400px;
          border-radius: 10px;
          overflow: hidden;
      }
      .leaflet-control {
          margin-top: 5px;
      }
      @media (max-width: 600px) { 
          body {
              padding: 10px;
          }
          form {
              width: 100%;
              padding: 15px;
          }
          h1 {
              font-size: 1.5em;
          }
          button {
              padding: 10px 5px;
          }
          #map{
            width: 100%;
          }
          .modal-content {
          width: 85vw;
          }
      }
      .button-container {
          display: flex;
          justify-content: space-between;
      }
      .button-container button {
          flex: 1;
          margin-right: 5px;
      }
      .modal {
          display: none;
          position: fixed;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          background-color: rgba(0, 0, 0, 0.5);
          z-index: 9999;
          justify-content: center;
          align-items: center;
      }
      .modal-content {
          width: 35vw;
          height: auto;
          background-color: #183661;
          padding: 20px;
          border-radius: 10px;
          text-align: center;
          position: relative;
      }
      .modal-content p {
          font-size: 18px;
          margin-bottom: 20px;
      }
      .modal-content button {
          margin-top: 10px;
      }
      .close {
        position: absolute;
        top: 10px;
        right: 10px;
        background: none;
        border: none;
        font-size: 20px;
        cursor: pointer;
        color: white; /* White color for close button */
        }

        .icon-container {
        margin-bottom: 20px;
        }

        .alarm-text {
        font-size: 24px;
        color: white; /* White color for alarm text */
        margin-bottom: 20px;
        }

        .stop-alarm-btn {
        background-color: white; /* White background for stop alarm button */
        color: #007cb9; /* Blue color for stop alarm button text */
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        }

        .stop-alarm-btn:hover {
        background-color: #f0f0f0; /* Light gray background on hover */
        }
      .loader {
          text-align: center;
          display: flex;
          align-items: center;
          justify-content: center;
          height: 100vh;
          width: 100vw;
          position: absolute;
          top: 0;
          left: 0;
          background-color: rgb(213, 238, 255);
          background-image: radial-gradient(circle, #00000069 1px, transparent 1px);
          background-size: 20px 20px;
          z-index: 9999;
          
      }
      .loader .logo {
          width: 100px;
          height: 100px;
          margin-right: 20px;
      }
      .loader .logo img {
          width: 100%;
          height: 100%;
      }
      .text-animation {
          animation: slideIn 2s ease-out forwards;
          opacity: 0;
      }
      @keyframes slideIn {
          0% {
              transform: translateX(50px);
              opacity: 0;
          }
          100% {
              transform: translateX(0);
              opacity: 1;
          }
      }
      .hidden {
          display: none;
      }
      ::-webkit-scrollbar{
                width: 0px;
            }
        .gg-alarm {
            background:
            linear-gradient(to left, white 8px, transparent 0) no-repeat 13px 14px/6px 2px,
            linear-gradient(to left, white 7px, transparent 0) no-repeat 13px 6px/2px 10px;
            box-sizing: border-box;
            width: 32px;
            height: 32px;
            border-radius: 100%;
            border: 3px solid white;
            transform: scale(var(--ggs,1));
            box-shadow: 0 0 0 1px #007cb9;
            display: flex;
            }

            .gg-alarm::after,
            .gg-alarm::before {
            content: "";
            display: block;
            box-sizing: border-box;
            position: absolute;
            width: 6px;
            height: 2px;
            background: white;
            top: -4px;
            }

            .gg-alarm::before {
            left: -5px;
            transform: rotate(-42deg);
            }

            .gg-alarm::after {
            transform: rotate(42deg);
            right: -5px;
            }
  </style>
  <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
  <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />
</head>
<body>
<?php
if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
  echo "Cookie '" . $cookie_name . "' is set!<br>";
  echo "Value is: " . $_COOKIE[$cookie_name];
}
?>
  <div class="loader">
    <div class="logo">
        <img src="arriveoclocklogo1.png" alt="Company Logo">
    </div>
    <h1 class="text-animation">Arrive O'Clock</h1>
  </div>
  <div class="content hidden"></div>
  <header>
    <div class="logo">
        <img src="whitelogo.png" alt="Company Logo" />
    </div>
    <div class="navigation">
        <h1>Arrive O'Clock</h1>
    </div>
</header>
<div id="modal" class="modal">
  <div class="modal-content">
      <button class="close" onclick="stopAlarm()">&times;</button>
      <div class="icon-container">
        <center><i class="gg-alarm"></i></center>
      </div>
      <p class="alarm-text">Alarm!</p>
      <audio id="alarmSound" loop>
          <source src="alarm.mp3" type="audio/mpeg">
          Your browser does not support the audio element.
      </audio>
      <button onclick="stopAlarm()">Stop Alarm</button>
  </div>
</div><br>

<span id="distance"></span>
  <span id="duration"></span>
  <span id="alarmafter"></span>
  
  <form id="travelForm">
    <label for="start">Starting Point:</label>
    <input type="text" id="start" name="start" required disabled>
    <label for="destination">Destination:</label>
    <input type="text" id="destination" name="destination" required>
    <label for="modeOfTransport">Mode of transport:</label>
    <select id="modeOfTransport" name="modeOfTransport">
        <option value="DRIVING" selected>Road</option>
        <!-----<option value="TRANSIT">Train</option>--->
    </select>
    <label for="timeRange">Ring before:</label>
    <input type="range" id="timeRange" name="timeRange" min="1" max="60" step="1" value="5" oninput="updateRangeOutput(this.value)">
    <div class="range-output">
        <span id="rangeValue">5</span> minutes
    </div>
    <div class="button-container">
        <button type="submit">Submit</button>
        <button type="button" onclick="resetForm()">Reset</button>
    </div>
  </form>

  <br>

  <div id="map" style="border: 4px solid rgb(0, 124, 185); box-shadow: 0px 0px 4px 8px rgb(0, 124, 185, 0.1);"></div>

    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            setTimeout(() => {
                document.querySelector('.loader').classList.add('hidden');
                document.querySelector('.content').classList.remove('hidden');
                document.body.style.overflow = "visible";
                initMap();
            }, 2500);
        });

    function resetForm() {
      location.reload();
    }

      let map, startMarker, endMarker, routeLayer, directionsRenderer, directionsService;
  
      // Define custom icons
      const greenIcon = L.icon({
          iconUrl: 'https://maps.google.com/mapfiles/ms/icons/green-dot.png',
          iconSize: [32, 32],
          iconAnchor: [16, 32]
      });
  
      const redIcon = L.icon({
          iconUrl: 'https://maps.google.com/mapfiles/ms/icons/red-dot.png',
          iconSize: [32, 32],
          iconAnchor: [16, 32]
      });
  
      // Initialize the map and markers
      function initMap() {
          map = L.map('map').setView([20.5937, 78.9629], 5);
  
          L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
              maxZoom: 18,
          }).addTo(map);
  
          startMarker = L.marker([0, 0], { icon: greenIcon }).addTo(map);
          endMarker = L.marker([0, 0], { icon: redIcon }).addTo(map);
          routeLayer = L.layerGroup().addTo(map);
  
          // Initialize Google Maps services
          directionsRenderer = new google.maps.DirectionsRenderer();
          directionsService = new google.maps.DirectionsService();
          distanceMatrixService = new google.maps.DistanceMatrixService();
          
          getLocation();
          initAutocomplete();
      }
  
      // Get the user's current location
      function getLocation() {
            if (navigator.geolocation) {
                const options = {
                    enableHighAccuracy: true,
                    timeout: 5000, // Maximum time (in milliseconds) allowed for getting the location
                    maximumAge: 0 // Disable caching of the location
                };
                
                navigator.geolocation.getCurrentPosition(showPosition, showError, options);
            } else {
                document.getElementById('start').value = "Geolocation is not supported by this browser.";
            }
        }
  
      function showPosition(position) {
          const lat = position.coords.latitude;
          const lon = position.coords.longitude;
          document.getElementById('start').value = `${lat}, ${lon}`;
          map.setView([lat, lon], 15);
          startMarker.setLatLng([lat, lon]);
  
          const geocoder = new google.maps.Geocoder();
          geocoder.geocode({ 'location': { lat: lat, lng: lon } }, (results, status) => {
              if (status === 'OK' && results[0]) {
                  document.getElementById('start').value = results[0].formatted_address;
              } else {
                  console.log('Geocoder failed due to: ' + status);
              }
          });
      }
  
      function showError(error) {
          const startInput = document.getElementById('start');
          switch (error.code) {
              case error.PERMISSION_DENIED:
                  startInput.value = "User denied the request for Geolocation.";
                  break;
              case error.POSITION_UNAVAILABLE:
                  startInput.value = "Location information is unavailable.";
                  break;
              case error.TIMEOUT:
                  startInput.value = "The request to get user location timed out.";
                  break;
              case error.UNKNOWN_ERROR:
                  startInput.value = "An unknown error occurred.";
                  break;
          }
      }
  
      // Initialize the destination autocomplete
      function initAutocomplete() {
          const destinationInput = document.getElementById('destination');
          const autocomplete = new google.maps.places.Autocomplete(destinationInput, {
              componentRestrictions: { country: 'in' },
              fields: ['geometry'],
              types: ['address'],
          });
          autocomplete.addListener('place_changed', () => {
              const place = autocomplete.getPlace();
              if (place.geometry) {
                  const lat = place.geometry.location.lat();
                  const lon = place.geometry.location.lng();
                  endMarker.setLatLng([lat, lon]);
                  map.setView([lat, lon], 15);
              }
          });
      }
      
      
      // Calculate and display the route
      var alarmtime, buffertime;
      function calculateAndDisplayRoute(event) {
          event.preventDefault();
  
          const start = startMarker.getLatLng();
          const end = endMarker.getLatLng();
  
          directionsService.route({
                  origin: { lat: start.lat, lng: start.lng },
                  destination: { lat: end.lat, lng: end.lng },
                  travelMode: google.maps.TravelMode.DRIVING,
                  drivingOptions: {
                    departureTime: new Date(),
                    trafficModel: 'optimistic'
                  }
              })
              .then((response) => {
                  directionsRenderer.setDirections(response);
                  displayRouteOnLeaflet(response.routes[0]);
  
                  // Get distance and duration using Distance Matrix Service
                  const origin = new google.maps.LatLng(start.lat, start.lng);
                  const destination = new google.maps.LatLng(end.lat, end.lng);
  
                  distanceMatrixService.getDistanceMatrix({
                      origins: [origin],
                      destinations: [destination],
                      travelMode: google.maps.TravelMode.DRIVING,
                      drivingOptions: {
                        departureTime: new Date(),
                        trafficModel: google.maps.TrafficModel.OPTIMISTIC
                    }
                  }, (response, status) => {
                      if (status === 'OK') {
                          const distance = response.rows[0].elements[0].distance.text;
                          const duration = response.rows[0].elements[0].duration.value;
                          const timeRange = document.getElementById('timeRange').value;
                          document.getElementById('distance').textContent = `Distance: ${distance}`;
                          document.getElementById('duration').textContent = `Duration: ${Math.round(duration / 60)} minutes`;
                          if (Math.round(duration / 60)-timeRange >= 1){
                          buffertime=(Math.round(duration / 60)-timeRange)
                          alarmtime=(new Date(new Date().getTime() + buffertime * 60000)).toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
                          document.getElementById('alarmafter').textContent = `Alarm after: ${Math.round(duration / 60)-(timeRange)} minutes at: ${alarmtime}`;
                          setAlarm();
                          }else{
                              alert("alarm not possible");
                              resetForm()
                          }
                      } else {
                          window.alert('Distance Matrix request failed due to ' + status);
                      }
                  });
              })
              .catch((e) => window.alert("Directions request failed due to " + e));
      }

      function setAlarm() {
          setTimeout(function() {
              showModal();
              playAlarm();
          }, buffertime*1000); // seconds for testing, adjust as needed
      }

      function showModal() {
          var modal = document.getElementById("modal");
          modal.style.display = "flex";
      }

      function playAlarm() {
          var alarmSound = document.getElementById("alarmSound");
          alarmSound.volume = 1.0; // Set volume to full
          alarmSound.play();
      }

      function stopAlarm() {
          var alarmSound = document.getElementById("alarmSound");
          alarmSound.pause();
          var modal = document.getElementById("modal");
          modal.style.display = "none";
      }

      function displayRouteOnLeaflet(route) {
          if (routeLayer) {
              routeLayer.clearLayers();
          }
  
          const coords = [];
          route.legs.forEach(leg => {
              leg.steps.forEach(step => {
                  step.path.forEach(latlng => {
                      coords.push([latlng.lat(), latlng.lng()]);
                  });
              });
          });
  
          // Add polyline to the route layer
          const polyline = L.polyline(coords, {
            color: 'blue',
            opacity: 0.7,
            weight: 5
          }).addTo(routeLayer);

          const polylineBounds = polyline.getBounds();
          const startBounds = startMarker.getLatLng();
          const endBounds = endMarker.getLatLng();
  
          // Extend bounds to include start and end markers
          const padding = 0.0060;
          const extraPaddingBounds = L.latLngBounds(
              [
                  [polylineBounds.getNorth() + padding, polylineBounds.getWest() - padding],
                  [polylineBounds.getSouth() - padding, polylineBounds.getEast() + padding]
              ]
          );
          map.fitBounds(extraPaddingBounds);
      }
  
      document.getElementById('travelForm').addEventListener('submit', calculateAndDisplayRoute);
  
      window.onload = () => {
          initMap();
      };
  
      function updateRangeOutput(value) {
          document.getElementById('rangeValue').textContent = value;
      }
  </script>
  
        
    
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg&libraries=places&callback=initAutocomplete" async defer></script>
</body>
</html>
