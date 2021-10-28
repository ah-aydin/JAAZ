<?php 
session_start();
	include("database/connection.php");
	include("database/functions.php");

	$user_data = check_login($con);
?>

<!DOCTYPE php>
<php>

    <head>
		<?php include_once('templates/head.php')?>
    <?php $thispg="inputs"?>
		<title>
			Inputs
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
                        <h3>
                            These are here because the professor wanted them. But be aware, you can see this page only when you are logged in
                            and if you try to access any of the signup views you will be redirected to the index page. If you want to test if these work
                            you have to be logged out. And go from the sidebar to that view.
                        </h3> 
                      <div class="row">
                          <div class="col-md-4">
                              <a href="signup.php">Sign up for Players</a>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-4">
                              <a href="adminsignup.php">Sign up for Admin</a>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-4">
                              <a href="moderatorsignup.php">Sign up for Moderator</a>
                          </div>
                      </div>
                        <div class="row">
                            <div class="col-md-4">
                                <a href="./leveleditor.php">Level Designer</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <a href="./createforum.php">Create a forum</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <a href="./createcomment.php">Create comment</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <a href="./addgamerun.php">Add a game run</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <a href="./preferences.php">Prefferences</a>
                            </div>
                        </div>
                    </div>
                    </div>
            </div>
        </div>
    </div>
        <?php include_once('templates/footer.php')?>
</body>

</php>