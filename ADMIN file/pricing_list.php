<?php include("dataconnection.php");

if (isset($_GET["del"])) 
{ 

    $room_type=$_GET["roomtype"];
	$sql=mysqli_query($connect,"DELETE from pricing where room_type='$room_type'");
	
	if($sql)
	{
		?>
			<script>
				alert("Record Deleted.")
			</script>
		<?php
	}
	header("refresh:0.5; url=pricing_list.php");
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
<link rel="stylehseet" href="https://cdn.oesmith.co.uk/morris-0.5.1.css">
<link rel="stylesheet" href="assets/plugins/morris/morris.css">

<link rel="stylesheet" href="assets/css/style.css">


<script type="text/javascript">

function confirmation()
{
	var option;
	option=confirm("Do you want to delete this product?");
	return option;
}

</script>


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
<div class="content container-fluid">
<div class="page-header">
<div class="row align-items-center">
<div class="col">
<div class="mt-5">
<h4 class="card-title float-left mt-2">Pricing</h4>
<a href="add_pricing.php" class="btn btn-primary float-right veiwbutton">Add
Pricing</a>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-12">
<section class="pricing py-5">
<div class="container">
<div class="row  mt-5">

<?php
    
                 mysqli_select_db($connect,"gty");
				$result=mysqli_query($connect,"SELECT * FROM pricing");
				while($row=mysqli_fetch_assoc($result))
                    {
                    ?>


<div class="col-lg-3">
<div class="card mb-5 mb-lg-0">
<div class="card-body">
<h5 class="card-title text-muted text-uppercase text-center"><?php echo $row["room_type"]?></h5>
<h6 class="card-price text-center mt-3"><?php echo $row["room_price"]?><span class="period"></span>
</h6>

<?php
// Assuming $row["room_facilities"] contains the data from the "room_facilities" column in your database
$roomFacilities = $row["room_facilities"];

// Split the content by line breaks
$facilitiesArray = explode("\n", $roomFacilities);
?>

<hr>
<ul>
  <?php foreach ($facilitiesArray as $facility): ?>
    <li><span class="fa-li"></span><?php echo $facility; ?></li>
  <?php endforeach; ?>
</ul>
<a href="edit_pricing.php?edit&roomtype=<?php echo $row["room_type"];?>" class="btn btn-block btn-primary text-uppercase">Edit</a>
<a href="pricing_list.php?del&roomtype=<?php echo $row ["room_type"];?>" class="btn btn-block btn-primary text-uppercase" onclick="return confirmation();">Delete</a>
</div>
</div>
</div>

 <?php
                    }
 
 ?>






</div>
</div>
</section>
</div>
</div>
</div>
</div>

</div>


<script src="assets/js/jquery-3.5.1.min.js"></script>

<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="assets/plugins/raphael/raphael.min.js"></script>


<script src="assets/js/script.js"></script>
</body>
</html>
