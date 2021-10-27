<!DOCTYPE html>
<html>

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
    <style>
      .forums{
        background-color:#F4ECD3;
      }
      .forumtitle{
        font-size: 120%;
        font-weight: bold;
      }
      .inv{
        visibility:hidden;
      }
      .comment{
        background-color: #F4DDCE;
      }
    </style>
</head>

<body lang="en">
    <div class="wrapper">
        <div class="sidebar" data-color="white" data-active-color="danger">
			<a href="index.html">
				<div class="logo align-items-center justify-content-center">
					<div class="logo-image-big">
						<img src="./assets/img/logo.png">
					</div>
				</div>
			</a>
			<div class="sidebar-wrapper">
				<ul class="nav">
					<li class="nav-item">
						<a href="index.html">
							<p>Home</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="profile.html">
							<p>Profile</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="game.html">
							<p>Play game</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="login.html">
							<p>Login</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="signup.html">
							<p>Sign Up</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="imprints.html">
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
                    <div class="col-md-8 forums">
                      <div class="col-md-12" id="forum1OP">
                        USER1
                      </div>
                      <div class="col-md-12 forumtitle">
                        <div id="forum1title">
                          Add Dark Mode
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div id="forum1content forumconent">
                          PLease add dark mode. It will make our lives a lot easier and I think many of us will agree. I have eye issues and the bright white nature of your otherwise beautiful website always has me wearing shades indoors. I hope you understand my problem and add dark mode.
                        </div>
                      </div>
                      <div class="row col-md-12 inv">a</div>
                      <div class="col-md-12 comment">
                        <div class="col-md-12" id="forum1comment1OP">
                          USER3
                        </div>
                        <div id="forum1comment1">
                          Yes, please do!!
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group first">
                          <input class="form-control" type="text" name="comment" placeholder="Write a comment"
                              id="forum1comment_input" required/>
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

</html>