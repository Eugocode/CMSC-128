<?php
  include("DBConnector.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Eugo Farm</title>

    <!-- Font Awesome Link cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <!-- CSS link -->

    <link rel="stylesheet" type="text/css" href="../CSS/syles.css" />
    
  </head>

  <body>
    <!-- HEADER -->
    <header class="header">
      
        <a href="#" class="logo">
          <img id="navbar-logo" src="../assets/eugo_logo.png" alt="Eugo Farm logo" />
          Eugo Farm
        </a>
        
        <div class="menu-toggle" id="mobile-menu">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </div>

        <nav class="nav-menu">
          <a href="index.php#home">Home</a>
          <a href="index.php#about">About Us</a>
          <a href="index.php#blogs">Blog</a>
          <a href="index.php#products">Products</a>
          <a href="index.php#contact">Contact Us</a>
        </nav>

        <div class="icons">
            <div class="fas fa-shopping-cart" id="cart-btn"></div>
            <div class="fas fa-user" id="login-btn"></div>
        </div>
    </header>

    <!-- Blog Section -->

    <section class="blog_view" id="view">
        <?php foreach($query as $q){ ?>
          <div class="heading">
              <h1><?php echo $q['title'];?></h1>
          </div>
          <p>by </p>
          <div class="author">
              <h1><?php echo $q['author'];?></h1>
          </div>
          <p>Date posted: </p>
          <div class="date">
              <h1><?php echo $q['date'];?></h1>
          </div>
          <div class="image">
              <img src="<?php echo $q['image']; ?>">
          </div>
          <p class="content" id="content"><?php echo $q['content'];?></p>
        <?php } ?>
    </section>

   
    <!-- Footer -->
    <section class="footer">
      <div class="row">
        <h4>Call us: 222-1234</h4>
        <img id="footer-logo" src="../assets/eugo_logo.png" alt="Eugo Farm logo" />
        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-instagram"></a>
        </div>
      </div>
      
      <div class="links">
          <a href="index.php#home">Home</a>
          <a href="index.php#about">About</a>
          <a href="index.php#blogs">Blog</a>
          <a href="index.php#products">Products</a>
          <a href="index.php#contact">Contact Us</a>
      </div>
  
      <div class="credit">Eugo Farm &#169 2021 All rights reserved</div>
    </section>

    <!-- custom js file link -->
    <script type="text/javascript" src="../JavaScript/app.js"></script>
  </body>
</html>