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
<!doctype html>
<html lang="en">

	<head>
		<?php include_once('templates/head.php')?>
    <?php $thispg="imprints"?>
		<title>
			Imprints
		</title>
	</head>

	<body class="">
		<div class="wrapper ">
			<?php include_once('templates/sidebar.php')?>

			<div class="main-panel" style="height: 100vh;">
				<!-- Navbar -->
				<?php include_once('templates/navbar.php')?>
				<!-- End Navbar -->
				<div class="content">
					<h1>Disclamer</h1>
					<p style="font-size: 18px">
						This website is student lab work and does not necessarily reflect Jacobs University Bremen opinions. Jacobs University Bremen does not endorse this site, nor is it checked by Jacobs University
						Bremen regularly, nor is it part of the official Jacobs University Bremen web presence.
						For each external link existing on this website, we initially have checked that the target page
						does not contain contents which is illegal wrt. German jurisdiction. However, as we have no influence on such contents, this may change without our notice. Therefore we deny any responsibility for the websites referenced through our external links from here.
						No information conflicting with GDPR is stored in the server.</p>
					<div>
						<h3>Contact email:</h3> <p>a.aydin at jacobs-university.de</p>
					</div>
				</div>
			</div>
		</div>
		<?php include_once('templates/footer.php')?>
		<script>
			document.getElementById("imprints_link").classList.add("active");
		</script>
	</body>

</html>