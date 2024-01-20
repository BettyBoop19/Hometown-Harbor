<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
   <style>
    /* Add custom styles here */

    /* ... Your existing styles ... */

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
      text-align: center; 
    }

    /* Update the product item styles */
    .product {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-around;
      align-items: stretch;
    }
    .product-item {
    flex: 0 0 calc(50% - 20px); /* Adjust the width of each product item */
  margin-bottom: 20px;
  border: 1px solid #ddd;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s ease-in-out;
  background-color: #fff;
  overflow: hidden;
  height: 400px;

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
        <img src="t4.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="t6.webp" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="t7.jpg" class="d-block w-100" alt="...">
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

  <!-- Product Listing -->
 <section>
    <h3><center>Recent Listings</center></h3>
    <div class="product">
      <div class="row">
        <div class="col-md-3">
          <div class="product-item">
            <img src="t1.jpg" alt="Product 1">
            <button class="btn btn-primary btn-block" onclick="redirectToCheckout('t4.jpg')">Buy Now</button>
          </div>
        </div>
        <div class="col-md-3">
          <div class="product-item">
            <img src="t8.webp" alt="Product 2">
            <button class="btn btn-primary btn-block" onclick="redirectToCheckout('t5.avif')">Buy Now</button>
          </div>
        </div>
        <div class="col-md-3">
          <div class="product-item">
            <img src="t2.webp" alt="Product 3">
            <button class="btn btn-primary btn-block" onclick="redirectToCheckout('t6.webp')">Buy Now</button>
          </div>
        </div>
        <div class="col-md-3">
          <div class="product-item">
            <img src="t7.jpg" alt="Product 4">
            <button class="btn btn-primary btn-block" onclick="redirectToCheckout('t3.webp')">Buy Now</button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <h5><center>Recent Listings</center></h5>
    <div class="product">
      <div class="row">
        <div class="col-md-3">
          <div class="product-item">
            <img src="t4.jpg" alt="Product 5">
            <button class="btn btn-primary btn-block" onclick="redirectToCheckout('t4.jpg')">Buy Now</button>
          </div>
        </div>
        <div class="col-md-3">
          <div class="product-item">
            <img src="t5.avif" alt="Product 6">
            <button class="btn btn-primary btn-block" onclick="redirectToCheckout('t5.avif')">Buy Now</button>
          </div>
        </div>
        <div class="col-md-3">
          <div class="product-item">
            <img src="t6.webp" alt="Product 7">
            <button class="btn btn-primary btn-block" onclick="redirectToCheckout('t6.webp')">Buy Now</button>
          </div>
        </div>
        <div class="col-md-3">
          <div class="product-item">
            <img src="t3.webp" alt="Product 8">
            <button class="btn btn-primary btn-block" onclick="redirectToCheckout('t3.webp')">Buy Now</button>
          </div>
        </div>
      </div>
    </div>
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

  <script>
    function redirectToCheckout(productImageURL) {
      // Store the image URL in sessionStorage
      sessionStorage.setItem('productImageURL', productImageURL);
      // Redirect to the checkout page
      window.location.href = 'buynow.php';
    }
  </script>
</body>
</html>
