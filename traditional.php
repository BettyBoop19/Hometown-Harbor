<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
  <style>
    

    /* Update the navbar styles */
    .navbar-custom {
      background-color: #ffcc99;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    .navbar-custom .navbar-brand,
    .navbar-custom .navbar-nav .nav-link {
      color: #4d4d4d;
      font-weight: bold;
    }
    .navbar-custom .navbar-nav .nav-link:hover {
      color: #9966cc;
    }

    /* Update the carousel styles */
    #carouselExampleIndicators {
      margin-bottom: 20px;
    }
    .carousel-item img {
      max-height: 650px;
      object-fit: cover;
      width: 100%;
    }

    /* Update the section styles */
    section {
      margin-bottom: 30px;
    }
    section h5 {
      margin-bottom: 20px;
      font-size: 24px;
      color: #4d4d4d;
      text-transform: uppercase;
    }

    /* Update the product item styles */
    .product {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-around;
      align-items: stretch;
    }
    .product-item {
      flex: 0 0 calc(25% - 20px); /* Adjust the width of each product item */
      margin-bottom: 20px;
      border: 1px solid #ddd;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease-in-out;
      background-color: #fff;
      overflow: hidden;
    }
    .product-item:hover {
      transform: scale(1.05);
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }
    .product-item img {
      width: 100%;
      height: 300px; /* Adjust the height of the product image */
      object-fit: cover;
    }
    .product-item .buy-now-button {
      display: block;
      margin: 10px auto;
      padding: 10px 20px;
      font-size: 16px;
      background-color: #9966cc;
      color: #fff;
      text-decoration: none;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }
    .product-item .buy-now-button:hover {
      background-color: #7a3b8e;
    }

    /* Update the footer styles */
    footer {
      background-color: #333;
      color: #fff;
      padding: 20px 0;
      text-align: center;
    }
    footer .social-icons a {
      margin: 0 10px;
      color: #fff;
      font-size: 20px;
      text-decoration: none;
      transition: transform 0.3s ease;
    }
    footer .social-icons a:hover {
      transform: translateY(-3px);
    }
  </style>
</head>
<body>
  
   

   <div class="container-fluid bg-info text-white text-right py-2">

    <i class="fas fa-user"></i><a href="login.php" class="login-link"> Login</a>
  </div>

  <nav class="navbar navbar-expand-lg navbar-custom">
    <a class="navbar-brand" href="#">Hometown Harbor</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item active">
          <a class="nav-link mr-5" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link mr-5" href="thangkapage.php">Thangka Paintings</a>
        </li>
        <li class="nav-item">
          <a class="nav-link mr-5" href="traditional.php">Traditional Clothes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link mr-5" href="handicraft.php">HandiCrafts</a>
        </li>
        <li class="nav-item">
          <a class="nav-link mr-5" href="music.php">Musical Instruments</a>
        </li>
        <li class="nav-item">
          <a class="nav-link mr-5" href="about.php">About Us</a>
        </li>
       
        <!-- Add more list items for other links if needed -->
      </ul>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>

    <!-- Image Slider (Carousel) -->
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="trad1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="trad4.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="trad3.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <!-- yo bata product feature -->
  <header>
    <h4><center> BUYING AND SELLING </center></h4>
  </header>

  <main>

    <section>
      <h5><center>Featured Products</center></h5>
      <div class="product">
        <div class="product-item">
          <img class="product-image" src="tr1.jpeg" alt="Product 1">
          <button class="buy-now-button">Buy Now</button>
        </div>
        <div class="product-item">
          <img class="product-image" src="tr2.jpeg" alt="Product 2">
          <button class="buy-now-button">Buy Now</button>
        </div>
        <div class="product-item">
          <img class="product-image" src="sherpa.avif" alt="Product 1">
          <button class="buy-now-button">Buy Now</button>
        </div>
        <div class="product-item">
          <img class="product-image" src="daura.png" alt="Product 2">
          <button class="buy-now-button">Buy Now</button>
        </div>

        <!-- chaiyea anusar ko product rakhni -->
      </div>
    </section>

    <section>
      <h5><center>Recent Listings</center></h5>
      <div class="product">
        <div class="product-item">
          <img class="product-image" src="gurung.webp" alt="Product 3">
          <button class="buy-now-button">Buy Now</button>
        </div>
        <div class="product-item">
          <img class="product-image" src="magar.webp" alt="Product 4">
          <button class="buy-now-button">Buy Now</button>
        </div>
        <div class="product-item">
          <img class="product-image" src="rai.webp" alt="Product 3">
          <button class="buy-now-button">Buy Now</button>
        </div>
        <div class="product-item">
          <img class="product-image" src="tamangdress.jpg" alt="Product 4">
          <button class="buy-now-button">Buy Now</button>
        </div>
        <!-- chaiyea anusar rakhni-->
      </div>

      <!-- aru mahile kk banuna parxa-->
      
    </section>

    <footer class="bg-dark text-white">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h3>Contact Us</h3>
          <p>Email: HometownHarbor@gmail.com</p>
        </div>
        <div class="col-md-4">
          <h3>Follow Us</h3>
          <div class="social-icons">
            <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
          </div>
        </div>
        <div class="col-md-4">
          <img src="boston.png" alt="Company Logo" class="img-fluid">
        </div>
      </div>
      <div class="row mt-3">
        <div class="col">
          <p class="text-center">&copy; 2023 Hometown Harbor. All Rights Reserved.</p>
        </div>
      </div>
    </div>
  </footer>




  <!-- Bootstrap JS and dependencies (jQuery and Popper.js) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>