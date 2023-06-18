<?php include("dataconnection.php") ;?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>GTY_HOTEL:Booking Page</title>
	<link rel="stylesheet" href="css/style.css">
	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,600,700,900" rel="stylesheet">
</head>
<body>

<div class="wrapper">

<!--nav bar-->
<header class="header" id="navigation-menu">
    <div class="container">
      <nav>
        <a href="#" class="logo"> <img src="image/logo.jpeg" alt=""> </a>
		<ul class="nav-menu">
			<li> <a href="Hotel Booking/index.php">Home</a> </li>
            <li> <a href="Aboutus.html" >About</a> </li>
            <li> <a href="#rooms" class="nav-link">Rooms</a> </li>
			<li> <a href="#restaurant" class="nav-link">Restaurant</a> </li>
			<li> <a href="#gallary" class="nav-link">Gallery</a> </li>
			<li> <a href="#contact" class="nav-link">Contact</a> </li>
		  </ul>
  
		  <div class="hambuger">
			<span class="bar"></span>
			<span class="bar"></span>
			<span class="bar"></span>
		  </div>
		</nav>
	  </div>
	</header>
	<script>
	  const hambuger = document.querySelector('.hambuger');
	  const navMenu = document.querySelector('.nav-menu');
  
	  hambuger.addEventListener("click", mobileMenu);
  
	  function mobileMenu() {
		hambuger.classList.toggle("active");
		navMenu.classList.toggle("active");
	  }
  
	  const navLink = document.querySelectorAll('.nav-link');
	  navLink.forEach((n) => n.addEventListener("click", closeMenu));
  
	  function closeMenu() {
		hambuger.classList.remove("active");
		navMenu.classList.remove("active");
	  }
	</script>
  
<!--End of nav bar-->
  
<!--Photo-->
<section class="home" id="home">
    <div class="head_container">
      <div class="box">
        <div class="text">
          <h1 style="margin-top:-75px;">Welcome to GTY HOTEL</h1>
          <p>Welcome to our exquisite hotel, nestled in a breathtaking location alongside a stunningly beautiful beach. As you step into our serene paradise, you will be greeted by the gentle sound of waves, the soft caress of sea breeze, and the mesmerizing views of the sparkling ocean. Our hotel offers an exceptional experience, where luxury meets nature's splendor.</p>
			

          <button>BOOKING NOW</button>
        </div>
      </div>
      <div class="image">
        <img src="image/home1.jpg" class="slide">
      </div>
      <div class="image_item">
        <img src="image/home1.jpg" alt="" class="slide active" onclick="img('image/home1.jpg')">
        <img src="image/home2.jpg" alt="" class="slide" onclick="img('image/home2.jpg')">
        <img src="image/home3.jpg" alt="" class="slide" onclick="img('image/home3.jpg')">
        <img src="image/home4.jpg" alt="" class="slide" onclick="img('image/home4.jpg')">
      </div>
    </div>
  </section>
  <script>
    function img(anything) {
      document.querySelector('.slide').src = anything;
    }

    function change(change) {
      const line = document.querySelector('.image');
      line.style.background = change;
    }
  </script>
<!--end of Photo-->
	<div class="container">
		<div class="container-time">
				<h2 class="heading">WELCOME TO GTY_HOTEL </h2>
				<h3 class="heading-days">Exclusive Room</h3>
				<p>Indulge in the luxury and comfort of our Exclusive Room, where every detail is meticulously crafted to provide an unforgettable stay. Experience the epitome of sophistication and relaxation as you immerse yourself in an ambiance designed to exceed your expectations.</p>
				<p></p>

				<h3 class="heading-days">Family Room</h3>
				<p>providing a comfortable and enjoyable stay for all members. It providing a comfortable and enjoyable stay for all members.</p>
				<p></p>

				<h3 class="heading-days">Daily Room</h3>
				<p>Daily Room, our premium offering, is designed to provide you with an exceptional experience during your stay. </p>
				<p>At Daily Room, we strive to provide you with a memorable and enjoyable experience. Whether you are traveling for business or leisure, our exceptional features and dedicated service will make your stay truly exceptional.</p>

				<h3 class="heading-days">Panoramic Room</h3>
				<p>The Panoramic Room in our hotel offers a range of exceptional features designed to elevate your stay and provide a truly memorable experience.</p>
				<p>Experience the height of luxury and serenity in our Panoramic Room, where every detail is thoughtfully curated to provide an unforgettable stay. Immerse yourself in the beauty of the surroundings, unwind in comfort, and create lasting memories in this truly exceptional space.</p>

				<hr>

				<h4 class="heading-phone">Contact Us: 012-345 6789</h4>
		</div>
		<br>

		
		<div class="container-form">
				<form method="post" action="">
					<h2 class="heading heading-yellow">Reservation Online</h2>

					<div class="form-field" >
						<p>Your Name</p>
						<input type="text" name="cus_name">
					</div>
					<div class="form-field">
						<p>Your email</p>
						<input type="email" name="cus_email">
					</div>
					<div class="form-field">
						<p>Check-in Date</p>
						<input type="date" name="cus_checkin">
					</div>
					<div class="form-field">
						<p>Check-in Time</p>
						<input type="time" name="cus_checkintime">
					</div>
					<div class="form-field">
						<p>Check-out Date</p>
						<input type="date" name="cus_checkout">
					</div>
					<div class="form-field">
						<p>How many people</p>
						<select id="cus_qty" name="cus_qty">
							<option value="1">1 person</option>
							<option value="2">2 persons</option>
							<option value="3">3 persosn</option>
							<option value="4">4 persons</option>
							<option value="5">5 persons</option>
						</select>
					</div>
					
					<div class="form-field">
						<p>Room Type </p>
						<select id="booking_room_type" name="booking_room_type">
							<option value="Exclusive Rooms">Exclusive_Rooms</option>
							<option value="Family Rooms">Family_Rooms</option>
							<option value="Daily Rooms">Daily_Rooms</option>
							<option value="Panoramic Rooms">Panoramic_Rooms</option>
						</select>
					</div>

					<button class="btn" name="btn">Submit</button>
				</form>
		</div>
	</div>
</div>	

	
</body>
</html>

<?php 
if(isset($_POST["btn"]))
{
	$cname = $_POST["cus_name"]; //retrive value from purchasefrm	
    $cemail = $_POST["cus_email"];
    $ccheckin = $_POST["cus_checkin"];
    $ccheckintime = $_POST["cus_checkintime"];
    $ccheckout = $_POST["cus_checkout"];
    $cqty = $_POST["cus_qty"];
	$broomtype= $_POST["booking_room_type"];

	$result=mysqli_query($connect,"SELECT * FROM room WHERE room_type = '$broomtype'");
	$row=mysqli_fetch_assoc($result);
	$rqty=1;
	$balance = $row["room_stock"];
	//checking 
	?><script>console.log(<?php echo $balance; ?>);</script><?php
	
	// $checkname=mysqli_query("SELECT * FROM booking WHERE cus_name='$cname'");
	// $countname=mysqli_num_rows($checkname);

	// $checkname=mysqli_query("SELECT * FROM booking WHERE cus_name='$cname'");
	// $countname=mysqli_num_rows($checkname);
	
	
	if($balance>=0)
	{
		?><script>console.log("hi");</script><?php
		mysqli_query($connect, "INSERT INTO booking (cus_name, cus_email, cus_checkin, cus_checkintime, cus_checkout, cus_qty, booking_room_type) values ('$cname','$cemail','$ccheckin','$ccheckintime','$ccheckout','$cqty','$rbookingtype')");//insert data into purchase table
		mysqli_query($connect,"UPDATE room SET room_stock='$balance' WHERE room_type='$broomtype'");// update room table
		?>
            <script>
                alert("Booking is successfully placed");
            </script>
		<?php
		header("refresh:0.8 url=dataconnection.php"); //redirect user back to 
	}
	else
	{
		//display alert box
		?>
		<script>
			alert("Your quantity is more than the stock available.");
		</script>
		<?php
	}
}
?>