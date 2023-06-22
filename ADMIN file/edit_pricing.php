<?php include("dataconnection.php");

if(isset($_GET["edit"]))
		{
		 $roomtype=$_GET["roomtype"];
			

			$result = mysqli_query($connect, "SELECT * FROM pricing WHERE room_type='$roomtype'");
			$row = mysqli_fetch_assoc($result);
        }

if(isset($_POST["savebtn"])) 	
{
    $room_type=$_POST["room_type"];
	$room_price=$_POST["room_price"];
	$room_facilities=$_POST["room_facilities"];

	$sql=mysqli_query($connect,"UPDATE pricing SET room_type='$room_type',room_price='$room_price',room_facilities='$room_facilities' WHERE room_type='$roomtype'");
	
	if($sql)
	{
		?>
	<script>
		alert("Pricing Update");
	</script>
	
		<?php
	}

	
	header( "refresh:0.5; url=pricing_list.php" );
	
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

<link rel="stylesheet" href="assets/css/feathericon.min.css">
<link rel="stylesheet" href="assets/plugins/morris/morris.css">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-datetimepicker.min.css">

<link rel="stylesheet" href="assets/css/style.css">

</head>
<body>

<div class="main-wrapper">
<div class="header">

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
<h3 class="page-title mt-5">Edit Pricing</h3>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-12">

<form name="updatefrm" method="post" action="">

<div class="row formtype">
<div class="col-md-4">
<div class="form-group">
<label>Room Type</label>
<input class="form-control" type="text" name="room_type" value="<?php echo $row['room_type']; ?>" placeholder="Enter the new room type" required>
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label>Room Price</label>
<input class="form-control" type="number" name="room_price" value="<?php echo $row['room_price']; ?>" placeholder="Enter the new room price" required>
</div>
</div>

<div class="col-md-4">
<div class="form-group">
<label>Room Facilities</label>
<textarea cols="30" rows="6" class="form-control" name="room_facilities" placeholder="Enter room facilities" required><?php echo $row['room_facilities']; ?></textarea>

</div>
</div>

<input type="submit" class="btn btn-primary buttonedit" name="savebtn" value="Save Changes">

</form>
</div>
</div>

</div>
</div>

</div>


<script src="assets/js/jquery-3.5.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/moment.min.js"></script>

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>


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