<?php
	session_start();
	include("database/connection_read_only.php");
	include("database/functions.php");

	// Get player data
    $url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $user_id = getIdFromUrl($url);

	$query = "SELECT Users.user_id, Users.name, Users.username, Players.xp, Players.high_score 
				FROM Users INNER JOIN Players 
				ON Users.user_id=Players.player_id WHERE Users.user_id=$user_id;
			";
	$result = mysqli_query($con, $query);
	if (mysqli_num_rows($result) == 0) {
		header("Location: index.php");
		die;
	}
	$result = mysqli_fetch_assoc($result);
	$viewusername = $result['username'];
	$viewname = $result['name'];
	$highscore = $result['high_score'];
	$xp = $result['xp'];

	// Get game runs
	$query = "SELECT * FROM GameRuns WHERE player_id=$user_id";
	$result = mysqli_query($con, $query);
	
	$gamerun_html = "<table class='table table-striped'>
						<thead>
							<tr>
								<th scope='col'>#</th>
								<th scope='col'>Result</th>
								<th scope='col'>Score</th>
								<th scope='col'>Time</th>
								<th scope='col'></th>
							</tr>
						</thead>
						<tbody>";

	while ($row = mysqli_fetch_array($result)) {
		$run_id = $row['run_id'];
		$game_result = $row['result'];
		$score = $row['score'];
		$time = $row['time'];

		$loc_url = "detailview_gamerun.php?id=$run_id";
		$loc_on_click = "location.href='$loc_url';";
		$loc_button = "<button class=\"btn btn-primary\" onclick=\"$loc_on_click\">View</button>";

		$gamerun_html .= "<tr>
						<th>$run_id</th>
						<td>$game_result</td>
						<td>$score</td>
						<td>$time</td>
						<td>$loc_button</td>
					</tr>";
		$gamerun_html .= "</tr>";
	}

	$gamerun_html .= "</tbody></table>";

	// Get forums
	$query = "SELECT Posts.post_id, Forums.title, Forums.forum_id, Posts.body FROM Posts INNER JOIN Forums ON Forums.post_id=Posts.post_id WHERE Posts.user_id=$user_id;";
	$result = mysqli_query($con, $query);

	$forums_html = "<table class='table table-striped'>
						<thead>
							<tr>
								<th scope='col'>#</th>
								<th scope='col'>Title</th>
								<th scope='col'>Date</th>
								<th scope='col'></th>
							</tr>
						</thead>
						<tbody>";

	while ($row = mysqli_fetch_array($result)) {
		$post_id = $row['post_id'];
		$f_id = $row['forum_id'];
		$title = $row['title'];
		$date = $row['date'];

		$loc_url = "detailview_forums.php?id=$f_id";
		$loc_on_click = "location.href='$loc_url';";
		$loc_button = "<button class=\"btn btn-primary\" onclick=\"$loc_on_click\">View</button>";

		$forums_html .= "<tr>
						<th>$post_id</th>
						<td>$title</td>
						<td>$date</td>
						<td>$loc_button</td>
					</tr>";
		$forums_html .= "</tr>";
	}

	$forums_html .= "</tbody></table>";

?>

<!DOCTYPE html>
<html>

<head>
	<?php include_once('templates/head.php') ?>
	<?php $thispg = "player" ?>
	<title>
		<?php echo $viewusername ?>
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
								<span id="username"><?php echo $viewname ?></span>
							</li>
							<li class="list-group-item">
								<span class="attr">Username: </span>
								<span id="username"><?php echo $viewusername ?></span>
							</li>
							<li class="list-group-item">
								<span class="attr">Highscore: </span>
								<span id="username"><?php echo $highscore ?></span>
							</li>
							<li class="list-group-item">
								<span class="attr">XP: </span>
								<span id="username"><?php echo $xp ?></span>
							</li>
						</ul>
					</div>
				</div>
				<div class="row" style="visibility: hidden;">a</div>
				<div class="row">
					<div class="col-md-6 attr">
						Gameruns
					</div>
				</div>
				<?php echo $gamerun_html ?>
				</table>
				<div class="row">
					<div class="col-md-6 attr">
						Forums:
					</div>
				</div>
				<?php echo $forums_html ?>
			</div>
		</div>
	</div>
	</div>
	<?php include_once('templates/footer.php') ?>
</body>

</html>