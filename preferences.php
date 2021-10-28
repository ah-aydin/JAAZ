<?php 
    session_start();
	include("database/connection.php");
	include("database/functions.php");

	$user_data = check_login($con);
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $theme = $_POST['theme'];
        $resultt = $_POST['result'];
        
        if(!empty($theme))
        {
            $user_id = $_SESSION['user_id'];
            $query = "INSERT INTO Preferences (theme, user_id) VALUES (
                '$theme', (SELECT user_id FROM Users WHERE user_id=$user_id))";
            mysqli_query($con, $query);
            
            $_SESSION['err'] = '';
            $_SESSION['success'] = "Created preferences";
        }
    }
    else
    {
        $_SESSION['success'] = '';
        $_SESSION['err'] = '';
    }
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
                            <form action="" method="POST">
                            <!--div class="row">
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
                            </div-->
                            <div class="row">
                                <div class="col-md-4"><div class="form-group first">
                                <label for="theme">Theme</label><br/>
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
                    <div class="row">
                        <?php echo $_SESSION['success'] ?>
                    </div>
                    <div class="row">
                        <?php echo $_SESSION['err'] ?>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once('templates/footer.php')?>
    </body>

</html>