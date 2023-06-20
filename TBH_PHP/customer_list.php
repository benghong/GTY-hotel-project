<?php include("dataconnection.php"); ?>
<?php
    //remove room from room list
    if (isset($_GET["del"])) 
    {
        $code=$_GET["code"];
        //update room table and set room_isdelete to 1
        $sql=mysqli_query($connect,"UPDATE customer SET customer_isdelete=1 WHERE customer_id='$cid'")
        ?>
        <script>
            alert("Record Deleted.")
        </script>
        <?php
        header("refresh:0.5; url=customer_list.php");
    }
?>

<html>
<head></head>

<script type="text/javascript">
//delete confirmation
function confirmation()
{
	var option;
	option=confirm("Are you sure you want to delete this customer details?");
	return option;
}
</script>

<body>
    <!--list of room type-->
    <h1>List of Customer Details </h1>
    <table border="1" width="650px">
			<tr>
                <th>Customer ID</th>
				<th>Customer Name</th>
				<th>Customer Email</th>
				<th>Customer Phone Number</th>
                <th>Customer Registeration Date</th>	
                <th>Customer Password</th>					
				<th colspan="3">Actions</th>
			</tr>

            <?php
				$result=mysqli_query($connect,"SELECT * FROM customer WHERE customer_isDelete=0");
				while($row=mysqli_fetch_assoc($result)){
			?>
					<tr>
						<td><?php echo $row["customer_id"]?></td>
						<td><?php echo $row["customer_name"]?></td>
						<td><?php echo $row["customer_email"]?></td>
                        <td><?php echo $row["customer_phone_number"]?></td>
                        <td><?php echo $row["customer_register_date"]?></td>
                        <td><?php echo $row["customer_password"]?></td>
						 
						<td><a href="edit_customer.php?edit&code=<?php echo $row["customer_id"];?>">Edit</a></td>
						<td><a href="customer_list.php?del&code=<?php echo $row ["customer_id"];?>" onclick="return confirmation();">Delete</a></td>
			<?php
				}	
			?>
		</table>
</body>
</html>

