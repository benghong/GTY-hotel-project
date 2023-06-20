<?php include("dataconnection.php");?>

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
<span class="user-img"><img class="rounded-circle" src="assets/img/profiles/avatar-01.jpg" width="31" alt="Soeng Souy"></span>
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
						<li><a href="all-booking.php"> All Booking </a></li>
						<li><a href="edit-booking.php"> Edit Booking </a></li>
						<li><a href="add-booking.php"> Add Booking </a></li>
					</ul>
				</li>
				<li class="submenu"> <a href="#"><i class="fas fa-user"></i> <span> Customers </span> <span class="menu-arrow"></span></a>
					<ul class="submenu_class" style="display: none;">
						<li><a href="all-customer.php"> All customers </a></li>
						<li><a href="edit-customer.php"> Edit Customer </a></li>
						<li><a href="add-customer.php"> Add Customer </a></li>
					</ul>
				</li>
				<li class="submenu"> <a href="#"><i class="fas fa-key"></i> <span> Rooms </span> <span class="menu-arrow"></span></a>
					<ul class="submenu_class" style="display: none;">
						<li><a href="all-rooms.php">All Rooms </a></li>
						<li><a href="roomtypelist.php">Room Type List </a></li> <!--add room type list-->
						<li><a href="edit-room.php"> Edit Rooms </a></li>
						<li><a href="add-room.php"> Add Rooms </a></li>
					</ul>
				</li>

				<li> <a href="pricing.php"><i class="far fa-money-bill-alt"></i> <span>Pricing</span></a> </li>

				<li class="submenu"> <a href="#"><i class="fas fa-key"></i> <span> Calender </span> <span class="menu-arrow"></span></a>
					<ul class="submenu_class" style="display: none;">
				<li> <a href="calendar.php"><i class="fas fa-calendar-alt"></i> <span>Event Calendar</span></a> </li>
				<li><a href="room-calender.php">Room Calender </a></li>
					</ul>
				
				
				<li class="submenu"> <a href="#"><i class="fe fe-table"></i> <span> Reports </span> <span class="menu-arrow"></span></a>
					<ul class="submenu_class" style="display: none;">
						<li><a href="invoices.php">Invoice Report </a></li>
					</ul>
				</li>

				
			
				
			</ul>
		</div>
	</div>
</div>

<?php
		if(isset($_GET["edit"]))
		{
			$rtype=$_GET["room_type"];
			$result = mysqli_query($connect,"SELECT * FROM room WHERE room_type='$rtype'");
			$row=mysqli_fetch_assoc($result);
        }
?>



<div class="page-wrapper">
<div class="content container-fluid">
<div class="page-header">
<div class="row align-items-center">
<div class="col">
<h3 class="page-title mt-5">Edit Room</h3>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<form method="post" action="" >
							<div class="row formtype">
								<div class="col-md-4">
									<div class="form-group">
										<label>Room Code</label>
										<input class="form-control" type="text" name="room_code" value="<?php echo $row['room_code']; ?>" readonly>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Room Type</label>
										<input class="form-control" type="text" id="sel1" name="room_type" value="<?php echo $row['room_type'];  ?>" readonly>
						
									</div>
								</div>
							
								<div class="col-md-4">
									<div class="form-group">
										<label>Price</label>
										<input type="text" class="form-control" id="sel3" name="room_price" placeholder="Enter the price" value="<?php echo $row['room_price'];  ?>" >
								
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Quantity of Rooms:</label>
										<input type="number" class="form-control" id="" name="room_stock" value="<?php echo $row['room_stock'];  ?>">		
									</div>
								</div>
								
								<div class="col-md-4">
									<div class="form-group">
										<label>Details</label>
										<textarea class="form-control" rows="3" id="comment" name="room_details" value="<?php echo $row['room_details'];  ?>"></textarea>
									</div>
								</div>

						
					</div>
				</div>
				<input type="submit" name="savebtn" class="btn btn-primary buttonedit ml-3" value="Save Edited Room Type" >
				</form>
			</div>
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
if (isset($_POST["savebtn"])) 	
{
	$rtype = $_POST["room_type"];
	$rprice = $_POST["room_price"];
	$rstock = $_POST["room_stock"];
    $rdetails = $_POST["room_details"];

	mysqli_query($connect,"UPDATE room SET room_type='$rtype', room_price='$rprice', room_stock='$rstock',room_details='$rdetails' WHERE room_type='$rtype'");
?>
	<script>alert("Record is updated!")</script>
<?php
	header("refresh:0.5 url=roomtypelist.php"); //redirect user back to room_list.php
	
}

?>