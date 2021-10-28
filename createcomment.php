<!DOCTYPE html>
<html>

<head>
    <?php include_once('templates/head.php')?>
    <?php $thispg="inputs"?>
    <title>
        Forums
    </title>
    <style>
        .forums {
            background-color: #F4ECD3;
        }

        .forumtitle {
            font-size: 120%;
            font-weight: bold;
        }

        .inv {
            visibility: hidden;
        }

        .comment {
            background-color: #F4DDCE;
        }
    </style>
</head>

<body lang="en">
    <div class="wrapper">
        <?php include_once('templates/sidebar.php')?>
        <div class="main-panel" style="height: 100vh;">
            <?php include_once('templates/navbar.php')?>
            <!-- End Navbar -->
            <div class="content">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-8 forums">
                        <div class="col-md-12" id="forum1OP">
                            USER1
                        </div>
                        <div class="col-md-12 forumtitle">
                            <div id="forum1title">
                                Add Dark Mode
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div id="forum1content forumconent">
                                PLease add dark mode. It will make our lives a lot easier and I think many of us will agree. I have eye issues and the bright white nature of your otherwise beautiful website always has me wearing shades indoors. I hope you understand my problem and add dark mode.
                            </div>
                        </div>
                        <div class="row col-md-12 inv">a</div>
                        <div class="col-md-12 comment">
                            <div class="col-md-12" id="forum1comment1OP">
                                USER3
                            </div>
                            <div id="forum1comment1">
                                Yes, please do!!
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group first">
                                <input class="form-control" type="text" name="comment" placeholder="Write a comment" id="forum1comment_input" required />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include_once('templates/footer.php')?>
</body>

</html>