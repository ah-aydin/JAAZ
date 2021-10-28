<?php 

    session_start();

	include("database/connection.php");
	include("database/functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$username = $_POST['username'];
		$password = $_POST['password'];


        //read from database
        $query = "SELECT * FROM Users WHERE username = '$username' limit 1";
        $result = mysqli_query($con, $query);

        if($result)
        {
            if($result && mysqli_num_rows($result) > 0)
            {

                $user_data = mysqli_fetch_assoc($result);
                
                if($user_data['password'] === $password)
                {

                    $_SESSION['user_id'] = $user_data['user_id'];
                    header("Location: index.php");
                    die;
                }
            }
        }
        
        echo "wrong username or password!";
	}

?>

<!DOCTYPE html>
<html>
    <head>
		<?php include_once('templates/head.php')?>
    <?php $thispg="login"?>
		<title>
			Login
		</title>
	</head>

    <body lang="en">
        <div class="wrapper">
			<?php include_once('templates/sidebar.php')?>

            <div class="main-panel" style="height: 100vh;">
                <!-- Navbar -->
				<?php include_once('templates/navbar.php')?>
                <!-- End Navbar -->
                <div class="content">
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-10">
                            <form action="" method="POST">
                                <div class="row">
                                    We created a default user of type player for you to test stuff. <br> Username: KebabDestroyer5000 <br> Password: plzgib10
                                </div><br>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group first">
                                            <label for="username">Username</label>
                                            <input class="form-control" type="text" name="username" placeholder="KebabDestroyer5000"
                                                id="username_input" required/>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group first">
                                            <label for="password">Password</label>
                                            <input class="form-control" type="password" name="password" placeholder="Password"
                                                id="password_input" required />
                                        </div>
                                    </div>
                                </div>
                                <p>Don't have an account? <a href="signup.php">Sign up</a></p>
                                <div class="row">
                                    <div class="col-md-4">
                                        <input type="submit" class="btn btn-primary" value="Submit" />
                                    </div>
                                </div>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php include_once('templates/footer.php')?>
    </body>

</html>