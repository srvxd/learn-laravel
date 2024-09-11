<!DOCTYPE html>
<html>
<head>
    <title>Dynamic Google Map</title>
    <style>
        .map-container {
            width: 100%;
            max-width: 600px;
            height: 450px;
        }
    </style>
</head>
<body>
    <h1>Dynamic Google Map</h1>
    <div class="map-container">
        <iframe
            id="mapFrame"
            src="https://www.google.com/maps?q=37.7749,-122.4194&output=embed"
            width="100%"
            height="100%"
            style="border:0;"
            allowfullscreen=""
            loading="lazy"
        ></iframe>
    </div>
    <br>
    <button onclick="changeMapLocation(34.0522, -118.2437)">Los Angeles</button>
    <button onclick="changeMapLocation(40.7128, -74.0060)">New York</button>
    <button onclick="changeMapLocation(51.5074, -0.1278)">London</button>

    <script>
        function changeMapLocation(lat, lng) {
            var mapFrame = document.getElementById('mapFrame');
            var newSrc = `https://www.google.com/maps?q=${lat},${lng}&output=embed`;
            mapFrame.src = newSrc;
        }
    </script>
</body>
</html>
