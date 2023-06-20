<?php include("dataconnection.php"); ?>
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
        header("refresh:0.5; url=roomtypelist.php");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Hotel Dashboard Template</title>
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="assets/plugins/datatables/datatables.min.css">
	<link rel="stylesheet" href="assets/css/feathericon.min.css">
	<link rel="stylesheet" href="assets/plugins/morris/morris.css">
	<link rel="stylesheet" href="assets/css/style.css"> </head>

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
	<div class="main-wrapper">
	<div class="header">
			<div class="header-left">
				<a href="index.php" class="logo"> <img src="assets/img/hotel_logo.png" width="50" height="70" alt="logo"> <span class="logoclass">HOTEL</span> </a>
				<a href="index.php" class="logo logo-small"> <img src="assets/img/hotel_logo.png" alt="Logo" width="30" height="30"> </a>
			</div>
			<a href="javascript:void(0);" id="toggle_btn"> <i class="fe fe-text-align-left"></i> </a>
			<a class="mobile_btn" id="mobile_btn"> <i class="fas fa-bars"></i> </a>
			<ul class="nav user-menu">
				
				
			</ul>
		</div>
		<div class="sidebar" id="sidebar">
			<div class="sidebar-inner slimscroll">
				<div id="sidebar-menu" class="sidebar-menu">
					<ul>
						<li> <a href="index.php"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a> </li>
						<li class="list-divider"></li>
						<li> <a href="all-booking.php"><i class="fas fa-suitcase"></i> <span> Booking </span></a></li>
						<li class="submenu"> <a href="#"><i class="fas fa-user"></i> <span> Customers </span> <span class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
								<li><a href="all-customer.php"> All customers </a></li>
								<li><a href="edit-customer.php"> Edit Customer </a></li>
								<li><a href="add-customer.php"> Add Customer </a></li>
							</ul>
						</li>
						<li class="submenu"> <a href="#"><i class="fas fa-key"></i> <span> Rooms </span> <span class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
								<li><a href="roomtypelist.php">Room Type List </a></li> <!--add room type list-->
								<li><a href="edit-room.php"> Edit Rooms </a></li>
								<li><a href="add-room.php"> Add Rooms </a></li>
							</ul>
						</li>
		
						<li> <a href="pricing_list.php"><i class="far fa-money-bill-alt"></i> <span>Pricing</span></a> </li>
		
						
						<li> <a href="invoices.php"><i class="fe fe-table"></i> <span>Invoice Reports </span> </span></a></li>

						<li> <a href="index.php"><i class="fas fa-sign-in-alt"></i> <span>GTY Hotel Website</span></a> </li>
		
						
					
						
					</ul>
				</div>
			</div>
		</div>
		<div class="page-wrapper">
			<div class="content container-fluid">
				<div class="page-header">
					<div class="row align-items-center">
						<div class="col">
							<div class="mt-5">
								<h4 class="card-title float-left mt-2">List of Room Type</h4> <a href="add-room.php" class="btn btn-primary float-right veiwbutton">Add Room</a> </div>
						</div>
					</div>
				</div>


					<div class="row">
					<div class="col-sm-12">
						<div class="card card-table">
							<div class="card-body booking_card">
								<div class="table-responsive">
									<table class="datatable table table-stripped table table-hover table-center mb-0" border="1">
										<thead >
											<tr>
											<th>Room code:</th>
											<th>Room Type:</th>
											<th>Room Price</th>
											<th>Room Stock</th>
											<th class="text-right" colspan="3">Actions</th>
											</tr>
										</thead>
										
										<tbody>
											<!-- <tr>
											<td>1</td>
												<td>Daily Rooms</td>
												<td>RM 90</td>
												<td>null</td>
												<td>
													<div class="actions"> <a href="#" class="btn btn-sm bg-success-light mr-2">Active</a> </div>
												</td>
												<td class="text-right">
													<div class="dropdown dropdown-action"> <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v ellipse_color"></i></a>
														<div class="dropdown-menu dropdown-menu-right"> <a class="dropdown-item" href="edit-room.php"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a> <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_asset"><i class="fas fa-trash-alt m-r-5"></i> Delete</a> </div>
													</div>
												</td>
											</tr>
											<tr>
												<td>2</td>
												<td>Exclusive Rooms</td>
												<td>RM 150</td>
												<td>null</td>
												<td>
													<div class="actions"> <a href="#" class="btn btn-sm bg-success-light mr-2">Inactive</a> </div>
												</td>
												<td class="text-right">
													<div class="dropdown dropdown-action"> <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v ellipse_color"></i></a>
														<div class="dropdown-menu dropdown-menu-right"> <a class="dropdown-item" href="edit-room.php"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a> <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_asset"><i class="fas fa-trash-alt m-r-5"></i> Delete</a> </div>
													</div>
												</td>
											</tr>
											<tr>
												<td>3</td>
												<td>Family Rooms</td>
												<td>RM 130</td>
												<td>null</td>
												<td>
													<div class="actions"> <a href="#" class="btn btn-sm bg-success-light mr-2">Active</a> </div>
												</td>
												<td class="text-right">
													<div class="dropdown dropdown-action"> <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v ellipse_color"></i></a>
														<div class="dropdown-menu dropdown-menu-right"> <a class="dropdown-item" href="edit-room.php"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a> <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_asset"><i class="fas fa-trash-alt m-r-5"></i> Delete</a> </div>
													</div>
												</td>
											</tr>

											<tr>
												<td>4</td>
												<td>Panoramic Rooms</td>
												<td>RM 120</td>
												<td>null</td>
												<td>
													<div class="actions"> <a href="#" class="btn btn-sm bg-success-light mr-2">Active</a> </div>
												</td>
												<td class="text-right">
													<div class="dropdown dropdown-action"> <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v ellipse_color"></i></a>
														<div class="dropdown-menu dropdown-menu-right"> <a class="dropdown-item" href="edit-room.php"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a> <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_asset"><i class="fas fa-trash-alt m-r-5"></i> Delete</a> </div>
													</div>
												</td>
											</tr>
											 -->

											 <?php
												$result=mysqli_query($connect,"SELECT * FROM room WHERE room_isdelete=0");
												while($row=mysqli_fetch_assoc($result)){
											?>
													<tr>
														<td><?php echo $row["room_code"]?></td>
														<td><?php echo $row["room_type"]?></td>
														<td><?php echo $row["room_price"]?></td>
														<td><?php echo $row["room_stock"]?></td>
														
														<td><a href="edit-room.php?edit&code=<?php echo $row["room_code"];?>">Edit</a></td>
														<td><a href="roomtypelist.php?del&code=<?php echo $row ["room_code"];?>" onclick="return confirmation();">Delete</a></td>
														<td><a href="bookingform.php?buy&code=<?php echo $row["room_code"];?>">Booking Now</a></td>
													</tr>
											<?php
												}	
											?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
				<!-- <div id="delete_asset" class="modal fade delete-modal" role="dialog">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-body text-center"> <img src="assets/img/sent.png" alt="" width="50" height="46">
								<h3 class="delete_class">Are you sure want to delete this Asset?</h3>
								<div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
									<button type="submit" class="btn btn-danger">Delete</button>
								</div>
							</div>
						</div>
					</div>
				</div>-->
		</div>
	</div> 

	<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
	<script src="assets/js/jquery-3.5.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/plugins/raphael/raphael.min.js"></script>
	<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="assets/plugins/datatables/datatables.min.js"></script>
	<script src="assets/js/script.js"></script>
</body>

</html>

