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
    <?php $thispg="table"?>
		<title>
			Tables
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
              <div class="row">
                <div class="col-md-6">
                  Players
                </div>
                <div class="col-md-6">
                  <div class="pull-right">
                    <form method="POST">
                      <div class="input-group">
                        <input type="text" style="margin:10px 0 10px;" id="search_players" class="form-control" placeholder="Search"/>
                        <div class="input-group-append">
                          <input type="Submit" class="btn btn-primary btn-outline-secondary" value="Search"/>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Username</th>
                    <th scope="col">Highscore</th>
                    <th scope="col">XP</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>mrotter</td>
                    <td>otter123</td>
                    <td>123</td>
                    <td>123</td>
                  </tr>
                  <tr>
                    <th scope="row">1</th>
                    <td>msbeaver</td>
                    <td>beaver42</td>
                    <td>123</td>
                    <td>123</td>
                  </tr>
                </tbody>
              </table>
              
              <div class="row">
                <div class="col-md-6">
                  Gameruns
                </div>
                <div class="col-md-6">
                  <div class="pull-right">
                    <form method="POST">
                      <div class="input-group">
                        <input type="text" style="margin:10px 0 10px;" id="search_gameruns" class="form-control" placeholder="Search"/>
                        <div class="input-group-append">
                          <input type="Submit" class="btn btn-primary btn-outline-secondary" value="Search"/>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Username</th>
                    <th scope="col">Time</th>
                    <th scope="col">Score</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>otter123</td>
                    <td>123</td>
                    <td>123</td>
                  </tr>
                  <tr>
                    <th scope="row">1</th>
                    <td>beaver42</td>
                    <td>123</td>
                    <td>123</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <?php include_once('templates/footer.php')?>
    </body>

</html>