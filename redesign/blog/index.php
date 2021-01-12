
<?php
    require_once("../inc/config.php");
?>

<!doctype html>
<html lang="en">
    <head>
        <title>Blog - <?php echo $siteName; ?></title>
        
        <meta name="description" content="Do it right.">
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        
        <!-- comic styles -->
        <link rel="stylesheet" href="../assets/styles.css">
        
        <?php
            echo '<link rel="shortcut icon" href="../assets/favicon.ico?t=' . time() . '" />';
        ?>
    </head>
    
    <body>
        <nav class="navbar navbar-inverse navbar-static-top">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <img class="navbar-brand" alt="<?php echo $moto; ?>" src="https://avatars3.githubusercontent.com/u/40926044?s=64&u=15f6fc288427f635d3686159b4136f096f889ed2&v=4" style="padding:8px">
                    
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarCollapse" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                    
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="nav navbar-nav">
                        <li><a href="../">Home</a></li>
                        <li class="active"><a href="#">Blog <span class="sr-only">(current)</span></a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="../services/lawncare">Lawn Care</a></li>
                                <li><a href="../services/digitalmedia">Digital Media</a></li>
                                <li><a href="../services/software">Software</a></li>
                                <li><a href="../services/gameservers">Game Servers</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="http://portal.kunindustries.com">Web Portal</a></li>
                            </ul>
                        </li>
                    </ul>
                    
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="../portfolio">Portfolio</a></li>
                        <li><a href="../contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <div class="container-fluid">
            <div class="bigContainer">
                <div class="card">
                    <h1>Blog</h1>
                </div>
            </div>
        </div>
        
        <div class="footer">
            <div class="footer-brand-icons">
                <a href="https://github.com/kunindustries">
                    <img height="32" width="32" src="https://cdn.jsdelivr.net/npm/simple-icons@v4/icons/github.svg" />
                </a>
                <a href="https://twitter.com/kunindustries">
                    <img height="32" width="32" style="color:white" src="https://cdn.jsdelivr.net/npm/simple-icons@v4/icons/twitter.svg" />
                </a>
                <!--
                <a href="">
                    <img height="32" width="32" src="https://cdn.jsdelivr.net/npm/simple-icons@v4/icons/discord.svg" />
                </a>
                -->
            </div>
            <div class="hr-between">
            </div>
            <div>
                <p>Copyright &copy; 2021 Kun Industries</p>
            </div>
        </div>
    </body>
</html>
