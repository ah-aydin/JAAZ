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
		<?php include_once('templates/head.php')?>
    <?php $thispg="map"?>
		<title>
			Home
		</title>
	</head>
	
	<body class="">
		<div class="wrapper">
			<?php include_once('templates/sidebar.php')?>
			<div class="main-panel" style="height: 100vh;">
				<!-- Navbar -->
				<?php include_once('templates/navbar.php')?>
        <div class="content">
          <div class="row d-flex justify-content-center">
            <div class="col-md-10"> 
              <div class="row">
                  mamaliga
              </div>
            </div>
        </div>
      </div>
		</div>
		<?php include_once('templates/footer.php')?>
		<script>
			document.getElementById("navbar_text").innerHTML = "Home";
		</script>
        <script>
            var latitude, longitude;
            url = 'https://ipinfo.io/212.201.44.244\?token=61b42a66843223'
            fetch(url)
            .then(response => {
                if (response.ok) {
                    return response.json();
                }
            })
            .then(json => {
                var loc = json.loc.split(',');
                latitude = parseInt(loc[0]);
                longitute = parseInt(loc[1]);
                console.log(latitude);
                console.log(longitude);
            })
            .catch(error => {
                // handle the error
            });

        </script>
	</body>

</html>