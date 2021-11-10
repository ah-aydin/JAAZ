<?php
	session_start();
	include("database/connection_read_only.php");
	include("database/functions.php");

	// Get game run data
    $url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $level_id = getIdFromUrl($url);

	$query = "SELECT * FROM Levels WHERE level_id=$level_id LIMIT 1";
	$result = mysqli_query($con, $query);
	if (mysqli_num_rows($result) == 0) {
		header("Location: index.php");
		die;
	}
	$result = mysqli_fetch_assoc($result);

	$name = $result['name'];
	$description = $result['description'];
	$entry_xp = $result['entry_xp'];
?>

<!DOCTYPE html>
<html>

<head>
	<?php include_once('templates/head.php') ?>
	<?php $thispg = $name ?>
	<title>
		<?php echo $name ?>
	</title>
	<style>
		.attr {
			font-size: 105%;
			font-weight: bold;
		}
	</style>
</head>

<body lang="en">
	<div class="wrapper">
		<?php include_once('templates/sidebar.php') ?>

		<div class="main-panel" style="height: 100vh;">
			<!-- Navbar -->
			<?php include_once('templates/navbar.php') ?>
			<!-- End Navbar -->
			<div class="content">
				<div class="row">
					<div class="card" style="width: 28rem;">
						<ul class="list-group list-group-flush">
							<li class="list-group-item">
								<span class="attr">Name: </span>
								<span id="username"><?php echo $name ?></span>
							</li>
							<li class="list-group-item">
								<span class="attr">Entry XP: </span>
								<span id="username"><?php echo $entry_xp ?></span>
							</li>
							<li class="list-group-item">
								<span class="attr">Description: </span>
								<span id="username"><?php echo $description ?></span>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	<?php include_once('templates/footer.php') ?>
</body>

</html>