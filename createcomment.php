
<?php 
    session_start();
	include("database/connection.php");
	include("database/functions.php");

	$user_data = check_login($con);
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $content = $_POST['content'];
        if(!empty($content))
        {
            $user_id = $_SESSION['user_id'];
            $datecurrent = date("Y-m-d");
            $query = "INSERT INTO Posts (body, publish_date, user_id) VALUES ('$content', '$datecurrent',
                                (SELECT user_id FROM Users WHERE user_id=$user_id))";
            mysqli_query($con, $query);
            $post_id = mysqli_insert_id($con);

            $query = "SELECT title FROM Forums WHERE title='forum1'";
            $result = mysqli_query($con, $query);
            $data = mysqli_fetch_assoc($result);
            $title = $data['title'];
            $query = "INSERT INTO Comments (post_id, forum_id) VALUES ((
                SELECT post_id FROM Posts WHERE post_id=$post_id LIMIT 1), 
                (SELECT forum_id FROM Forums WHERE title='forum1'))
                ";
            mysqli_query($con, $query);
            $_SESSION['err'] = '';
            $_SESSION['success'] = "Created comment";
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
    <?php include_once('templates/head.php') ?>
    <?php $thispg = "inputs" ?>
    <title>
        Comments
    </title>
</head>

<body lang="en">
    <div class="wrapper">
        <?php include_once('templates/sidebar.php') ?>
        <div class="main-panel" style="height: 100vh;">
            <?php include_once('templates/navbar.php') ?>
            <!-- End Navbar -->
            <div class="content">

                <div class="row d-flex justify-content-center">
                    <div class="col-md-10">
                        <h3>Post comment</h3>
                        <p>
                            At this point in time this just creates a comment on one specific form that is located in the database.
                            For the next assignment, this will be under the each form's view, so that you can comment on that specific form.
                        </p>
                        <form action="" method="POST">
                            <div class="row">
                                <div class="col-md-12 h-50">
                                    <div class="form-group first">
                                        <label for="forumtext">Comment</label>
                                        <textarea class="form-control" type="text" style="height:100px;" name="content" placeholder="Enter forum content here..." id="forumtext_input" required> </textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="submit" class="btn btn-primary" value="Post comment" />
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
    </div>
    <?php include_once('templates/footer.php') ?>
</body>

</html>