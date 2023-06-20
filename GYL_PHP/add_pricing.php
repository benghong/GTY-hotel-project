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
	<link rel="stylesheet" href="assets/plugins/morris/morris.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-datetimepicker.min.css">
	<link rel="stylesheet" href="assets/css/style.css"> </head>

<body>
	<div class="main-wrapper">
		<div class="header">
			
		<div class="page-wrapper">
			<div class="content container-fluid">
				<div class="page-header">
					<div class="row align-items-center">
						<div class="col">
							<h3 class="page-title mt-5">Add Pricing</h3> </div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<form name="addnewfrm" method="post" action="">
							<div class="row formtype">
								<div class="col-md-4">
									<div class="form-group">
										<label>Room Type</label>
										<input class="form-control" type="text" name="room_type"> </div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Room Price</label>
										<input type="text" class="form-control" id="usr" name="room_price"> </div>
								</div>
								<div class="col-md-4">
                                        <div class="form-group">
                                        <label>Room Facilities</label>
                                        <textarea cols="30" rows="6" class="form-control" name=room_facilities></textarea>
                                        </div>
                                        </div>
								</div>


                                <div class="col-md-4">
                                <div class="form-group">
                                <label class="display-block">Pricing Status</label>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status" id="pricing_active" value="0" checked>
                                <label class="form-check-label" for="pricing_active">
                                Active
                                </label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status" id="pricing_inactive" value="1">
                                <label class="form-check-label" for="pricing_inactive">
                                Inactive
                                </label>
                                </div>

							</div>
						</form>
					</div>
				</div>
				<p><input type="submit" name="savebtn" value="Save Pricing">
			</div>
		</div>
	</div>
	<script src="assets/js/jquery-3.5.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/moment.min.js"></script>
	<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/plugins/raphael/raphael.min.js"></script>
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

<?php
if (isset($_POST["savebtn"])) 	
{
	$room_type=$_POST["room_type"];
	$room_price=$_POST["room_price"];
	$room_facilities=$_POST["room_facilities"];
    $pricing_status=$_POST["status"];


	$result=mysqli_query($connect,"SELECT * FROM pricing WHERE room_type='$room_type'");
	$count=mysqli_num_rows($result);
	
	if ($count != 0)
	{
	?>
		<script>
			alert("The room type is already in use.Please change!");
		</script>
	<?php
	}
	else
	{
	
	   //else insert into database
		$sql=mysqli_query($connect,"INSERT INTO pricing(room_type,room_price,room_facilities,pricing_status) VALUES ('$room_type','$room_price','$room_facilities','$pricing_status')");

		if($sql)
		{
			?>
				<script>
					alert("Record Saved!");
				</script>

			<?php
		}
	
	
	}
}




?>