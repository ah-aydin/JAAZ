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
            echo "Found user";
			return $user_data;
		}
        else echo "No user";
	}
    
    //redirect to login
	header("Location: login.php");
	die;
}


function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}