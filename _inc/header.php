<?php
require_once('connect.php');
$homepath = "http://localhost/~mattmiller/let-c/";
require_once('classes/user.match.php');
$matches = new LetZC_Match(0,$mysqli,$homepath);

if(isset($_SESSION['id'])){
    require_once('classes/user.class.php');
    require_once('classes/messages.class.php');
    $user_id = $_SESSION['id'];
    $user = new LetZC_User($user_id,$mysqli,$homepath);
    $messages = new LetZC_Messages($user_id,$mysqli,$homepath);
}
else if(!$login){
    header('Location:login.php');
}
require_once('helper.functions.php');
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
    <link rel="stylesheet" href="css/fonts.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/custom.css">

    <title>letzc</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/ekko-lightbox.css" rel="stylesheet">

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
<?php if(!$login) { ?>
    <div class="navbar-wrapper">
        <div class="container">

            <nav class="navbar navbar-inverse navbar-static-top">
                <div class="container">
                    <div class="navbar-header col-md-1">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"><img src="images/small_logo.png"></a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse col-md-11">
                        <ul class="nav navbar-nav">
                            <li <?= echoActive("dashboard"); ?>><a href="<?php echo $homepath . "dashboard.php"; ?>">My Profile</a>
                            </li>
                            <li <?= echoActive("find-match"); ?>><a href="<?php echo $homepath . "find-match.php"; ?>">Find
                                    a Local</a></li>
                            <li <?= echoActive("contact"); ?>><a
                                    href="<?php echo $homepath . "contact.php"; ?>">Contact</a></li>
                        </ul>
                    </div>
                    <a href="<?php echo $homepath . "logout.php"; ?>" class="logout pull-right"><i class="fa fa-sign-out"></i></a>
                    <a class="messaging pull-right" href="#" title="Header" data-placement="bottom" data-width="350" data-toggle="popover" data-html="true" data-content="<?php echo $messages->getMessagePreview(); ?>"><i class="fa fa-envelope-square"></i></a>
                </div>
            </nav>
        </div>
    </div>
<?php } ?>