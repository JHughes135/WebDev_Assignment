<?php
require_once 'connection.php';

session_start();

// If session variable is not set it will redirect to login page
if(!isset($_SESSION['email']) || empty($_SESSION['email']))
{
  header("location: login.php");
}

$email = $_SESSION['email'];

$userid = $sql = '';

$size = $pizza = $sweetcorn = $pineapple = $peperoni = $sausage = "";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
  $size = trim($_POST["size"]);

  $pizza = trim($_POST["pizza"]);


//set checkboxes to no if not set
  if(isset($_POST['sweetcorn']))
  {
    $sweetcorn = $_POST['sweetcorn'];
  }else{
    $sweetcorn = "off";
  }

  if(isset($_POST['pineapple']))
  {
    $pineapple = $_POST['pineapple'];
  }else{
    $pineapple = "off";
  }

  if(isset($_POST['peperoni']))
  {
    $peperoni = $_POST['peperoni'];
  }else{
    $peperoni = "off";
  }

  if(isset($_POST['sausage']))
  {
    $sausage = $_POST['sausage'];
  }else{
    $sausage = "off";
  }

//get id from users to use in order
$sql1 =  "SELECT id FROM users WHERE email = '".$email."' ";

if($result = mysqli_query($link, $sql1)){

  while ($row = mysqli_fetch_assoc($result)) {
      $userid = $row["id"];
    }

 mysqli_free_result($result);
}


//store order in orderinfo table along with user id
$sql2 = "INSERT INTO orderinfo (id, size, pizza, sweetcorn, pineapple, peperoni, sausage )
VALUES ('$userid', '$size', '$pizza', '$sweetcorn', '$pineapple', '$peperoni', '$sausage')";

if (mysqli_query($link,$sql2)) {
    echo "Order Placed successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($link);
}

}
 ?>



<!DOCTYPE HTML>

<title>Order</title>


<html>

<link rel="stylesheet" type="text/css" href="Ordercss.css">

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

  <a href="Order.php">
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

  <div class="OrderForm" >

    <form action="order.php" method ="post">

      <h2>Order<br></h2>

      <h3>Size :</h3>

      <div class="select">
        <select name="size">
          <option value="6">6"</option>
          <option value="8">8"</option>
          <option value="12">12"</option>
          <option value="16">16"</option>
        </select>
      </div>

      <h3>Pizza :</h3>

          <div class="select" style="width: 200px;">
            <select name="pizza">
              <option value="Margarita">Margarita:
                Classic

              </option>
              <option value="Peperoni">Peperoni</option>
              <option value="Meat Feast">Meat Feast</option>
              <option value="Chicken">Chicken</option>
            </select>
          </div>

      <h3>Extra Toppings<p4> (50c each)</p4></h3>

      <div class="extra" >
      <label class="container"><p5>Sweetcorn</p5>
        <input type="checkbox" name="sweetcorn" >
        <span class="checkmark"></span>
        </label>

      <label class="container">Pineapple
        <input type="checkbox" name="pineapple">
        <span class="checkmark"></span>
        </label>

      <label class="container">Peperoni
        <input type="checkbox" name = "peperoni">
        <span class="checkmark"></span>
        </label>

      <label class="container">Sausage
        <input type="checkbox" name = "sausage">
        <span class="checkmark"></span>
        </label>

      </div>

      <div class="submit">
        <br>
        <input type="submit" name="submit">
      </div>

    </form>

  </div>


  <footer>
    <p>Website by: James Hughes</p>
  </footer>

</div>


</html>
