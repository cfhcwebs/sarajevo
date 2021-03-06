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
				<a class="pure-button" href="inventory">Inventory</a> <a class="pure-button" href="newjoborder">Add New Job</a>
            </p>

            <h2 class="content-subhead">Manufacturing Jobs</h2>
            <p>
<?php include "sqlconnect.php";?>
			
			<?php
				$sql = "SELECT * FROM joblist";
				$result = mysqli_query($conn, $sql);

				echo "
				<table class='pure-table'>
					<thead>
						<tr>
							<th>Job ID</th>
							<th>Job Name</th>
							<th>Description</th>
							<th>Department</th>
						</tr>
					</thead>";

				if (mysqli_num_rows($result) > 0) {
					// output data of each row
					while($row = mysqli_fetch_assoc($result)) {
						echo "<tr>";
							echo "<td>" . $row["jobID"]. "</td><td>" . $row["jobName"]. "</td><td>" . $row["jobDesc"]. "</td><td>" . $row["jobDept"]. "</td>";
						echo "</tr>";
					}
				} else {
					echo "0 results";
				}


				echo " </tbody></table>";

				$conn->close();
			?>
            </p>

            <div class="pure-g">

            </div>

            <h2 class="content-subhead">Status</h2>
            <p>
            </p>
        </div>
    </div>
</div>





<script src="js/ui.js"></script>


</body>
</html>
