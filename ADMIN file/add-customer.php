<?php include("dataconnection.php"); ?>


<?php

if (isset($_POST["addbtn"]))	
{
	$cid= $_POST["customer_id"];
	$cname= $_POST["customer_name"];
	$cemail=$_POST["customer_email"];
	$cphonenumber=$_POST["customer_phone_number"];
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
		$result = mysqli_query($connect, "SELECT MAX(customer_id) AS max_cus_num FROM customer");
		$row = mysqli_fetch_assoc($result);
		$latest_cus_num = $row['max_cus_num'];
		$new_cus_num = $latest_cus_num + 1;
	   //else insert into database
		$success=mysqli_query($connect,"INSERT INTO customer(customer_id,customer_name,customer_email,customer_phone_number,customer_password)
		VALUES ('$new_cus_num','$cname','$cemail','$cphonenumber','$cpassword')");


		
		
		if($success){
			?>
			<script>
				alert("Record saved!");
			</script>
			<?php
		}
	}
	header( "refresh:0.5; url=all-customer.php" );
	exit;
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
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="assets/css/feathericon.min.css">
	<link rel="stylesheet" href="assets/plugins/morris/morris.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-datetimepicker.min.css">
	<link rel="stylesheet" href="assets/css/style.css"> </head>

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
							<h3 class="page-title mt-5">Add Customer</h3> </div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
					<form name="addnewfrm" method="post" action="">
					
					<div class="row formtype">
					<div class="col-md-4">
					<div class="form-group">
					<label>Customer ID</label>
					<?php

							$result = mysqli_query($connect, "SELECT MAX(customer_id) AS max_cus_num FROM customer");
							$row = mysqli_fetch_assoc($result);
							$latest_cus_num = $row['max_cus_num'];
							$new_cus_num = $latest_cus_num + 1;
					?>

					<input class="form-control" type="text" name="customer_id" value = "<?php echo $new_cus_num; ?>" readonly>
					</div>
					</div>
					
					<div class="col-md-4">
					<div class="form-group">
					<label>Name</label>
					<input class="form-control" type="text" id="sel1" name="customer_name" required>
					</div>
					</div>
					</div>
				
				
					
					<div class="row formtype">
					<div class="col-md-4">
					<div class="form-group">
					<label>Email Address</label>
					<input type="text" class="form-control" id="usr" name="customer_email" required>
					</div>
					</div>
					<div class="col-md-4">
					<div class="form-group">
					<label>Phone Number</label>
					<input type="text" class="form-control" id="usr1" name="customer_phone_number" required>
					</div>
					</div>
					</div>

					<div class="col-md-4">
					<div class="form-group">
					<label>Password</label>
					<input class="form-control" type="text" id="sel1" name="customer_password" required>
					</div>
					</div>
					</div>
					
					</div>
				</div>
				<input type="submit" class="btn btn-primary buttonedit1" name="addbtn" value="Create Customer">
				</form>
			</div>
		</div>
	</div>
	<script src="assets/js/jquery-3.5.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/plugins/raphael/raphael.min.js"></script>
	<script src="assets/js/moment.min.js"></script>
	<script src="assets/js/bootstrap-datetimepicker.min.js"></script>
	<script src="assets/js/script.js"></script>
	<script>
	$(function() {
		$('#datetimepicker3').datetimepicker({
			format: 'LT'
		});
	});
	</script>
	</body>

</html>
