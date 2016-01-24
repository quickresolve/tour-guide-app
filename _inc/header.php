<?php
    require_once('connect.php');
    require_once('helper.functions.php');
    $homepath = "http://localhost/~mattmiller/let-c/";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/favicon.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/custom.css">

    <title>letzc</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">

    <?php if($login){ ?>
        <link href="css/login.css" rel="stylesheet" />
    <?php } ?>
</head>
<!-- NAVBAR
================================================== -->
<body>

<?php
    // Non-login info
    if(!$login){
?>

<div class="navbar-wrapper">
    <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="images/small_logo.png"></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li <?=echoActive("dashboard"); ?>><a href="<?php echo $homepath."dashboard.php?user_id=1"; ?>">Home</a></li>
                        <li <?=echoActive("find-match"); ?>><a href="<?php echo $homepath."find-match.php"; ?>">Find a Match</a></li>
                        <li <?=echoActive("categories"); ?>><a href="<?php echo $homepath."categories.php"; ?>">Categories/Interests/Places</a></li>
                        <li <?=echoActive("contact"); ?>><a href="<?php echo $homepath."contact.php"; ?>">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>

    </div>
</div>


        <!-- Carousel
          ================================================== -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img class="first-slide" src="images/slideshow2.jpg" alt="First slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <img src="images/logo.png">

                        </div>
                    </div>
                </div>

                <!-- <div class="item">
                 <img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
                 <div class="container">
                   <div class="carousel-caption">
                     <h1>Another example headline.</h1>
                     <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                     <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                   </div>
                 </div>
               </div>

               <div class="item">
                 <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
                 <div class="container">
                   <div class="carousel-caption">
                     <h1>One more for good measure.</h1>
                     <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                     <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                   </div>
                 </div>
               </div> -->



            </div>
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div><!-- /.carousel -->
<?php } ?>