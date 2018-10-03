<?php

session_start();

 ?>

<!DOCTYPE HTML>
<html>


<title>About</title>

<link rel="stylesheet" type="text/css" href="Aboutcss.css">

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

  <div class="slideshow">

    <img class="mySlides" src="restaurant.jpg" width="100%" height="700px">
    <img class="mySlides" src="pizzaoven.jpg"  width="100%" height="700px">

  </div>

  <div class="aboutHead">

    <h1>About Us</h1>

  </div>

    <div class="aboutPara">

    <p4> Lorem ipsum dolor sit amet, appellantur theophrastus est at, ei facete timeam similique vis. Te soluta erroribus ullamcorper mei, qui delicata comprehensam signiferumque ea. Has et definiebas cotidieque. An vim erat delenit, mel case tempor eu. Cu prompta deleniti reformidans sit, mutat audire recteque pri ut. Hinc assum sententiae te cum, no eos movet atomorum.</p4><br><br>

    <p4>No pri discere mediocrem scriptorem. Posse ullum ut his, nec timeam philosophia an. Ludus perpetua an duo. Pro fastidii referrentur te, mentitum ocurreret ad pri, ex eum magna adolescens.</p4><br><br>

    <p4>Eum cu everti complectitur. Mei ut esse tollit noluisse. Eam ridens salutandi cu. Vel prima iudico cetero no.</p4><br><br>

    <p4>Fugit aperiam ocurreret ad mea, eum cu ponderum qualisque splendide. Paulo dolorum oporteat et nam. Commune dissentiet eloquentiam cum at, atqui liber liberavisse at mel, cum enim vidit ad. Eum purto reque signiferumque et. Ea partem aeterno vim, vim an nisl nominavi consectetuer. Sint augue graeco cu nec, assum constituam his ne.</p4><br><br>

    <p4>Eum quis dicat accumsan no, mollis quaestio constituto eam eu. Erat quidam fierent ad est, mel mediocrem euripidis voluptatibus te. Ferri dicat eruditi ex nec, eu nec etiam choro voluptatibus. Legendos convenire dignissim eum cu, mel id euismod inimicus. </p4>


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
