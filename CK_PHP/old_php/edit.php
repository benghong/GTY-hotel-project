<?php include("dataconnection.php"); ?>

<html>
<head></head>
<body>
<?php
		    if (isset($_GET["edit"])) 
			{
				$rcode=$_GET["code"];
				$result = mysqli_query($connect,"SELECT * FROM room WHERE room_code='$rcode'");
				$row=mysqli_fetch_assoc($result);
			}
		?>
	
		<h1>Update Room Details</h1>

		<form name="updatefrm" method="post" action="">

			<p>Room Code: <input type="text" name="room_code"  value="<?php echo $row["room_code"];?>"  disabled>
			<p>Room Type: <input type="text" name="room_type"  value="<?php echo $row["room_type"];?>">
			<p>Room Price: <input type="text" name="room_price" value="<?php echo $row["room_price"];?>">
			<p>Room Stock: <input type="number" name="room_stock"  value="<?php echo $row["room_stock"];?>">
            <p>Room Details: <input type="textbox" name="room_details" value="<?php echo $row["room_details"];?>">
			<p><input type="submit" name="savebtn" value="Update room details">
		</form>
	
</body>
</html>
<?php

if (isset($_POST["savebtn"])) 	
{
	$rtype = $_POST["room_type"];
	$rprice = $_POST["room_price"];
	$rstock = $_POST["room_stock"];
    $rdetails = $_POST["room_details"];

	mysqli_query($connect,"UPDATE room SET room_type='$rtype', room_price='$rprice', room_stock='$rstock',room_details='$rdetails' WHERE room_code='$rcode'");
?>
	<script>alert("Record is updated!")</script>
<?php
	header("refresh:0.5 url=bookinglist.php"); //redirect user back to room_list.php
	
}

?>