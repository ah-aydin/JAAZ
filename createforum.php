<?php 
    session_start();
	include("database/connection.php");
	include("database/functions.php");

	$user_data = check_login($con);
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $title = $_POST['title'];
        $forumtext = $_POST['forumtext'];
        $_SESSION['err'] = '';
        if(!empty($title) && !empty($forumtext))
        {
            $query = "SELECT * FROM Forums WHERE title='$title' LIMIT 1";
            $result = mysqli_query($con,$query);
            // Forum with the given title exists, so we don't put it.
            if($result && mysqli_num_rows($result) > 0)
            {
                $_SESSION['err'] = 'Could not create forum. Maybe dis title alread is taken';
                $_SESSION['success'] = '';
            }
            else
            {
                $datecurrent = date("Y-m-d");
                $user_id = $_SESSION['user_id'];
                $query = "INSERT INTO Posts (body, publish_date, user_id) VALUES ('$forumtext', '$datecurrent',
                        (SELECT user_id FROM Users WHERE user_id=$user_id))";
                mysqli_query($con, $query);

                $post_id = mysqli_insert_id($con);
                $query = "INSERT INTO Forums (post_id, title) VALUES ((
                        SELECT post_id FROM Posts WHERE post_id=$post_id LIMIT 1), '$title')
                    ";
                mysqli_query($con, $query);
                $_SESSION['err'] = '';
                $_SESSION['success'] = "Created forum $title";
            }
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
                            <h3>Create forum</h3>
                            <form action="" method="POST">
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