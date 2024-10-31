<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title> 
</head>
<body style="background-image:url('background3.jpg');background-repeat: repeat; background-attachment: fixed;  
  background-size: cover;" >
  <div class="content">
    <!-- notification message -->
    <?php if (isset($_SESSION['success'])) : ?>
    <div class="error success">
      <h3>
        <?php 
            	echo $_SESSION['success']; 
            	unset($_SESSION['success']);
            ?>
      </h3>
    </div>
    <?php endif ?>
  
    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    <p>Welcome <strong>
        <?php echo $_SESSION['username']; ?>
      </strong></p>
    <p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
  
  <div class="main">
    <h2>Shop</h2>
    <div class="navbar" id="myNavbar">
      <a href="./home.html" id="h">Home</a>
      <a href="./boys.html">Men</a>
      <a href="./womens.html">Women</a>
      <a href="./kids.html">Kids</a>
      <a href="./electronics.html">Electronics</a>
      <a href="./Cart.html"><i class="fas fa-cart-plus ic"></i></a>
      <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        &#9776;
      </a>
    </div>
    </div>
    <div class="body hbody" id="hg">
      <a href="./boys.html">
        <img src="mens.jpg" alt="">
        <h2>Men</h2>
      </a>
      <a href="./womens.html">
        <img src="women.jpg" alt="">
        <h2>Women</h2>
      </a>
      <a href="./kids.html">
        <img src="./n.jpeg" alt="">
        <h2>Kids</h2>
      </a>
      <a href="./electronics.html">
        <img src="./electronicsnew.jpeg" alt="">
        <h2>Electronics</h2>
      </a>
      <a href="./Cart.html">
        <img src="./kart.jpg" alt="">
       <h2>Cart</h2> 
      </a>
      
    </div>
    <div class='footer' id="foot">
        <div class='first' id="fir">
          <p>About us</p>
          <p>Contact Us</p>
          <p>Privacy Policy</p>
          <p>FAQ</p>
          <p>Shipping Policy</p>
        </div>
        <div class='second' id="sec">
          <h3>Follow us on Socila Media</h3>
          <div class='icons'>
          <i class="fab fa-facebook"></i>
          <i class="fab fa-instagram"></i>
          <i class="fab fa-youtube"></i>
          <i class="fab fa-twitter"></i>
          <i class="fab fa-whatsapp"></i>
          </div>
        </div>
        <div class='third' id="thi">
          <h2>Contact Us</h2>
          <i class="fas fa-map-marker-alt"></i>
          <span>Madanapalle</span><br/>
          <i class="fas fa-phone-alt"></i>
          <span>+91 87734838486</span><br/>
          <i class="far fa-clock"></i>
          <span>Timing:Mon to Sat 6am to 9pm</span><br/>
          <i class="far fa-envelope"></i>
          <span>@gmail.com</span>
        </div>
      </div>
        <div class='last'>
          <p>Shop Limited All Rights Reserved </p><br>
          <p id="pp">Designed by Vass</p>
        </div>
        <script>
          function myFunction() {
            var x = document.getElementById("myNavbar");
            if (x.className === "navbar") {
              x.className += " responsive";
              document.getElementById("h").style.display="initial"
        
            } else {
              x.className = "navbar";
              document.getElementById("h").style.display="none"
            }
          }
        </script>
</body>
</html>

