<?php include("dataconnection.php"); ?>

<html>
<head></head>

<script type="text/javascript">
//delete confirmation
function confirmation()
{
	var option;
	option=confirm("Are you sure you want to delete this room type?");
	return option;
}
</script>

<body>
    <!--list of room type-->
    <h1>List of Room Type </h1>
    <table border="1" width="650px">
			<tr>
                <th>Room Code</th>
				<th>Room Type</th>
				<th>Room Price</th>
				<th>Room Stock</th>				
				<th colspan="3">Actions</th>
			</tr>

            <?php
				$result=mysqli_query($connect,"SELECT * FROM room WHERE room_isdelete=0");
				while($row=mysqli_fetch_assoc($result)){
			?>
					<tr>
						<td><?php echo $row["room_code"]?></td>
						<td><?php echo $row["room_type"]?></td>
						<td><?php echo $row["room_price"]?></td>
                        <td><?php echo $row["room_stock"]?></td>
						
						<td><a href="edit.php?edit&code=<?php echo $row["customer_id"];?>">Edit</a></td>
						<td><a href="room_list.php?del&code=<?php echo $row ["room_code"];?>" onclick="return confirmation();">Delete</a></td>
						<td><a href="cus_booking.php?buy&code=<?php echo $row["room_code"];?>">Booking Now</a></td>
					</tr>
			<?php
				}	
			?>
		</table>
</body>
</html>

<?php
    //remove room from room list
    if (isset($_GET["del"])) 
    {
        $code=$_GET["code"];
        //update room table and set room_isdelete to 1
        $sql=mysqli_query($connect,"UPDATE room SET room_isdelete=1 WHERE room_code='$rcode'")
        ?>
        <script>
            alert("Record Deleted.")
        </script>
        <?php
        header("refresh:0.5; url=room_list.php");
    }
?>