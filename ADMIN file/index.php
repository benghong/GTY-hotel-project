﻿<!DOCTYPE html>
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
	<link rel="stylehseet" href="https://cdn.oesmith.co.uk/morris-0.5.1.css">
	<link rel="stylesheet" href="assets/plugins/morris/morris.css">
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
					<div class="row">
						<div class="col-sm-12 mt-5">
							<h3 class="page-title mt-3">HI!</h3>
							<ul class="breadcrumb">
								<li class="breadcrumb-item active">Dashboard</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-3 col-sm-6 col-12">
						<div class="card board1 fill">
							<div class="card-body">
								<div class="dash-widget-header">
									<div>
										<h3 class="card_widget_header">100</h3>
										<h6 class="text-muted">Total Booking</h6> </div>
									<div class="ml-auto mt-md-3 mt-lg-0"> <span class="opacity-7 text-muted"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="#009688" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-plus">
									<path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
									<circle cx="8.5" cy="7" r="4"></circle>
									<line x1="20" y1="8" x2="20" y2="14"></line>
									<line x1="23" y1="11" x2="17" y2="11"></line>
									</svg></span> </div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 col-12">
						<div class="card board1 fill">
							<div class="card-body">
								<div class="dash-widget-header">
									<div>
										<h3 class="card_widget_header">20</h3>
										<h6 class="text-muted">Available Rooms</h6> </div>
									<div class="ml-auto mt-md-3 mt-lg-0"> <span class="opacity-7 text-muted"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="#009688" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign">
									<line x1="12" y1="1" x2="12" y2="23"></line>
									<path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
									</svg></span> </div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 col-12">
						<div class="card board1 fill">
							<div class="card-body">
								<div class="dash-widget-header">
									<div>
										<h3 class="card_widget_header">1538</h3>
										<h6 class="text-muted">Visited</h6> </div>
									<div class="ml-auto mt-md-3 mt-lg-0"> <span class="opacity-7 text-muted"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="#009688" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-plus">
									<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z">
									</path>
									<polyline points="14 2 14 8 20 8"></polyline>
									<line x1="12" y1="18" x2="12" y2="12"></line>
									<line x1="9" y1="15" x2="15" y2="15"></line>
									</svg></span> </div>
								</div>
							</div>
						</div>
					</div>
					
				</div>
				<div class="row">
					<div class="col-md-12 col-lg-6">
						<div class="card card-chart">
							<div class="card-header">
								<h4 class="card-title">VISITORS</h4> </div>
							<div class="card-body">
								<div id="line-chart"></div>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-lg-6">
						<div class="card card-chart">
							<div class="card-header">
								<h4 class="card-title">ROOMS BOOKED</h4> </div>
							<div class="card-body">
								<div id="donut-chart"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 d-flex">
						<div class="card card-table flex-fill">
							<div class="card-header">
								<h4 class="card-title float-left mt-2">Booking</h4>
								<button type="button" class="btn btn-primary float-right veiwbutton">Veiw All</button>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-hover table-center">
										<thead>
											<tr>
												<th>Customer ID</th>
												<th>Name</th>
												<th>Booking ID</th>	
												<th>Email ID</th>
												<th>Phone Number</th>
												<th class="text-center">Room Type</th>
												<th class="text-right">Room Number</th>
												<th class="text-center">Status</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td class="text-nowrap">
													<div>GTY-0001</div>
												</td>
												<td class="text-nowrap">Peter Parker</td>
												<td class="text-nowrap">
													<div>GTYB-0001</div>
												</td>
												<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3743585a5a4e55524559565b77524f565a475b521954585a">[email&#160;protected]</a></td>
												<td>012-3456789</td>
												<td class="text-center">Family Rooms</td>
												<td class="text-right">
													<div>A01-06</div>
												</td>
												<td class="text-center"> <span class="badge badge-pill bg-success inv-badge">CHECKED IN</span> </td>
											</tr>
											<tr>
												<td class="text-nowrap">
													<div>GTY-0002</div>
												</td>
												<td class="text-nowrap">Tan Beng Hong</td>
												<td class="text-nowrap">
													<div>GTYB-0002</div>
												</td>
												<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="89fbe0eae1e8fbedebfbe6ebfafdc9ecf1e8e4f9e5eca7eae6e4">[email&#160;protected]</a></td>
												<td>011-23456789</td>
												<td class="text-center">Daily Rooms</td>
												<td class="text-right">
													<div>B05-03</div>
												</td>
												<td class="text-center"> <span class="badge badge-pill bg-success inv-badge">CHECKED OUT</span> </td>
											</tr>
											<tr>
												<td class="text-nowrap">
													<div>GTY-0003</div>
												</td>
												<td class="text-nowrap">Gan Yik Lei</td>
												<td class="text-nowrap">
													<div>GTYB-0003</div>
												</td>
												<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="76131a1a1318021e1f1a1a36130e171b061a135815191b">[email&#160;protected]</a></td>
												<td>013-456789</td>
												<td class="text-center">Exclusive Rooms</td>
												<td class="text-right">
													<div>C07-02</div>
												</td>
												<td class="text-center"> <span class="badge badge-pill bg-success inv-badge">BOOKING</span> </td>
											</tr>
											<tr>
												<td class="text-nowrap">
													<div>GTY-0004</div>
												</td>
												<td class="text-nowrap">Lau She Hong</td>
												<td class="text-nowrap">
													<div>GTYB-0004</div>
												</td>
												<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="50333f22393e313b353c23352910373d31393c7e333f3d">[email&#160;protected]</a></td>
												<td>010-3456789</td>
												<td class="text-center">Panoramic Rooms</td>
												<td class="text-right">
													<div>A03-05</div>
												</td>
												<td class="text-center"> <span class="badge badge-pill bg-success inv-badge">CALCELLED</span> </td>
											</tr>
											<tr>
												<td class="text-nowrap">
													<div>GTY-0005</div>
												</td>
												<td class="text-nowrap">Peter Yew</td>
												<td class="text-nowrap">
													<div>GTYB-0005</div>
												</td>
												<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="1c7f7d6e73706572707d72795c7b717d7570327f7371">[email&#160;protected]</a></td>
												<td>014-3456789</td>
												<td class="text-center">Family Rooms</td>
												<td class="text-right">
													<div>C09-01</div>
												</td>
												<td class="text-center"> <span class="badge badge-pill bg-success inv-badge">CHECKED IN</span> </td>
											</tr>
										</tbody>
									</table>
								</div>
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
	<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/plugins/raphael/raphael.min.js"></script>
	<script src="assets/plugins/morris/morris.min.js"></script>
	<script src="assets/js/chart.morris.js"></script>
	<script src="assets/js/script.js"></script>
</body>

</html>