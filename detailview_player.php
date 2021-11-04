<?php 
    session_start();
	include("database/connection.php");
	include("database/functions.php");
?>

<!DOCTYPE html>
<html>

  <head>
		<?php include_once('templates/head.php')?>
    <?php $thispg="player"?>
		<title>
			Tables
		</title>
    <style>
      .attr{
        font-size:105%;
        font-weight:bold;
      }
    </style>
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
                <div class="card" style="width: 28rem;">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                      <span class="attr">Name: </span>
                      <span id="username">Some user name</span>
                    </li>
                    <li class="list-group-item">
                      <span class="attr">Username: </span>
                      <span id="username">Some user</span>
                    </li>
                    <li class="list-group-item">
                      <span class="attr">Highscore: </span>
                      <span id="username">1234</span>
                    </li>
                    <li class="list-group-item">
                      <span class="attr">XP: </span>
                      <span id="username">12345</span>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="row" style="visibility: hidden;">a</div>
              <div class="row">
                <div class="col-md-6 attr">
                  Gameruns
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
              <div class="row">
                <div class="col-md-6 attr">
                  Levels Created:
                </div>
              </div>
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Entry XP</th>
                    <th scope="col">Description</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Basic training</td>
                    <td>123</td>
                    <td>This level is very nice.</td>
                  </tr>
                </tbody>
              </table>

              <div class="row">
                <div class="col-md-6 attr">
                  Forums:
                </div>
              </div>
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Date</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Basic training</td>
                    <td>12:10,12/10/2021</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          </div>
        </div>
        <?php include_once('templates/footer.php')?>
    </body>

</html>