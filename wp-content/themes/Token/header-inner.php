

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title><?php bloginfo('name');?><?php echo' | '?><?php wp_title();?></title>

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Yantramanav:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/style.css"> 
    <?php wp_head();?>
  </head> 
  <body>
    <!--------heroHeader-section----------->
    <header class="page-hero-section bg-header" style="background-image: url(<?php echo get_template_directory_uri()?>/image/Jpg/slider1.jpg);">
      <div class="bg-panel" id="navScroll">
        <div class="container container-new">
          <nav class="navbar navigation navbar-expand-xl align-item-center">
            <a class="navbar-brand order-lg-2 order-xl-0 order-md-2 order-sm-2 order-2" href="#">
              <svg id="brand" class="logo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="2079" height="807" viewBox="0 0 2079 807">
                <defs>
                  <style>
                    .cls-1 {
                      font-size: 250px;
                      font-weight: 700;
                    }

                    .cls-1, .cls-2 {
                      text-anchor: middle;
                      font-family: Montserrat;
                      text-transform: uppercase;
                      text-align: center;
                    }

                    .cls-2 {
                      font-size: 267.056px;
                      font-weight: 600;
                    }
                  </style>
                </defs>
                <text id="Tokang" class="cls-1" transform="translate(1394.04 545.044) scale(1.077 1.076)"><tspan x="0">Tokang</tspan></text>
                <text id="renovate_with_joomla" data-name="renovate with joomla" class="cls-2" transform="translate(1420.177 682.173) scale(0.3 0.3)"><tspan x="0">renovate with joomla</tspan></text>
              </svg>
            </a>  

            <span class="ham-menu order-lg-0 order-xl-2 order-md-0 order-sm-0 order-0" id="toggleNav"></span>

            <div class="collapse nav-menu navbar-collapse justify-content-end align-items-center" id="toggleBtn align-item-center">
              <!--<ul class="navbar-nav mx-auto">
                <li class="nav-item active dropdown">
                  <a  class=" nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span>home</span>
                    <i class="fas fa-angle-down"></i>
                  </a>
                  
                  <div class="dropdown-menu drop-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Home 1</a>
                    <a class="dropdown-item" href="#">Home 2</a>
                    <a class="dropdown-item" href="#">Home 3</a>
                  </div>
                </li>
                <li class="nav-item active">
                  <a  class="nav-link" href="#">
                    <span>about us</span>
                  </a> 
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span>pages</span>
                    <i class="fas fa-angle-down"></i>
                  </a>
    
                  <div class="dropdown-menu drop-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </li>
                <li class="nav-item active dropdown">
                  <a  class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span>portfolio</span>
                    <i class="fas fa-angle-down"></i>
                  </a>
  
                  <div class="dropdown-menu drop-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </li>
                <li class="nav-item active dropdown">
                  <a  class=" nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span>service</span>
                    <i class="fas fa-angle-down"></i> 
                  </a>
  
                  <div class="dropdown-menu drop-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <span>Contact us</span>
                  </a>
                </li>
              </ul>
              <div class="search">
                <div class="search-option">
                  <form class="form-inline">

                    <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                      <i class="fas fa-search"></i>
                    </button>
                  </form>
                </div>-->
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
                $image = get_header_image();
              ?>
              <img class="logo" src="<?php echo $image;?>" alt="">
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
            <?php
                  wp_nav_menu(array('
                  theme location'=>'primary-menu'))
            ?>
            <div class="search d-none">
              <div class="search-option">
                <form class="form-inline">

                  <!--<input class="form-control" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                    <i class="fas fa-search"></i>
                  </button>-->
                </form>
              </div>
              <div class="btn-box d-none">
                <a href="#" class="btn all-btn">Free Consultation</a>
              </div>
            </div>
          </div>
      </div>
      <div class="hero-header flex-box align-items-end">
        <div class="container container-new">
          <div class="head-content">
            <h1 class="hero-head"><?php the_title(); ?></h1>
            <p><?php the_excerpt();?></p>
          </div>
        </div>
      </div> 
    </header>