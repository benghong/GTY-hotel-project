<?php include("dataconnection.php"); ?>

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

<link rel="stylesheet" href="assets/css/feathericon.min.css">
<link rel="stylesheet" href="assets/plugins/morris/morris.css">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-datetimepicker.min.css">

<link rel="stylesheet" href="assets/css/style.css">

</head>
<body>

<div class="main-wrapper">

<div class="header">

<div class="header-left">
<a href="index.html" class="logo">
<img src="assets/img/hotel_logo.png" width="50" height="70" alt="logo">
<span class="logoclass">HOTEL</span>
</a>
<a href="index.html" class="logo logo-small">
<img src="assets/img/hotel_logo.png" alt="Logo" width="30" height="30">
</a>
</div>

<a href="javascript:void(0);" id="toggle_btn">
<i class="fe fe-text-align-left"></i>
</a>

<a class="mobile_btn" id="mobile_btn">
<i class="fas fa-bars"></i>
</a>


<ul class="nav user-menu">




<li class="nav-item dropdown has-arrow">
<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
<span class="user-img"><img class="rounded-circle" src="assets/img/profiles/avatar-01.jpg" width="31" alt="user"></span>
</a>
<div class="dropdown-menu">
<div class="user-header">
<div class="avatar avatar-sm">
<img src="assets/img/profiles/avatar-01.jpg" alt="User Image" class="avatar-img rounded-circle">
</div>
<div class="user-text">
	<h6>User</h6>
</div>
</div>
<a class="dropdown-item" href="profile.html">My Profile</a>
<a class="dropdown-item" href="login.html">Logout</a>
</div>
</li>

</ul>

</div>

<div class="sidebar" id="sidebar">
	<div class="sidebar-inner slimscroll">
		<div id="sidebar-menu" class="sidebar-menu">
			<ul>
				<li> <a href="index.html"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a> </li>
				<li class="list-divider"></li>
				<li class="submenu"> <a href="#"><i class="fas fa-suitcase"></i> <span> Booking </span> <span class="menu-arrow"></span></a>
					<ul class="submenu_class" style="display: none;">
						<li><a href="all-booking.html"> All Booking </a></li>
						<li><a href="edit-booking.html"> Edit Booking </a></li>
						<li><a href="add-booking.html"> Add Booking </a></li>
					</ul>
				</li>
				<li class="submenu"> <a href="#"><i class="fas fa-user"></i> <span> Customers </span> <span class="menu-arrow"></span></a>
					<ul class="submenu_class" style="display: none;">
						<li><a href="all-customer.html"> All customers </a></li>
						<li><a href="edit-customer.php"> Edit Customer </a></li>
						<li><a href="add-customer.php"> Add Customer </a></li>
					</ul>
				</li>
				<li class="submenu"> <a href="#"><i class="fas fa-key"></i> <span> Rooms </span> <span class="menu-arrow"></span></a>
					<ul class="submenu_class" style="display: none;">
						<li><a href="all-rooms.html">All Rooms </a></li>
						<li><a href="edit-room.html"> Edit Rooms </a></li>
						<li><a href="add-room.html"> Add Rooms </a></li>
					</ul>
				</li>

				<li> <a href="pricing.html"><i class="far fa-money-bill-alt"></i> <span>Pricing</span></a> </li>

				<li class="submenu"> <a href="#"><i class="fas fa-key"></i> <span> Calender </span> <span class="menu-arrow"></span></a>
					<ul class="submenu_class" style="display: none;">
				<li> <a href="calendar.html"><i class="fas fa-calendar-alt"></i> <span>Event Calendar</span></a> </li>
				<li><a href="room-calender.html">Room Calender </a></li>
					</ul>
				
				
				<li class="submenu"> <a href="#"><i class="fe fe-table"></i> <span> Reports </span> <span class="menu-arrow"></span></a>
					<ul class="submenu_class" style="display: none;">
						<li><a href="invoices.html">Invoice Report </a></li>
					</ul>
				</li>

				<li> <a href="index.html"><i class="fas fa-sign-in-alt"></i> <span>GTY Hotel Website</span></a> </li>
		
			</ul>
		</div>
	</div>
</div>

<div class="page-wrapper">
<div class="content container-fluid">
<div class="page-header">
<div class="row align-items-center">
<div class="col">
<h3 class="page-title mt-5">Edit Customer</h3>
</div>
</div>
</div>

<div class="row">
	<div class="col-lg-12">
	<form name="updatefrm" method="post" action="">
	
	<div class="row formtype">
	<div class="col-md-4">
	<div class="form-group">
	<label>Customer ID</label>
	<input class="form-control" type="text" value="1" name="customer_id" >
	</div>
	</div>
	
	<div class="col-md-4">
	<div class="form-group">
	<label>Name</label>
	<input class="form-control" type="text" id="sel1" name="customer_name">
	</div>
	</div>
	</div>

	<div class="row formtype">
	
	<div class="col-md-4">
	<div class="form-group">
	<label>Email ID</label>
	<input type="text" class="form-control" id="usr" name="customer_email">
	</div>
	</div>
	<div class="col-md-4">
	<div class="form-group">
	<label>Phone Number</label>
	<input type="text" class="form-control" id="usr1"  name="customer_phone_number">
	</div>
	</div>
	</div>

	<div class="col-md-4">
	<div class="form-group">
	<label>Customer Password</label>
	<input class="form-control" type="text"  name="customer_password">
	</div>
	</div>
	
	</div>
	</div>

<input type="submit" class="btn btn-primary buttonedit" name="savebtn" value="Save Changes">
</form>

</div>
</div>




<script src="assets/js/jquery-3.5.1.min.js"></script>

<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/moment.min.js"></script>
<script src="assets/js/select2.min.js"></script>

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="assets/plugins/raphael/raphael.min.js"></script>

<script src="assets/js/bootstrap-datetimepicker.min.js"></script>

<script src="assets/js/script.js"></script>
<script>
		$(function () {
			$('#datetimepicker3').datetimepicker({
				format: 'LT'

			});
		});
	</script>
</body>
</html>

<?php

if(isset($_GET["edit"]))
		{
		 	$cid=$_GET["customer_id"];
			$result = mysqli_query($connect, "SELECT * FROM customer WHERE customer_id='$cid'");
			$row = mysqli_fetch_assoc($result);
        }

if(isset($_POST["savebtn"])) 	
{
	$cid= $_POST["customer_id"];
	$cname= $_POST["customer_name"];
	$cemail=$_POST["customer_email"];
	$cphonenumber=$_POST["customer_phone_number"];
	$cpassword=$_POST["customer_password"];
	?><script>console.log("<?php echo $cname; ?>") </script>
	<?php

	$success=mysqli_query($connect,"UPDATE customer SET customer_id='$cid', customer_name='$cname', customer_email='$cemail', customer_phone_number='$cphonenumber',customer_password=$cpassword WHERE customer_id='$cid'");
	
	if($success)
	{
		?>
	<script>
		alert("Customer Table Updated");
	</script>
	
		<?php
	}

	
	header( "refresh:0.5; url=edit-customer.php");
	
}

?>