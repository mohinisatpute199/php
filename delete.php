<?php

include 'dbcon.php';

$id = $_GET['id'];

$deletequery = "delete from registration where id=$id";

$query = mysqli_query($con, $deletequery);

if($query){
	?>
	<script>
		alert('delete successfull');
	</script>

	<?php
	header('location:select.php');
}else{
	?>
	<script>
		alert('Not delete');
	</script>
    <?php
}
?>













?>