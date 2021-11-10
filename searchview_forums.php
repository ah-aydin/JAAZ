<?php
    session_start();
    include("database/connection_read_only.php");
    include("database/functions.php");

    $url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";

    $table_html = "<table class='table table-striped'>
                    <thead>
                        <tr>
                            <th scope='col'>#</th>
                            <th scope='col'>Title</th>
                            <th scope='col'>Publish Date</th>
                            <th scope='col'></th>
                        </tr>
                    </thead>
                    <tbody>";
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $search_param = $_POST['search_param'];
        $query = "SELECT Forums.title, Forums.forum_id, Posts.publish_date 
            FROM Posts INNER JOIN Forums ON Forums.post_id=Posts.post_id 
            WHERE Forums.title LIKE '%$search_param%';";

        $result = mysqli_query($con, $query);

        while ($row = mysqli_fetch_array($result))
        {
            $title = $row['title'];
            $forum_id = $row['forum_id'];
            $publish_date = $row['publish_date'];

            $loc_url = "detailview_forums.php?id=$forum_id";
            $loc_on_click = "location.href='$loc_url';";
            $loc_button = "<button class=\"btn btn-primary\" onclick=\"$loc_on_click\">View</button>";
            $table_html.="<tr>
                            <th>$forum_id</th>
                            <td>$title</td>
                            <td>$publish_date</td>
                            <td>$loc_button</td>
                        </tr>";
        }
    }
    else 
    {
        $query = "SELECT Forums.title, Forums.forum_id, Posts.publish_date 
            FROM Posts INNER JOIN Forums ON Forums.post_id=Posts.post_id;";

        $result = mysqli_query($con, $query);

        while ($row = mysqli_fetch_array($result))
        {
            $title = $row['title'];
            $forum_id = $row['forum_id'];
            $publish_date = $row['publish_date'];

            $loc_url = "detailview_forums.php?id=$forum_id";
            $loc_on_click = "location.href='$loc_url';";
            $loc_button = "<button class=\"btn btn-primary\" onclick=\"$loc_on_click\">View</button>";
            $table_html.="<tr>
                            <th>$forum_id</th>
                            <td>$title</td>
                            <td>$publish_date</td>
                            <td>$loc_button</td>
                        </tr>";
        }
    }
    $table_html.="</tbody></table>";
?>

<!DOCTYPE html>
<html>

<head>
    <?php include_once('templates/head.php') ?>
    <?php $thispg = "Forums Search" ?>
    <title>
        Search Forums
    </title>
</head>

<body lang="en">
    <div class="wrapper">
        <?php include_once('templates/sidebar.php') ?>

        <div class="main-panel" style="height: 100vh;">
            <!-- Navbar -->
            <?php include_once('templates/navbar.php') ?>
            <!-- End Navbar -->
            <div class="content">
                <div class="row">
                    <div class="col-md-6">
                        
                    </div>
                    <div class="col-md-6">
                        <div class="pull-right">
                            <form method="POST">
                                <div class="input-group">
                                    <input type="text" default="" style="margin:10px 0 10px;" id="search_players" name="search_param" class="form-control" placeholder="Search"/>
                                    <div class="input-group-append">
                                        <input type="Submit" class="btn btn-primary btn-outline-secondary" value="Search" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <?php echo $table_html ?>
            </div>
        </div>
    </div>
    <?php include_once('templates/footer.php') ?>
    <script>
        if (document.getElementById("svforums_link")) {
            document.getElementById("svforums_link").classList.add("active");
        }
        document.getElementById("navbar_text").innerHTML = "<?php echo ucfirst($thispg);?>";
    </script>
</body>

</html>