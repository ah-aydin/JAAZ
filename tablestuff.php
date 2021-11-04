<?php 
  session_start();
	include("database/connection.php");
	include("database/functions.php");
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