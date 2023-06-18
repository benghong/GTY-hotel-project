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
<body>

<div class="main-wrapper">




    
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

<?php
if(isset($_GET["searchbtn"]))
{
    $invfrom=$_GET["searchinvfrom"];
    $invsearchto=$_GET["searchinvto"];
    $invsearchstatus=$_GET["searchstatus"];
    $result=mysqli_query($connect,"SELECT * FROM invoice WHERE(invoice_status LIKE '%$invsearchstatus')");

    if(mysqli_num_rows($result)==0)
    {
        echo "<br> Result could not be found!";
    }

    else
    {
        echo "<table border='1' width='50%'>";
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
                    <a class="dropdown-item" href="invoice_list.php?del&invnum=<?php echo $row ["invoice_number"];?>" data-toggle="modal" data-target="#delete_asset"><i class="fas fa-trash-alt m-r-5"></i> Delete</a> </div>
                </div>
                </div>
                </td>
                </tr>
                </tbody>

            <?php
        }

        echo "<table>";
    }
    


}

?>

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
<option>In Customer</option>
<option>Out Customer</option>
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
    <a class="dropdown-item" href="invoice_list.php?del&invnum=<?php echo $row ["invoice_number"];?>" data-toggle="modal" data-target="#delete_asset"><i class="fas fa-trash-alt m-r-5"></i> Delete</a> </div>
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
    //remove product from product list
if (isset($_GET["del"])) 
{
	$invnum=$_GET["invnum"];
	//update product table and set product_isDelete to 1
	$sql=mysqli_query($connect,"UPDATE invoice SET product_isDelete=1 WHERE invoice_number='$invnum'")
	?>
	<script>
		alert("Record Deleted.")
	</script>
	<?php
	header("refresh:0.5; url=invoice_list.php");
}


?>