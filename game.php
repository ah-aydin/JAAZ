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
	include("database/connection.php");
	include("database/functions.php");

	$user_data = check_login($con);
?>

<!doctype html>
<html lang="en">
	<head>
		<?php include_once('templates/head.php')?>
    <?php $thispg="game"?>
		<title>
			Very cool game
		</title>
	</head>

	<body class="">
		<div class="wrapper ">
			<?php include_once('templates/sidebar.php')?>
			<div class="main-panel" style="height: 100vh;">
				<!-- Navbar -->
				<?php include_once('templates/navbar.php')?>
			</div>
		</div>
		<?php include_once('templates/footer.php')?>
	</body>

</html>