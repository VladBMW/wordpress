<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dz</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">



    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <?php wp_head(); ?>
  </head>
<body>
  <header>
    
    <div class="container">
      <div class="row" id="navbar">
        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 picture">
          <a href="index"><img class="Mainlogo" src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt=""></a>
        </div>
        <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11 navigation">
         
         <nav >
           <ul>
            <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
               <div class="menu-of-header up"></div>
               <div class="menu-of-header medium"></div>
               <div class="menu-of-header down"></div>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <li><a class="dropdown-item" href="home">HOME</a></li>
                <li><a class="dropdown-item" href="about">ABOUT</a></li>
                <li><a class="dropdown-item" href="#">WORK</a></li>
                <li><a class="dropdown-item" href="#">PROCESS</a></li>
                <li><a class="dropdown-item" href="#">SERVICES</a></li>
                <li><a class="dropdown-item" href="#">TESTIMONIALS</a></li>
                <li><a class="dropdown-item" href="contact">CONTACT</a></li>
              </ul>
            </div>
             
            <a href="home"><li class="nav">HOME</li></a>
            <a href="about"><li  class="nav">ABOUT</li></a>
            <a href=""><li  class="nav">WORK</li></a>
            <a href=""> <li  class="nav">PROCESS</li></a>
            <a href=""><li  class="nav">SERVICES</li></a>
            <a href=""><li  class="nav">TESTIMONIALS</li></a>
            <a href="contact"><li  class="nav">CONTACT</li></a>
          </ul>
        </nav>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 col-md-4 col-sm-6 col-xs-6">
          <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/macbook-mockups20.jpg" alt=""> -->
        </div>
        <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12 banner">
          <div class="main-text text-center">We Design and Develop</div>
          <div class="lorem-text ">We are a new design studio based in USA. We have over<br> 20 years of combined experience, and know a thing or two<br>about designing websites and mobile apps.</div>
          <div class="btnMedia"><button class="btn-banner"><span class="text-btn">CONTACT US</span></button></div>
        </div>
      </div>
    </div>
    

  </header>