<?php
?>

<!DOCTYPE html>
<html>
<head>
	<title>admin page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
table, td, th{
	border: 1px solid black;
	text-align: center;
}
table{
	border-collapse: collapse;
	width: 100%;
	margin-left: 10px;
	margin-right: 10px;

}
th, td{
	padding: 15px;
}
body{
	background-color: #ffe6e6;
}
a{
	color: black;
}
</style>
	
</head>
<body>
<h2>     </h2>
	<div class="container reg">
		<div class="row">
			<div class="col-md-3 reg-left"><br><br>
				<h1 style="color: white;">Welcome</h1>
				<h6 style="color: white;">Please fill all the details carefully</h6><br>
				<a href="select.php"><b>check details</b></a></div>
				<div class="reg">
				<div class="col-md-9 reg-right">
	 <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" id="reg">
	 	<h2></h2>
		<label>Event name:</label><br>
		<input type="text" name="eventname" id="name" required><br><br>
		<label>Organized By:</label><br>
		<input type="text" name="organizedname" id="name" required><br><br>
		<label>Date:</label><br>
		<input type="Date" name="date" id="name" required ><br><br>
		<label>Link:</label><br>
		<input type="text" name="link" id="name" required ><br><br>
		<button type="submit" id="sub" name="submit" style="margin-left: 5px;">Add</button>
	</form>
 
	</div>
</div>
</div>
</div>
<br>
<br>
<br><br>

<?php

include 'dbcon.php';

if(isset($_POST['submit'])){
	$eventname = $_POST['eventname'];
	$organizedname = $_POST['organizedname'];
	$date = $_POST['date'];
	$link = $_POST['link'];

	$insertquery = "insert into registration(eventname, organizedname, date, link) values('$eventname', '$organizedname', '$date', '$link')";
	$query = mysqli_query($con, $insertquery);

	if($query){
	?>
	<script>
		alert('inserted successfull');
	</script>

	<?php
}else{
	?>
	<script>
		alert('Not inserted');
	</script>
    <?php
}}
?>

<div class="row">
	<div class="col-md-12">
		<h1><center>User section</h1></center>
	<table>

		<tr>
			<th><b>Event Name</b></th>
			<th><b>Organized By<b></th>
			<th><b>Date<b></th>
			<th><b>Link</b></th>
		</tr>
		<?php

include("dbcon.php");

$query = "select * from registration";

$data = mysqli_query($con,$query);

$total = mysqli_num_rows($data);

$result = mysqli_fetch_assoc($data);

if($total!=0)
{
	while($result= mysqli_fetch_assoc($data))
	{
		echo "
		<tr>
		<td>".$result['eventname']."</td>
		<td>".$result['organizedname']."</td>
		<td>".$result['date']."</td>
		<td>".$result['link']."</td>
		</tr>
		";
	}
	//echo "table has record";
}
else
{
	//echo "no record found";
}


?>

</div>
</div>
</table>
<hr>
</body>
</html>






















