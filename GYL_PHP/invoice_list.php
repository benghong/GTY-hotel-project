<?php include("dataconnection.php"); ?>
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
<link rel="stylesheet" href="assets/plugins/datatables/datatables.min.css">

<link rel="stylesheet" href="assets/plugins/datatables/datatables.min.css">
<link rel="stylesheet" href="assets/plugins/morris/morris.css">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-datetimepicker.min.css">

<link rel="stylesheet" href="assets/css/style.css">

</head>

<script type="text/javascript">

function confirmation()
{
	var option;
	option=confirm("Do you want to delete this product?");
	return option;
}

</script>
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
						<li><a href="all-booking.html"> All Booking </a></li>
						<li><a href="edit-booking.html"> Edit Booking </a></li>
						<li><a href="add-booking.html"> Add Booking </a></li>
					</ul>
				</li>
				<li class="submenu"> <a href="#"><i class="fas fa-user"></i> <span> Customers </span> <span class="menu-arrow"></span></a>
					<ul class="submenu_class" style="display: none;">
						<li><a href="all-customer.html"> All customers </a></li>
						<li><a href="edit-customer.html"> Edit Customer </a></li>
						<li><a href="add-customer.html"> Add Customer </a></li>
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
<div class="content container-fluid">
<div class="page-header">
<div class="row align-items-center">
<div class="col">
<div class="mt-5">
<h4 class="card-title float-left mt-2">Invoices</h4>
<a href="create-invoice.php" class="btn btn-primary float-right veiwbutton">Create New
Invoice</a>
</div>
</div>
</div>
</div>

<div class="row">
<div class="col-lg-12">
<form name="search_form" method="GET" action="">
<div class="row formtype">
<div class="col-md-3">
<div class="form-group">
<label>From</label>
<div class="cal-icon">
<input type="date" name="searchinvfrom">
</div>
</div>
</div>

<div class="col-md-3">
<div class="form-group">
<label>To</label>
<div class="cal-icon">
<input type="date" name="searchinvto">
</div>
</div>
</div>

<div class="col-md-3">
<div class="form-group">
<label>In/Out Customer</label>
<select class="form-control" id="sel1" name="searchstatus">
<option>Select</option>   
<option value="in_customer">In Customer</option>
<option value="out_customer">Out Customer</option>
</select>
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label>Search</label>
<input type="submit" value="Search" class="btn btn-success btn-block mt-0 search_button" name="searchbtn">

</div>
</div>
</div>
</form>
</div>
</div>

<h5 class="card-title float-left mt-2">Invoices Search</h5>

<div class="row">
<div class="col-sm-12">
<div class="card card-table">

<div class="card-body booking_card">
<div class="table-responsive">
<table class="datatable table table-stripped table table-hover table-center mb-0">
<thead>
<tr>
<th>Invoice Number</th>
<th>Name</th>
<th>Created Date</th>
<th>Amount</th>
<th class="text-right">In/Out Customer</th>
<th class="text-right">Actions</th>
</tr>
</thead>

<?php
if(isset($_GET["searchbtn"]))
{
    $invfrom=$_GET["searchinvfrom"];
    $invsearchto=$_GET["searchinvto"];
    $invsearchstatus=$_GET["searchstatus"];
    $result=mysqli_query($connect,"SELECT * FROM invoice WHERE (invoice_date BETWEEN '$invfrom' AND '$invsearchto') OR (invoice_status = '$invsearchstatus') AND (invoice_isDelete=0)");
    
    
    if(mysqli_num_rows($result)==0)
    {
        echo "<br> Result could not be found!";
    }

    else
    {
        
        while($row=mysqli_fetch_assoc($result))
        {
            ?>


                <tbody>
                <tr>
                <td><?php echo $row["invoice_number"];?></td>
                <td><?php echo $row["invoice_customer_name"];?></td>
                <td><?php echo $row["invoice_date"];?></td>
                <td><?php echo "RM".$row["invoice_amount"];?></td>
                <td class="text-right">
                <div class="actions">
                <a href="#" class="btn btn-sm bg-success-light mr-2">
                <?php echo $row["invoice_status"];?>
                </a>
                </div>
                </td>

                <td class="text-right">
                <div class="dropdown dropdown-action">
                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v ellipse_color"></i></a>
                <div class="dropdown-menu dropdown-menu-right"> 
                    <a class="dropdown-item" href="edit-invoice.php?edit&invnum=<?php echo$row["invoice_number"];?>"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a> 
                    <a class="dropdown-item" href="invoice_list.php?del&invnum=<?php echo $row ["invoice_number"];?>" onclick="return confirmation();">Delete</a> </div>
                </div>
                </div>
                </td>
                </tr>
                </tbody>



            <?php
        }

        
        
    }
    


}


?>

</table>
</div>
</div>
</div>
</div>
</div>

<h5 class="card-title float-left mt-2">Invoice List</h5>

<div class="row">
<div class="col-sm-12">
<div class="card card-table">

<div class="card-body booking_card">
<div class="table-responsive">
<table class="datatable table table-stripped table table-hover table-center mb-0">
<thead>
<tr>
<th>Invoice Number</th>
<th>Name</th>
<th>Created Date</th>
<th>Amount</th>
<th class="text-right">In/Out Customer</th>
<th class="text-right">Actions</th>
</tr>
</thead>


<?php
$result=mysqli_query($connect,"SELECT * FROM invoice WHERE invoice_isDelete=0");
while($row=mysqli_fetch_assoc($result)){
?>
<tbody>
<tr>
<td><?php echo $row["invoice_number"];?></td>
<td><?php echo $row["invoice_customer_name"];?></td>
<td><?php echo $row["invoice_date"];?></td>
<td><?php echo "RM".$row["invoice_amount"];?></td>
<td class="text-right">
<div class="actions">
<a href="#" class="btn btn-sm bg-success-light mr-2">
<?php echo $row["invoice_status"];?>
</a>
</div>
</td>

<td class="text-right">
<div class="dropdown dropdown-action">
<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v ellipse_color"></i></a>
<div class="dropdown-menu dropdown-menu-right"> 
    <a class="dropdown-item" href="edit-invoice.php?edit&invnum=<?php echo$row["invoice_number"];?>"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a> 
    <a class="dropdown-item" href="invoice_list.php?del&invnum=<?php echo $row ["invoice_number"];?>" onclick="return confirmation();"> Delete</a> </div>
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

</div>


<script src="assets/js/jquery-3.5.1.min.js"></script>

<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/moment.min.js"></script>
<script src="assets/js/select2.min.js"></script>

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="assets/plugins/datatables/datatables.min.js"></script>
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

<?php

if (isset($_GET["del"])) 
{
	$invnum=$_GET["invnum"];

	$sql=mysqli_query($connect,"UPDATE invoice SET invoice_isDelete=1 WHERE invoice_number='$invnum'");
	
    
        ?>
            <script>
                alert("Record Deleted.");
            </script>
        <?php
 header( "refresh:0.5; url=pricing_list.php" );   
}
    
	
?>