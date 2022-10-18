<?php include_once 'database.php'; session_start(); ?>

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
        <?php include_once("sections/sidenav.php"); ?>
		<div class="main">
			<!-- nav -->
            <?php include_once("sections/nav.php"); ?>
			<main class="content">

               <h4>Add Users.</h4>

				<div class="container-fluid p-3 bg-white">

                <form action="">
                    <div class="form-group mb-3"><label for="">enter username</label><input type="text"  name= "username"class="form-control"></div>
                    <div class="form-group mb-3"><label for="">enter password</label><input type="text" name ="password" class="form-control"></div>
                    <div class="form-group mb-3"><label for="">enter email</label><input type="text" name="email" class="form-control"></div>
                    <div class="form-group mb-3"><label for="">enter Phone number</label><input type="text" name="name"class="form-control"></div>
                    <div class="form-group mb-3"><label for="">choose access level</label>
                    <select name="" id="" class="form-select">
                        <option value="1">Admin</option>
                        <option value="2">Doctor</option>
                        <option value="3">Patient</option>
                    </select>
                </div>
                <input type="submit" name="submit" value="submit" class="btn btn-primary">
                </form>
                
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