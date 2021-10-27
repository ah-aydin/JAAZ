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
		<title>
			Very cool game
		</title>
	</head>

	<body class="">
		<div class="wrapper ">
			<?php include_once('templates/sidebar.php')?>
			<div class="main-panel" style="height: 100vh;">
				<!-- Navbar -->
				<nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
					<div class="container-fluid">
						<div class="navbar-wrapper">
							<div class="navbar-toggle">
								<button type="button" class="navbar-toggler">
									<span class="navbar-toggler-bar bar1"></span>
									<span class="navbar-toggler-bar bar2"></span>
									<span class="navbar-toggler-bar bar3"></span>
								</button>
							</div>
							<div class="navbar-brand" href="javascript:;">Play Game</div>
						</div>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
							aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-bar navbar-kebab"></span>
							<span class="navbar-toggler-bar navbar-kebab"></span>
							<span class="navbar-toggler-bar navbar-kebab"></span>
						</button>
					</div>
				</nav>
			</div>
		</div>
		<?php include_once('templates/footer.php')?>
		<script>
			document.getElementById("game_link").classList.add("active");
		</script>
	</body>

</html>