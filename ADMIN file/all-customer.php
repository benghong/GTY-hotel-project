﻿<?php include("dataconnection.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Hotel Dashboard Template</title>
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
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
				<a href="index.html" class="logo"> <img src="assets/img/hotel_logo.png" width="50" height="70" alt="logo"> <span class="logoclass">HOTEL</span> </a>
				<a href="index.html" class="logo logo-small"> <img src="assets/img/hotel_logo.png" alt="Logo" width="30" height="30"> </a>
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
						<li> <a href="index.html"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a> </li>
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
								<h4 class="card-title float-left mt-2">Customers</h4> <a href="add-customer.php" class="btn btn-primary float-right veiwbutton">Add Customers</a> </div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="card card-table">
							<div class="card-body booking_card">
								<div class="table-responsive">
									<table class="datatable table table-stripped table table-hover table-center mb-0">
										<thead>
											<tr>
												<th>Customer ID</th>
												<th>Name</th>
												<th>Email ID</th>
												<th>Ph.Number</th>
												<th>Password</th>

												
												<th class="text-right">Actions</th>
											</tr>
										</thead>

										<?php
			$result=mysqli_query($connect,"SELECT * FROM customer WHERE customer_isDelete=0");
			while($row=mysqli_fetch_assoc($result)){
			?>
			<tbody>
			<tr>
			<td><?php echo $row["customer_id"];?></td>
			<td><?php echo $row["customer_name"];?></td>
			<td><?php echo $row["customer_email"];?></td>
			<td><?php echo $row["customer_phone_number"];?></td>
			<td><?php echo $row["customer_password"];?></td>
			

			<td class="text-right">
			<div class="dropdown dropdown-action">
			<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v ellipse_color"></i></a>
			<div class="dropdown-menu dropdown-menu-right"> 
				<a class="dropdown-item" href="edit-customer.php?edit&code=<?php echo$row["customer_id"];?>"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a> 
				<a class="dropdown-item" href="all-customer.php?del&code=<?php echo $row ["customer_id"];?>" onclick="return confirmation();"><i class="fas fa-trash-alt"></i>  Delete</a> </div>
			</div>
			</div>
			</td>
			</tr>
			</tbody>
			<?php
			}
			?>

									
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="delete_asset" class="modal fade delete-modal" role="dialog">
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
			</div>
		</div>
	</div>
	<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
	<script src="assets/js/jquery-3.5.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="assets/plugins/datatables/datatables.min.js"></script>
	<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/plugins/raphael/raphael.min.js"></script>
	<script src="assets/js/script.js"></script>
</body>

</html>

<?php
    //remove customer from customer list
    if (isset($_GET["del"])) 
    {
        $code=$_GET["code"];
		$cid = $_POST["customer_id"];
        //update customer table and set customer_isdelete to 1
        $sql=mysqli_query($connect,"UPDATE customer SET customer_isDelete=1 WHERE customer_id ='$code'")
        ?>
        <script>
            alert("Record Deleted.")
        </script>
        <?php
        header("refresh:0.5; url=all-customer.php");
    }
?>