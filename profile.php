<!--
=========================================================
* Paper Dashboard 2 - v2.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/paper-dashboard-2
* Copyright 2020 Creative Tim (https://www.creative-tim.com)

Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<?php 
session_start();
	include("database/connection.php");
	include("database/functions.php");

	$user_data = check_login($con);
?>

<!doctype html>
<html lang="en">
    <head>
		<?php include_once('templates/head.php')?>
    <?php $thispg="profile"?>
		<title>
			Profile
		</title>
	</head>

    <body class="">
        <div class="wrapper ">
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
                            <div class="navbar-brand" href="javascript:;">Profile</div>
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
                            <form action="">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group first">
                                            <label for="username">Username</label>
                                            <input class="form-control" type="text" name="username" placeholder="If your logged in you will see your username"
                                                id="username_input" readonly/>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group first">
                                            <label for="name">Name</label>
                                            <input class="form-control" type="text" name="name" placeholder="Your name goes here"
                                                autocapitalize="off" autocorrect="off" id="name_input" required />
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group first">
                                            <label for="XP">XP</label>
                                            <input class="form-control" type="number" name="XP" placeholder="Your XP goes here"
                                                id="XP_input" required readonly />
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group first">
                                            <label for="high_score">High score</label>
                                            <input class="form-control" type="number" name="high_score" placeholder="Youre high score goes here"
                                                id="high_score_input" required readonly />
                                        </div>
                                    </div>
                                </div>

                                <div class="row"><span style="opacity:0">a</span></div>
                                <div class="row"><span style="opacity:0">a</span></div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="oldpassword">Old password</label>
                                            <input class='form-control' type="password" name="oldpassword" placeholder="your passwords goes here"
                                                id="oldpassword_input" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="newpassword">New password</label>
                                            <input class='form-control' type="password" name="newpassword" placeholder="New password"
                                                id="newpassword_input" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="re_newpassword">Re-enter new password</label>
                                            <input class='form-control' type="password" name="re_newpassword" placeholder="Re-enter new password"
                                                id="re_newpassword_input" required />
                                        </div>
                                    </div>
                                </div>
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
        </div>
        <?php include_once('templates/footer.php')?>
    </body>

</html>