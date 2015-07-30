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
            <h2 class="content-subhead">Customer Relations Management</h2>
            <p>
						<a class="pure-button" href="custsales">Sales</a><a class="pure-button" href="contacts">Customer Contacts</a>
            </p>

            <h2 class="content-subhead">Add New Contact</h2>
            <p>
			<form class="pure-form pure-form-aligned">
    <fieldset>
        <div class="pure-control-group">
            <label for="name">Full Name</label>
            <input id="name" type="text" placeholder="fullname">
        </div>

        <div class="pure-control-group">
            <label for="company">Company</label>
            <input id="company" type="text" placeholder="company">
        </div>

        <div class="pure-control-group">
            <label for="email">Email Address</label>
            <input id="email" type="email" placeholder="Email Address">
        </div>

        <div class="pure-control-group">
            <label for="contact">Contact</label>
            <input id="contact" type="text" placeholder="Contact">
        </div>

        <div class="pure-controls">
            <label for="cb" class="pure-checkbox">
                <input id="cb" type="checkbox"> I've read the terms and conditions
            </label>

            <button type="submit" class="pure-button pure-button-primary">Submit</button>
        </div>
    </fieldset>
</form>
            </p>

            <div class="pure-g">

            </div>

            <h2 class="content-subhead"></h2>
            <p>
            </p>
        </div>
    </div>
</div>





<script src="js/ui.js"></script>


</body>
</html>
