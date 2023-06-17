<?php include("dataconnection.php"); ?>

<html>
<head>

</head>
<body>


		<h1>Add New Customer Details</h1>

		<form name="addnewfrm" method="post" action="">

			<p>Customer ID: <input type="text" name="customer_id" >
			<p>Customer Name: <input type="text" name="customer_name">
			<p>Customer Email: <input type="text" name="customer_email">
			<p>Customer Phone Number: <input type="text" name="customer_phonenumber">
            <p>Customer Registeration Date: <input type="date" name="customer_registerdate">
		    <p>Customer Password: <input type="textbox" name="customer_password">
						
			<p><input type="submit" name="savebtn" value="Save New Customer">

		</form>

		<input type="button" value="view customer list" onclick="location='customer_list.php'">
		<input type="button" value="View Booking List" onclick="location='bookinglist.php'">
</body>
</html>

<?php

if (isset($_POST["savebtn"]))	
{
	$cid = $_POST["customer_id"];
	$cname= $_POST["customer_name"];
	$cemail=$_POST["customer_email"];
	$cphonenumber=$_POST["customer_phonenumber"];
    $cregisterdate=$_POST["customer_registerdate"];
    $cpassword=$_POST["customer_password"];
	
	
	$result = mysqli_query($connect,"SELECT * from customer where customer_id = '$cid'" );
	$count=mysqli_num_rows($result);
	
	if ($count != 0)
	{
	?>
		<script>
			alert("Customer ID already exist. Please change!");
		</script>
	<?php
	}
	else
	{
	   //else insert into database
		$success=mysqli_query($connect,"INSERT INTO customer (customer_id, customer_name, customer_email, customer_phonenumber, customer_registerdate, customer_password )
		VALUES ('$cid','$cname','$cemail','$cphonenumber','$cregisterdate','$cpassword')");
		
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