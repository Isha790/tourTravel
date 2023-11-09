<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
<!-- //swiper -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>


</head>
<body>
  <section class="header">
<a href="home.php" class="logo">GHUMO  </a>
<nav class="navbar">
    <a href="home.php">Home</a>
    <a href="about.php">About</a>
    <a href="package.php">Packages</a>
    <a href="book.php">Book</a>

</nav>
<div id="menu-btn" class="fas fa-bars"></div>

  </section> 
  <div class ="heading" style="background:url(one.jpg)no-repeat">
<h1>Book now</h1>


</div>



<!-- booking section -->
<section class="booking">
  <h1 class="heading-title">book your trip</h1>
  <form action="book_form.php" method="post" class="book-form">
    <div class="flex">
       <div class="inputBox">
        <span>name:</span>
        <input type="text" placeholder="enter your name" name="name">
       </div>
       <div class="inputBox">
        <span>email:</span>
        <input type="email" placeholder="enter your email" name="email">
       </div>
       <div class="inputBox">
        <span>phone:</span>
        <input type="number" placeholder="enter your number" name="phone">
       </div>
       <div class="inputBox">
        <span>address:</span>
        <input type="text" placeholder="enter your address" name="address">
       </div>
       <div class="inputBox">
        <span>where to:</span>
        <input type="text" placeholder="place you want to visit" name="location">
       </div>
       <div class="inputBox">
        <span>how many:</span>
        <input type="number" placeholder="how many members" name="guests">
       </div>
       <div class="inputBox">
        <span>arrivals:</span>
        <input type="date"  name="arrivals">
       </div>
       <div class="inputBox">
        <span>leaving:</span>
        <input type="date"  name="leaving">
       </div>
    </div>
    <input type="submit" value="submit" class="btn" name="send">
  </form>
</section>


<section class="footer">
  <div class="box-container">
  <div class="box">
    <h3>Quick Links</h3>
  <a href="home.php"><i class="fas fa-angle-right"></i>Home</a>
    <a href="about.php"><i class="fas fa-angle-right"></i>About</a>
    <a href="package.php"><i class="fas fa-angle-right"></i>Packages</a>
    <a href="book.php"><i class="fas fa-angle-right"></i>Book</a>


  </div>
  <div class="box">
    <h3>Quick Links</h3>
  <a href="#"><i class="fas fa-angle-right"></i>Ask questions</a>
  <a href="#"><i class="fas fa-angle-right"></i>About us</a>
  <a href="#"><i class="fas fa-angle-right"></i>Privacy policy</a>
  <a href="#"><i class="fas fa-angle-right"></i>Terms of use</a>
    

  </div>
  <div class="box">
    <h3>Contact Info</h3>
  <a href="#"><i class="fas fa-phone"></i>+123-456-7890</a>
  <a href="#"><i class="fas fa-phone"></i>+111-222-3333</a>
  <a href="#"><i class="fas fa-envelope"></i>gymkhana@gmail.com</a>
  <a href="#"><i class="fas fa-map"></i>INDIA 49924</a>
</div>
<div class="box">
  <h3>follow us</h3>
  <a href="#"><i class="fas fa-facebook"></i>facebook</a>
  <a href="#"><i class="fas fa-twitter"></i>twitter</a>
  <a href="#"><i class="fas fa-facebook"></i>instagram</a>
</div>
</div>
<div class="created">created by <span>Rana Ji</span>|all rights are reserved</div>
</section>

  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>