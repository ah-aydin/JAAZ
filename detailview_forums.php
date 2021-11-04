<?php 
    session_start();
	include("database/connection.php");
	include("database/functions.php");
?>

<!DOCTYPE html>
<html>

  <head>
		<?php include_once('templates/head.php')?>
    <?php $thispg="forum"?>
		<title>
			Detail view forum
		</title>
    <style>
      .forums{
        border:1px solid #000;
        padding: 15px;
        background-color:#fff;
      }
      .titles{
        font-weight:bold;

      }
      .bodies{
        padding:10px 15px 10px;
      }
      .comment{
        padding:10px;
        border-radius:5px;
        margin:3px;
        margin-left:15px;
        background-color:#E8E7E3;
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
              <div id="forum" class="forums">
                <div class="row">
                  <div class="col-md-12 titles" id="forumtitle">
                    Title 1
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 bodies" id="forumbody">
                    Body Body Body Body Body Body Body Body Body Body Body Body Body Body Body Body Body Body Body Body Body Body Body Body Body Body Body Body Body Body Body Body Body Body Body Body Body Body Body Body Body Body Body Body Body Body Body Body Body Body Body Body Body Body Body Body Body Body Body Body Body Body Body Body Body Body Body Body Body Body Body Body Body Body Body Body Body Body Body Body Body Body Body Body Body Body Body Body.
                  </div>
                </div>
                <div class="row">
                  <div class="comment" id="forumcomment1">
                    comment comment
                  </div>
                </div>
                <div class="row">
                  <div class="comment" id="forumcomment2">
                    comment comment comment comment comment comment
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php include_once('templates/footer.php')?>
    </body>

</html>