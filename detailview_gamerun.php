<?php
	session_start();
	include("database/connection_read_only.php");
	include("database/functions.php");

	// Get game run data
    $url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $run_id = getIdFromUrl($url);

	$query = "SELECT * FROM GameRuns WHERE run_id=$run_id LIMIT 1";
	$result = mysqli_query($con, $query);
	if (mysqli_num_rows($result) == 0) {
		header("Location: index.php");
		die;
	}
	$result = mysqli_fetch_assoc($result);

	$game_result = $result['result'];
	$game_score = $result['score'];
	$player_id = $result['player_id'];

	// Get username of the player
	$query = "SELECT username FROM Users WHERE user_id=$player_id LIMIT 1";
	$result = mysqli_query($con, $query);
	if (mysqli_num_rows($result) == 0)
	{
		header("Location: index.php");
		die;
	}
	$result = mysqli_fetch_assoc($result);
	$player_username = $result['username'];

?>

<!DOCTYPE html>
<html>

<head>
	<?php include_once('templates/head.php') ?>
	<?php $thispg = "Game run" ?>
	<title>
		Game run <?php echo $run_id ?>
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
								<span class="attr">Runner: </span>
								<a id="username" href=<?php echo "detailview_player.php?id=$player_id" ?>><?php echo $player_username ?></a>
							</li>
							<li class="list-group-item">
								<span class="attr">Score: </span>
								<span id="username"><?php echo $game_score ?></span>
							</li>
							<li class="list-group-item">
								<span class="attr">Result: </span>
								<span id="username"><?php echo $game_result ?></span>
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