<!DOCTYPE HTML>
<html>
    <head>
        <title>BVPCSI</title>
        <meta charset = "utf-8">
        <meta name="Description" content="BVPCSI" />
        <meta name = "viewport" content = "width = device-width, initial-scale = 1, maximum-scale = 1">
        <meta name="Keywords" content="bvpcsi, bvcoe, delhi, csi, india" />
        <meta name="Author" content="Ujjwal Bhardwaj" />

        <!--    Facebook Open Graph Tags    -->
        <meta property="og:title" content="BVPCSI" />
        <meta property="og:type" content="non_profit" />
        <meta property="og:url" content="http://www.bvpcsi.in/" />
        <meta property="og:site_name" content="BVPCSI" />
        <meta property="og:description" content="BVPCSI" />
        <meta property="og:image" content="http://www.bvpcsi.in/img/logo.png" />
        
        <link href="Content/bootstrap.min.css" rel="stylesheet" />
        <link href="Content/main.css" rel="stylesheet" />
        <link rel="shortcut icon" href="img/csi.png" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    </head>
    <body>
        <!-- Header of the Page-->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">
                        <img class = "img-responsive" width = "250em" src = "img/logo.png" alt = "BVPCSI" />
                    </a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <!--    <ul class="nav navbar-nav">

                    </ul>-->
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <?php
                                $page = $_SERVER["PHP_SELF"];
                                if(strcmp($page, "/index.php") == 0)
                                {
                                    echo '<li class = "active"><a href = "/index.php">Home</a></li>';
                                }
                                else
                                {
                                    echo '<li><a href = "/index.php">Home</a></li>';
                                }
                                if(strcmp($page, "/council.php") == 0)
                                {
                                    echo '<li class = "active"><a href = "/council.php">Council</a></li>';
                                }
                                else
                                {
                                    echo '<li><a href = "/council.php">Council</a></li>';
                                }
                                if(strcmp($page, "/gallery.php") == 0)
                                {
                                    echo '<li class = "active"><a href = "/gallery.php">Gallery</a></li>';
                                }
                                else
                                {
                                    echo '<li><a href = "/gallery.php">Gallery</a></li>';
                                }
                                if(strcmp($page, "/events.php") == 0)
                                {
                                    echo '<li class = "active"><a href = "/events.php">Events</a></li>';
                                }
                                else
                                {
                                    echo '<li><a href = "/events.php">Events</a></li>';
                                }
                                echo '<li><a href = "#" data-toggle = "modal" data-target = "#contactmodal">Contact Us</a></li>';
                            ?>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Main Body -->
        <!--modal-->

        <!--Contact Us Modal -->
        <div class="modal fade" id="contactmodal" tabindex="-1" role="dialog" aria-labelledby="myModal-label" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModal-label">Contact Us</h4>
                    </div>
                    <div class="modal-body">
                        <div class = "row">
                            <div class="col-xs-12">
                                <form role="form" class="form-horizontal" action="contact.php" method="POST">
                                    <div class="form-group">
                                        <label for="name" class="control-label col-sm-2 hidden-xs hidden-sm">Name:</label>
                                        <div class="col-md-9 ">
                                            <input type="text" placeholder="Name" name="name" class="form-control" id="name" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="control-label col-sm-2 hidden-xs hidden-sm">Mail:</label>
                                        <div class="col-md-9 ">
                                            <input type="mail" placeholder="Email-Address" name="email" class="form-control" id="email" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="number" class="control-label col-sm-2 hidden-xs hidden-sm">Phone:</label>
                                        <div class="col-md-9 ">
                                            <input type="text" placeholder="Phone Number" name="phone" class="form-control" id="phone" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="query" class="control-label col-sm-2 hidden-xs hidden-sm">Message:</label>
                                        <div class="col-md-9">
                                        <textarea class="form-control" placeholder="Message" name = "message"></textarea>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                    </form>
                    </div>
                </div>
            </div>
        </div>
        <div class = "container-fluid" style = "padding-left:0; padding-right:0; margin-top:100px;">
