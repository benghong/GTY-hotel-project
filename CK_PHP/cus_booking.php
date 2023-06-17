<?php include("dataconnection.php"); ?>

<html>
<head></head>
<body>
		<?php
		    if(isset($_GET["buy"]))
			{
			$rcode = $_GET["code"];

			$result = mysqli_query($connect, "SELECT * FROM room WHERE room_code='$rcode'");
			$row = mysqli_fetch_assoc($result);
			}
		?>

		
		<h1>Booking Page </h1>
        <h2>Room's Details </h2>
		
		<p>
		<br>Room Code : <?php echo $row["room_code"]; ?>
		<br>Room Type : <?php echo $row["room_type"];?>
		<br>Room Price : <?php echo $row["room_price"];?>
		<br>Room Stock : <?php echo $row["room_stock"];?>
        <br>Room Details: <?php echo $row["room_details"];?>

		</p>
		
		<h2>Please Key-in Customer Details</h2>

		<form name="purchasefrm" method="post" action="">

			<p>Customer Name:<input type="text" name="cus_name" ></p>
            <p>Customer Phone:<input type="text" name="cus_phone" ></p>
            <p>Customer Email:<input type="text" name="cus_email" ></p>
            <p>Customer Quantity:<input type="number" name="cus_qty" ></p>
			<p>Check-in Date:<input type="date" name="cus_checkin" ></p>
            <p>Check-in Time:<input type="time" name="cus_checkintime" ></p>
            <p>Check-out Date:<input type="date" name="cus_checkout" ></p>
            <p>Check-out Time:<input type="time" name="cus_checkouttime" ></p>

			<p><input type="submit" name="orderbtn" value="Send Order">

		</form>
	
</body>
</html>

<?php

if (isset($_POST["orderbtn"])) 	
{
	$cname = $_POST["cus_name"]; //retrive value from purchasefrm	
	$cphone = $_POST["cus_phone"];
    $cemail = $_POST["cus_email"];
    $cqty = $_POST["cus_qty"];
    $ccheckin = $_POST["cus_checkin"];
    $ccheckintime = $_POST["cus_checkintime"];
    $ccheckout = $_POST["cus_checkout"];
    $ccheckouttime = $_POST["cus_checkouttime"];

	$rprice = $row["room_price"];  //get room_price //retrieve from database
	$balance = $row["room_stock"] - 1;  
	
	
	if($balance>=0)
	{
		mysqli_query($connect, "INSERT INTO booking (cus_name, cus_phone, cus_email, cus_qty, cus_checkin, cus_checkintime, cus_checkout, cus_checkouttime, booking_room_code) values ('$cname','$cphone','$cemail','$cqty','$ccheckin','$ccheckintime','$ccheckout','$ccheckouttime','$rcode')");//insert data into purchase table

		mysqli_query($connect,"UPDATE room SET room_stock='$balance' where room_code='$rcode'");// update room table
		?>
            <script>
                alert("Booking is successfully placed");
            </script>
		<?php
		header("refresh:0.5 url=room_list.php"); //redirect user back to room_list.php
	
	}
	else
	{
		//display alert box
		?>
		<script>
			alert("Your quantity is more than the stock available.");
		</script>
		<?php
	}
	
}

?>