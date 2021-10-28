<?php 
    session_start();
	include("database/connection.php");
	include("database/functions.php");

	$user_data = check_login($con);

    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $levelname = $_POST['levelname'];
        $xprequirement = $_POST['xprequirement'];
        $description = $_POST['description'];
        $_SESSION['err'] = '';
        if(!empty($levelname) && !empty($xprequirement) && !empty($description))
        {
            $query = "INSERT INTO Levels (name, description, entry_xp) VALUES ('$levelname', '$description', '$xprequirement')";
            if (mysqli_query($con, $query))
            {
                $_SESSION['success'] = "Create level $levelname"; 
            }
            else
            {
                $_SESSION['success'] = '';
                $_SESSION['err'] = 'Could not create level. Maybe dis name alread is taken';
            }
        }
    }
    else
    {
        $_SESSION['success'] = '';
    }
?>

<!DOCTYPE html>
<html>

    <head>
		<?php include_once('templates/head.php')?>
    <?php $thispg="inputs"?>
		<title>
			Level designer
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
                                <h3>Create level</h3>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group first">
                                            <label for="levelname">Level Name</label>
                                            <input class="form-control" type="text" name="levelname" placeholder="Create a level name"
                                                id="levelname_input" required/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group first">
                                            <label for="xprequirement">XP Requirement</label>
                                            <input class="form-control" type="number" name="xprequirement" placeholder="ex. 200xp"
                                                id="xprequirement_input" required/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group first">
                                            <label for="xprequirement">Description</label>
                                            <textarea class="form-control" type="text" name="description" placeholder="Gib description"
                                                id="xprequirement_input" required></textarea>
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