<?php 
    session_start();
    include("database/connection.php");
    include("database/functions.php");

    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $name = $_POST['name'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $re_password = $_POST['re_password'];

        if ($password != $re_password)
        {
            $_SESSION['err'] = 'Da passwords do not match';
            header("Location: signup.php");
            die;
        }
        $_SESSION['err'] = '';
        // Create user
        $query = "INSERT INTO Users (name, username, password) VALUES ('$name','$username','$password')";
        // Make it type of player
        $query2 = "INSERT INTO Players (player_id, xp, high_score) VALUES ((
                    SELECT user_id
                    FROM Users
                    WHERE username = '$username'
                    LIMIT 1), 0, 0)";
        mysqli_query($con, $query);
        mysqli_query($con, $query2);

        header("Location: login.php");
        die;
    }
?>

<!DOCTYPE html>
<html>
    <head>
		<?php include_once('templates/head.php')?>
    <?php $thispg="signup"?>
		<title>
			Sign Up
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
                                    <div class="col-md-4">
                                        <div class="form-group first">
                                            <label for="name">Name</label>
                                            <input class="form-control" type="text" name="name" placeholder="Kevin Hamza Ojha"
                                                id="name_input" required/>
                                        </div>
                                    </div>
                                </div>
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
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group first">
                                            <label for="re_password">Re-enter Password</label>
                                            <input class="form-control" type="password" name="re_password" placeholder="Re-enter password"
                                                id="re_password_input" required />
                                        </div>
                                    </div>
                                </div>
                                <p>Allread have an account? <a href="login.php">Log in</a></p>
                                <div class="row">
                                    <div class="col-md-4">
                                        <input type="submit" class="btn btn-primary" value="Submit" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <?php 
                                            if(isset($_SESSION['err']))
                                            {
                                                echo $_SESSION['err'];
                                            }
                                        ?>
                                    </div>
                                </div>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php include_once('templates/footer.php')?>
		<script>
			document.getElementById("signup_link").classList.add("active");
		</script>
    </body>

</html>