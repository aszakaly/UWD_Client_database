<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">

	<title>Client database - Udemy</title>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body style="padding-top: 60px;">

    <!--Navbar
    ========================================================================-->

    <nav class="navbar navbar-default navbar-inverse navbar-fixed-top">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="container-fluid">



            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="clients.php">CLIENT<strong>MANAGER</strong></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-collapse">
               <?php
                if ($_SESSION['loggedInUser']) { //if user is logged in
                ?>
                <ul class="nav navbar-nav">
                    <li><a href="clients.php">My Clients</a></li>
                    <li><a href="add.php">Add Client</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <p class="navbar-text"><?php
                        $loggedInMessage="Aloha, ". $_SESSION['loggedInUser'];
                        echo $loggedInMessage;
                        ?></p>
                    <li><a href="logout.php">Log out</a></li>
                </ul>

                <?php
                } else {
                ?>

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php">Log in</a></li>
                </ul>

                <?php
                }
                ?>

            </div><!-- /.navbar-collapse -->
        </div>
    </nav>

   <div class="container">
