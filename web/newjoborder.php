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
				<a class="pure-button" href="manufacturing">Overview</a> 
            </p>

            <h2 class="content-subhead">Add New Job</h2>
            <p>
					<form method="post" action="newjob.php" class="pure-form pure-form-aligned">
							<fieldset>
								<div class="pure-control-group">
									<label for="jobname">Job Name</label>
									<input name="jobname" type="text" placeholder="">
								</div>

								<div class="pure-control-group">
									<label for="jobdesc">Job Description</label>
									<input name="jobdesc" type="text" placeholder="">
								</div>

								<div class="pure-control-group">
									<label for="jobdept">Job Department</label>
									<input name="jobdept" type="text" placeholder="">
								</div>

									<button type="submit" class="pure-button pure-button-primary">Add</button>
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
