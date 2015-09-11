<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Article&middot;Sound</title>
        <!-- Load CSS -->
        <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
        <link href="css/bootstrap-theme.min.css" rel="stylesheet">
        <link href="css/housestyle.css"  rel="stylesheet">
    </head>

    <body>
        <nav class="navbar navbar-default">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <i class="glyphicon glyphicon-menu-hamburger"></i>
                </button>
                <a class="navbar-brand" href="index.php">
                    ArticleSound
                </a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="navbar-link"> <a href="index.php">Home</a></li>
                </ul>
            </div>

        </nav>

        <div id="wrap">
            <div id="main" class="container clear-top">
                <div class="jumbotron">
                    <h1>Add sound to an article!</h1>
                    <form action="article.php" method="get">
                        <div class="form-group">
                          <label>Article URL:</label>
                          <input type="text" name="article" placeholder="URL">
                        </div>
                        <div class="form-group">
                          <label>Sound URL (youtube):</label>
                          <input type="text" name="sound" placeholder="URL">
                        </div>
                        <button type="submit" class="btn">Combine!</button>
                    </form>
                </div>
            </div>
        </div>

        <footer class="footer">
            <div class="well">
                <div class="row">
                    <div class="col-md-2 col-md-offset-3" >
                        <p>&copy;FloatingGhost 2015</p>
                    </div>
                    <div class="col-md-2">
                        <form action="//www.slickmuffin.co.uk">
                            <button class="btn btn-warning" type="submit">Visit SlickMuffin</button>
                        </form>
                    </div>
                    <div class="col-md-2">
                        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="3RWZ94662G3VC">
                            <input type="image" src="https://www.paypalobjects.com/en_GB/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online.">
                            <img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
                        </form>

                    </div>
                </div>
            </div>
        </footer>

            <!-- Load scripts -->

        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.min.js"></script>
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-65855138-2', 'auto');
            ga('send', 'pageview');

        </script>
    </body>
</html>
