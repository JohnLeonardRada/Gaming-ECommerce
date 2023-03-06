
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
          <li><a href="shop.php">Shop</a></li>
          <li><a class="active" href="contact.php">Contact</a></li>
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

    <section id="contact-page-header">
      <h2>#let's_talk</h2>
      <p>Leave a Message. I would love to hear from you.</p>
    </section>

    <section id="contact-details" class="section-contact">
        <div class="details">
            <span>GET IN TOUCH</span>
            <h2>Visit me in one of my location or contact me today</h2>
            <h3>Head Office</h3>

            <div>
                <li>
                    <i class="fa-solid fa-map"></i>
                    <p>129 C. Guadalupe St. Morning Breeze Subd., Caloocan City</p>
                </li>
                <li>
                    <i class="fa-solid fa-envelope"></i>
                    <p>johnleonard.rada@gmail.com</p>
                </li>
                <li>
                    <i class="fa-solid fa-phone"></i>
                    <p>(+63) 956 672 3091</p>
                </li>
                <li>
                    <i class="fa-solid fa-clock"></i>
                    <p>Monday to Friday / 9:00 AM - 6:00 PM</p>
                </li>
            </div>
        </div>

        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3859.941098881419!2d120.9849826887552!3d14.659284087859602!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b428340f88e1%3A0x438c2ea5675df612!2sMCU%2C%20Morning%20Breeze%20Subdivision%2C%20Caloocan%2C%20Metro%20Manila!5e0!3m2!1sen!2sph!4v1678081749438!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <section id="form-details">
      <form action="">
        <span>LEAVE A MESSAGE</span>
        <h2>I would love to hear from you</h2>
        <input type="text" placeholder="Your Name">
        <input type="text" placeholder="Email">
        <input type="text" placeholder="Subject">
        <textarea name="" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
        <button>Submit</button>
      </form>

      <div class="people">
        <div>
          <img src="img/people/p1.png" alt="">
          <p><span>John Leonard Rada</span> Software Engineer 
            <br>Phone: (+63) 956 672 3091
            <br>Email: johnleonard.rada@gmail.com</p>
        </div>
        <div>
          <img src="img/people/p1.png" alt="">
          <p><span>John Leonard Rada</span> Software Engineer 
            <br>Phone: (+63) 956 672 3091
            <br>Email: johnleonard.rada@gmail.com</p>
        </div>
        <div>
          <img src="img/people/p1.png" alt="">
          <p><span>John Leonard Rada</span> Software Engineer 
            <br>Phone: (+63) 956 672 3091
            <br>Email: johnleonard.rada@gmail.com</p>
        </div>
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
