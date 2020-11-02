<?php
?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2o0BY362qM3lonlgyExkL0=" crossorigin="anonymous" />	
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css>
    <link rel="stylesheet" href=https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
table, th, td{
	border: 1px solid black;
	border-collapse: collapse;
}
table.center{
	margin-left: auto;
	margin-right: auto;
}
th, td{
	padding: 20px;
}
tr:nth-child(even){
	background-color: #f0f0f0;
}
th{
	background-color: lightpink;
}
</style>
	
</head>
<body>
<div class="main-div">
	<h1><center>List of Event</center></h1>
	<div class="center-div">
		<div class="table-responsive">
			<table class="center">
				<thead>
					<th>id</th>
					<th>Event name</th>
					<th>Organized By</th>
					<th>Date</th>
					<th>Link</th>
					<th colspan="2">operation</th>
				</thead>
				<tbody>
					<?php

					include 'dbcon.php';

					$selectquery = "select * from registration";

					$query = mysqli_query($con,$selectquery);

					while($result = mysqli_fetch_assoc($query)){

					?>			
					<tr>
						<td><?php echo $result['id']; ?></td>
						<td><?php echo $result['eventname']; ?></td>
						<td><?php echo $result['organizedname']; ?></td>
						<td><?php echo $result['date']; ?></td>
						<td><?php echo $result['link']; ?></td>
						<td><a href="update.php?id=<?php echo $result['id']; ?>"> <i class="fa fa-edit">update</i></a></td>
						<td><a href="delete.php?id=<?php echo $result['id']; ?>"> <i class="fa fa-trash" aria-hidden="true">delete</i></a></td>
					</tr>
					<?php
				}
				?>


				</tbody>
			</table>
		</div></div></div>

</body>
</html>