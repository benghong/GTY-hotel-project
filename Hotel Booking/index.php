<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <title>GTY_HOTEL</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="css/style.css">

  <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />


</head>

<body>
  <section class="head">
    <div class="container flex1">
      <div class="social">
      <a href="https://www.facebook.com/"> <i class="fab fa-facebook-f"></i> </a>
      <a href="https://www.twitter.com/"> <i class="fab fa-twitter"></i> </a>
      <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i> </a>
      <a href="https://www.youtube.com/"> <i class="fab fa-youtube"></i> </a>
      </div>
      <div class="logo">
        <img src="image/GTY_WHITE.jpeg" alt="">
      </div>
      <div class="address">
        <i class="fas fa-map-marker-alt"></i>
        <span>Bandar Sunway</span>
      </div>
    </div>
  </section>


  <header class="header">
    <div class="container">
      <nav class="navbar flex1">
        <div class="sticky_logo logo">
          <a href="#home"> <img src="image/logo.jpeg" alt=""> </a>
        </div>

        <ul class="nav-menu">
          <li> <a href="#home">Home</a> </li>
          <li> <a href="#about">Intro</a> </li>
          <li> <a href="#room">services</a> </li>
          <li> <a href="#services">room</a> </li>
          <li> <a href="#shop">offers</a> </li>
          <li> <a href="#testimonials">Review</a> </li>
          <li> <a href="#gallary">gallery</a> </li>
          <li> <a href="bookingform.php">booking</a> </li>
          <li> <a href="#contact">contact</a> </li>
          <li> <a href="aboutus.html">About us</a> </li>
        </ul>
        <div class="hamburger">
        </div>
        <span><a href="login2.html"> Login/Register </a></span>
          
     
  </header>
  <script>
    const hamburger = document.querySelector(".hamburger");
    const navMenu = document.querySelector(".nav-menu");

    hamburger.addEventListener("click", mobliemmenu);

    function mobliemmenu() {
      hamburger.classList.toggle("active");
      navMenu.classList.toggle("active");
    }

    window.addEventListener("scroll", function() {
      var header = document.querySelector("header");
      header.classList.toggle("sticky", window.scrollY > 0)
    })
  </script>


  <section class="home" id="home">
    <div class="container">
      <h1>Make Memories</h1>
      <p>Discover the room where you experience luxury with a affordable price.</p>

      <div class="content grid">
        <div class="box">
          <span>ARRIVAL DATE </span> <br>
          <input type="date" placeholder="29/20/2021">
        </div>
        <div class="box">
          <span>DEPARTURE DATE </span> <br>
          <input type="date" placeholder="29/20/2021">
        </div>
        <div class="box">
          <span>ADULTS</span> <br>
          <input type="number" placeholder="01">
        </div>
        <div class="box">
          <span>CHILDREN </span> <br>
          <input type="number" placeholder="01">
        </div>
        <div class="box">
          <button class="flex1">
            <span>Check Availability</span>
            <i class="fas fa-arrow-circle-right"></i>
          </button>
        </div>
      </div>
    </div>
  </section>

  <section class="about" id="about">
    <div class="container">
      <div class="heading">
        <h5>EXPLORE</h5>
        <h2>Experience the unforgettable</h2>
      </div>

      <div class="content flex  top">
        <div class="left">
          <h3>The best experience for the best price</h3>
          <p>Welcome to GTY Hotel! We are thrilled to have you as our guest and to provide you with an exceptional stay experience. At GTY Hotel, we strive to create a perfect blend of luxury, comfort, and personalized service to ensure that your stay with us is truly unforgettable.</p>
          <p>We take pride in offering a wide range of well-appointed rooms and suites that cater to the diverse needs of our guests. Each accommodation is designed with meticulous attention to detail, ensuring a comfortable and relaxing ambiance. Whether you're traveling for business or leisure, we have the perfect space for you to unwind and rejuvenate.</p>
          <button class="flex1">
            <span>Check Availability</span>
            <i class="fas fa-arrow-circle-right"></i>
          </button>
        </div>
        <div class="right">
          <img src="image/a.png" alt="">
        </div>
      </div>
    </div>
  </section>


  <section class="wrapper">
    <div class="container">
      <div class="owl-carousel owl-theme">
        <div class="item">
          <div class="heading">
            <h5>THE CITY VIEW</h5>
            <h3>A charming view of the city</h3>
          </div>
          <p>Situated in a prime location, GTY Hotel offers breathtaking views, whether it's the sparkling city skyline, lush landscapes, or stunning natural beauty. Our hotel is known for its modern architecture and stylish interiors that exude elegance and sophistication. As you step into our lobby, you'll be greeted by our friendly and professional staff, dedicated to making your stay as seamless and enjoyable as possible.</p>
    
        </div>
        <div class="item">
          <div class="heading">
            <h5>DINING EXPERIENCE</h5>
            <h3>Great food leads to great experience</h3>
          </div>
          <p>GTY Hotel have create culinary delights at our exquisite restaurants, where our talented chefs create a symphony of flavors using the finest ingredients. A meal that you will treasure with the taste of luxury that pairs with a surprisingly exceptional price.</p>
          
        </div>
        <div class="item">
          <div class="heading">
            <h5>SERVICES</h5>
            <h3>Attention to details</h3>
          </div>
          <p>At GTY Hotel, we understand that true luxury lies in the details. From the moment you arrive until the time of your departure, we strive to exceed your expectations and create lasting memories. Our commitment to exceptional service, combined with our dedication to delivering a personalized experience, sets us apart and ensures that your stay with us is truly remarkable.</p>
        </div>
      </div>
    </div>
  </section>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
  <script>
    $('.owl-carousel').owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      dots: false,
      navText: ["<i class='far fa-long-arrow-alt-left'></i>", "<i class='far fa-long-arrow-alt-right'></i>"],
      responsive: {
        0: {
          items: 1
        },
        768: {
          items: 1
        },
        1000: {
          items: 1
        }
      }
    })
  </script>


  <section class="wrapper2">
    <div class="container">
      <div class="heading mtop">
        <h5>SERROUNDING FACILITIES</h5>
        <h2>Giving entirely awesome </h2>
      </div>

      <div class="content grid mtop">
        <div class="box">
          <i class="fas fa-shipping-fast"></i>
          <h3>Delivery</h3>
          <p>We have specialize section for delivery to pick up and drop their package.</p>
          <span class='far fa-long-arrow-alt-right'></span>
        </div>
        <div class="box">
          <i class="fas fa-mug-hot"></i>
          <h3>Coffee</h3>
          <p>We have free coffee for our customers in the lobby</p>
          <span class='far fa-long-arrow-alt-right'></span>
        </div>
        <div class="box">
          <i class="fas fa-car"></i>
          <h3>Pick Up & Drop Off</h3>
          <p>A point for customer or guest to wait for their ride and making it easier for grabcar or cars to stop by.</p>
          <span class='far fa-long-arrow-alt-right'></span>
        </div>
        <div class="box">
          <i class="far fa-water"></i>
          <h3>Road Bump</h3>
          <p>Road bump is apply for cars to slow down in order to increase the safety in the area near our hotel.</p>
          <span class='far fa-long-arrow-alt-right'></span>
        </div>
      </div>
    </div>
  </section>


  <section class="room wrapper2 top" id="room">
    <div class="container">
      <div class="heading">
        <h5>OFFERS SERVICES</h5>
        <h2>Fascinating rooms & suites </h2>
      </div>
      <div class="content flex mtop">
        <div class="left grid2">
          <div class="box">
            <i class="fas fa-desktop"></i>
            <p>Free Cost</p>
            <h3>No booking fee</h3>
          </div>
          <div class="box">
            <i class="fas fa-star"></i>
            <p>High rate</p>
            <h3>Best rate guarantee</h3>
          </div>
          <div class="box">
            <i class="fab fa-resolving"></i>
            <p>No booking fee</p>
            <h3>Member reservations within 3 days </h3>
          </div>
          <div class="box">
            <i class="fal fa-wifi"></i>
            <p>Free Wifi</p>
            <h3>High-speed Wi-Fi</h3>
          </div>
          <div class="box">
            <i class="fas fa-mug-hot"></i>
            <p>Tea break</p>
            <h3>Free breakfast</h3>
          </div>
          <div class="box">
            <i class="fas fa-user-tie"></i>
            <p>Service</p>
            <h3>24 hours Reception</h3>
          </div>
        </div>
        <div class="right">
          <img src="image/r.jpg" alt="">
        </div>
      </div>
    </div>
  </section>

  <section class="timer about wrapper">
    <div class="background"> </div>
    <div class="container">
      <div class="heading">
        <h5>LAST MINUTE!</h5>
        <h2> <span>Hurry!</span> Hotel booking for today close before</h2>
      </div>

      <div id="time" class="flex1 mtop"> </div>
    </div>
  </section>
  <script src="js/jquery.countdown.js" charset="utf-8"></script>
  <script src="js/jquery.countdown.min.js" charset="utf-8"></script>
  <script type="text/javascript">
    $('#time').countdown('2024/01/01', function(event) {
      $(this).html(event.strftime(
        '<div class="clock"><span>%d</span> <p>Days</p></div> ' +
        '<div class="clock"><span>%H</span> <p>Hours</p></div> ' +
        '<div class="clock"><span>%M</span> <p>Minutes</p></div> ' +
        '<div class="clock"><span>%S</span> <p>Seconds</p></div> '
      ));
    });
  </script>


  <section class="offer mtop" id="services">
    <div class="container">
      <div class="heading">
        <h5>OUR ROOMS </h5>
        <h3>Giving entirely awesome experience</h3>
      </div>

      <div class="content grid2 mtop">
        <div class="box flex">
          <div class="left">
            <img src="image/o1.jpg" alt="">
          </div>
          <div class="right">
            <h4>Exclusive_Rooms</h4>
            <div class="rate flex">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <p> Most spacious and finer room that we have for the best comfort.</p>
            <h5>From RM150/night</h5>
            <button class="flex1">
              <span>Check Availability</span>
              <i class="fas fa-arrow-circle-right"></i>
            </button>
          </div>
        </div>
        <div class="box flex">
          <div class="left">
            <img src="image/o2.jpg" alt="">
          </div>
          <div class="right">
            <h4>Family_Rooms</h4>
            <div class="rate flex">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <p> Most suitable room for a family to get with variety of useful items just for families.</p>
            <h5>From RM130/night</h5>
            <button class="flex1">
              <span>Check Availability</span>
              <i class="fas fa-arrow-circle-right"></i>
            </button>
          </div>
        </div>
        <div class="box flex">
          <div class="left">
            <img src="image/o3.jpg" alt="">
          </div>
          <div class="right">
            <h4>Daily_Rooms</h4>
            <div class="rate flex">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <p>A minimalist room that will never dissapoint those who are looking for a simple yet comfortable room.</p>
            <h5>From RM90/night</h5>
            <button class="flex1">
              <span>Check Availability</span>
              <i class="fas fa-arrow-circle-right"></i>
            </button>
          </div>
        </div>
        <div class="box flex">
          <div class="left">
            <img src="image/o4.jpg" alt="">
          </div>
          <div class="right">
            <h4>Panoramic_Rooms</h4>
            <div class="rate flex">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <p> A room that is specialize for couples to have their best moment in the room with items and function that is specialze for them.</p>
            <h5>From RM120/night</h5>
            <button class="flex1">
              <span>Check Availability</span>
              <i class="fas fa-arrow-circle-right"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="area top">
    <div class="container">
      <div class="heading">
        <h5>RESTAURANT</h5>
        <h3>The GTY Restaurant</h3>
      </div>

      <div class="content flex mtop">
        <div class="left">
          <img src="image/aera.jpg" alt="">
        </div>
        <div class="right">
          <p>GTY Restaurant, where gastronomic excellence meets unparalleled ambiance. We are delighted to have you as our guest and are committed to providing you with an exceptional dining experience that will tantalize your taste buds and create lasting memories.</p>
          <p>Whether you are celebrating a special occasion, enjoying a romantic dinner for two, or simply seeking an unforgettable dining experience, GTY Restaurant offers a charming and intimate setting. Our attention to detail, from the elegant table settings to the soothing background music, creates an ambiance that is both sophisticated and welcoming.</p>
          <button class="flex1">
            <span>Check Availability</span>
            <i class="fas fa-arrow-circle-right"></i>
          </button>
        </div>
      </div>
    </div>
  </section>

  <section class="offer2 about wrapper timer top" id="shop">
    <div class="container">
      <div class="heading">
        <h5>Discount offers!!</h5>
        <h3>You can get an exclusive offer </h3>
      </div>

      <div class="content grid  top">
        <div class="box">
          <h5>UP TO 30% OFF</h5>
          <h3>Restaurant</h3>
          <span>4.5 <label>(432 Reviews)</label> </span>
          <p>Experience luxury taste with quarter of the price off!</p>
          <div class="flex">
            <i class="fal fa-alarm-clock"> 2 Hours left</i>
            <i class="far fa-dot-circle"> Expired after 6 months</i>
          </div>
          <button class="flex1">
            <span>Check Availability</span>
            <i class="fas fa-arrow-circle-right"></i>
          </button>
        </div>
        <div class="box">
          <h5>UP TO 30% OFF</h5>
          <h3>Daily Room</h3>
          <span>4.5 <label>(432 Reviews)</label> </span>
          <p>Our Daily room is cheaper than ever before!</p>
          <div class="flex">
            <i class="fal fa-alarm-clock"> 2 Hours left</i>
            <i class="far fa-dot-circle"> Expired after 6 months</i>
          </div>
          <button class="flex1">
            <span>Check Availability</span>
            <i class="fas fa-arrow-circle-right"></i>
          </button>
        </div>
        <div class="box">
          <h5>UP TO 30% OFF</h5>
          <h3>Merchendise</h3>
          <span>4.5 <label>(432 Reviews)</label> </span>
          <p>Come and get our various merchendise cheaper!</p>
          <div class="flex">
            <i class="fal fa-alarm-clock">  2 Hours left</i>
            <i class="far fa-dot-circle"> Expired after 6 months</i>
          </div>
          <button class="flex1">
            <span>Check Availability</span>
            <i class="fas fa-arrow-circle-right"></i>
          </button>
        </div>
      </div>
    </div>
  </section>
  <section class="customer top" id="testimonials">
    <div class="container">
      <div class="heading">
        <h5>TESTIMONIALS </h5>
        <h3>What customers say </h3>
      </div>

      <div class="owl-carousel owl-theme mtop">
        <div class="item">
          <div class="rate">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h3>Excellent Service</h3>
          <p>GTY Hotel has one of the best service I have gotten after staying in so many hotels. They pay attention to details even in the smallest things which shows how much they care about their customer.</p>
          <div class="admin flex">
            <div class="img">
              <img src="image/c1.jpg" alt="">
            </div>
            <div class="text">
              <h3>Jennie</h3>
              <span>tourist</span>
            </div>
          </div>
        </div>
       
  </section>
  <script>
    $('.owl-carousel').owlCarousel({
      loop: true,
      margin: 10,
      nav: false,
      dots: false,
      navText: ["<i class='far fa-long-arrow-alt-left'></i>", "<i class='far fa-long-arrow-alt-right'></i>"],
      responsive: {
        0: {
          items: 1
        },
        768: {
          items: 1
        },
        1000: {
          items: 1
        }
      }
    })
  </script>


  <section class="gallary top" id="gallary">
    <div class="owl-carousel owl-theme">
      <div class="item">
        <img src="image/g1.jpg" alt="">
        <div class="overlay">
          <i class="fab fa-instagram"></i>
        </div>
      </div>
      <div class="item">
        <img src="image/g2.jpg" alt="">
        <div class="overlay">
          <i class="fab fa-instagram"></i>
        </div>
      </div>
      <div class="item">
        <img src="image/g3.jpg" alt="">
        <div class="overlay">
          <i class="fab fa-instagram"></i>
        </div>
      </div>
      <div class="item">
        <img src="image/g4.jpg" alt="">
        <div class="overlay">
          <i class="fab fa-instagram"></i>
        </div>
      </div>
      <div class="item">
        <img src="image/g5.jpg" alt="">
        <div class="overlay">
          <i class="fab fa-instagram"></i>
        </div>
      </div>
      <div class="item">
        <img src="image/g1.jpg" alt="">
        <div class="overlay">
          <i class="fab fa-instagram"></i>
        </div>
      </div>
      <div class="item">
        <img src="image/g2.jpg" alt="">
        <div class="overlay">
          <i class="fab fa-instagram"></i>
        </div>
      </div>
      <div class="item">
        <img src="image/g3.jpg" alt="">
        <div class="overlay">
          <i class="fab fa-instagram"></i>
        </div>
      </div>
    </div>

  </section>

  <script>
    $('.owl-carousel').owlCarousel({
      loop: true,
      margin: 0,
      nav: false,
      dots: false,
      autoplay: true,
      slideTransition: 'linear',
      autoplayTimeout: 4000,
      autoplaySpeed: 4000,
      autoplayHoverPause: true,
      responsive: {
        0: {
          items: 1
        },
        768: {
          items: 3
        },
        1000: {
          items: 5
        }
      }
    })
  </script>



  <section class="map top">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.08429733632!2d101.60631501475712!3d3.072152797762817!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc4a1a35b2a459%3A0x13a5f7d3584ce888!2sSunway%20Pyramid%20Hotel!5e0!3m2!1sen!2smy!4v1685880118739!5m2!1sen!2smy" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>"
  </section>


  <footer>
    
  <section class="contact top" id="contact">
      <div class="content grid  top">
        <div class="box">
          <div class="logo">
            <img src="image/logo.jpeg" alt="">
          </div>
    
          <div class="social flex">
          <a href="https://www.facebook.com/"> <i class="fab fa-facebook-f"></i> </a>
          <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i> </a>
          <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i> </a>
          <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i> </a>
          </div>
        </div>

        <div class="box">
          <h2>Quick Links</h2>
          <ul>
          <a href="aboutus.html"> <li><i class="fas fa-angle-double-right"></i>About Us</li> </a>
          <a href="bookingform.php"><li><i class="fas fa-angle-double-right"></i>Booking Form</li></a>
          <a href="#about"><li><i class="fas fa-angle-double-right"></i>Introduction</li></a>
          <a href="#home">  <li><i class="fas fa-angle-double-right"></i>Home</li></a>
          </ul>
        </div>

        <div class="box">
          <h2>Details</h2>
          <ul>
          <a href="#services"> <li><i class="fas fa-angle-double-right"></i>Services details</li> </a>
          <a href="#room"> <li><i class="fas fa-angle-double-right"></i>Room details</li> </a>
          <a href="#shop"> <li><i class="fas fa-angle-double-right"></i>Offer details</li> </a>
          <a href="#gallary"> <li><i class="fas fa-angle-double-right"></i>Gallery</li> </a>

           
          </ul>
        </div>
        <div class="box">
          <h2>Reach Us</h2>
          <div class="icon flex">
            <div class="i">
              <a href="https://www.google.com/maps/place/Sunway+Pyramid+Hotel/@3.0723887,101.6054506,17.52z/data=!4m9!3m8!1s0x31cc4a1a35b2a459:0x13a5f7d3584ce888!5m2!4m1!1i2!8m2!3d3.0721528!4d101.6085037!16s%2Fg%2F11b6_jhx6k?entry=ttu"> <i class="fas fa-map-marker-alt"></i> </a>
            </div>
            <div class="text">
              <h3>Address</h3>
              <p>Bandar Sunway, Jalan PJS</p>
            </div>
          </div>
          <div class="icon flex">
            <div class="i">
            <a href="https://web.whatsapp.com/"><i class="fas fa-phone"></i> </a>
            </div>
            <div class="text">
              <h3>Phone</h3>
              <p>+60163335779</p>
            </div>
          </div>
          <div class="icon flex">
            <div class="i">
            <a href="https://www.gmail.com"> <i class="far fa-envelope"></i></a>
            </div>
            <div class="text">
              <h3>Email</h3>
              <p>1211206859@student.edu.my</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    </section>
  </footer>
</body>


</html>