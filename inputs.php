<!DOCTYPE php>
<php>

<head>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="./assets/img/logo.png">
    <title>Create account</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="./assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="./assets/demo/demo.css" rel="stylesheet" />
</head>

<body lang="en">
    <div class="wrapper">
        <div class="sidebar" data-color="white" data-active-color="danger">
			<a href="index.php">
				<div class="logo align-items-center justify-content-center">
					<div class="logo-image-big">
						<img src="./assets/img/logo.png">
					</div>
				</div>
			</a>
			<div class="sidebar-wrapper">
				<ul class="nav">
					<li class="nav-item">
						<a href="index.php">
							<p>Home</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="profile.php">
							<p>Profile</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="game.php">
							<p>Play game</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="login.php">
							<p>Login</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="signup.php">
							<p>Sign Up</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="imprints.php">
							<p>Imprints</p>
						</a>
					</li>
					<li class="nav-item active">
						<a href="inputs.php">
							<p>Inputs Main Page</p>
						</a>
					</li>
				</ul>
			</div>
		</div>
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
                              <a href="./signup.php">Sign up for Players</a>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-4">
                              <a href="./adminsignup.php">Sign up for Admin</a>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-4">
                              <a href="./moderatorsignup.php">Sign up for Moderator</a>
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
    <!--   Core JS Files   -->
    <script src="./assets/js/core/jquery.min.js"></script>
    <script src="./assets/js/core/popper.min.js"></script>
    <script src="./assets/js/core/bootstrap.min.js"></script>
    <script src="./assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chart JS -->
    <script src="./assets/js/plugins/chartjs.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="./assets/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="./assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script>
</body>

</php>