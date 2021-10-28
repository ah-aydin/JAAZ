<?php 
    session_start();
	include("database/connection.php");
	include("database/functions.php");

	$user_data = check_login($con);
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $score = $_POST['score'];
        $resultt = $_POST['result'];
        
        if(!empty($resultt) && !empty($score))
        {
            $user_id = $_SESSION['user_id'];
            $query = "INSERT INTO GameRuns (result, score, time, player_id) VALUES (
                '$resultt', $score, '10:10', (SELECT player_id FROM Players WHERE player_id=$user_id))";
            mysqli_query($con, $query);
            
            $_SESSION['err'] = '';
            $_SESSION['success'] = "Created game run";
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
                            <form action="" method="POST">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group first">
                                        <label for="scorew">Score</label>
                                        <input class="form-control" type="number" name="score" placeholder="Score"
                                            id="score_input" required/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4"><div class="form-group first">
                                <label for="result">Result</label><br/>
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