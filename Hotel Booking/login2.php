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
              <input type="text" placeholder="Username" name="cust_name"/>
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" name="cust_email"/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="cust_password"/>
            </div>
            <div class="input-field">
                <i class="fas fa-phone"></i>
                <input type="text" placeholder="Phone Number" name="cust_phone"/>
              </div>
            <input type="submit" class="btn" value="Sign up" name="registerbtn" /> <!--register button name-->
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

<!--login-->
<?php
if(isset($_POST["signinbtn"]))
{
    $name=$_POST["cust_name"];
    $password=$_POST["cust_password"];

    $checkname=mysqli_query($connect,"SELECT * FROM cus_registerlogin  WHERE cust_name='$name'");
    $resultname=mysqli_num_rows($checkname);

    $checkpassword=mysqli_query($connect,"SELECT * FROM cus_registerlogin WHERE cust_password='$password'");
    $resultpassword=mysqli_num_rows($checkpassword);

    

    if($resultname<=0 || $resultpassword<=0)
    {
        mysqli_query($connect,"INSERT INTO cus_registerlogin (cust_name,cust_password) VALUES ('$name','$password')");
        
    }
      ?>
        <script>
          alert("Login Sucessfully");
        </script>
      <?php

    // else
    // {
    //   ?>
    //     <script>
    //       alert("Invalid username or password");
    //     </script>
    //   <?php
    // }
    
    $check=mysqli_query($connect,"SELECT * FROM cus_registerlogin WHERE cust_name='$name'");
    $row=mysqli_fetch_assoc($check);

    $code=$row['cust_id'];
    header("refresh:0.5 url=index.php?reserve&code=$code");
}
?>

<?php
// Code user Registration
if(isset($_POST['registerbtn']))
{
  $name=$_POST["cust_name"];
  $password=$_POST["cust_password"];
  $email=$_POST['cust_email'];
  $phone=$_POST['cust_phone'];

  $query=mysqli_query($connect,"INSERT into cus_registerlogin(cust_name,cust_password,cust_email,cust_phone) values('$name','$password','$email','$phone')");

  if($query)
  {
	  echo "<script>alert('You are successfully register');</script>";
  }
  else
  {
  echo "<script>alert('Not register something went worng');</script>";
  }
}

?>


