<?php include("dataconnection.php"); ?>

<html>
<head></head>
<body>
		<h1>List of Booking Details</h1>

		<table border="1" width="750px">
			<tr>
				<th>Customer Id</th>
				<th>Customer Name</th>
                <th>Customer Phone</th>
                <th>Customer Email</th>							
				<th>Checkin Date</th>
				<th>Checkout Date</th>
                <th>Checkin Time</th>
                <th>Checkout Time</th>
                <th>Customer Quantity</th>
                <th>Booking:Room Type</th>
				<th>Booking:Room Price (RM)</th>
			</tr>
			
			<?php
                $result = mysqli_query($connect, "SELECT * from room,booking WHERE room_type=booking_room_type");	//select attributes from 2 tables
                $count = mysqli_num_rows($result);
			
                if ($count < 1)
                {
			?>
                    <tr>
                        <td colspan="9">No Records Found</td>
                    </tr>
			<?php
                }

                else
                {
                    while($row=mysqli_fetch_assoc($result)){
            ?>	
                	
				<tr>
					<td><?php echo $row["cus_id"]?></td>
					<td><?php echo $row["cus_name"]?></td>		
                    <td><?php echo $row["cus_phone"]?></td>					
					<td><?php echo $row["cus_email"]?></td>
					<td><?php echo $row["cus_checkin"]?></td>
                    <td><?php echo $row["cus_checkout"]?></td>
                    <td><?php echo $row["cus_checkintime"]?></td>
                    <td><?php echo $row["cus_checkouttime"]?></td>
                    <td><?php echo $row["cus_qty"]?></td>
                    <td><?php echo $row["booking_room_type"]?></td>
                    <td><?php echo $row["booking_room_price"]?></td>
					
				</tr>
			<?php
                    }
                }
				    
			    
			
			?>
		</table>
	
</body>
</html>
