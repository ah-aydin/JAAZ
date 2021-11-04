<?php
	session_start();
	include("database/connection.php");
	include("database/functions.php");

	$table_html = "<table class='table table-striped'>
						<thead>
							<tr>
								<th scope='col'>#</th>
								<th scope='col'>Name</th>
								<th scope='col'>Username</th>
								<th scope='col'>XP</th>
								<th scope='col'>High Score</th>
							</tr>
						</thead>
						<tbody>";

	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		$search_param = $_POST['search_param'];
		$query = "select Users.user_id, Users.name, Users.username, Players.xp, Players.high_score 
						FROM Users INNER JOIN Players ON Users.user_id=Players.player_id 
						WHERE Users.username LIKE '%%' OR Users.name LIKE '%%';";

		$result = mysqli_query($con, $query);

		// Generate table html
		while ($row = mysqli_fetch_array($result)) {
			$player_id = $row['user_id'];
			$name = $row['name'];
			$username = $row['username'];
			$xp = $row['xp'];
			$high_score = $row['high_score'];
			$table_html .= "<tr><th>$player_id</th><td>$name</td><td>$username</td><td>$xp</td><td>$high_score</td></tr>";
		}
	}
	$table_html .= "</tbody></table>";
?>

<!DOCTYPE html>
<html>

<head>
	<?php include_once('templates/head.php') ?>
	<?php $thispg = "Players Search" ?>
	<title>
		Search Players
	</title>
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
					<div class="col-md-6">

					</div>
					<div class="col-md-6">
						<div class="pull-right">
							<form method="POST">
								<div class="input-group">
									<input type="text" default="" style="margin:10px 0 10px;" id="search_players" name="search_param" class="form-control" placeholder="Search" />
									<div class="input-group-append">
										<input type="Submit" class="btn btn-primary btn-outline-secondary" value="Search" />
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				<?php echo $table_html ?>
			</div>
		</div>
	</div>
	<?php include_once('templates/footer.php') ?>
	<script>
        if (document.getElementById("svplayers_link")) {
            document.getElementById("svplayers_link").classList.add("active");
        }
        document.getElementById("navbar_text").innerHTML = "<?php echo ucfirst($thispg);?>";
    </script>
</body>

</html>