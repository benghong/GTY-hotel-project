<?php
include("dataconnection.php");

if (isset($_POST["savebtn"])) 	
{
	$invnum=$_POST["inv_num"];
	$cname=$_POST["cust_name"];
	$invdate=$_POST["inv_date"];
	$invamount=$_POST["inv_amount"];
	$invstatus=$_POST["inv_status"];

	$result=mysqli_query($connect,"SELECT * FROM invoice WHERE invoice_number='$invnum'");


    $count=mysqli_num_rows($result);
	
	if ($count != 0)
	{
	?>
		<script>
			alert("The Invoice Number is already in use.Please change!");
		</script>
	<?php
	}
	else
	{
	
		$result = mysqli_query($connect, "SELECT MAX(invoice_number) AS max_inv_num FROM invoice");
        $row = mysqli_fetch_assoc($result);
        $latest_inv_num = $row['max_inv_num'];
        $new_inv_num = $latest_inv_num + 1;

        // Insert into the database
        $sql=mysqli_query($connect,"INSERT INTO invoice(invoice_number,invoice_customer_name,invoice_date,invoice_amount,invoice_status) VALUES ('$new_inv_num','$cname','$invdate','$invamount','$invstatus')");

        if($sql)
        {
            ?>
            <script>
                alert("Record Saved!");
            </script>
            <?php
        }
    }
    header( "refresh:0.5; url=invoice_list.php" );
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

<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">

<link rel="stylesheet" href="assets/css/feathericon.min.css">

<link rel="stylesheet" href="assets/plugins/datatables/datatables.min.css">
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
						<li><a href="edit-customer.html"> Edit Customer </a></li>
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

				
			
				
			</ul>
		</div>
	</div>
</div>


<div class="page-wrapper">
<div class="content mt-5">
<div class="row mt-5">
<div class="col-sm-12">
<h4 class="page-title">Create Invoice</h4>
</div>
</div>

<form name="addnewfrm" method="post" action="">
<div class="row">
<div class="col-sm-12">
<div class="row mt-5">

	<div class="col-md-3">
	<div class="form-group">
		<label>Invoice Number</label>
		<?php
                                    // Fetch the latest invoice number from the database
                                    $result = mysqli_query($connect, "SELECT MAX(invoice_number) AS max_inv_num FROM invoice");
                                    $row = mysqli_fetch_assoc($result);
                                    $latest_inv_num = $row['max_inv_num'];
                                    $new_inv_num = $latest_inv_num + 1;
                                    ?>
		<input class="form-control" type="text" name="inv_num" value="<?php echo $new_inv_num; ?>" readonly>
		</div>
	</div>

</div>

<div class="row">

	<div class="col-md-3">
		<div class="form-group">
			<label>Customer Name</label>
			<input class="form-control" type="text" id="sel1" name="cust_name" placeholder="Enter customer name" required>
			</div>
		</div>
		

<div class="col-md-3">
	<div class="form-group">
	<label >Invoice date <span class="text-danger">*</span></label>
	<div class="cal-icon">
	<input type="date" name="inv_date" required>
	</div>
	</div>
	</div>


<div class="col-md-3">
	<div class="form-group">
		<label>Amount</label>
		<input class="form-control" type="text" name="inv_amount" placeholder="Enter amount" required>
		</div>
</div>

<div class="col-md-3">
<div class="form-group">
<label>In/Out Customer</label>
<select class="form-control" id="sel1" name="inv_status" required>
<option value="">Select an option</option>
<option value="in_customer">In Customer</option>
<option value="out_customer">Out Customer</option>
</select>
</div>
</div>
</div>





</div>


<input type="submit" class="btn btn-primary buttonedit" name="savebtn" value="Add Invoice">
</form>
</div>
</div>
</div>
</div>
</div>

</div>


<script src="assets/js/jquery-3.5.1.min.js"></script>

<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/moment.min.js"></script>
<script src="assets/js/select2.min.js"></script>

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<script src="assets/js/bootstrap-datetimepicker.min.js"></script>

<script src="assets/plugins/datatables/datatables.min.js"></script>
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
