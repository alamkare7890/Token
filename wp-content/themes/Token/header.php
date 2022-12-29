

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title><?php wp_title();bloginfo('name'); bloginfo('description')?></title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Yantramanav:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <?php wp_head();?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/style.css"> 
  </head> 
  <body <?php body_class();?>>
    <!--------heroHeader-section----------->
    <header class="hero-section bg-header">
      <div class="bg-panel" id="navScroll">
        <div class="container container-new">
          <nav class="navbar navigation navbar-expand-xl align-item-center">
            <a class="navbar-brand order-lg-2 order-xl-0 order-md-2 order-sm-2 order-2" href="#">
              <img class="logo" id='brand' src="<?php echo get_template_directory_uri();?>/image/Svg/logo-sticky.svg" alt="">
              <?php
                //$logopath = get_header_image();
              ?>
              <!--<img class="inner_logo" src="<?php echo $logopath ?>" alt="">-->
            </a>  

            <span class="ham-menu order-lg-0 order-xl-2 order-md-0 order-sm-0 order-0" id="toggleNav"></span>

            <div class="collapse nav-menu navbar-collapse justify-content-end align-items-center" id="toggleBtn align-item-center">

                <?php
                  wp_nav_menu(array(
                  'theme location'    =>'primary-menu',
                  'depth'             => 2,
                  'container'         => 'div',
                  'container_class'   => 'collapse navbar-collapse',
                  'container_id'      => 'bs-example-navbar-collapse-1',
                  'menu_class'        => 'nav navbar-nav menu_large nav-menu mx-auto',
                  'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                  'walker'            => new WP_Bootstrap_Navwalker(),
                  
                  ));
                ?>
                <div class="btn-box d-none">
                  <a href="#" class="btn all-btn">Free Consultation</a>
                </div>
              </div>
            </div>


          </nav>
        </div>

          <div class="nav-small" id="navOpen">
            <div class="nav-header flex-box">
              <?php
                $logopath = get_header_image();
              ?>
              <img class='logo' src="<?php echo $logopath;?>" alt="">
              <?php
                //wp_nav_menu(array(
                //  'theme location' => 'primary-menu'

                //));
              
              ?>
              <div class="btn-box">
                <span class="close-btn" id="navClose"></span>
              </div>
            </div>
            <!--<ul class="">
              <li>
                <a href="#" class="flex-box">
                  <span>home</span>
                  <i class="fas fa-angle-down d-none"></i>
                  <i class="fas fa-angle-right"></i>
                </a>
                 
                <div class="d-none">
                  <a class="dropdown-item" href="#">Home 1</a>
                  <a class="dropdown-item" href="#">Home 2</a>
                  <a class="dropdown-item" href="#">Home 3</a>
                </div>
              </li>
              <li>
                <a href="#" class="flex-box">
                  <span>about us</span>
                  <i class="fas fa-angle-down d-none"></i>
                  <i class="fas fa-angle-right"></i>
                </a>
                 
                <div class="d-none">
                  <a class="dropdown-item" href="#">Home 1</a>
                  <a class="dropdown-item" href="#">Home 2</a>
                  <a class="dropdown-item" href="#">Home 3</a>
                </div>
              </li>
              <li>
                <a href="#" class="flex-box">
                  <span>pages</span>
                  <i class="fas fa-angle-down d-none"></i>
                  <i class="fas fa-angle-right"></i>
                </a>
                 
                <div class="d-none">
                  <a class="dropdown-item" href="#">Home 1</a>
                  <a class="dropdown-item" href="#">Home 2</a>
                  <a class="dropdown-item" href="#">Home 3</a>
                </div>
              </li>
              <li>
                <a href="#" class="flex-box">
                  <span>service</span>
                  <i class="fas fa-angle-down d-none"></i>
                  <i class="fas fa-angle-right"></i>
                </a>
                 
                <div class="d-none">
                  <a class="dropdown-item" href="#">Home 1</a>
                  <a class="dropdown-item" href="#">Home 2</a>
                  <a class="dropdown-item" href="#">Home 3</a>
                </div>
              </li>
              <li>
                <a href="#" class="flex-box">
                  <span>contact us</span>
                  <i class="fas fa-angle-down d-none"></i>
                  <i class="fas fa-angle-right"></i>
                </a>
                 
                <div class="d-none">
                  <a class="dropdown-item" href="#">Home 1</a>
                  <a class="dropdown-item" href="#">Home 2</a>
                  <a class="dropdown-item" href="#">Home 3</a>
                </div>
              </li>

            </ul>-->
            <div class="search d-none">
              <div class="search-option">
                <form class="form-inline">

                  <!--<input class="form-control" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                    <i class="fas fa-search"></i>
                  </button>-->
                </form>
              </div>
              <div class="btn-box">
                <a href="#" class="btn all-btn">Free Consultation</a>
              </div>
            </div>
          </div>
      </div>
        <div class="hero-slide">
            <div class="slide-1 slide">
              <div class="container container-new flex-box hero-center-1">
                  <div class="hero-content">
                    <h1 class="hero-head">The Most Innovative</h1>
                    <h2 class="hero-light">Eninerring & Manufacturing</h2>
                    <a href="<?php the_permalink(248);?>" class="btn all-btn">read more</a>
                  </div>
              </div>
            </div>          
            <div class="slide-2 slide">
              <div class="container container-new flex-box hero-center-2">
                  <div class="hero-content">
                    <h1 class="hero-light">Machinery</h1>
                    <h2 class="heading para-white">Assembly Line</h2>
                    <p class="para para-white">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae, alias ex. Soluta ipsam est consequuntur Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, voluptate.</p>
                    <a href="<?php the_permalink(249);?>" class="btn all-btn">Read more</a>
                  </div>
              </div>
            </div>          
        </div>
    </header>
