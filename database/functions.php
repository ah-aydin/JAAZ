<?php

function check_login($con)
{

	if(isset($_SESSION['user_id']))
	{

		$id = $_SESSION['user_id'];
		$query = "SELECT * FROM Users WHERE user_id = '$id' LIMIT 1";

		$result = mysqli_query($con,$query);
		if($result && mysqli_num_rows($result) > 0)
		{

			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	}
    
    // Redirect to login
	header("Location: login.php?param=CIUCIU");
	die;
}

function check_guest()
{
	if (!isset($_SESSION['user_id']))
	{
		return;
	}


	header("Location: index.php");
	die;
}

function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}

function getIdFromUrl($url) {
	$url_components = parse_url($url);
    parse_str($url_components['query'], $params);
    $id = $params['id'];
	return $id;
}
