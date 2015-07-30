<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Sarajevo - Enterprise Resource Planning">
    <title>Sarajevo</title>
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">


    <!--[if lte IE 8]>
        <link rel="stylesheet" href="css/layouts/side-menu-old-ie.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="css/layouts/side-menu.css">
    <!--<![endif]-->

</head>
<body>

<div id="layout">
    <!-- Menu toggle -->
    <a href="#menu" id="menuLink" class="menu-link">
        <!-- Hamburger icon -->
        <span></span>
    </a>

    <div id="menu">
        <div class="pure-menu">
            <a class="pure-menu-heading" href="#">Sarajevo</a>

            <ul class="pure-menu-list">
				<?php include 'cssmenu.php';?>
            </ul>
        </div>
    </div>

    <div id="main">
        <div class="header">
            <h1>Sarajevo</h1>
            <h2>Enterprise Resource Planning</h2>
        </div>

        <div class="content">
            <h2 class="content-subhead">Overview</h2>
            <p>
				Probably output some business related data
				</p>

            <h2 class="content-subhead">Daily Reminders</h2>
            <p>
			Today: - 
            </p>

            <div class="pure-g">

            </div>

            <h2 class="content-subhead">Status</h2>
            <p>
				<?php include 'sqlconnect.php';?>
            </p>
        </div>
    </div>
</div>





<script src="js/ui.js"></script>


</body>
</html>
