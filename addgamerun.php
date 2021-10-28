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
			Add game run
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
                                        <label for="time">Time</label>
                                        <input class="form-control" type="text" name="time" placeholder="Time in seconds"
                                            id="time_input" required/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group first">
                                        <label for="scorew">Score</label>
                                        <input class="form-control" type="text" name="score" placeholder="Score"
                                            id="score_input" required/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4"><div class="form-group first">
                                <label for="result">Result</label><br/>
                                <form>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="result" id="resultsuccess" value="Success"/>
                                    <label class="form-check-label p-0" for="resultsuccess">
                                        Success
                                    </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="result" id="resultunsuccessful" value="unsuccessful"/>
                                    <label class="form-check-label p-0" for="resultunsuccessful">
                                        Unsuccessful
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