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
			Create forum
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
                                        <label for="title">Title</label>
                                        <input class="form-control" type="text" name="title" placeholder="Forum title"
                                            id="title_input" required/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 h-50">
                                    <div class="form-group first">
                                        <label for="forumtext">Forum Content</label>
                                        <textarea class="form-control" type="text" style="height:100px;" name="forumtext" placeholder="Enter forum content here..."
                                            id="forumtext_input" required> </textarea>
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