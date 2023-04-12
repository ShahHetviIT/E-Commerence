<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>

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
          background-position: top 60px center;
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

        .sl-sobe-carousel-sub-card-image{
        display: block;
        max-width: 180px;
        max-height: 170px;
        position: relative;
        width: 100%;
        padding-left: 10px;
        float: left;
        
       }

       .sl-sobe-carousel-sub-card-image li{
          padding-left: 10px;
          padding-bottom: 10px;
        }

       .sl-sobe-carousel-sub-card-image li a{
        font-size: 1.2rem;
        color: black;
       }

        .sl-sobe-carousel-sub-card-image li a:hover{
        font-size: 1.2rem;
        color: coral;
        }

        .sl-sobe-carousel-nav{
          position: absolute;
          height: 0;
          top: 50%;
          width: 100%;
          z-index: 3;
        }

        

    #featured .sl-sobe-carousel-sub-card-image{
        text-align: center;
    }

    .bxc-grid__image img {
          width: 1325px;
          height: 400px;
          object-fit: cover;
    }

    .box img{
      padding-top: 20px;
      width: 1325px;
    }

      </style>
</head>
<body>

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
            <a class="nav-link" href="welcome.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="shop.php">Shop</a>
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

      <div class="bxc-grid__image bxc-grid__image--dark col-lg-4 col-md-12 col-12 py-0">
        <img src="https://images-eu.ssl-images-amazon.com/images/G/31/img22/Fashion/MFW/AFpage/MFWFHeaders/j.jpg" alt="WF Header">
      </div>

      <div class="box col-lg-4 col-md-12 col-12 py-0">
        <img src="https://images-eu.ssl-images-amazon.com/images/G/31/img22/Fashion/MFW/AFpage/Cashback/FST_pc_1.png" alt="FST">
      </div>

      <section id="featured" class="my-5 pb-5">
        <div class="container text-centre mt-5 py-5">
          <h3>Women's Collection | Up to 70% off</h3>
        </div>
      
        <div class="row mx-auto container-fluid">
        <div class="sl-sobe-carousel-sub-card-image">
          <img alt="Up to 70% off" src="https://images-na.ssl-images-amazon.com/images/G/31/img22/Fashion/SS22/AFpage/Rec/SBC/Womens/English/1-SBC-Womens_01._SS400_QL85_.jpg" class="container-fluid a-dynamic-image sl-sobe-carousel-sub-card-img" data-a-dynamic-image="{&quot;https://images-na.ssl-images-amazon.com/images/G/31/img22/Fashion/SS22/AFpage/Rec/SBC/Womens/English/1-SBC-Womens_01._SS400_QL85_.jpg&quot;:[400,400]}" style="max-width:100%;max-height:100%;">
          <ul class="list-unstyled text-centre">
            <li>
              <a href="W-Tops-1.html">Tops & T-Shirts</a>
            </li>
          </ul>
        </div>

        <div class="sl-sobe-carousel-sub-card-image">
          <img alt="Up to 70% off" src="https://images-na.ssl-images-amazon.com/images/G/31/img22/Fashion/SS22/AFpage/Rec/SBC/Womens/English/1-SBC-Womens_02._SS400_QL85_.jpg" class="a-dynamic-image sl-sobe-carousel-sub-card-img" data-a-dynamic-image="{&quot;https://images-na.ssl-images-amazon.com/images/G/31/img22/Fashion/SS22/AFpage/Rec/SBC/Womens/English/1-SBC-Womens_02._SS400_QL85_.jpg&quot;:[400,400]}" style="max-width:100%;max-height:100%;">
          <ul class="list-unstyled text-centre">
            <li>
              <a href="Kurti-1.html">Kurtis</a>
            </li>
          </ul>
        </div>

        <div class="sl-sobe-carousel-sub-card-image">
          <img alt="Up to 70% off" src="https://images-na.ssl-images-amazon.com/images/G/31/img22/Fashion/SS22/AFpage/Rec/SBC/Womens/English/1-SBC-Womens_03._SS400_QL85_.jpg" class="a-dynamic-image sl-sobe-carousel-sub-card-img" data-a-dynamic-image="{&quot;https://images-na.ssl-images-amazon.com/images/G/31/img22/Fashion/SS22/AFpage/Rec/SBC/Womens/English/1-SBC-Womens_03._SS400_QL85_.jpg&quot;:[400,400]}" style="max-width:100%;max-height:100%;">
          <ul class="list-unstyled text-centre">
            <li>
              <a href="sarees-1.html">Sarees</a>
            </li>
          </ul>
        </div>

        <div class="sl-sobe-carousel-sub-card-image">
          <img alt="Up to 70% off" src="https://images-na.ssl-images-amazon.com/images/G/31/img22/Fashion/SS22/AFpage/Rec/SBC/Womens/English/1-SBC-Womens_04._SS400_QL85_.jpg" class="a-dynamic-image sl-sobe-carousel-sub-card-img" data-a-dynamic-image="{&quot;https://images-na.ssl-images-amazon.com/images/G/31/img22/Fashion/SS22/AFpage/Rec/SBC/Womens/English/1-SBC-Womens_04._SS400_QL85_.jpg&quot;:[400,400]}" style="max-width:100%;max-height:100%;">
          <ul class="list-unstyled text-centre">
            <li>
              <a href="jumpsuit-1.html">Dresses & Jumpsuits</a>
            </li>
          </ul>
        </div>

        <div class="sl-sobe-carousel-sub-card-image">
          <img alt="Up to 70% off" src="https://images-na.ssl-images-amazon.com/images/G/31/img22/Fashion/SS22/AFpage/Rec/SBC/Womens/English/1-SBC-Womens_06._SS400_QL85_.jpg" class="a-dynamic-image sl-sobe-carousel-sub-card-img" data-a-dynamic-image="{&quot;https://images-na.ssl-images-amazon.com/images/G/31/img22/Fashion/SS22/AFpage/Rec/SBC/Womens/English/1-SBC-Womens_06._SS400_QL85_.jpg&quot;:[400,400]}" style="max-width:100%;max-height:100%;">
          <ul class="list-unstyled text-centre">
            <li>
              <a href="#">Footwear</a>
            </li>
          </ul>
        </div>

        <div class="sl-sobe-carousel-sub-card-image">
          <img alt="Up to 70% off" src="https://images-na.ssl-images-amazon.com/images/G/31/img22/Fashion/SS22/AFpage/Rec/SBC/Womens/English/1-SBC-Womens_07._SS400_QL85_.jpg" class="a-dynamic-image sl-sobe-carousel-sub-card-img" data-a-dynamic-image="{&quot;https://images-na.ssl-images-amazon.com/images/G/31/img22/Fashion/SS22/AFpage/Rec/SBC/Womens/English/1-SBC-Womens_07._SS400_QL85_.jpg&quot;:[400,400]}" style="max-width:100%;max-height:100%;">
          <ul class="list-unstyled text-centre">
            <li>
              <a href="#">Fashion Jewellery</a>
            </li>
          </ul>
        </div>

        <div class="sl-sobe-carousel-sub-card-image">
          <img alt="Up to 70% off" src="https://images-na.ssl-images-amazon.com/images/G/31/img22/Fashion/SS22/AFpage/Rec/SBC/Womens/English/1-SBC-Womens_09._SS400_QL85_.jpg" class="a-dynamic-image sl-sobe-carousel-sub-card-img" data-a-dynamic-image="{&quot;https://images-na.ssl-images-amazon.com/images/G/31/img22/Fashion/SS22/AFpage/Rec/SBC/Womens/English/1-SBC-Womens_09._SS400_QL85_.jpg&quot;:[400,400]}" style="max-width:100%;max-height:100%;">
          <ul class="list-unstyled text-centre">
            <li>
              <a href="#">HandBags</a>
            </li>
          </ul>
        </div>

        </div>
      </section>

      <section id="featured" class="my-5 pb-5">
        <div class="container text-centre mt-5 py-5">
          <h3>Women's Beauty</h3>
        </div>
      
        <div class="row mx-auto container-fluid">
        <div class="sl-sobe-carousel-sub-card-image">
          <img alt="Up to 70% off" src="https://images-na.ssl-images-amazon.com/images/G/31/img22/Fashion/SS22/AFpage/Rec/SBC/Beauty/English/3-SBC-Beauty--Grooming_01._CB626331760_.jpg" class="a-dynamic-image sl-sobe-carousel-sub-card-img" data-a-dynamic-image="{}" style="max-width:100%;max-height:100%;">
          <ul class="list-unstyled text-centre">
            <li>
              <a href="#">Makeup</a>
            </li>
          </ul>
        </div>

        <div class="sl-sobe-carousel-sub-card-image">
          <img alt="Up to 60% off" src="https://images-na.ssl-images-amazon.com/images/G/31/img22/Fashion/SS22/AFpage/Rec/SBC/Beauty/English/3-SBC-Beauty--Grooming_02._CB626331760_.jpg" class="a-dynamic-image sl-sobe-carousel-sub-card-img" data-a-dynamic-image="{}" style="max-width:100%;max-height:100%;">
          <ul class="list-unstyled text-centre">
            <li>
              <a href="#">Skincare</a>
            </li>
          </ul>
        </div>

        <div class="sl-sobe-carousel-sub-card-image">
          <img alt="Up to 60% off" src="https://images-na.ssl-images-amazon.com/images/G/31/img22/Fashion/SS22/AFpage/Rec/SBC/Beauty/English/3-SBC-Beauty--Grooming_03._CB626331760_.jpg" class="a-dynamic-image sl-sobe-carousel-sub-card-img" data-a-dynamic-image="{}" style="max-width:100%;max-height:100%;">
          <ul class="list-unstyled text-centre">
            <li>
              <a href="#">Haircare</a>
            </li>
          </ul>
        </div>

        <div class="sl-sobe-carousel-sub-card-image">
          <img alt="Up to 50% off" src="https://images-na.ssl-images-amazon.com/images/G/31/img22/Fashion/SS22/AFpage/Rec/SBC/Beauty/English/3-SBC-Beauty--Grooming_04._CB626331760_.jpg" class="a-dynamic-image sl-sobe-carousel-sub-card-img" data-a-dynamic-image="{}" style="max-width:100%;max-height:100%;">
          <ul class="list-unstyled text-centre">
            <li>
              <a href="#">Luxury Beauty</a>
            </li>
          </ul>
        </div>

        <div class="sl-sobe-carousel-sub-card-image">
          <img alt="Up to 30% off" src="https://images-na.ssl-images-amazon.com/images/G/31/img22/Fashion/SS22/WFpage/F1_05_0._CB625083024_.jpg" class="a-dynamic-image sl-sobe-carousel-sub-card-img" data-a-dynamic-image="{}" style="max-width:100%;max-height:100%;">
          <ul class="list-unstyled text-centre">
            <li>
              <a href="#">Fragrances</a>
            </li>
          </ul>
        </div>

        <div class="sl-sobe-carousel-sub-card-image">
          <img alt="Up to 20% off" src="https://images-na.ssl-images-amazon.com/images/G/31/img22/Fashion/SS22/AFpage/Rec/SBC/Beauty/English/3-SBC-Beauty--Grooming_06._CB626332606_.jpg" class="a-dynamic-image sl-sobe-carousel-sub-card-img" data-a-dynamic-image="{}" style="max-width:100%;max-height:100%;">
          <ul class="list-unstyled text-centre">
            <li>
              <a href="#">Professional Beauty</a>
            </li>
          </ul>
        </div>

        <div class="sl-sobe-carousel-sub-card-image">
          <img alt="Up to 60% off" src="https://images-na.ssl-images-amazon.com/images/G/31/img22/Fashion/SS22/WFpage/Rec/SBC/QC/7._CB625156920_.jpg" class="a-dynamic-image sl-sobe-carousel-sub-card-img" data-a-dynamic-image="{}" style="max-width:100%;max-height:100%;">
          <ul class="list-unstyled text-centre">
            <li>
              <a href="#">Silver Jewellery</a>
            </li>
          </ul>
        </div>

        </div>
      </section>

      <div class="bxc-grid__image bxc-grid__image--dark col-lg-4 col-md-12 col-12 py-0">
        <img src="https://images-eu.ssl-images-amazon.com/images/G/31/img22/Fashion/MFW/AFpage/MFWFHeaders/k.jpg" alt="MF Header">
      </div>

      <section id="featured" class="my-5 pb-5">
        <div class="container text-centre mt-5 py-5">
          <h3>Men's Collection | Up to 70% off</h3>
        </div>
      
        <div class="row mx-auto container-fluid">
        <div class="sl-sobe-carousel-sub-card-image">
          <img alt="Up to 70% off" src="https://images-na.ssl-images-amazon.com/images/G/31/img22/Fashion/SS22/AFpage/Rec/SBC/Mens/English/2-SBC-Mens_01._SS400_QL85_.jpg" class="a-dynamic-image sl-sobe-carousel-sub-card-img" data-a-dynamic-image="{&quot;https://images-na.ssl-images-amazon.com/images/G/31/img22/Fashion/SS22/AFpage/Rec/SBC/Mens/English/2-SBC-Mens_01._SS400_QL85_.jpg&quot;:[400,400]}" style="max-width:100%;max-height:100%;">
          <ul class="list-unstyled text-centre">
            <li>
              <a href="casual-1.html">Casual Wear & Denim Wear</a>
            </li>
          </ul>
        </div>

        <div class="sl-sobe-carousel-sub-card-image">
          <img alt="Up to 70% off" src="https://images-na.ssl-images-amazon.com/images/G/31/img22/Fashion/SS22/AFpage/Rec/SBC/Mens/English/2-SBC-Mens_02._SS400_QL85_.jpg" class="a-dynamic-image sl-sobe-carousel-sub-card-img" data-a-dynamic-image="{&quot;https://images-na.ssl-images-amazon.com/images/G/31/img22/Fashion/SS22/AFpage/Rec/SBC/Mens/English/2-SBC-Mens_02._SS400_QL85_.jpg&quot;:[400,400]}" style="max-width:100%;max-height:100%;">
          <ul class="list-unstyled text-centre">
            <li>
              <a href="formal-1.html">Formal Wear</a>
            </li>
          </ul>
        </div>

        <div class="sl-sobe-carousel-sub-card-image">
          <img alt="Up to 70% off" src="https://images-na.ssl-images-amazon.com/images/G/31/img22/Fashion/SS22/AFpage/Rec/SBC/Mens/English/2-SBC-Mens_04._SS400_QL85_.jpg" class="a-dynamic-image sl-sobe-carousel-sub-card-img" data-a-dynamic-image="{&quot;https://images-na.ssl-images-amazon.com/images/G/31/img22/Fashion/SS22/AFpage/Rec/SBC/Mens/English/2-SBC-Mens_04._SS400_QL85_.jpg&quot;:[400,400]}" style="max-width:100%;max-height:100%;">
          <ul class="list-unstyled text-centre">
            <li>
              <a href="indian-1.html">Indian Wear</a>
            </li>
          </ul>
        </div>

        <div class="sl-sobe-carousel-sub-card-image">
          <img alt="Up to 70% off" src="https://images-na.ssl-images-amazon.com/images/G/31/img22/Fashion/SS22/AFpage/Rec/SBC/Mens/English/2-SBC-Mens_08._SS400_QL85_.jpg" class="a-dynamic-image sl-sobe-carousel-sub-card-img" data-a-dynamic-image="{&quot;https://images-na.ssl-images-amazon.com/images/G/31/img22/Fashion/SS22/AFpage/Rec/SBC/Mens/English/2-SBC-Mens_08._SS400_QL85_.jpg&quot;:[400,400]}" style="max-width:100%;max-height:100%;">
          <ul class="list-unstyled text-centre">
            <li>
              <a href="mshoes-1.html">Casual Shoes</a>
            </li>
          </ul>
        </div>

        <div class="sl-sobe-carousel-sub-card-image">
          <img alt="Up to 70% off" src="https://images-na.ssl-images-amazon.com/images/G/31/img22/Fashion/SS22/AFpage/Rec/SBC/Mens/English/2-SBC-Mens_07._SS400_QL85_.jpg" class="a-dynamic-image sl-sobe-carousel-sub-card-img" data-a-dynamic-image="{&quot;https://images-na.ssl-images-amazon.com/images/G/31/img22/Fashion/SS22/AFpage/Rec/SBC/Mens/English/2-SBC-Mens_07._SS400_QL85_.jpg&quot;:[400,400]}" style="max-width:100%;max-height:100%;">
          <ul class="list-unstyled text-centre">
            <li>
              <a href="#">Sports Shoes</a>
            </li>
          </ul>
        </div>

        <div class="sl-sobe-carousel-sub-card-image">
          <img alt="Up to 70% off" src="https://images-na.ssl-images-amazon.com/images/G/31/img22/Fashion/SS22/AFpage/Rec/SBC/Mens/English/2-SBC-Mens_05._SS400_QL85_.jpg" class="a-dynamic-image sl-sobe-carousel-sub-card-img" data-a-dynamic-image="{&quot;https://images-na.ssl-images-amazon.com/images/G/31/img22/Fashion/SS22/AFpage/Rec/SBC/Mens/English/2-SBC-Mens_05._SS400_QL85_.jpg&quot;:[400,400]}" style="max-width:100%;max-height:100%;">
          <ul class="list-unstyled text-centre">
            <li>
              <a href="sportcloth-1.html">Sports Clothing</a>
            </li>
          </ul>
        </div>

        <div class="sl-sobe-carousel-sub-card-image">
          <img alt="Up to 70% off" src="https://images-na.ssl-images-amazon.com/images/G/31/img22/Fashion/SS22/AFpage/Rec/SBC/Mens/English/2-SBC-Mens_06._SS400_QL85_.jpg" class="a-dynamic-image sl-sobe-carousel-sub-card-img" data-a-dynamic-image="{&quot;https://images-na.ssl-images-amazon.com/images/G/31/img22/Fashion/SS22/AFpage/Rec/SBC/Mens/English/2-SBC-Mens_06._SS400_QL85_.jpg&quot;:[400,400]}" style="max-width:100%;max-height:100%;">
          <ul class="list-unstyled text-centre">
            <li>
              <a href="wallet-1.html">Wallets and Backpacks</a>
            </li>
          </ul>
        </div>

        </div>
      </section>

      <div class="bxc-grid__image   bxc-grid__image--dark col-lg-4 col-md-12 col-12 py-0">
        <img src="https://images-eu.ssl-images-amazon.com/images/G/31/img22/Fashion/MFW/KFpage/Headers/PC/kids.jpg" alt="Top Banner Kids">
      </div>

      <section id="featured" class="my-5 pb-5">
        <div class="container text-centre mt-5 py-5">
          <h3>Kids' Collection | Up to 60% off</h3>
        </div>
      
        <div class="row mx-auto container-fluid">
        <div class="sl-sobe-carousel-sub-card-image">
          <img alt="Shop now" src="https://images-na.ssl-images-amazon.com/images/G/31/img22/Fashion/SS22/KFpage/sbc/SBC-9-cards_01._SS400_QL85_.jpg" class="a-dynamic-image sl-sobe-carousel-sub-card-img" data-a-dynamic-image="{&quot;https://images-na.ssl-images-amazon.com/images/G/31/img22/Fashion/SS22/KFpage/sbc/SBC-9-cards_01._SS400_QL85_.jpg&quot;:[400,400]}" style="max-width:100%;max-height:100%;">
          <ul class="list-unstyled text-centre">
            <li>
              <a href="#">Dresses & Jumpsuits</a>
            </li>
          </ul>
        </div>

        <div class="sl-sobe-carousel-sub-card-image">
          <img alt="Shop now" src="https://images-na.ssl-images-amazon.com/images/G/31/img22/Fashion/SS22/KFpage/sbc/SBC-9-cards_02._SS400_QL85_.jpg" class="a-dynamic-image sl-sobe-carousel-sub-card-img" data-a-dynamic-image="{&quot;https://images-na.ssl-images-amazon.com/images/G/31/img22/Fashion/SS22/KFpage/sbc/SBC-9-cards_02._SS400_QL85_.jpg&quot;:[400,400]}" style="max-width:100%;max-height:100%;">
          <ul class="list-unstyled text-centre">
            <li>
              <a href="#">T-Shirts</a>
            </li>
          </ul>
        </div>

        <div class="sl-sobe-carousel-sub-card-image">
          <img alt="Shop now" src="https://images-na.ssl-images-amazon.com/images/G/31/img22/Fashion/SS22/KFpage/sbc/SBC-9-cards_03._SS400_QL85_.jpg" class="a-dynamic-image sl-sobe-carousel-sub-card-img" data-a-dynamic-image="{&quot;https://images-na.ssl-images-amazon.com/images/G/31/img22/Fashion/SS22/KFpage/sbc/SBC-9-cards_03._SS400_QL85_.jpg&quot;:[400,400]}" style="max-width:100%;max-height:100%;">
          <ul class="list-unstyled text-centre">
            <li>
              <a href="#">Jeans</a>
            </li>
          </ul>
        </div>

        <div class="sl-sobe-carousel-sub-card-image">
          <img alt="Shop now" src="https://images-na.ssl-images-amazon.com/images/G/31/img22/Fashion/SS22/KF/Revised/English/SBC-9-cards_04._SS400_QL85_.jpg" class="a-dynamic-image sl-sobe-carousel-sub-card-img" data-a-dynamic-image="{&quot;https://images-na.ssl-images-amazon.com/images/G/31/img22/Fashion/SS22/KF/Revised/English/SBC-9-cards_04._SS400_QL85_.jpg&quot;:[400,400]}" style="max-width:100%;max-height:100%;">
          <ul class="list-unstyled text-centre">
            <li>
              <a href="#">Kurtas & Kurtis</a>
            </li>
          </ul>
        </div>

        <div class="sl-sobe-carousel-sub-card-image">
          <img alt="Shop now" src="https://images-na.ssl-images-amazon.com/images/G/31/img22/Fashion/SS22/KF/Revised/English/SBC-9-cards_07._SS400_QL85_.jpg" class="a-dynamic-image sl-sobe-carousel-sub-card-img" data-a-dynamic-image="{&quot;https://images-na.ssl-images-amazon.com/images/G/31/img22/Fashion/SS22/KF/Revised/English/SBC-9-cards_07._SS400_QL85_.jpg&quot;:[400,400]}" style="max-width:100%;max-height:100%;">
          <ul class="list-unstyled text-centre">
            <li>
              <a href="#">Shirts</a>
            </li>
          </ul>
        </div>

        <div class="sl-sobe-carousel-sub-card-image">
          <img alt="Shop now" src="https://images-na.ssl-images-amazon.com/images/G/31/img22/Fashion/SS22/KF/Revised/English/SBC-9-cards_05._SS400_QL85_.jpg" class="a-dynamic-image sl-sobe-carousel-sub-card-img" data-a-dynamic-image="{&quot;https://images-na.ssl-images-amazon.com/images/G/31/img22/Fashion/SS22/KF/Revised/English/SBC-9-cards_05._SS400_QL85_.jpg&quot;:[400,400]}" style="max-width:100%;max-height:100%;">
          <ul class="list-unstyled text-centre">
            <li>
              <a href="#">Trackpants & Joggers</a>
            </li>
          </ul>
        </div>

        <div class="sl-sobe-carousel-sub-card-image">
          <img alt="Shop now" src="https://images-na.ssl-images-amazon.com/images/G/31/img22/Fashion/SS22/KF/Revised/English/SBC-9-cards_08._SS400_QL85_.jpg" class="a-dynamic-image sl-sobe-carousel-sub-card-img" data-a-dynamic-image="{&quot;https://images-na.ssl-images-amazon.com/images/G/31/img22/Fashion/SS22/KF/Revised/English/SBC-9-cards_08._SS400_QL85_.jpg&quot;:[400,400]}" style="max-width:100%;max-height:100%;">
          <ul class="list-unstyled text-centre">
            <li>
              <a href="#">Tops</a>
            </li>
          </ul>
        </div>

        </div>
      </section>

      <section id="featured" class="my-5 pb-5">
        <div class="container text-centre mt-5 py-5">
          <h3>Kids' Accessories</h3>
        </div>
      
        <div class="row mx-auto container-fluid">
        <div class="sl-sobe-carousel-sub-card-image">
          <img alt="Boys' footwear" src="https://images-na.ssl-images-amazon.com/images/G/31/img22/Fashion/SS22/KFpage/FOOTWEARQC/QC-FOOTWEAR_01._SS680_QL85_.jpg" class="a-dynamic-image sl-sobe-carousel-sub-card-img" data-a-dynamic-image="{&quot;https://images-na.ssl-images-amazon.com/images/G/31/img22/Fashion/SS22/KFpage/FOOTWEARQC/QC-FOOTWEAR_01._SS680_QL85_.jpg&quot;:[680,680]}" style="max-width:100%;max-height:100%;">
          <ul class="list-unstyled text-centre">
            <li>
              <a href="#">Boys' Footwear</a>
            </li>
          </ul>
        </div>

        <div class="sl-sobe-carousel-sub-card-image">
          <img alt="Girls' footwear" src="https://images-na.ssl-images-amazon.com/images/G/31/img22/Fashion/SS22/KFpage/FOOTWEARQC/QC-FOOTWEAR_02._SS680_QL85_.jpg" class="a-dynamic-image sl-sobe-carousel-sub-card-img" data-a-dynamic-image="{&quot;https://images-na.ssl-images-amazon.com/images/G/31/img22/Fashion/SS22/KFpage/FOOTWEARQC/QC-FOOTWEAR_02._SS680_QL85_.jpg&quot;:[680,680]}" style="max-width:100%;max-height:100%;">
          <ul class="list-unstyled text-centre">
            <li>
              <a href="#">Girls' Footwear</a>
            </li>
          </ul>
        </div>

        <div class="sl-sobe-carousel-sub-card-image">
          <img alt="Baby footwear" src="https://images-na.ssl-images-amazon.com/images/G/31/img22/Fashion/SS22/KFpage/FOOTWEARQC/QC-FOOTWEAR_03._SS680_QL85_.jpg" class="a-dynamic-image sl-sobe-carousel-sub-card-img" data-a-dynamic-image="{&quot;https://images-na.ssl-images-amazon.com/images/G/31/img22/Fashion/SS22/KFpage/FOOTWEARQC/QC-FOOTWEAR_03._SS680_QL85_.jpg&quot;:[680,680]}" style="max-width:100%;max-height:100%;">
          <ul class="list-unstyled text-centre">
            <li>
              <a href="#">Baby footwear</a>
            </li>
          </ul>
        </div>

        <div class="sl-sobe-carousel-sub-card-image">
          <img alt="Watches" src="https://images-na.ssl-images-amazon.com/images/G/31/img22/Fashion/SS22/KFpage/jwelqc/QC-WATCHES-JEWELLERY-AND-MORE_01._SS680_QL85_.jpg" class="a-dynamic-image sl-sobe-carousel-sub-card-img" data-a-dynamic-image="{&quot;https://images-na.ssl-images-amazon.com/images/G/31/img22/Fashion/SS22/KFpage/jwelqc/QC-WATCHES-JEWELLERY-AND-MORE_01._SS680_QL85_.jpg&quot;:[680,680]}" style="max-width:100%;max-height:100%;">
          <ul class="list-unstyled text-centre">
            <li>
              <a href="#">Watches</a>
            </li>
          </ul>
        </div>

        <div class="sl-sobe-carousel-sub-card-image">
          <img alt="Jewellery" src="https://images-na.ssl-images-amazon.com/images/G/31/img22/Fashion/SS22/KFpage/jwelqc/QC-WATCHES-JEWELLERY-AND-MORE_02._SS680_QL85_.jpg" class="a-dynamic-image sl-sobe-carousel-sub-card-img" data-a-dynamic-image="{&quot;https://images-na.ssl-images-amazon.com/images/G/31/img22/Fashion/SS22/KFpage/jwelqc/QC-WATCHES-JEWELLERY-AND-MORE_02._SS680_QL85_.jpg&quot;:[680,680]}" style="max-width:100%;max-height:100%;">
          <ul class="list-unstyled text-centre">
            <li>
              <a href="#">Jewellery</a>
            </li>
          </ul>
        </div>

        <div class="sl-sobe-carousel-sub-card-image">
          <img alt="Backpacks" src="https://images-na.ssl-images-amazon.com/images/G/31/img22/Fashion/SS22/KFpage/jwelqc/QC-WATCHES-JEWELLERY-AND-MORE_03._SS680_QL85_.jpg" class="a-dynamic-image sl-sobe-carousel-sub-card-img" data-a-dynamic-image="{&quot;https://images-na.ssl-images-amazon.com/images/G/31/img22/Fashion/SS22/KFpage/jwelqc/QC-WATCHES-JEWELLERY-AND-MORE_03._SS680_QL85_.jpg&quot;:[680,680]}" style="max-width:100%;max-height:100%;">
          <ul class="list-unstyled text-centre">
            <li>
              <a href="#">Backpacks</a>
            </li>
          </ul>
        </div>

        <div class="sl-sobe-carousel-sub-card-image">
          <img alt="Sunglasses" src="https://images-na.ssl-images-amazon.com/images/G/31/img22/Fashion/SS22/KFpage/jwelqc/QC-WATCHES-JEWELLERY-AND-MORE_04._SS680_QL85_.jpg" class="a-dynamic-image sl-sobe-carousel-sub-card-img" data-a-dynamic-image="{&quot;https://images-na.ssl-images-amazon.com/images/G/31/img22/Fashion/SS22/KFpage/jwelqc/QC-WATCHES-JEWELLERY-AND-MORE_04._SS680_QL85_.jpg&quot;:[680,680]}" style="max-width:100%;max-height:100%;">
          <ul class="list-unstyled text-centre">
            <li>
              <a href="#">Sunglasses</a>
            </li>
          </ul>
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
              <p>hetvi4551@gmail.com</p>
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