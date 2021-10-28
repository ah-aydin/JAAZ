<?php 
session_start();
	include("database/connection.php");
	include("database/functions.php");

	$user_data = check_login($con);
?>

<!DOCTYPE html>
<html>

    <head>
		<?php include_once('templates/head.php')?>
    <?php $thispg="inputs"?>
		<title>
			Preferences
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
                            <form action="">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group first">
                                        <label for="keybind">Keybind</label>
                                        <input class="form-control" type="keybind" name="time" placeholder="keybind"
                                            id="keybind_input" required/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group first">
                                        <label for="volume">Volume</label>
                                        <input class="form-control" type="range" min="0" max="100" name="volume" 
                                            id="volume_input" required/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4"><div class="form-group first">
                                <label for="theme">Theme</label><br/>
                                <form>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="theme" id="themelight" value="light"/>
                                    <label class="form-check-label p-0" for="themelight">
                                        Light
                                    </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="theme" id="themedark" value="dark"/>
                                    <label class="form-check-label p-0" for="themedark">
                                        Dark
                                    </label>
                                    </div>
                                    </form>
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
        <?php include_once('templates/footer.php')?>
    </body>

</html>