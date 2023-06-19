<?php include("dataconnection.php"); ?>

<html>
<head>

</head>
<body>


		<h1>Add New Room Type Details</h1>

		<form name="addnewfrm" method="post" action="">

			<p>Room Code <input type="text" name="room_code" >
			<p>New Room Type: <input type="text" name="room_type">
			<p>Price: <input type="text" name="room_price">
			<p>Quantity of New Rooms: <input type="text" name="room_stock">
            <p>Details: <input type="textbox" name="room_details">
		   
						
			<p><input type="submit" name="savebtn" value="Save New Room Type">

		</form>

		<input type="button" value="View Room List" onclick="location='room_list.php'">
		<input type="button" value="View Booking List" onclick="location='bookinglist.php'">
</body>
</html>

<?php

if (isset($_POST["savebtn"]))	
{
	$rcode = $_POST["room_code"];
	$rtype= $_POST["room_type"];
	$rprice=$_POST["room_price"];
	$rstock=$_POST["room_stock"];
    $rdetails=$_POST["room_details"];
	
	
	
	$result = mysqli_query($connect,"SELECT * from room where room_code = '$rcode'" );
	$count=mysqli_num_rows($result);
	
	if ($count != 0)
	{
	?>
		<script>
			alert("Room ID already exist. Please change!");
		</script>
	<?php
	}
	else
	{
	   //else insert into database
		$success=mysqli_query($connect,"INSERT INTO room (room_code,room_type,room_price,room_stock,room_details)
		VALUES ('$rcode','$rtype','$rprice','$rstock','$rdetails')");
		
		if($success){
			?>
			<script>
				alert("Record saved!");
			</script>
			<?php
		}
	}
}

?>

