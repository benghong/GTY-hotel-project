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

<link rel="stylesheet" href="assets/plugins/datatables/datatables.min.css">
<link rel="stylesheet" href="assets/plugins/morris/morris.css">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-datetimepicker.min.css">

<link rel="stylesheet" href="assets/css/style.css">

</head>
<body>

<div class="main-wrapper">


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
		<input class="form-control" type="text" name="inv_num" >
		</div>
	</div>

</div>

<div class="row">

	<div class="col-md-3">
		<div class="form-group">
			<label>Customer Name</label>
			<input class="form-control" type="text" id="sel1" name="cust_name">
			</div>
		</div>
		

<div class="col-md-3">
	<div class="form-group">
	<label>Invoice date <span class="text-danger">*</span></label>
	<div class="cal-icon">
	<input type="date" name="inv_date">
	</div>
	</div>
	</div>


<div class="col-md-3">
	<div class="form-group">
		<label>Amount</label>
		<input class="form-control" type="text" name="inv_amount" >
		</div>
</div>

<div class="col-md-3">
<div class="form-group">
<label>In/Out Customer</label>
<select class="form-control" id="sel1" name="inv_status">
<option value="in_customer">In Customer</option>
<option value="out_customer">Out Customer</option>
</select>
</div>
</div>
</div>





</div>


<p><input type="submit" name="savebtn" value="Save">
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
	
	   //else insert into database
		$sql=mysqli_query($connect,"INSERT INTO invoice(invoice_number,invoice_customer_name,invoice_date,invoice_amount,invoice_status) VALUES ('$invnum','$cname','$invdate','$invamount','$invstatus')");

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