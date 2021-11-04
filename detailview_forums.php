<?php
	session_start();
	include("database/connection.php");
	include("database/functions.php");

	// Get form data
    $url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $forum_id = getIdFromUrl($url);

	$query = "SELECT * FROM Forums WHERE forum_id=$forum_id LIMIT 1;";
	$result = mysqli_query($con, $query);
	if (mysqli_num_rows($result) == 0) {
		header("Location: index.php");
		die;
	}
	$result = mysqli_fetch_assoc($result);

	$post_id = $result['post_id'];
	$title = $result['title'];

	$query = "SELECT * FROM Posts WHERE post_id=$post_id LIMIT 1;";
	$result = mysqli_query($con, $query);
	if (mysqli_num_rows($result) == 0) {
		header("Location: index.php");
		die;
	}
	$result = mysqli_fetch_assoc($result);

	$body = $result['body'];
	$publish_date = $result['publish_date'];
	$user_id = $result['user_id'];

	$query = "SELECT username FROM Users WHERE user_id=$user_id LIMIT 1";
	$result = mysqli_query($con, $query);
	if (mysqli_num_rows($result) == 0) {
		header("Location: index.php");
		die;
	}
	$result = mysqli_fetch_assoc($result);
	$author = $result['username'];
	$author = "<a href='detailview_player.php?id=$user_id'>".$author."</a>";
	// Construct comments
	$comments_html = "";
	// $query = "SELECT * FROM Comments WHERE forum_id=$forum_id";
	// $result = mysqli_query($con, $query);
	// while ($row = mysqli_fetch_array($result))
	// {
	// 	$title = $row['title'];
	// 	$forum_id = $row['forum_id'];
	// 	$publish_date = $row['publish_date'];

	// 	$loc_url = "detailview_forums.php?id=$forum_id";
	// 	$loc_on_click = "location.href='$loc_url';";
	// 	$loc_button = "<button class=\"btn btn-primary\" onclick=\"$loc_on_click\">View</button>";
	// 	$table_html.="<tr>
	// 					<th>$forum_id</th>
	// 					<td>$title</td>
	// 					<td>$publish_date</td>
	// 					<td>$loc_button</td>
	// 				</tr>";
	// }
?>

<!DOCTYPE html>
<html>

<head>
	<?php include_once('templates/head.php') ?>
	<?php $thispg = "forum" ?>
	<title>
		<?php echo $title ?>
	</title>
	<style>
		.forums {
			border: 1px solid #000;
			padding: 15px;
			background-color: #fff;
		}

		.titles {
			font-weight: bold;

		}

		.bodies {
			padding: 10px 15px 10px;
		}

		.comment {
			padding: 10px;
			border-radius: 5px;
			margin: 3px;
			margin-left: 15px;
			background-color: #E8E7E3;
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
				<div id="forum" class="forums">
					<div class="row">
						<div class="col-md-12 titles" id="forumtitle">
							<?php echo "$title" ?>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							Author: <?php echo $author; ?>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 bodies" id="forumbody">
							<?php echo "$body" ?>
						</div>
					</div>
					<div class="row">
						<div class="comment" id="forumcomment1">
							comment comment
						</div>
					</div>
					<div class="row">
						<div class="comment" id="forumcomment2">
							comment comment comment comment comment comment
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include_once('templates/footer.php') ?>
</body>

</html>