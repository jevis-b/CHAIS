<?php include_once 'database.php'; session_start();

if(isset($save))
{
		$query="insert into patients values('','$Patient_id','$Patient_name','$Email', '$Gender', '$Date_of_birth', '$Address', '$Phone', $password','YES')";

		if(mysqli_query($con,$query))
		{
			echo "<script>
	alert('Data saved successfully')
	</script>";
		}
		else
		{
		$err="some error";
		}
	}
	

?>

?>


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

               <h4>Manage Patients.</h4>

				<div class="container-fluid p-3 bg-white">

                <table class="table-striped table">
                    <thead>
                        <tr>
                            <th><b>#</b></th>
                            <th>Username</th>
                            <th>Access</th>
                            <th>Operations</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $query = mysqli_query($connect, "SELECT * FROM patients"); $i = 1;
                          while($row = mysqli_fetch_assoc($query)): ?>
                        <tr>
                            <td><b><?= $i ?>.</b></td>
                            <td><?= $row["username"] ?></td>
                            <td><a href="#">Allowed</a></td>
                            <td>
                                <a href="#">Edit</a>
                                <a href="#">Delete</a>
                                <a href="#">View</a>
                            </td>
                        </tr>
                   <?php $i++; endwhile; ?>
                    </tbody>
                </table>
                
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