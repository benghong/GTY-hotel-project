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
