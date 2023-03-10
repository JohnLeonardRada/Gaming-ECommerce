<?php 
//   require_once "database/creation.php";
//   require_once "database/insertion.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cryo</title>
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v6.0.0/css/all.css"
    />
    <link rel="stylesheet" href="style.css" />
  </head>

  <body>
    <section id="header">
      <a href="#"><img src="img/header/logo.png" alt="" /></a>

      <div>
        <ul id="navbar">
          <li><a href="index.php">Home</a></li>
          <li><a class="active" href="shop.php">Shop</a></li>
          <li id="lg-bag">
            <a href="cart.html"><i class="fa fa-bag-shopping"></i></a>
          </li>
          <a href="#" id="close"><i class="fa fa-xmark"></i></a>
        </ul>
      </div>
      <div id="mobile">
        <a href="cart.html"><i class="fa fa-bag-shopping"></i></a>
        <i id="bar" class="fa-solid fa-outdent"></i>
      </div>
    </section>

    <section id="pro-details" class="section-single-product">
      <div class="single-pro-image">
        <img src="img/products/p1.png" width="100%" id="MainImg" class="single-image" alt="" />
        <div class="small-img-group">
          <div class="small-img-col">
            <img
              src="img/products/p1.png"
              width="100%"
              id="MainImg"
              class="small-img"
              alt=""
            />
          </div>
          <div class="small-img-col">
            <img
              src="img/products/p2.png"
              width="100%"
              id="MainImg"
              class="small-img"
              alt=""
            />
          </div>
          <div class="small-img-col">
            <img
              src="img/products/p3.png"
              width="100%"
              id="MainImg"
              class="small-img"
              alt=""
            />
          </div>
          <div class="small-img-col">
            <img
              src="img/products/p4.png"
              width="100%"
              id="MainImg"
              class="small-img"
              alt=""
            />
          </div>
        </div>
      </div>

      <div class="single-pro-details">
        <h6>Shop/Games</h6>
        <h4>Genshin Impact</h4>
        <h2>FREE</h2>

        <!-- <select>
                <option>Select Size</option>
                <option>XL</option>
                <option>2XL</option>
                <option>Small Large</option>
                <option>Large</option>
            </select>
            <input type="number" value="1"> -->

        <h4>Game Details</h4>
        <p>
          Genshin Impact is a free-to-play action role-playing game developed
          and published by miHoYo Co., Ltd. Outside of China, the publisher is
          miHoYo's subsidiary Cognosphere Pte., Ltd. HoYoverse. The game
          features a fantasy open-world environment and action based combat
          system using elemental magic, character switching, and gacha
          monetization system for players to obtain new characters, weapons, and
          other resources. The game can only be played with an internet
          connection and features a limited multiplayer mode allowing up to four
          players in a world.
        </p>

        <button class="normal">Add To Cart</button>
      </div>
    </section>

    <section id="product1" class="section-p2">
      <h2>Featured Games</h2>
      <p>Spring / Summer</p>
      <?php 
        include "database/sproduct.php";
      ?>
    </section>

    <section id="newsletter" class="section-p6">
      <div class="newstext">
        <h4>Sign Up For Newsletter</h4>
        <p>
          Get Email updates about the latest games and
          <span>special offers</span>
        </p>
      </div>

      <div class="form">
        <input type="text" placeholder="Your Email Address" />
        <button class="normal">Sign Up</button>
      </div>
    </section>

    <footer class="section-p7">
      <div class="col">
        <!-- <img class="logo" src="img/header/logo.png" alt=""> -->
        <h4>Contact</h4>
        <p>
          <strong>Address:</strong> 129 C. Guadalupe St. Morning Breeze Subd.,
          Caloocan City
        </p>
        <p><strong>Phone:</strong> (+63) 956 672 3091</p>
        <p><strong>Hours:</strong> 9:00 - 18:00, Mon-Fri</p>
        <div class="follow">
          <h4>Follow Us</h4>
          <div class="icon">
            <i class="fa-brands fa-facebook-f"></i>
            <i class="fa-brands fa-linkedin-in"></i>
            <i class="fa-brands fa-github"></i>
          </div>
        </div>
      </div>

      <div class="col">
        <h4>About</h4>
        <a href="#">About Us</a>
        <a href="#">Privacy Policy</a>
        <a href="#">Terms & Conditions</a>
        <a href="#">Contact Us</a>
      </div>

      <div class="col">
        <h4>My Account</h4>
        <a href="#">Sign In</a>
        <a href="#">View Cart</a>
        <a href="#">My Wishlist</a>
        <a href="#">Help</a>
      </div>

      <div class="col install">
        <h4>Install App</h4>
        <p>From App Store or Google Play</p>
        <div class="row">
          <img src="img/footer/apple.png" alt="" />
          <img src="img/footer/google.png" alt="" />
        </div>
        <p>Secured Payment Gateways</p>
        <img src="img/footer/payment.png" alt="" />
      </div>
    </footer>

    <section id="copyright">
      <div class="copyright">
        <p>?? 2023, Wolfstein - HTML CSS Gaming Store Platform</p>
      </div>
    </section>
    <script src="script.js"></script>
  </body>
</html>
