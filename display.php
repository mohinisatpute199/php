<!DOCTYPE html>
<html>
<head>
	<title>display</title>
</head>
<body>
	<table border="2" style="margin-left: 40px;">

		<tr>
			<th>Event Name</th>
			<th>Organized By</th>
			<th>Date</th>
			<th>Link</th>
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
</table>
</body>
</html>

