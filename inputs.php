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
            <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-toggle">
                            <button type="button" class="navbar-toggler">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </button>
                        </div>
                        <div class="navbar-brand" href="javascript:;">Signup</div>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                        aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                    </button>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-10">
                      <div class="row">
                          <div class="col-md-4">
                              <a href="signup_pages/signup.php">Sign up for Players</a>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-4">
                              <a href="signup_pages/adminsignup.php">Sign up for Admin</a>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-4">
                              <a href="signup_pages/moderatorsignup.php">Sign up for Moderator</a>
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
                                <a href="./forum.php">Forums view list (create comments)</a>
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