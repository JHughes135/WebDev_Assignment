
<?php
// Initialize the session
session_start();


?>

<!DOCTYPE HTML>
<html>
<link rel="stylesheet" type="text/css" href="homecss.css">

<title>James' Pizza</title>

<div class="container">


  <div class="navigation">

    <a href="home.php">
        <img src="Pizza logo3.png" class="logo">
    </a>

<?php if(!isset($_SESSION['email'])) : ?>
    <a href="Login.php">
      <p3> Login</p3>
    </a>



    <a href="register.php">
      <p3> Register</p3>
    </a>

      <?php endif; ?>

      <?php if(isset($_SESSION['email'])) : ?>
          <a href="LogOut.php">
            <p3>Log Out</p3>
          </a>

        <?php endif; ?>


  </div>


<div class="buttonHolder">

<a href="order.php">
  <button class="OrderButton">
    <p2>Order</p2>
  </button>
  </a>

  <a href="contactus.php">
    <button class="ContactButton">
      <p2>Contact Us</p2>
    </button>
  </a>

    <a href="about.php">
      <button class="AboutButton">
        <p2>About</p2>
      </button>
    </a>


  </div>


  <div class="offer">
    <h1>Get a Large 16" Pizza For just &#8364;12.99!

  </div>

  <div class="slideshow">

    <img class="mySlides" src="pizza1.jpeg">
    <img class="mySlides" src="pizza2.jpg">
    <img class="mySlides" src="pizza3.jpg">

  </div>

  <footer>
    <p>Website by: James Hughes</p>
  </footer>
</div>


  <script>
  var myIndex = 0;
  carousel();

  function carousel() {
      var i;
      var x = document.getElementsByClassName("mySlides");
      for (i = 0; i < x.length; i++) {
         x[i].style.display = "none";
      }
      myIndex++;
      if (myIndex > x.length) {myIndex = 1}
      x[myIndex-1].style.display = "block";
      setTimeout(carousel, 5000); // Change image every 2 seconds
  }
  </script>



</html>
