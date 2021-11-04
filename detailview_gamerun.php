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
                      <span class="attr">Runner: </span>
                      <a id="username" href="/">Some user</a>
                    </li>
                    <li class="list-group-item">
                      <span class="attr">Score: </span>
                      <span id="username">1234</span>
                    </li>
                    <li class="list-group-item">
                      <span class="attr">Result: </span>
                      <span id="username">Sucess</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          </div>
        </div>
        <?php include_once('templates/footer.php')?>
    </body>

</html>