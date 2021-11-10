<?php
	session_start();
	include("database/connection_read_only.php");
	include("database/functions.php");

	$table_html = "<table class='table table-striped'>
						<thead>
							<tr>
								<th scope='col'>#</th>
								<th scope='col'>Result</th>
								<th scope='col'>Score</th>
								<th scope='col'>Time</th>
								<th scope='col'>Player Username</th>
								<th scope='col'></th>
							</tr>
						</thead>
						<tbody>";
	
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		$search_param = $_POST['search_param'];
		$query = "SELECT GameRuns.run_id, GameRuns.result, GameRuns.score, GameRuns.time, Users.username, Users.user_id 
                    FROM Users INNER JOIN GameRuns ON Users.user_id=GameRuns.player_id WHERE
                    GameRuns.result LIKE '%$search_param%' OR Users.username LIKE '%$search_param%'; ";

		$result = mysqli_query($con, $query);

		// Generate table html
		while ($row = mysqli_fetch_array($result)) {
            $run_id = $row['run_id'];
            $table_html .= "<tr><th>$run_id</th>";

			$loc_url = "detailview_gamerun.php?id=$run_id";
			$loc_on_click = "location.href='$loc_url';";
			$loc_button = "<button class=\"btn btn-primary\" onclick=\"$loc_on_click\">View</button>";
            foreach($row as $column => $value) {
                if ($column === 'result' || $column === 'score' || $column === 'time' || $column === 'username')
                {
                    $table_html .= "<td>$value</td>";
                }
            }
			$table_html .= "<td>$loc_button</td>";
            $table_html .= "</tr>";
		}
	}
	else
	{
		$query = "SELECT GameRuns.run_id, GameRuns.result, GameRuns.score, GameRuns.time, Users.username, Users.user_id 
                    FROM Users INNER JOIN GameRuns ON Users.user_id=GameRuns.player_id;";

		$result = mysqli_query($con, $query);

		// Generate table html
		while ($row = mysqli_fetch_array($result)) {
            $run_id = $row['run_id'];
            $table_html .= "<tr><th>$run_id</th>";
			
			$loc_url = "detailview_gamerun.php?id=$run_id";
			$loc_on_click = "location.href='$loc_url';";
			$loc_button = "<button class=\"btn btn-primary\" onclick=\"$loc_on_click\">View</button>";
            foreach($row as $column => $value) {
                if ($column === 'result' || $column === 'score' || $column === 'time' || $column === 'username')
                {
                    $table_html .= "<td>$value</td>";
                }
            }
			$table_html .= "<td>$loc_button</td>";
            $table_html .= "</tr>";
		}
	}
	$table_html .= "</tbody></table>";
?>

<!DOCTYPE html>
<html>

<head>
	<?php include_once('templates/head.php') ?>
	<?php $thispg = "Game Runs Search" ?>
	<title>
		Search Game Runs
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
        if (document.getElementById("svgameruns_link")) {
            document.getElementById("svgameruns_link").classList.add("active");
        }
        document.getElementById("navbar_text").innerHTML = "<?php echo ucfirst($thispg);?>";
    </script>
</body>

</html>