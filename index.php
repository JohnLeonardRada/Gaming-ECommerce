<?php 
  require_once "database/creation.php";
  require_once "database/insertion.php";
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
          <li><a class="active" href="index.html">Home</a></li>
          <li><a href="shop.html">Shop</a></li>
          <li><a href="blog.html">Blog</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="contact.html">Contact</a></li>
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

    <section id="hero">
      <h4>FEB.14 - FEB.21</h4>
      <h2>Underworld Adventure</h2>
      <div class="text">
        <h1>Unlock Gaming Possibilities.</h1>
      </div>
      <p>SAVE UP TO 50%</p>
      <button>Shop Now</button>
    </section>

    <section id="feature" class="section-p1">
      <div class="fe-box">
        <img src="img/features/f1.png" alt="" />
        <h6>Hades II</h6>
      </div>
      <div class="fe-box">
        <img src="img/features/f2.png" alt="" />
        <h6>Street Fighter 6</h6>
      </div>
      <div class="fe-box">
        <img src="img/features/f3.png" alt="" />
        <h6>Baldur's Gate 3</h6>
      </div>
      <div class="fe-box">
        <img src="img/features/f4.png" alt="" />
        <h6>Diablo IV</h6>
      </div>
      <div class="fe-box">
        <img src="img/features/f5.png" alt="" />
        <h6>Replaced</h6>
      </div>
      <div class="fe-box">
        <img src="img/features/f6.png" alt="" />
        <h6>Final Fantasy 16</h6>
      </div>
    </section>

    <!-- <section id="product1" class="section-p2">
      <h2>Highest Rated Games</h2>
      <p>Most Played</p>
      <div class="pro-container">
        <div class="pro">
          <img src="img/products/p1.png" alt="" />
          <div class="desc">
            <span>Hoyoverse</span>
            <h5>Genshin Impact</h5>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h4>Free</h4>
          </div>
          <a href="#"><i class="fa fa-cart-shopping fa-xl cart"></i></a>
        </div>
        <div class="pro">
          <img src="img/products/p2.png" alt="" />
          <div class="desc">
            <span>Rockstar Games</span>
            <h5>Grand Theft Auto V</h5>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h4>Php 996</h4>
          </div>
          <a href="#"><i class="fa fa-cart-shopping fa-xl cart"></i></a>
        </div>
        <div class="pro">
          <img src="img/products/p3.png" alt="" />
          <div class="desc">
            <span>Santa Monica Studio</span>
            <h5>God of War</h5>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h4>Php 2,490</h4>
          </div>
          <a href="#"><i class="fa fa-cart-shopping fa-xl cart"></i></a>
        </div>
        <div class="pro">
          <img src="img/products/p4.png" alt="" />
          <div class="desc">
            <span>Innersloth</span>
            <h5>Among Us</h5>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h4>Php 98</h4>
          </div>
          <a href="#"><i class="fa fa-cart-shopping fa-xl cart"></i></a>
        </div>
        <div class="pro">
          <img src="img/products/p5.png" alt="" />
          <div class="desc">
            <span>Riot Games</span>
            <h5>Valorant</h5>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h4>Free</h4>
          </div>
          <a href="#"><i class="fa fa-cart-shopping fa-xl cart"></i></a>
        </div>
        <div class="pro">
          <img src="img/products/p6.png" alt="" />
          <div class="desc">
            <span>CD Projekt Red</span>
            <h5>Cyberpunk 2077</h5>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h4>Php 2,430</h4>
          </div>
          <a href="#"><i class="fa fa-cart-shopping fa-xl cart"></i></a>
        </div>
        <div class="pro">
          <img src="img/products/p7.png" alt="" />
          <div class="desc">
            <span>Rockstar Games</span>
            <h5>Red Dead Redemption 2</h5>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h4>Php 2,300</h4>
          </div>
          <a href="#"><i class="fa fa-cart-shopping fa-xl cart"></i></a>
        </div>
        <div class="pro">
          <img src="img/products/p8.png" alt="" />
          <div class="desc">
            <span>Behaviour Interactive</span>
            <h5>Dead By Daylight</h5>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h4>Php 499.99</h4>
          </div>
          <a href="#"><i class="fa fa-cart-shopping fa-xl cart"></i></a>
        </div>
      </div>
    </section> -->

    <section id="product1" class="section-p2">
      <?php
          include "database/products.php";
      ?>
    </section>

    <section id="banner" class="section-p3">
      <h4>Darkness Awaits</h4>
      <h2>Up to <span>70% Off</span> - All Souls Games</h2>
      <button class="normal">Explore More</button>
    </section>

    <section id="genre" class="section-p4">
      <h2>Popular Genres</h2>
      <div class="genre-container">
        <div class="pro">
          <img src="img/genres/action.png" alt="" />
          <div class="desc">
            <h4>Action Games</h4>
          </div>
        </div>
        <div class="pro">
          <img src="img/genres/adventure.png" alt="" />
          <div class="desc">
            <h4>Adventure Games</h4>
          </div>
        </div>
        <div class="pro">
          <img src="img/genres/action-adventure.png" alt="" />
          <div class="desc">
            <h4>Action-Adventure Games</h4>
          </div>
        </div>
        <div class="pro">
          <img src="img/genres/fighting.png" alt="" />
          <div class="desc">
            <h4>Fighting Games</h4>
          </div>
        </div>
        <div class="pro">
          <img src="img/genres/racing.png" alt="" />
          <div class="desc">
            <h4>Racing Games</h4>
          </div>
        </div>
        <div class="pro">
          <img src="img/genres/rpg.png" alt="" />
          <div class="desc">
            <h4>Role-Playing Games</h4>
          </div>
        </div>
        <div class="pro">
          <img src="img/genres/shooter.png" alt="" />
          <div class="desc">
            <h4>Shooter Games</h4>
          </div>
        </div>
        <div class="pro">
          <img src="img/genres/sports.png" alt="" />
          <div class="desc">
            <h4>Sports Games</h4>
          </div>
        </div>
      </div>
    </section>

    <section id="sm-banner" class="section-p5">
      <div class="banner-box">
        <h4>crazy deals</h4>
        <h2>buy 1 get 1 free</h2>
        <span>The best of both worlds</span>
        <button>Learn More</button>
      </div>
      <div class="banner-box banner-box2">
        <h4>spring/summer</h4>
        <h2>upcoming season</h2>
        <span>No more justice, only chaos remains</span>
        <button>Learn More</button>
      </div>
    </section>

    <section id="text-banner">
      <div class="banner-box">
        <h2>SEASONAL SALE</h2>
        <h3>Classic Games - - 80% OFF</h3>
      </div>
      <div class="banner-box banner-box2">
        <h2>VIRTUAL REALITY</h2>
        <h3>Dreams Into Reality</h3>
      </div>
      <div class="banner-box banner-box3">
        <h2>GAMING</h2>
        <h3>Console, Controller, Games</h3>
      </div>
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
        <p>© 2023, Wolfstein - HTML CSS Gaming Store Platform</p>
      </div>
    </section>
    <script src="script.js"></script>
  </body>
</html>
