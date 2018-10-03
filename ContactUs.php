<?php

session_start();

 ?>

<!DOCTYPE HTML>

<title>Contact Us</title>
<html>

<link rel="stylesheet" type="text/css" href="ContactUscss.css">

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

<div class="ContactHead">

    <h1>Contact Us</h1>

</div>

<div class="contactPara">

  <h2> We always want to give our customers the best experience possible. Any queries?<br>
  Let us know.</h2><br><br>

<span><h3>Phone:</h3></span> <p4> 0876454897 </p4>

<span><h3>Email:</h3></span> <p4> C16379261@mydit.ie </p4>




</div>

<footer>
  <p>Website by: James Hughes</p>
</footer>


</div>

</html>
