<?php include("dataconnection.php"); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="login2style.css" />
    <title>Sign in & Sign up Form</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">

          <!--sign in-->
          <form action="#" class="sign-in-form" method="post"> 
            <img src="image/GTY_WHITE.jpeg" class="image2">
            <br>
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name="cust_name" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="cust_password" required/>
            </div>
            <input type="submit" value="Login" class="btn solid" name="signinbtn" /> <!--signinbtn button name-->
          </form>
          <!--end of sign in form-->

          <!--register-->
          <form action="#" class="sign-up-form" method="post"> 
            <img src="image/GTY_WHITE.jpeg" class="image2">
            <br>
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" />
            </div>
            <div class="input-field">
                <i class="fas fa-phone"></i>
                <input type="text" placeholder="Phone Number" />
              </div>
            <input type="submit" class="btn" value="Sign up" /> <!--register button name-->
          </form>
          <!--end of register form-->
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
              We got you covered! you just have to fill in your details and you can be a member of GTY HOTEL!. 
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
            <br><br>
            <br>
            <h4>For Admin</h4>
            <a href="index.html" ><button class="btn transparent" id="sign-up-btn">
              Admin
            </button> </a>
             
            
          </div>
          <img src="image/register2.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
              Welcome member of GTY HOTEL come join us on a new experience!
            </p>
            <button class="btn transparent"  id="sign-in-btn">
              Sign in
            </button>
            

          </div>
          <img src="image/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="login2.js"></script>
  </body>
</html>

<?php
if(isset($_POST["signinbtn"]))
{
    $name=$_POST["cust_name"];
    $password=$_POST["cust_password"];

    $checkname=mysqli_query($connect,"SELECT * FROM customer WHERE cust_name='$name'");
    $resultname=mysqli_num_rows($checkname);

    $checkpassword=mysqli_query($connect,"SELECT * FROM customer WHERE cust_password='$password'");
    $resultpassword=mysqli_num_rows($checkpassword);

    

    if($resultname<=0 || $resultpassword<=0)
    {
        mysqli_query($connect,"INSERT INTO customer (cust_name,cust_password) VALUES ('$name','$password')");
        ?>
        <script>
          alert("Login Sucessfully");
        </script>
        <?php
    }
    
    $check=mysqli_query($connect,"SELECT * FROM customer WHERE cust_name='$name'");
    $row=mysqli_fetch_assoc($check);

    $code=$row['cust_id'];
    header("refresh:0.5 url=index.php?reserve&code=$code");
}
?>


