<?php include("dataconnection.php"); ?>

<html>
<head></head>
<body>
<?php
		    if (isset($_GET["edit"])) 
			{
				$cid=$_GET["code"];
				$result = mysqli_query($connect,"SELECT * FROM customer WHERE customer_id='$cid'");
				$row=mysqli_fetch_assoc($result);
			}
		?>
	
		<h1>Update Customer Details</h1>

		<form name="updatefrm" method="post" action="">

			<p>Customer ID: <input type="text" name="customer_id"  value="<?php echo $row["customer_id"];?>" disabled>
			<p>Customer Name: <input type="text" name="customer_name"  value="<?php echo $row["customer_name"];?>">
			<p>Customer Email: <input type="text" name="customer_email" value="<?php echo $row["customer_email"];?>">
			<p>Customer Phone Number: <input type="text" name="customer_phone_number"  value="<?php echo $row["customer_phone_number"];?>">
            <p>Customer Registeration Date: <input type="date" name="customer_register_date" value="<?php echo $row["customer_register_date"];?>">
            <p>Customer Password: <input type="text" name="customer_password"  value="<?php echo $row["customer_password"];?>">
			<p><input type="submit" name="savebtn" value="Update customer details">
		</form>
	
</body>
</html>
<?php

if (isset($_POST["savebtn"])) 	
{
	$cid = $_POST["customer_id"];
	$cname= $_POST["customer_name"];
	$cemail= $_POST["customer_email"];
	$cphonenumber= $_POST["customer_phone_number"];
    $cregisterdate= $_POST["customer_register_date"];
    $cpassword= $_POST["customer_password"];

	mysqli_query($connect,"UPDATE customer SET customer_name='$cname', customer_email='$cemail', customer_phone_number='$cphonenumber',customer_password='$cpassword' WHERE customer_id='$cid'");
?>
	<script>alert("Record is updated!")</script>
<?php
	header("refresh:0.5 url=customer_list.php"); //redirect user back 
	
}

?>