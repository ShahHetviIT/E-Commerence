<?php
//This script will handle login
session_start();

// check if the user is already logged in
if(isset($_SESSION['username']))
{
    header("location: welcome.php");
    exit;
}
require_once "config.php";

$username = $password = "";
$err = "";

// if request method is post
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty(trim($_POST['username'])) || empty(trim($_POST['password'])))
    {
        $err = "Please enter username + password";
    }
    else{
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
    }


if(empty($err))
{
    $sql = "SELECT id, username, password FROM users WHERE username = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $param_username);
    $param_username = $username;
    
    
    // Try to execute this statement
    if(mysqli_stmt_execute($stmt)){
        mysqli_stmt_store_result($stmt);
        if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt))
                    {
                        if(password_verify($password, $hashed_password))
                        {
                            // this means the password is corrct. Allow user to login
                            session_start();
                            $_SESSION["username"] = $username;
                            $_SESSION["id"] = $id;
                            $_SESSION["loggedin"] = true;

                            //Redirect user to welcome page
                            header("location: welcome.php");
                            
                        }
                    }

                }

    }
}    


}


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>PHP login system!</title>
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

      .backimg{
        background-image: url(images/background5.jpg);
        width: 100%;
        height: 100vh;
        background-size: cover;
        background-position: top 70px center;
        background-repeat: none;
        background-attachment: fixed;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: flex-start;
      }

    </style>
  </head>
  <body class="backimg">
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
              <a class="nav-link" href="register.php">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="login.php">Login</a>
            </li>
           </div>
      </div>
    </nav>


<div class="container" style="margin-bottom: 200px;">
<h3>Please Login Here:</h3>
<hr>

<form action="" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1"> <b> Username</label>
    <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Username" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password" required>
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>



</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
