<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<title>Cancer Health Care Intergrated System</title>

	<link href="./assets/css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<div class="wrapper">
		<!-- Sidenav -->
        <?php include_once("sections/sidenav.doc.php"); ?>
		<div class="main">
			<!-- nav -->
            <?php include_once("sections/nav.php"); ?>
			<main class="content">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3"><strong>Welcome Doctor, </strong> <?= $_SESSION["username"]; ?></h1>

					

				</div>
			</main>

			<!-- footer -->
            <?php include_once("sections/footer.php"); ?>
		</div>
	</div>

	<script src="./assets/js/app.js"></script>
    <!-- scripts -->



</body>

</html>