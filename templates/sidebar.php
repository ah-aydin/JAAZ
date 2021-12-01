<?php
session_start();
$username = $user_data['username'];
?>

<div class="sidebar" data-color="white" data-active-color="danger">
	<a href="index.php">
		<div class="logo align-items-center justify-content-center">
			<div class="logo-image-big">
				<img src="./assets/img/logo.png">
			</div>
		</div>
	</a>
	<div class="sidebar-wrapper">
		<?php
			// Logged in views
			if (isset($_SESSION['user_id']))
			{
				echo "<ul class='nav'>
					<li class='nav-item' id='index_link'>
						<a href='index.php'>
							<p>Home</p>
						</a>
					</li>
					<li class='nav-item' id='map_link'>
						<a href='map.php'>
							<p>Map</p>
						</a>
					</li>
					<li class='nav-item' id='profile_link'>
						<a href='profile.php'>
							<p>Profile</p>
						</a>
					</li>
					<li class='nav-item' id='game_link'>
						<a href='game.php'>
							<p>Play game</p>
						</a>
					</li>
					<li class='nav-item' id='inputs_link'>
						<a href='inputs.php'>
							<p>Other inputs</p>
						</a>
					</li>
					<li class='nav-item' id='svforums_link'>
						<a href='searchview_forums.php'>
							<p>Search Forums</p>
						</a>
					</li>
					<li class='nav-item' id='svplayers_link'>
						<a href='searchview_players.php'>
							<p>Search Players</p>
						</a>
					</li>
					<li class='nav-item' id='svgameruns_link'>
						<a href='searchview_gameruns.php'>
							<p>Search Game Runs</p>
						</a>
					</li>
					<li class='nav-item' id='svlevels_link'>
						<a href='searchview_levels.php'>
							<p>Search Levels</p>
						</a>
					</li>
					<li class='nav-item' id='imprints_link'>
						<a href='imprints.php'>
							<p>Imprints</p>
						</a>
					</li>
					<li class='nav-item' id='logout_link'>
						<a href='logout.php'>
							<p>Logout <b>$username</b></p>
						</a>
					</li>
				</ul>";
			}
			// Guest views
			else
			{
				echo "<ul class='nav'>
					<li class='nav-item' id='map_link'>
						<a href='map.php'>
							<p>Map</p>
						</a>
					</li>
					<li class='nav-item' id='login_link'>
						<a href='login.php'>
							<p>Login</p>
						</a>
					</li>
					<li class='nav-item' id='signup_link'>
						<a href='signup.php'>
							<p>Sign Up</p>
						</a>
					</li>
					<li class='nav-item' id='adminsignup_link'>
						<a href='adminsignup.php'>
							<p>Admin Sign Up</p>
						</a>
					</li>
					<li class='nav-item' id='moderatorsignup_link'>
						<a href='moderatorsignup.php'>
							<p>Moderator Sign Up</p>
						</a>
					</li>
					<li class='nav-item' id='svforums_link'>
						<a href='searchview_forums.php'>
							<p>Search Forums</p>
						</a>
					</li>
					<li class='nav-item' id='svplayers_link'>
						<a href='searchview_players.php'>
							<p>Search Players</p>
						</a>
					</li>
					<li class='nav-item' id='svgameruns_link'>
						<a href='searchview_gameruns.php'>
							<p>Search Game Runs</p>
						</a>
					</li>
					<li class='nav-item' id='svlevels_link'>
						<a href='searchview_levels.php'>
							<p>Search Levels</p>
						</a>
					</li>
					<li class='nav-item' id='imprints_link'>
						<a href='imprints.php'>
							<p>Imprints</p>
						</a>
					</li>
				</ul>";
			}
		?>
	</div>
</div>