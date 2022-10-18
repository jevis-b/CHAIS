<?php include_once '/database.php'; session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  .btn-glyphicon {
padding:8px;
background:#ffffff;
margin-right:4px;
}
.icon-btn {
padding: 1px 15px 3px 2px;
border-radius:50px;
}
  </style>
	<title>Manage Patients </title>
</head>
<body>

<table class="table table-responsive table-bordered">

	

           
                <tr class="danger">
                    <th> S.no</th>
                    <th>Patient Name</th>
                    <th>Patient Address</th>
					<th>Patient Gender</th>
					<th>Modify</th>
					<th>Delete</th>
					</tr>
					   
					<?php


$rs1=mysqli_query($con,"SELECT * from patient where patient_available='YES' order by
patient_name;");
$sno=1;
while( $row=mysqli_fetch_array($rs1)) {
 echo "<tr class='success'><td>$sno</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td><a class='btn icon-btn btn-success' href=patient_update.php?rno=".$row[0]."><span class='glyphicon btn-glyphicon glyphicon-edit img-circle text-success'></span> Edit</a></td><td><a class='btn icon-btn btn-danger' href=delete_patient.php?rno=".$row[0]."><span class='glyphicon btn-glyphicon glyphicon-trash img-circle text-danger'></span> Delete</a></td></tr>";
 $sno++;
}
if ($sno==1) echo "<tr><td colspan='6' align='center'><font size=4 color=red>Records
Not Found</font></td></tr>";


	

?>



            
        </table>
        h3 align="left" style="color:red;"><b>Deleted Records</b></h3>
				
	<hr>
<table class="table table-responsive table-bordered">

	

           
                <tr class="danger">
                    <th> S.no</th>
                    <th>Patient Name</th>
                    <th>Patient Address</th>
					<th>Patient Gender</th>
					<th>Options</th>
					
					</tr>
					   
					<?php


$rs1=mysqli_query($con,"SELECT * from patient where patient_available='NOT' order by
patient_name;");
$sno=1;
while( $row=mysqli_fetch_array($rs1)) {
 echo "<tr class='success'><td>$sno</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>
 <a class='btn icon-btn btn-danger' href=undelete_patient.php?rno=".$row[0].">
 <span class='glyphicon btn-glyphicon glyphicon-trash img-circle text-danger'></span> Undelete</a></td></tr>";
 $sno++;
}
if ($sno==1) echo "<tr><td colspan='6' align='center'><font size=4 color=red>Records
Not Found</font></td></tr>";
?>
            
        </table>
		

</body>
</html>
