<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>




<!DOCTYPE html>
<html lang="en">
  <head></head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Flicker</title>

    <script src="https://kit.fontawesome.com/4a447404cd.js" crossorigin="anonymous"></script>

    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    />

    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
      integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm"
      crossorigin="anonymous"
    />
    <style>
      *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }
      h1{
        font-size: 2.5rem;
        font-weight: 1000;
      }

      h2{
        font-size: 1.8rem;
        font-weight: 600;
      }

      h3{
        font-size: 1.4rem;
        font-weight: 800;
      }

      h4{
        font-size: 1.1rem;
        font-weight: 600;
      }

      h5{
        font-size: 1rem;
        font-weight: 400;
        color: #1d1d1d;
      }

      h6{
        color: #D8D8D8;
      }

      button{
        font-size: 0.8rem;
        font-weight: 700;
        outline: none;
        border: none;
        background-color: #1d1d1d;
        color: aliceblue;
        padding: 13px 30px;
        cursor: pointer;
        text-transform: uppercase;
        transition: 0.3s ease;
      }

      button:hover{
        background-color: #3a3833;
      }

      .container img {
      width: 50px;
      object-fit: cover;
      }

      hr{
        width: 30px;
        height: 2px;
        background-color: #fb774b;
      }

      .star{
        padding: 10px 0;
      }

      .star i{
        font-size: 0.8rem;
        color: gold;
      }

      .navbar {
        font-size: 16px;
        top: 0;
        left: 0;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
      }

      .navbar-light .navbar-nav .nav-link {
      padding: 0 20px;
      color: black;
      transition: 0.3s ease;
      }

      .navbar-light .navbar-nav .nav-link:hover,
      .navbar i:hover,
      .navbar-light .navbar-nav .nav-link.active,
      .navbar i.nav-link.active {
      color: coral;
      }

      .navbar i{
        font-size: 1.2rpm;    
        padding: 0 7px;
        cursor: pointer;
        transition: 0.3 ease;
      }

      #bar{
        font-size: 1.5rem;
        padding: 7px;
        cursor: pointer;
        transition: 0.3s ease;
        color: black;
      }

      #bar:hover,
      #bar.active{
        color: #fff;
      }

      @media only screen and (max-width: 991px){
        body > nav > div > button:hover,
        body > nav > div > button:focus{
          background-color: #fb774b;
        }

        body > nav > div > button:hover #bar,
        body > nav > div > button:focus #bar{
          color: #fff;
        }

        #navbarSupportedContent > ul{
          margin: 1rem;
          justify-content: flex-end;
          align-items: flex-end;
          text-align: right;
        }

        #navbarSupportedContent > ul > li:nth-child(n) > a{
          padding: 10px 0;
        }
      }

      /*mobile nav*/
      .navbar-light .navbar-toggler{
        border: none;
        outline: none;
      }

      #home {
        background-image: url(images/background.jpg);
        width: 100%;
        height: 100vh;
        background-size: cover;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: flex-start;
      }

      #home span{
        color: coral;
      }

      .row img{
        width: 50px;
      }

      .one img{
        width: 350px;
        height: 400px;
        object-fit: cover;
      }

      #new .one img{
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
        object-fit: cover;
      }

      #new .one .details{
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        transition: 0.3s ease;
      }

      #new .one:hover .details{
        cursor: pointer;
        background-color: rgba(245, 178, 178, 0.7);
      }

      #new .one .details button{
        display: inline-block;
        font-size: 14px;
        font-weight: 500;
        color: #2a2a2a;
        background: none;
        text-transform: uppercase;
        border-bottom: 1px solid #2a2a2a;
        padding: 2.5px;
        transform: translateY(70px);
        transition: 0.3s ease;
      }

      #new .one .details button:hover{
        color: #fff;
        border-bottom: 1px solid #fff;
      }

      #new .one:nth-child(1) .details{
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: flex-start;
        text-align: start;
      }

      #new .one:nth-child(2) .details{
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: center;
        text-align: start;
      }

      #new .one:nth-child(3) .details{
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: flex-end;
        text-align: start;
      }
 
      #featured .container{
        text-align: center;
      }

      #featured .row img{
        width: 250px;
        height: 250px;
        object-fit: cover;
      }

      #featured .product{
        text-align: center;
      }

      .product{
        cursor: pointer;
        margin-bottom: 2rem;
      }

      .product img{
        transition: 0.3s all;
      }

      .product:hover img{
        opacity: 0.7;
      }

      .product .buy-btn{
        background-color: #fb774b;
        transform: translateY(20px);
        opacity: 0;
        transition: 0.3s all;
      }

      .product:hover .buy-btn{
        transform: translateY(20px);
        opacity: 1;
      }

      #banner{
        background-image: url(images/backgroung4.jpeg);
        width: 100%;
        height: 60vh;
        background-size: cover;
        background-position: top 70px center;
        background-repeat: none;
        background-attachment: fixed;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: flex-start;
      }
       
      #banner button{
        transform: translateY(140px);
      }

      .copyright img{
        width: 100%;
        height: 100%;
      }

      footer{
        background-color: #2a2a2a;
      }

      footer h5{
        color: #D8D8D8;
        font-weight: 700;
        font-size: 1.2rem;
      }

      footer li{
        padding-bottom: 4px;
      }

      footer li a{
        font-size: 0.8rem;
        color: #999;
      }

      footer li a:hover{
        font-size: 0.8rem;
        color: #D8D8D8;
      }

      footer p{
        color: #999;
        font-size: 00.8rem;
      }

      footer .copyright a{
        color: #000;
        width: 38px;
        height: 38px;
        background-color: #fff;
        display: inline-block;
        text-align: center;
        line-height: 38px;
        border-radius: 50%;
        transition: 0.3s ease;
        margin:  0 5px;
      }

      footer .copyright a:hover{
        color: #fff;
        background-color: #fb774b;
      }


      



    </style>
  
  </head>
  <body>
    <!-- NAVIGATION-->

    <nav class="navbar navbar-expand-lg navbar-light bg-white py-2 fixed-top">
    <div class="container">
        <img src="images/logo3.jpg" alt="" />
        <h3>&ensp; flickr</h3>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span><i id="bar" class="fa-solid fa-bars"></i></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">                                                                                                                                                                                                                                                                                              
          <li class="nav-item">
            <a class="nav-link active" href="welcome.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="shop.php">Shop</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="blog.html">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact-us.html">Contact Us</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
          <li class="nav-item">
            <i class="fa-solid fa-magnifying-glass"></i>
            <i class="fa-solid fa-bag-shopping"></i>
          </li>
          <div class="navbar-collapse collapse">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
        <a class="nav-link" href="#">  <?php echo "Welcome ". $_SESSION['username']?></a>
</div>
         </div>
    </div>
  </nav>

      

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <section id="home">
      <div class="container">
        <H5>NEW ARRIVALS</H5>
        <H1><span>Best Price</span> This Year</H1>
        <p>Shoomatic offers your very comfortable time <br>
          on walking and exercises.
        </p>
        <button>Shop Now</button>

      </div>
    </section>

    <section id="brand" class="container">
      <div class="row" m-0 py-5>
        <img class="img-fluid col-lg-2 col-md-4 col-6" src="images/brands/brand18.jpg" alt="">
        <img class="img-fluid col-lg-2 col-md-4 col-6" src="images/brands/brand10.jpg" alt="">
        <img class="img-fluid col-lg-2 col-md-4 col-6" src="images/brands/brand14.jpg" alt="">
        <img class="img-fluid col-lg-2 col-md-4 col-6" src="images/brands/brand3.jpg" alt="">
        <img class="img-fluid col-lg-2 col-md-4 col-6" src="images/brands/brand16.jpg" alt="">
        <img class="img-fluid col-lg-2 col-md-4 col-6" src="images/brands/brand15.jpg" alt="">
      </div>
    </section>

    <section id="new" class="w-100">
      <div class="row p-0 m-0">
        <div class="one col-lg-4 col-md-12 col-12 py-0">
          <img class="img-fluid" src="images/shoes1.jpeg" alt="">
          <div class="details">
            <h2>Extreme Rare Sneakers</h2>
            <button class="text-uppercase">Shop Now</button>
          </div>
        </div>

        <div class="one col-lg-4 col-md-12 col-12 py-0">
          <img class="img-fluid" src="images/model2.jpeg" alt="">
          <div class="details">
            <h2>Awesome Blank Outfit</h2>
            <button class="text-uppercase">Shop Now</button>
          </div>
        </div>

        <div class="one col-lg-4 col-md-12 col-12 py-0">
          <img class="img-fluid" src="images/watch1.jpeg" alt="">
          <div class="details">
            <h2>Spotwear Up To 50% Off</h2>
            <button class="text-uppercase">Shop Now</button>
          </div>
        </div>
      </div>
   </section>

   <section id="featured" class="my-5 pb-5">
     <div class="container text-centre mt-5 py-5">
       <h3>Our Featured</h3>
       <hr class="mx-auto">
       <p>Here you can check out new products with fair price on rymo.</p>
     </div>
     <div class="row mx-auto container-fluid">
       <div class="product text-centre col-lg-3 col-md-4 col-12">
         <img class="img-fluid mb-3" src="images/shoes3.jpg" alt="">
         <div class="star">
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
         </div>
         <h5 class="p-name">
          Puma Floral Shoes For Women</h5>
          <h4 class="p-price">₹ 1,857.00</h4>
          <button class="buy-btn">Buy Now</button>
       </div>

       <div class="product text-centre col-lg-3 col-md-4 col-12">
        <img class="img-fluid mb-3" src="images/shoes4.jpg" alt="">
        <div class="star">
         <i class="fa-solid fa-star"></i>
         <i class="fa-solid fa-star"></i>
         <i class="fa-solid fa-star"></i>
         <i class="fa-solid fa-star"></i>
         <i class="fa-solid fa-star-half-stroke"></i>
        </div>
        <h5 class="p-name">
          Crocs Women Black Sandals</h5>
         <h4 class="p-price">₹ 1,158.00</h4>
         <button class="buy-btn">Buy Now</button>
      </div>

      <div class="product text-centre col-lg-3 col-md-4 col-12">
        <img class="img-fluid mb-3" src="images/bag.png" alt="">
        <div class="star">
         <i class="fa-solid fa-star"></i>
         <i class="fa-solid fa-star"></i>
         <i class="fa-solid fa-star"></i>
         <i class="fa-solid fa-star"></i>
         <i class="fa-solid fa-star"></i>
        </div>
        <h5 class="p-name">
         Pretty Pink Bags</h5>
         <h4 class="p-price">₹ 2,999</h4>
         <button class="buy-btn">Buy Now</button>
      </div>

      <div class="product text-centre col-lg-3 col-md-4 col-12">
        <img class="img-fluid mb-3" src="images/cap.jpg" alt="">
        <div class="star">
         <i class="fa-solid fa-star"></i>
         <i class="fa-solid fa-star"></i>
         <i class="fa-solid fa-star"></i>
         <i class="fa-solid fa-star"></i>
         <i class="fa-regular fa-star"></i>
        </div>
        <h5 class="p-name">
         Pure Wollen Cap</h5>
         <h4 class="p-price">₹ 599</h4>
         <button class="buy-btn">Buy Now</button>
      </div>
     </div>
     </section>

     <section id="banner" class="my-5 py-5">
       <div class="container">
         <button class="text-uppercase">Shop Now</button>
       </div>
     </section>

     <section id="featured" class="my-5 pb-5">
      <div class="container text-centre mt-5 py-5">
        <h3>Dressses & Jumpsuits</h3>
        <hr class="mx-auto">
        <p>Here you check out our products with fair price.</p>
      </div>
      <div class="row mx-auto container-fluid">
        <div class="product text-centre col-lg-3 col-md-4 col-12">
          <img class="img-fluid mb-3" src="images/jumpsuit.webp" alt="">
          <div class="star">
           <i class="fa-solid fa-star"></i>
           <i class="fa-solid fa-star"></i>
           <i class="fa-solid fa-star"></i>
           <i class="fa-solid fa-star"></i>
           <i class="fa-solid fa-star"></i>
          </div>
          <h5 class="p-name">
            Solid Women Jumpsuit</h5>
           <h4 class="p-price">₹ 1,899</h4>
           <button class="buy-btn">Buy Now</button>
        </div>
 
        <div class="product text-centre col-lg-3 col-md-4 col-12">
         <img class="img-fluid mb-3" src="images/jumpsuit1.jpg" alt="">
         <div class="star">
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star-half-stroke"></i>
         </div>
         <h5 class="p-name">
           Rare Checkered Women <br> Jumpsuit</h5>
          <h4 class="p-price">₹ 781.00</h4>
          <button class="buy-btn">Buy Now</button>
       </div>
 
       <div class="product text-centre col-lg-3 col-md-4 col-12">
         <img class="img-fluid mb-3" src="images/dress1.jpg" alt="">
         <div class="star">
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
         </div>
         <h5 class="p-name">
          Women High Low Blue <br> Dress</h5>
          <h4 class="p-price">₹1,274</h4>
          <button class="buy-btn">Buy Now</button>
       </div>
 
       <div class="product text-centre col-lg-3 col-md-4 col-12">
         <img class="img-fluid mb-3" src="images/dress2.jpg" alt="">
         <div class="star">
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
         </div>
         <h5 class="p-name">
          Harpa Women Pink & <br> Printed Dress</h5>
          <h4 class="p-price">₹ 839.00</h4>
          <button class="buy-btn">Buy Now</button>
       </div>
      </div>
      </section>

      <section id="featured" class="my-5 pb-5">
        <div class="container text-centre mt-5 py-5">
          <h3>Best Watches</h3>
          <hr class="mx-auto">
          <p>Here you check out our products with fair price.</p>
        </div>
        <div class="row mx-auto container-fluid">
          <div class="product text-centre col-lg-3 col-md-4 col-12">
            <img class="img-fluid mb-3" src="images/watch2.jpg" alt="">
            <div class="star">
             <i class="fa-solid fa-star"></i>
             <i class="fa-solid fa-star"></i>
             <i class="fa-solid fa-star"></i>
             <i class="fa-solid fa-star"></i>
             <i class="fa-solid fa-star"></i>
            </div>
            <h5 class="p-name">
              Titan Steel Analog <br> Watch </h5>
             <h4 class="p-price">₹ 6,695.00</h4>
             <button class="buy-btn">Buy Now</button>
          </div>
   
          <div class="product text-centre col-lg-3 col-md-4 col-12">
           <img class="img-fluid mb-3" src="images/watch6.jpg" alt="">
           <div class="star">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star-half-stroke"></i>
           </div>
           <h5 class="p-name">
            AI7005-12E Analog Watch</h5>
            <h4 class="p-price">₹23,900</h4>
            <button class="buy-btn">Buy Now</button>
         </div>
   
         <div class="product text-centre col-lg-3 col-md-4 col-12">
           <img class="img-fluid mb-3" src="images/watch9.webp" alt="">
           <div class="star">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
           </div>
           <h5 class="p-name">
            Titan NN1829KM01 Analog <br> Watch<br> Dress</h5>
            <h4 class="p-price">₹1,295</h4>
            <button class="buy-btn">Buy Now</button>
         </div>
   
         <div class="product text-centre col-lg-3 col-md-4 col-12">
           <img class="img-fluid mb-3" src="images/watch5.webp" alt="">
           <div class="star">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
           </div>
           <h5 class="p-name">
            Personalised Steel Silver & <br> Pink Watch</h5>
            <h4 class="p-price">₹1,849</h4>
            <button class="buy-btn">Buy Now</button>
         </div>
        </div>
        </section>

        <section id="featured" class="my-5 pb-5">
          <div class="container text-centre mt-5 py-5">
            <h3>Running Shoes</h3>
            <hr class="mx-auto">
            <p>Here you check out our products with fair price.</p>
          </div>
          <div class="row mx-auto container-fluid">
            <div class="product text-centre col-lg-3 col-md-4 col-12">
              <img class="img-fluid mb-3" src="images/shoes6.jpg" alt="">
              <div class="star">
               <i class="fa-solid fa-star"></i>
               <i class="fa-solid fa-star"></i>
               <i class="fa-solid fa-star"></i>
               <i class="fa-solid fa-star"></i>
               <i class="fa-solid fa-star"></i>
              </div>
              <h5 class="p-name">
                asics Running Shoes</h5>
               <h4 class="p-price">₹4,849</h4>
               <button class="buy-btn">Buy Now</button>
            </div>
     
            <div class="product text-centre col-lg-3 col-md-4 col-12">
             <img class="img-fluid mb-3" src="images/shoes8.jpg" alt="">
             <div class="star">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star-half-stroke"></i>
             </div>
             <h5 class="p-name">
               New Balance Ryval <br> Run Running Shoes</h5>
              <h4 class="p-price">₹ 2,629.00</h4>
              <button class="buy-btn">Buy Now</button>
           </div>
     
           <div class="product text-centre col-lg-3 col-md-4 col-12">
             <img class="img-fluid mb-3" src="images/shoes9.jpg" alt="">
             <div class="star">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
             </div>
             <h5 class="p-name">
              ZAYDN Lightweight Low-Top <br> Running Sports Shoes</h5>
              <h4 class="p-price">₹ 849.00</h4>
              <button class="buy-btn">Buy Now</button>
           </div>
     
           <div class="product text-centre col-lg-3 col-md-4 col-12">
             <img class="img-fluid mb-3" src="images/shoes10.jpg" alt="">
             <div class="star">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
             </div>
             <h5 class="p-name">
                ASIAN Lace-Up Running <br> Sports Shoes</h5>
              <h4 class="p-price">₹ 559.00</h4>
              <button class="buy-btn">Buy Now</button>
           </div>
          </div>
          </section>

          <footer class="mt-5 py-5">
            <div class="row container mx-auto pt-4">
              <div class="footer-one col-lg-3 col-md-6 col-12">
                <div class="row">
                  <img src="images/logo3.jpg" alt="">
                  <h5><br>&emsp; flickr</h5>
                </div>
                <h5 class="pt-3 pb-2">ABOUT</h5>
                <ul class="list-unstyled">
                  <li><a href="#">Contact Us</a></li>
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Careers</a></li>
                  <li><a href="#">Press</a></li>
                  <li><a href="#">Wholesale</a></li>
                  <li><a href="#">Corporate Information</a></li>
                </ul>
              </div>
              
              <div class="footer-one col-lg-3 col-md-6 col-12 mb-3">
                <h5 class="pb-2">Featured</h5>
                <ul class="text-uppercase list-unstyled">
                  <li><a href="#">men</a></li>
                  <li><a href="#">women</a></li>
                  <li><a href="#">boys</a></li>
                  <li><a href="#">girls</a></li>
                  <li><a href="#">new arrivals</a></li>
                  <li><a href="#">shoes</a></li>
                  <li><a href="#">clothes</a></li>
                </ul>
              </div>

              <div class="footer-one col-lg-3 col-md-6 col-12 mb-3">
                <h5 class="pb-2">Contact Us</h5>
                <div>
                  <h6 class="text-uppercase">Address</h6>
                  <p>123 STREET NAME, CITY, US</p>
                </div>
                <div>
                  <h6 class="text-uppercase">Phone</h6>
                  <p>(123) 456-7890</p>
                </div>
                <div>
                  <h6 class="text-uppercase">Email</h6>
                  <p>flickr4551@gmail.com</p>
                </div>
              </div>

              <div class="footer-one col-lg-3 col-md-6 col-12">
                <h5 class="pb-2">Instagram</h5>
                <div class="row">
                  <img class="img-fluid w-25 h-100% m-2" src="images/insta/OIP.jpg" alt="">
                  <img class="img-fluid w-25 h-100% m-2" src="images/insta/img1.webp" alt="">
                  <img class="img-fluid w-25 h-100% m-2" src="images/insta/img2.jpg" alt="">
                  <img class="img-fluid w-25 h-100% m-2" src="images/insta/img3.jpg" alt="">
                  <img class="img-fluid w-25 h-100% m-2" src="images/insta/img4.webp" alt="">
                </div>
              </div>
            </div>

            <div class="copyright mt-5">
              <div class="row container mx-auto">

                <div class="col-lg-3 col-md-6 col-12 mb-4">
                  <img src="images/payment4.png" alt="">
                </div>

                <div class="col-lg-4 col-md-6 col-12 text-nowrap mb-2">
                  <p>flickr eCommerce © 2022. All Rights Reserved</p>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                  <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                  <a href="#"><i class="fa-brands fa-twitter"></i></a>
                  <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
              </div>
            </div>
          </footer>

    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
      integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
      integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
      crossorigin="anonymous"
    ></script>
  </body>
</html>