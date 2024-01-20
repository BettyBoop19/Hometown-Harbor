<!---------- Meta HTML Starts --------->
<!DOCTYPE html>
<html>
   <head>
      <title>Hometown Harbor</title>
       <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

      <link rel="stylesheet" href="css/style.css">
   </head>
   <body>
<!---------- Meta HTML Ends --------->
<!---------- Logo and Search Panel HTML Code Starts --------->
<div class="width-100 search-panel">
  <div class="container">
           <div class="width-20">
      <img src="images/logo.jpg" class="logo">
    </div>
  
    <div class="width-50">
      <input class="search-textbox" type="text" Placeholder="Search for products">
      <button class="search-button">
        <i class="fa fa-search" aria-hidden="true"></i>
      </button>
    </div>
    <div class="width-30">
      <ul class="cart-sect">
 
        <li>
          <i class="fa fa-user-circle-o" aria-hidden="true"></i>
          <a href="login.php">Login & Signup</a>
        </li>
        <li>
          <i class="fa fa-shopping-cart" aria-hidden="true"></i>
          <a href="#">Cart (0)</a>
        </li>
      </ul>
    </div>
  </div>
</div>
<!---------- Logo and Search Panel HTML Code Ends --------->
<!---------- Main Menu HTML Code Starts --------->
<div class="width-100">
  <div class="container">
    <nav>
    <ul class="main-menu">
        <li>

        <a href="#hometown-harbor">Hometown Harbor</a>
      </li>
      <li>
        <a href="#home">Home</a>
      </li>
          <li>
        <a href="#about-us">About Us</a>
      </li>
      <li>
        <a href="#thangka-paintings">Thangka paintings</a>
      </li>
      <li>
        <a href="#handicrafts">Handicrafts</a>
      </li>
      <li>
        <a href="#musical-instruments">Musical Instruments</a>
      </li>
      <li>
        <a href="#traditional-clothes">Traditional Clothes</a>
      </li>
  
     
    </ul>
  </nav>
  </div>
</div>
<!---------- Main Menu HTML Code Ends --------->

<!---------- Slider HTML Code Starts --------->
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/imageslide1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="images/imageslide2.jpeg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="images/imageslide3.jpg" class="d-block w-100" alt="...">
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

<!---------- Slider HTML Code Ends --------->
<hr>
<h1><center>Discounted Products</center></h1>
<hr>

<!-- Product-Section HTML Code STARTS -->
<div class="width-100 margin-top-50">
  <div class="container">
    <div class="width-25">
      <div class="product-section">
        <div class="product-border">
          <div class="product-img-center">
            <a href="#">
              <img class="product-img" src="images/thangka3.jpg">
            </a>
          </div>
          <div>
            <p class="product-name">
              <a href="#">Hand painted mandala</a>
            </p>

            <p class="product-rating">
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <span>(5)</span>
            </p>
            <p class="product-price">
              <span class="product-discounted-price">Rs.549.00</span>
              <span class="product-original-price">Rs.554</span>
              <span class="product-discount">90%OFF</span>
            </p>
            <center>
             <button class="btn btn-primary add-to-cart-btn" data-product-id="1" data-product-name="Hand painted mandala" data-product-price="549.00">Add to Cart</button>
           </center>
          </div>
        </div>
      </div>

    </div>
    <div class="width-25">
      <div class="product-section">
        <div class="product-border">
          <div class="product-img-center">
            <a href="#">
              <img class="product-img" src="images/thnagka1.jpg">
            </a>
          </div>
          <div>
            <p class="product-name">
              <a href="#">Chengring Bodhisattva Thangka</a>
            </p>
            <p class="product-rating">
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <span>(5)</span>
            </p>

            <p class="product-price">
              <span class="product-discounted-price">Rs.549.00</span>
              <span class="product-original-price">Rs.554</span>
              <span class="product-discount">90%OFF</span>
            </p>
            <center>
             <button class="btn btn-primary add-to-cart-btn" data-product-id="1" data-product-name="Hand painted mandala" data-product-price="549.00">Add to Cart</button>
           </center>
          </div>
        </div>
      </div>
    </div>
    <div class="width-25">
      <div class="product-section">
        <div class="product-border">
          <div class="product-img-center">
            <a href="#">
              <img class="product-img" src="images/Singing-Bowls.jpg">
            </a>
          </div>
          <div>
            <p class="product-name">
              <a href="#">Singing Bowl</a>
            </p>
            <p class="product-rating">
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <span>(5)</span>
            </p>
            <p class="product-price">
              <span class="product-discounted-price">Rs.549.00</span>
              <span class="product-original-price">Rs.554</span>
              <span class="product-discount">90%OFF</span>
            </p>
            <center>
             <button class="btn btn-primary add-to-cart-btn" data-product-id="1" data-product-name="Hand painted mandala" data-product-price="549.00">Add to Cart</button></center>
          </div>
        </div>
      </div>
    </div>
    <div class="width-25">
      <div class="product-section">
        <div class="product-border">
          <div class="product-img-center">
            <a href="#">
              <img class="product-img" src="images/Swayambhu1.jpg">
            </a>
          </div>
          <div>
            <p class="product-name">
              <a href="#">Swayambhu</a>
            </p>
            <p class="product-rating">
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <span>(5)</span>
            </p>
            <p class="product-price">
              <span class="product-discounted-price">Rs.549.00</span>
              <span class="product-original-price">Rs.554</span>
              <span class="product-discount">90%OFF</span>
            </p>
            <center>
             <button class="btn btn-primary add-to-cart-btn" data-product-id="1" data-product-name="Hand painted mandala" data-product-price="549.00">Add to Cart</button></center>
          </div>
        </div>
      </div>
    </div>
  
    </div>
   
    <div class="width-25">
      <div class="product-section">
        <div class="product-border">
          <div class="product-img-center">
            <a href="#">
              <img class="product-img" src="images/singingbowl2.jpg">
            </a>
          </div>
          <div>
            <p class="product-name">
              <a href="#">Singing Bowl</a>
            </p>
            <p class="product-rating">
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <span>(5)</span>
            </p>
            <p class="product-price">
              <span class="product-discounted-price">Rs.549.00</span>
              <span class="product-original-price">Rs.554</span>
              <span class="product-discount">90%OFF</span>
            </p>
            <center>
             <button class="btn btn-primary add-to-cart-btn" data-product-id="1" data-product-name="Hand painted mandala" data-product-price="549.00">Add to Cart</button></center>
          </div>
        </div>
      </div>
    </div>
    <div class="width-25">
      <div class="product-section">
        <div class="product-border">
          <div class="product-img-center">
            <a href="#">
              <img class="product-img" src="images/piggy.avif">
            </a>
          </div>
          <div>
            <p class="product-name">
              <a href="#">Clay Piggy Bank</a>
            </p>
            <p class="product-rating">
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <span>(5)</span>
            </p>
            <p class="product-price">
              <span class="product-discounted-price">Rs.549.00</span>
              <span class="product-original-price">Rs.554</span>
              <span class="product-discount">90%OFF</span>
            </p>
            <center>
             <button class="btn btn-primary add-to-cart-btn" data-product-id="1" data-product-name="Hand painted mandala" data-product-price="549.00">Add to Cart</button></center>
          </div>
        </div>
      </div>
    </div>
    <div class="width-25">
      <div class="product-section">
        <div class="product-border">
          <div class="product-img-center">
            <a href="#">
              <img class="product-img" src="images/t3.webp">
            </a>
          </div>
          <div>
            <p class="product-name">
              <a href="#">Thangka painting</a>
            </p>
            <p class="product-rating">
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <span>(5)</span>
            </p>
            <p class="product-price">
              <span class="product-discounted-price">Rs.549.00</span>
              <span class="product-original-price">Rs.554</span>
              <span class="product-discount">90%OFF</span>
            </p>
            <center>
             <button class="btn btn-primary add-to-cart-btn" data-product-id="1" data-product-name="Hand painted mandala" data-product-price="549.00">Add to Cart</button></center>
          </div>
        </div>
      </div>
    </div>
    <div class="width-25">
      <div class="product-section">
        <div class="product-border">
          <div class="product-img-center">
            <a href="#">
              <img class="product-img" src="images/thangka2.jpg">
            </a>
          </div>
          <div>
            <p class="product-name">
              <a href="#">Thangka painting</a>
            </p>
            <p class="product-rating">
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <span>(5)</span>
            </p>
            <p class="product-price">
              <span class="product-discounted-price">Rs.549.00</span>
              <span class="product-original-price">Rs.554</span>
              <span class="product-discount">90%OFF</span>
            </p>
            <center>
             <button class="btn btn-primary add-to-cart-btn" data-product-id="1" data-product-name="Hand painted mandala" data-product-price="549.00">Add to Cart</button></center>
          </div>
        </div>
      </div>
    </div>
    
 
<!---------- Product-Section HTML Code Ends --------->
<!-- Featured-Section HTML Code STARTS -->
<center>

    <div class="width-20">
      <div class="featured-border">
        <div class="featured-bord">
          <div class="width-20 featured-content">
            <i class="fa fa-circle-o" aria-hidden="true"></i>
          </div>
          <div class="width-80 featured-content margin-top-8">
            <h4>ONLINE SUPPORT 24/7</h4>
            <p>Support online 24 hours a day</p>
          </div>
        </div>
      </div>
    </div>
    <div class="width-20">
      <div class="featured-border">
        <div class="width-20 featured-content">
          <i class="fa fa-life-ring" aria-hidden="true"></i>
        </div>
        <div class="width-80 featured-content margin-top-8">
          <h4>TRY AND BUY</h4>
          <p>Try Product, If you like it then buy it</p>
        </div>
      </div>
    </div>
    <div class="width-20">
      <div class="featured-border">
        <div class="width-20 featured-content">
          <i class="fa fa-gift" aria-hidden="true"></i>
        </div>
        <div class="width-80 featured-content margin-top-8">
          <h4>INSTANT DISCOUNT</h4>
          <p>Upto 50% discount on all product</p>
        </div>
      </div>
    </div>
   
  </div>
</div>
</center>
<hr>
</br>
<!---------- Featured-Section HTML Code Ends --------->



<h2><center> Thangka Painting</center></h2>
<hr>
<div class="width-100 margin-top-50">
  <div class="container">
    <div class="width-25">
      <div class="product-section">
        <div class="product-border">
          <div class="product-img-center">
            <a href="#">
              <img class="product-img" src="images/t1.jpg">
            </a>
          </div>
          <div>
            <p class="product-name">
              <a href="#">Hand painted mandala</a>
            </p>

           
            <p class="product-price">
              <span class="product-discounted-price">Rs.549.00</span>
             
            </p>
            <center>
             <button class="btn btn-primary add-to-cart-btn" data-product-id="1" data-product-name="Hand painted mandala" data-product-price="549.00">Add to Cart</button>
           </center>
          </div>
        </div>
      </div>

    </div>
    <div class="width-25">
      <div class="product-section">
        <div class="product-border">
          <div class="product-img-center">
            <a href="#">
              <img class="product-img" src="images/t8.webp">
            </a>
          </div>
          <div>
            <p class="product-name">
              <a href="#">Chengring Bodhisattva Thangka</a>
            </p>
           

            <p class="product-price">
              <span class="product-discounted-price">Rs.549.00</span>
           
            </p>
            <center>
             <button class="btn btn-primary add-to-cart-btn" data-product-id="1" data-product-name="Hand painted mandala" data-product-price="549.00">Add to Cart</button>
           </center>
          </div>
        </div>
      </div>
    </div>
    <div class="width-25">
      <div class="product-section">
        <div class="product-border">
          <div class="product-img-center">
            <a href="#">
              <img class="product-img" src="images/t4.jpg">
            </a>
          </div>
          <div>
            <p class="product-name">
              <a href="#">Singing Bowl</a>
            </p>
           
            <p class="product-price">
              <span class="product-discounted-price">Rs.549.00</span>
             
            </p>
            <center>
             <button class="btn btn-primary add-to-cart-btn" data-product-id="1" data-product-name="Hand painted mandala" data-product-price="549.00">Add to Cart</button></center>
          </div>
        </div>
      </div>
    </div>
    <div class="width-25">
      <div class="product-section">
        <div class="product-border">
          <div class="product-img-center">
            <a href="#">
              <img class="product-img" src="images/t7.jpg">
            </a>
          </div>
          <div>
            <p class="product-name">
              <a href="#">Tp</a>
            </p>
           
            <p class="product-price">
              <span class="product-discounted-price">Rs.549.00</span>
              
            </p>
            <center>
             <button class="btn btn-primary add-to-cart-btn" data-product-id="1" data-product-name="Hand painted mandala" data-product-price="549.00">Add to Cart</button></center>
          </div>
        </div>
      </div>
    </div>
  
    </div>
   
    <div class="width-25">
      <div class="product-section">
        <div class="product-border">
          <div class="product-img-center">
            <a href="#">
              <img class="product-img" src="images/t9.jpg">
            </a>
          </div>
          <div>
            <p class="product-name">
              <a href="#">Singing Bowl</a>
            </p>
           
            <p class="product-price">
              <span class="product-discounted-price">Rs.549.00</span>
             
            </p>
            <center>
             <button class="btn btn-primary add-to-cart-btn" data-product-id="1" data-product-name="Hand painted mandala" data-product-price="549.00">Add to Cart</button></center>
          </div>
        </div>
      </div>
    </div>
    <div class="width-25">
      <div class="product-section">
        <div class="product-border">
          <div class="product-img-center">
            <a href="#">
              <img class="product-img" src="images/t2.webp">
            </a>
          </div>
          <div>
            <p class="product-name">
              <a href="#">Clay Piggy Bank</a>
            </p>

            <p class="product-price">
              <span class="product-discounted-price">Rs.549.00</span>
             
            </p>
            <center>
             <button class="btn btn-primary add-to-cart-btn" data-product-id="1" data-product-name="Hand painted mandala" data-product-price="549.00">Add to Cart</button></center>
          </div>
        </div>
      </div>
    </div>
    <div class="width-25">
      <div class="product-section">
        <div class="product-border">
          <div class="product-img-center">
            <a href="#">
              <img class="product-img" src="images/t3.webp">
            </a>
          </div>
          <div>
            <p class="product-name">
              <a href="#">Thangka painting</a>
            </p>
            
            <p class="product-price">
              <span class="product-discounted-price">Rs.549.00</span>
              
            </p>
            <center>
             <button class="btn btn-primary add-to-cart-btn" data-product-id="1" data-product-name="Hand painted mandala" data-product-price="549.00">Add to Cart</button></center>
          </div>
        </div>
      </div>
    </div>
    <div class="width-25">
      <div class="product-section">
        <div class="product-border">
          <div class="product-img-center">
            <a href="#">
              <img class="product-img" src="images/t5.avif">
            </a>
          </div>
          <div>
            <p class="product-name">
              <a href="#">Thangka painting</a>
            </p>
         
          
            <p class="product-price">
              <span class="product-discounted-price">Rs.549.00</span>
              
            </p>
            <center>
             <button class="btn btn-primary add-to-cart-btn" data-product-id="1" data-product-name="Hand painted mandala" data-product-price="549.00">Add to Cart</button></center>
          </div>
        </div>
      </div>
    </div>

</br>
<br>
 <br>
 <br>
 <br>
  <br>
 <br>
 <br>
  <br>
 <br>
 <br>

  <br>
 <br>
 
 <br>
  <br>
 <br>
 <br>
 <br>
 <br>
  <br>
 <br>
 <br>
  <hr>
  <center><h2>Handicrafts</h2></center>
  <hr>



<div class="width-100 margin-top-50">
  <div class="container">
    <div class="width-25">
      <div class="product-section">
        <div class="product-border">
          <div class="product-img-center">
            <a href="#">
              <img class="product-img" src="images/handi1.jpg">
            </a>
          </div>
          <div>
            <p class="product-name">
              <a href="#">Hand painted mandala</a>
            </p>

           
            <p class="product-price">
              <span class="product-discounted-price">Rs.549.00</span>
             
            </p>
            <center>
             <button class="btn btn-primary add-to-cart-btn" data-product-id="1" data-product-name="Hand painted mandala" data-product-price="549.00">Add to Cart</button>
           </center>
          </div>
        </div>
      </div>

    </div>
    <div class="width-25">
      <div class="product-section">
        <div class="product-border">
          <div class="product-img-center">
            <a href="#">
              <img class="product-img" src="images/handi2.jpg">
            </a>
          </div>
          <div>
            <p class="product-name">
              <a href="#">Chengring Bodhisattva Thangka</a>
            </p>
           

            <p class="product-price">
              <span class="product-discounted-price">Rs.549.00</span>
           
            </p>
            <center>
             <button class="btn btn-primary add-to-cart-btn" data-product-id="1" data-product-name="Hand painted mandala" data-product-price="549.00">Add to Cart</button>
           </center>
          </div>
        </div>
      </div>
    </div>
    <div class="width-25">
      <div class="product-section">
        <div class="product-border">
          <div class="product-img-center">
            <a href="#">
              <img class="product-img" src="images/handi3.webp">
            </a>
          </div>
          <div>
            <p class="product-name">
              <a href="#">Singing Bowl</a>
            </p>
           
            <p class="product-price">
              <span class="product-discounted-price">Rs.549.00</span>
             
            </p>
            <center>
             <button class="btn btn-primary add-to-cart-btn" data-product-id="1" data-product-name="Hand painted mandala" data-product-price="549.00">Add to Cart</button></center>
          </div>
        </div>
      </div>
    </div>
    <div class="width-25">
      <div class="product-section">
        <div class="product-border">
          <div class="product-img-center">
            <a href="#">
              <img class="product-img" src="images/handi4.jpg">
            </a>
          </div>
          <div>
            <p class="product-name">
              <a href="#">Tp</a>
            </p>
           
            <p class="product-price">
              <span class="product-discounted-price">Rs.549.00</span>
              
            </p>
            <center>
             <button class="btn btn-primary add-to-cart-btn" data-product-id="1" data-product-name="Hand painted mandala" data-product-price="549.00">Add to Cart</button></center>
          </div>
        </div>
      </div>
    </div>
  
    </div>
   
    <div class="width-25">
      <div class="product-section">
        <div class="product-border">
          <div class="product-img-center">
            <a href="#">
              <img class="product-img" src="images/handi5.jpg">
            </a>
          </div>
          <div>
            <p class="product-name">
              <a href="#">Singing Bowl</a>
            </p>
           
            <p class="product-price">
              <span class="product-discounted-price">Rs.549.00</span>
             
            </p>
            <center>
             <button class="btn btn-primary add-to-cart-btn" data-product-id="1" data-product-name="Hand painted mandala" data-product-price="549.00">Add to Cart</button></center>
          </div>
        </div>
      </div>
    </div>
    <div class="width-25">
      <div class="product-section">
        <div class="product-border">
          <div class="product-img-center">
            <a href="#">
              <img class="product-img" src="images/handi6.jpg">
            </a>
          </div>
          <div>
            <p class="product-name">
              <a href="#">Clay Piggy Bank</a>
            </p>

            <p class="product-price">
              <span class="product-discounted-price">Rs.549.00</span>
             
            </p>
            <center>
             <button class="btn btn-primary add-to-cart-btn" data-product-id="1" data-product-name="Hand painted mandala" data-product-price="549.00">Add to Cart</button></center>
          </div>
        </div>
      </div>
    </div>
    <div class="width-25">
      <div class="product-section">
        <div class="product-border">
          <div class="product-img-center">
            <a href="#">
              <img class="product-img" src="images/handi7.avif">
            </a>
          </div>
          <div>
            <p class="product-name">
              <a href="#">Thangka painting</a>
            </p>
            
            <p class="product-price">
              <span class="product-discounted-price">Rs.549.00</span>
              
            </p>
            <center>
             <button class="btn btn-primary add-to-cart-btn" data-product-id="1" data-product-name="Hand painted mandala" data-product-price="549.00">Add to Cart</button></center>
          </div>
        </div>
      </div>
    </div>
    <div class="width-25">
      <div class="product-section">
        <div class="product-border">
          <div class="product-img-center">
            <a href="#">
              <img class="product-img" src="images/handi8.jpg">
            </a>
          </div>
          <div>
            <p class="product-name">
              <a href="#">Thangka painting</a>
            </p>
         
          
            <p class="product-price">
              <span class="product-discounted-price">Rs.549.00</span>
              
            </p>
            <center>
             <button class="btn btn-primary add-to-cart-btn" data-product-id="1" data-product-name="Hand painted mandala" data-product-price="549.00">Add to Cart</button></center>
          </div>
        </div>
      </div>
    </div>
  </section>


 `</br>
 <br>
 <br>
 <br>
  <br>
 <br>
 <br>
 <hr>

<h2><center>Musical Instrument</center></h2>
<hr>

<div class="width-100 margin-top-50">
  <div class="container">
    <div class="width-25">
      <div class="product-section">
        <div class="product-border">
          <div class="product-img-center">
            <a href="#">
              <img class="product-img" src="images/mu1.jpg">
            </a>
          </div>
          <div>
            <p class="product-name">
              <a href="#">Hand painted mandala</a>
            </p>

           
            <p class="product-price">
              <span class="product-discounted-price">Rs.549.00</span>
             
            </p>
            <center>
             <button class="btn btn-primary add-to-cart-btn" data-product-id="1" data-product-name="Hand painted mandala" data-product-price="549.00">Add to Cart</button>
           </center>
          </div>
        </div>
      </div>

    </div>
    <div class="width-25">
      <div class="product-section">
        <div class="product-border">
          <div class="product-img-center">
            <a href="#">
              <img class="product-img" src="images/m6.webp">
            </a>
          </div>
          <div>
            <p class="product-name">
              <a href="#">Chengring Bodhisattva Thangka</a>
            </p>
           

            <p class="product-price">
              <span class="product-discounted-price">Rs.549.00</span>
           
            </p>
            <center>
             <button class="btn btn-primary add-to-cart-btn" data-product-id="1" data-product-name="Hand painted mandala" data-product-price="549.00">Add to Cart</button>
           </center>
          </div>
        </div>
      </div>
    </div>
    <div class="width-25">
      <div class="product-section">
        <div class="product-border">
          <div class="product-img-center">
            <a href="#">
              <img class="product-img" src="images/m2.jpeg">
            </a>
          </div>
          <div>
            <p class="product-name">
              <a href="#">Singing Bowl</a>
            </p>
           
            <p class="product-price">
              <span class="product-discounted-price">Rs.549.00</span>
             
            </p>
            <center>
             <button class="btn btn-primary add-to-cart-btn" data-product-id="1" data-product-name="Hand painted mandala" data-product-price="549.00">Add to Cart</button></center>
          </div>
        </div>
      </div>
    </div>
    <div class="width-25">
      <div class="product-section">
        <div class="product-border">
          <div class="product-img-center">
            <a href="#">
              <img class="product-img" src="images/m3.jpg">
            </a>
          </div>
          <div>
            <p class="product-name">
              <a href="#">Tp</a>
            </p>
           
            <p class="product-price">
              <span class="product-discounted-price">Rs.549.00</span>
              
            </p>
            <center>
             <button class="btn btn-primary add-to-cart-btn" data-product-id="1" data-product-name="Hand painted mandala" data-product-price="549.00">Add to Cart</button></center>
          </div>
        </div>
      </div>
    </div>
  
    </div>
   
    <div class="width-25">
      <div class="product-section">
        <div class="product-border">
          <div class="product-img-center">
            <a href="#">
              <img class="product-img" src="images/m5.jpeg">
            </a>
          </div>
          <div>
            <p class="product-name">
              <a href="#">Singing Bowl</a>
            </p>
           
            <p class="product-price">
              <span class="product-discounted-price">Rs.549.00</span>
             
            </p>
            <center>
             <button class="btn btn-primary add-to-cart-btn" data-product-id="1" data-product-name="Hand painted mandala" data-product-price="549.00">Add to Cart</button></center>
          </div>
        </div>
      </div>
    </div>
    <div class="width-25">
      <div class="product-section">
        <div class="product-border">
          <div class="product-img-center">
            <a href="#">
              <img class="product-img" src="images/m7.jpeg">
            </a>
          </div>
          <div>
            <p class="product-name">
              <a href="#">Clay Piggy Bank</a>
            </p>

            <p class="product-price">
              <span class="product-discounted-price">Rs.549.00</span>
             
            </p>
            <center>
             <button class="btn btn-primary add-to-cart-btn" data-product-id="1" data-product-name="Hand painted mandala" data-product-price="549.00">Add to Cart</button></center>
          </div>
        </div>
      </div>
    </div>
    <div class="width-25">
      <div class="product-section">
        <div class="product-border">
          <div class="product-img-center">
            <a href="#">
              <img class="product-img" src="images/m8.jpg">
            </a>
          </div>
          <div>
            <p class="product-name">
              <a href="#">Thangka painting</a>
            </p>
            
            <p class="product-price">
              <span class="product-discounted-price">Rs.549.00</span>
              
            </p>
            <center>
             <button class="btn btn-primary add-to-cart-btn" data-product-id="1" data-product-name="Hand painted mandala" data-product-price="549.00">Add to Cart</button></center>
          </div>
        </div>
      </div>
    </div>
    <div class="width-25">
      <div class="product-section">
        <div class="product-border">
          <div class="product-img-center">
            <a href="#">
              <img class="product-img" src="images/m4.jpeg">
            </a>
          </div>
          <div>
            <p class="product-name">
              <a href="#">Thangka painting</a>
            </p>
         
          
            <p class="product-price">
              <span class="product-discounted-price">Rs.549.00</span>
              
            </p>
            <center>
             <button class="btn btn-primary add-to-cart-btn" data-product-id="1" data-product-name="Hand painted mandala" data-product-price="549.00">Add to Cart</button></center>
          </div>
        </div>
      </div>
    </div>
  </section>

 
   

<!-- Footer-Section HTML Code STARTS -->
<div class="width-100 margin-top-50 footer">
  <div class="container">
    <div class="width-25">
      <h2 class="quicklink-heading">Account Detail</h2>
      <ul class="quicklink-menu">
        <li><a href="#">Home</a></li>
        <li><a href="#">About us</a></li>
        <li><a href="#">Search</a></li>
        <li><a href="#">Cart</a></li>
        <li><a href="#">Checkout</a></li>
      </ul>
    </div>
    <div class="width-25">
      <h2 class="quicklink-heading">Quick Link</h2>
      <ul class="quicklink-menu">
        <li><a href="#">My Profile</a></li>
        <li><a href="#">Change Password</a></li>
        <li><a href="#">Order History</a></li>
       

      </ul>
    </div>
    <div class="width-25">
      <h2 class="quicklink-heading">Quick Link</h2>
      <ul class="quicklink-menu">
        <li><a href="#">Login</a></li>
        <li><a href="#">Faq</a></li>
        <li><a href="#">Contact us</a></li>
        
      </ul>
    </div>
    <div class="width-25">
      <h2 class="quicklink-heading">GET IN TOUCH</h2>
      <ul class="get-in-touch">
        <li><i class="fa fa-envelope-o" aria-hidden="true"></i> E-MAIL:<a href="#" class="footer-e-mail"> hometownharbor@gmail.com</a></li>
        <li><i class="fa fa-headphones" aria-hidden="true"></i> WHATS-APP: +977 9812541254</li>
        <li><i class="fa fa-fax" aria-hidden="true"></i> CONTACT NO.: +977 9854215423</li>
        <li><i class="fa fa-globe" aria-hidden="true"></i> WEBSITE:<a href="#" class="footer-website"> https://www.hometownharbor.com</a></li>
      </ul>
      <ul class="social-media">
        <li><a href="#"><img src="images/facebook.png"></a></li>
        <li><a href="#"><img src="images/twitter.png"></a></li>
        <li><a href="#"><img src="images/insta.jpg"></a></li>
       
      </ul>
    </div>
  </div>
</div>
<!---------- Footer-Section HTML Code Ends --------->
<!-- Footer-bottom Section HTML Code STARTS -->
<div class="width-100 footer2-bacbor">
  <p class="footer2-content">Copyright 2023, hometown.com. All Rights Reserved</p>
</div>
<!---------- Footer-bottom Section HTML Code Ends --------->
 <script src="script.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



 
 </body>
 </html>

