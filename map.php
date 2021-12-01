<!--
=========================================================
* Paper Dashboard 2 - v2.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/paper-dashboard-2
* Copyright 2020 Creative Tim (https://www.creative-tim.com)

Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<?php
session_start();

?>

<!doctype html>
<html lang="en">

<head>
    <?php include_once('templates/head.php') ?>
    <?php $thispg = "map" ?>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <title>
        Home
    </title>
    <style>
        .content {
            position: relative;
            height: 100%;
            width: 100%;
        }

        #map {
            /* configure the size of the map */
            width: 90%;
            height: 90%;
            margin: auto;
        }
    </style>
</head>

<body class="">
    <div class="wrapper">
        <?php include_once('templates/sidebar.php') ?>
        <div class="main-panel" style="height: 100vh;">
            <!-- Navbar -->
            <?php include_once('templates/navbar.php') ?>
            <div class="content">
            <div id="map"></div>
            </div>
        </div>
        <?php include_once('templates/footer.php') ?>
        <script>
            document.getElementById("navbar_text").innerHTML = "Home";
        </script>
        <script>
            var ip;
            var latitude;
            var longitude;
            $.get('https://www.cloudflare.com/cdn-cgi/trace', function(data) {
                // Convert key-value pairs to JSON
                data = data.trim().split('\n').reduce(function(obj, pair) {
                    pair = pair.split('=');
                    return obj[pair[0]] = pair[1], obj;
                }, {});
                ip = data.ip;
            })
            .then(res => {
                url = `https://ipinfo.io/${ip}\?token=61b42a66843223`;
                fetch(url)
                    .then(response => {
                        if (response.ok) {
                            return response.json();
                        }
                    })
                    .then(json => {
                        var loc = json.loc.split(',');
                        latitude = parseFloat(loc[0]);
                        longitude = parseFloat(loc[1]);
                        // initialize Leaflet
                        var map = L.map('map').setView({lon: 0, lat: 0}, 2);
                        map.flyTo([latitude, longitude], 8);

                        // add the OpenStreetMap tiles
                        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                        maxZoom: 19,
                        attribution: '&copy; <a href="https://openstreetmap.org/copyright">OpenStreetMap contributors</a>'
                        }).addTo(map);

                        // show the scale bar on the lower left corner
                        L.control.scale({imperial: true, metric: true}).addTo(map);

                        // show a marker on the map
                        L.marker({lon: longitude, lat: latitude}).bindPopup(`${ip}`).addTo(map);
                    })
                    .catch(error => {
                        // handle the error
                    });
            });
        </script>
</body>

</html>