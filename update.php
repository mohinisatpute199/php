
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
	
</head>
<body>
	<div class="container reg">
		<div class="row">
			<div class="col-md-0 reg-left">
				<h1 style="color: white;"></h1>
				<h6 style="color: white;"><h6><br>
				<a href="select.php"></a></div>
				<div class="reg">
				<div class="col-md-12 reg-right">
	 <form action="" method="POST" id="reg">
	 	<?php

include 'dbcon.php';

$id = $_GET['id'];

$selectquery = " select * from registration where id=$id";

$query = mysqli_query($con,$selectquery );

$result = mysqli_fetch_assoc($query);

if(isset($_POST['submit'])){
	$eventname = $_POST['eventname'];
	$organizedname = $_POST['organizedname'];
	$date = $_POST['date'];
	$link = $_POST['link'];

	$updatequery = " update registration set id=$id, eventname='$eventname', organizedname='$organizedname', date='$date', link='$link' where id=$id ";
	$query = mysqli_query($con, $updatequery);

	if($query){
	?>
	<script>
		alert('update successfull');
	</script>

	<?php
	header('location:select.php');
}else{
	?>
	<script>
		alert('Not updated');
	</script>
    <?php
}
}
?>

	 	<h2></h2>
		<label>Event name:</label><br>
		<input type="text" name="eventname" id="name" value="<?php echo $result['eventname']; ?>" required><br><br>
		<label>Organized By:</label><br>
		<input type="text" name="organizedname" id="name"  value="<?php echo $result['organizedname']; ?>" required><br><br>
		<label>Date:</label><br>
		<input type="Date" name="date" id="name"  value="<?php echo $result['date']; ?>" required><br><br>
		<label>Link:</label><br>
		<input type="text" name="link" id="name"  value="<?php echo $result['link']; ?>" required><br><br>
		<button type="submit" id="sub" name="submit"  style="margin-left: 5px;">Update</button>
	</form>
 
	</div>
</div>


</body>
</html>
