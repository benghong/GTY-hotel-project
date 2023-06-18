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


<?php
		if(isset($_GET["edit"]))
		{
		 $invnum=$_GET["inv_num"];
			

			$result = mysqli_query($connect, "SELECT * FROM invoice WHERE inv_num='$invnum'");
			$row = mysqli_fetch_assoc($result);
        }
		?>


<div class="page-wrapper">
<div class="content mt-5">
<div class="row mt-5">
<div class="col-sm-12">
<h4 class="page-title">Edit Invoice</h4>
</div>
</div>

<form name="updatefrm" method="post" action="">
<div class="row">
<div class="col-sm-12">
<div class="row mt-5">

	<div class="col-md-3">
	<div class="form-group">
		<label>Invoice Number</label>
		<input class="form-control" type="text" name="inv_num" value="<?php echo $row['invoice_number']; ?>"  disabled>
		</div>
	</div>

</div>

<div class="row">

	<div class="col-md-3">
		<div class="form-group">
			<label>Customer Name</label>
			<input class="form-control" type="text" id="sel1" name="cust_name" value="<?php echo $row['invoice_customer_name'];  ?>">
			</div>
		</div>
		

<div class="col-md-3">
	<div class="form-group">
	<label>Invoice date <span class="text-danger">*</span></label>
	<div class="cal-icon">
	<input type="date" name="inv_date" value="<?php echo $row['invoice_date'];  ?>">
	</div>
	</div>
	</div>


<div class="col-md-3">
	<div class="form-group">
		<label>Amount</label>
		<input class="form-control" type="text" name="inv_amount" value="<?php echo $row['invoice_amount'];  ?>">
		</div>
</div>

<div class="col-md-3">
<div class="form-group">
<label>In/Out Customer</label>
<select class="form-control" id="sel1" name="inv_status">
<option value="in_customer" <?php if($row['invoice_status']=="in_customer")
														echo "selected";
  									                   ?> >In Customer</option>
<option value="out_customer" <?php if($row['invoice_status']=="out_customer")
														echo "selected";
  									                   ?> >Out Customer</option>
</select>
</div>
</div>
</div>




</div>


<p><input type="submit" name="savebtn" value="Update Invoice">
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
if (isset($_POST["savebtn"])) 	
{
	$cname=$_POST["cust_name"];
	$invdate=$_POST["inv_date"];
	$invamount=$_POST["inv_amount"];
	$invstatus=$_POST["inv_status"];

	mysqli_query($connect,"UPDATE invoice SET invoice_customer_name='$cname',invoice_date='$invdate',invoice_amount='$invamount',invoice_status='$invstatus' WHERE invoice_number='$invnum'");

    ?>
    <script>
		alert("Record is updated!");
	</script>
	<?php
	header("refresh:0.5 url invoice_list.php");
}

	
	