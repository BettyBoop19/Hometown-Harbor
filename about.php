<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hometown Harbor - About Us</title>
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
      body {
      font-family: 'Arial', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f5f5f5;
    }
       section {
      max-width: 800px;
      margin: 20px auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
        p {
      line-height: 1.6;
      color: #555;
    }
      .team-member {
      margin-bottom: 20px;
      text-align: center;
    }

    .team-member img {
      border-radius: 50%;
      max-width: 100px;
    }
     .features {
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
    }

    .feature {
      flex-basis: calc(33.33% - 20px);
      margin-bottom: 20px;
      padding: 15px;
      border: 1px solid #ddd;
      border-radius: 8px;
      box-sizing: border-box;
    }
        .feature img {
      max-width: 100%;
      height: auto;
    }



    
  </style>
</head>
<body>
 

 
  <nav class="navbar">
    <div class="container">
      <a class="navbar-brand" href="#">Hometown Harbor</a>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="thangkapage.php">Thangka Paintings</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="traditional.php">Traditional Clothes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="handicraft.php">HandiCrafts</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="music.php">Musical Instruments</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About Us</a>
        </li>
      </ul>
      <div class="login-container">
        <a href="login.php" class="login-link">Login</a>
      </div>
    </div>
  </nav>

  <section class="container">
    <h2>About Us</h2>
    <p>Welcome to Hometown Harbor, your go-to destination for quality products. At Hometown Harbor, we are passionate about providing you with a wide range of products that meet the highest standards of quality and design. Our mission is to make your online shopping experience enjoyable, convenient, and reliable.</p>

    <h2>Our Story</h2>
    <p>Founded in [Year], Hometown Harbor has grown from a small startup to a trusted online marketplace. We have established strong relationships with vendors and manufacturers to bring you the best selection of products. Every item in our inventory is carefully curated, ensuring that it meets our strict criteria for excellence.</p>

    <h2>Meet the Team</h2>
    <div class="team-member">
      <img src="sresto.jpg" alt="Shristi Silwal">
      <h3>Shristi Silwal</h3>
      <p>Co-Founder & CEO</p>
    </div>

    <div class="team-member">
      <img src="saugat.jpg" alt="Saugat Sigdel">
      <h3>Saugat Sigdel</h3>
      <p>Co-Founder & CEO</p>
    </div>

    <!-- Add more team members as needed -->

    <h2>Our Features</h2>
    <div class="features">
      <div class="feature">
        <img src="feature1.jpg" alt="Quality Assurance">
        <h3>Quality Assurance</h3>
        <p>Our products undergo rigorous quality checks to ensure they meet the highest standards.</p>
      </div>

      <div class="feature">
        <img src="feature2.jpg" alt="Fast Shipping">
        <h3>Fast Shipping</h3>
        <p>We strive to deliver your orders promptly, ensuring a seamless shopping experience.</p>
      </div>

      <div class="feature">
        <img src="feature3.jpg" alt="Customer Support">
        <h3>Customer Support</h3>
        <p>Our dedicated customer support team is here to assist you with any inquiries or issues.</p>
      </div>
    </div>
  </section>

  <footer>
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
          <p>&copy; 2023 Hometown Harbor. All Rights Reserved.</p>
        </div>
      </div>
    </div>
  </footer>
</body>
</html>
