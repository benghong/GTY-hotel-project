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
<hr>
<ul class="fa-ul">
<li><span class="fa-li"><i class="fas fa-check"></i></span><?php echo $row["room_facilities"]?></li>
</li>
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

<?php

if (isset($_GET["del"])) 
{ 

    $room_type=$_GET["roomtype"];
	$sql=mysqli_query($connect,"DELETE from pricing where room_type='$room_type'")
	
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
