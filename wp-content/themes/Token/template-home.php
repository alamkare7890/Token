<?php
//Template Name: home

?>
<?php
    the_field('HomeSlide',7);
    get_header();

?>

    <!--------Service-section----------->
    <section class="service-section section">
      <div class="container container-new">
        <div class="row">
          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
            <div class="service-slide">

              <?php
              
                if(have_rows('slideService',7)){
                  while(have_rows('slideService',7)){
                    the_row();
              ?>    
                    <div class="image"> 
                      <img src="<?php echo get_sub_field('slide_img',7); ?>" alt="">
                    </div>

              <?php }; } ?>
              
            


             <!-- <div class="image"> 
                  <img src="<?php echo get_template_directory_uri();?>/image/Jpg/serv2.jpg" alt="">
              </div>
              <div class="image">
                  <img src="<?php echo get_template_directory_uri();?>/image/Jpg/serv3.jpg" alt="">
              </div>
              <div class="image"> 
                  <img src="<?php echo get_template_directory_uri();?>/image/Jpg/serv4.jpg" alt="">
              </div>
              <div class="image">
                  <img src="<?php echo get_template_directory_uri();?>/image/Jpg/serv5.jpg" alt="">
              </div>
              <div class="image"> 
                  <img src="<?php echo get_template_directory_uri();?>/image/Jpg/serv6.jpg" alt="">
              </div> -->           
            </div>
            <div class="button_holder" >

            </div>
          </div>
          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
            <div class="section-header-md section-header">
              <span class="title-head">our service</span>
              <h2 class="heading">Services We Offered</h2>
              <p class="para">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam ipsa laborum praesentium quia? Veniam rerum dolor dolore aspernatur tempora nobis laudantium minima animi explicabo nam.</p>
              <a href="<?php the_permalink(199);?>" class="btn all-btn">more services</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--------service-type-section----------->
    <section class="service-type-section section">
      <div class="container container-new">
        <div class="row">
          <div class="col-xl-6 col-lg-6">
            <div class="section-header-lg section-header section-header-md">
              <span class="title-head">why choose us</span>
              <h2 class="heading">Through Years We Offer best Service & Solutions</h2>
              <p class="para d-lg-none d-xl-none d-md-block">we Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magni, ad! Id laboriosam minima unde? Adipisci, natus voluptatem. Aperiam, quidem aliquid Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut ullam distinctio beatae tenetur aperiam cum.</p>
            </div>
          </div>
          <div class="col-xl-6 col-lg-6">
            <div class="content">
              <p class="para d-none d-md-none d-lg-block d-xl-block d-sm-none">we Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magni, ad! Id laboriosam minima unde? Adipisci, natus voluptatem. Aperiam, quidem aliquid Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut ullam distinctio beatae tenetur aperiam cum.</p>
            </div>
          </div>
        </div>
        <div class="row">

            <?php
              if(have_rows('service_area',7)){
                while(have_rows('service_area',7)){
                  the_row();
                  
            ?>

                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                  <div class="benefits">
                    <img src="<?php echo get_sub_field('image_area',7);?>" alt="">
                    <h3 class="sub-head"><?php echo get_sub_field('head_area',7);?></h3>
                    <p class="para"><?php echo get_sub_field('title_area',7);?></p>
                  </div>
                </div>


              <?php  };}?>
               
         <!-- <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="benefits">
              <!DOCTYPE svg  PUBLIC '-//W3C//DTD SVG 1.1//EN'  'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'><svg height="512px" id="Layer_1" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" width="512px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M340.8,83C307,83,276,98.8,256,124.8c-20-26-51-41.8-84.8-41.8C112.1,83,64,131.3,64,190.7c0,27.9,10.6,54.4,29.9,74.6  L245.1,418l10.9,11l10.9-11l148.3-149.8c21-20.3,32.8-47.9,32.8-77.5C448,131.3,399.9,83,340.8,83L340.8,83z"/></svg>
              <h3 class="sub-head">Certified Engineers</h3>
              <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, ex.Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, ex.</p>
            </div>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="benefits">
              <svg height="48" viewBox="0 0 48 48" width="48" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h48v48h-48z" fill="none"/><path d="M38.71 20.07c-1.36-6.88-7.43-12.07-14.71-12.07-2.95 0-5.7.87-8.02 2.34l2.92 2.92c1.53-.79 3.26-1.26 5.1-1.26 6.08 0 11 4.92 11 11v1h3c3.31 0 6 2.69 6 6 0 2.27-1.27 4.22-3.13 5.24l2.9 2.9c2.55-1.81 4.23-4.77 4.23-8.14 0-5.28-4.11-9.56-9.29-9.93zm-32.71-9.52l5.5 5.48c-6.38.27-11.5 5.52-11.5 11.97 0 6.63 5.37 12 12 12h23.45l4 4 2.55-2.54-33.45-33.46-2.55 2.55zm9.45 9.45l16 16h-19.45c-4.42 0-8-3.58-8-8s3.58-8 8-8h3.45z"/></svg>
              <h3 class="sub-head">Certified Engineers</h3>
              <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, ex.Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, ex.</p>
            </div>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="benefits">
              <svg style="fill: none; stroke: #ebb204;" viewBox="0 0 24 24"  xmlns="http://www.w3.org/2000/svg"><path  d="M7 7h4v4H7zm0 6h4v4H7zm6-6h4v4h-4zm0 6h4v4h-4z"/></svg>
              <h3 class="sub-head">Certified Engineers</h3>
              <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, ex.Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, ex.</p>
            </div>
          </div>-->
        </div>
        
      </div>
    </section>
    <!----------project-section------>
    <section class="section project-section">
      <div class="container container-new">
        <div class="row align-items-center">
      

              <div class="col-xl-10 col-lg-10 col-md-10">
                <div class="section-header section-header-md">
                  <span class="title-head">our portfolio</span>
                  <h2 class="heading">Ongoing Project</h2>
                </div>
              </div>
              <div class="col-xl-2 col-lg-2 col-md-2">
                <div class="btn-box">
                  <a href="<?php the_permalink(40);?>" class="btn btn-black">
                    <i class="fas mr-1 fa-arrow-right"></i>
                    more service
                  </a>
                </div>
              </div>
        </div>
      </div>
      <div class="row mx-0">
        

        <?php
          if(have_rows('projects',7)){
            while(have_rows('projects',7)){
              the_row();
        ?>
          <div class="col-xl-3 px-0 col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="project-group">
              <div class="image">
                <img src="<?php echo get_sub_field('proimg',7); ?>" alt="">
              </div>
              <div class="content-panel flex-box justify-content-center">
                <div class="content">
                <a href="#" class="btn pro-btn">zoom</a>
                <a href="#" class="btn pro-btn">view</a>
                <h3 class="sub-head"><?php echo get_sub_field('prohead',7);?></h3>
                <span class="small-title">INFRASTRUCTURE</span>
                </div>
              </div>
            </div>
          </div>


        <?php    };} ?>
        
      
          
          <!--<div class="col-xl-3 px-0 col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="project-group">
              <div class="image">
                <img src="<?php echo get_template_directory_uri();?>/image/Jpg/project3.jpg" alt="">
              </div>
              <div class="content-panel flex-box justify-content-center">
                <div class="content">
                <a href="#" class="btn pro-btn">zoom</a>
                <a href="#" class="btn pro-btn">view</a>
                <h3 class="sub-head">Road contruction</h3>
                <span class="small-title">INFRASTRUCTURE</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 px-0 col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="project-group">
              <div class="image">
                <img src="<?php echo get_template_directory_uri();?>/image/Jpg/project4.jpg" alt="">
              </div>
              <div class="content-panel flex-box justify-content-center">
                <div class="content">
                <a href="#" class="btn pro-btn">zoom</a>
                <a href="#" class="btn pro-btn">view</a>
                <h3 class="sub-head">Road contruction</h3>
                <span class="small-title">INFRASTRUCTURE</span>
                </div>
              </div>
            </div>
          </div>-->
        <div class="container container-new">
          <div id="numCounter">  
            <div class="row">
              <div class="col-xl-4 col-lg-4 col-sm-4">
                <div class="perform">
                  <span class="mycounter num" data-speed="5000">17</span>
                  <span class="sub-title">Years of Exprience</span>              
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-sm-4">
                <div class="perform">
                  <span class="mycounter num" data-speed="5000">98</span>
                  <span class="sub-title">Commercial Building</span>              
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-sm-4">
                <div class="perform">
                  <span class="mycounter num" data-speed="5000">132</span>
                  <span class="sub-title">Dwelling Houses Built</span>              
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>

    <!--------Team-section----------->
    <section class="team-section section">
      <div class="container container-new">
        <div class="section-header-md section-header section-header-lg">
          <span class="title-head">our Experts</span>
          <h2 class="heading">Meet Our Team</h2>
          <p class="para">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum commodi nisi ipsum. Rem, reprehenderit assumenda Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, dolores.</p>
        </div>
        <div class="row">
          <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 pr-md-0 pr-sm-0 pr-lg-2 pr-xl-2">
            <div class="mx-xl-2 mx-lg-0 whole-image">
              <div class="image">
                <img src="<?php echo get_template_directory_uri();?>/image/Jpg/mem1.jpg" alt="">
              </div>
              <div class="desi">
                <div class="desi-title">
                  <h3 class="sub-head">John Travoltage</h3>
                  <span class="small-title">ceo</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 pl-md-0 pl-sm-0 px-lg-2 px-xl-2">
            <div class="mx-xl-2 mx-lg-0 whole-image">
            <div class="image">
              <img src="<?php echo get_template_directory_uri();?>/image/Jpg/mem2.jpg" alt="">
            </div>
            <div class="desi">
              <div class="desi-title">
                <h3 class="sub-head">John Travoltage</h3>
                <span class="small-title">ceo</span>
              </div>
            </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 pr-md-0 pr-sm-0 px-lg-2 px-xl-2">
            <div class="mx-xl-2 mx-lg-0 whole-image">
            <div class="image">
              <img src="<?php echo get_template_directory_uri();?>/image/Jpg/mem3.jpg" alt="">
            </div>
            <div class="desi">
              <div class="desi-title">
                <h3 class="sub-head">John Travoltage</h3>
                <span class="small-title">ceo</span>
              </div>
            </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 pl-md-0 pl-sm-0 pl-lg-2 pl-xl-2">
            <div class="mx-xl-2 mx-lg-0 whole-image">
            <div class="image">
              <img src="<?php echo get_template_directory_uri();?>/image/Jpg/mem4.jpg" alt="">
            </div>
            <div class="desi">
              <div class="desi-title">
                <h3 class="sub-head">John Travoltage</h3>
                <span class="small-title">ceo</span>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--------Partner-section----------->
    <section class="testimonial-section section">
      <div class="container container-new">
        <div class="row">
          <div class="col-xl-4 col-lg-4">
            <div class="section-header section-header-lg section-header-md">
              <span class="title-head">Our testimonial</span>
              <h2 class="heading">We're Serving Because of You</h2>
            </div>
          </div>
          <div class="col-xl-8 col-lg-8">
            <div class="testi-slide">
              <div class="person">
                <div class="profile flex-box">
                  <div class="image">
                    <img src="<?php echo get_template_directory_uri();?>/image/Jpg/testimonial-1.jpg" alt="">
                  </div>
                  <div class="person-desi">
                    <h4 class="name">Shark Jacobson</h4>
                    <span class="sub-title">ENTERPRENEUR</span>
                  </div>
                </div>
                <p class="para-test para">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia iusto illo, sunt alias quidem similique. Expedita accusantium aliquid delectus deleniti.</p>
              </div>
              <div class="person">
                <div class="profile flex-box">
                  <div class="image">
                    <img src="<?php echo get_template_directory_uri();?>/image/Jpg/testimonial-2.jpg" alt="">
                  </div>
                  <div class="person-desi">
                    <h4 class="name">Shark Jacobson</h4>
                    <span class="sub-title">ENTERPRENEUR</span>
                  </div>
                </div>
                <p class="para-test para">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia iusto illo, sunt alias quidem similique. Expedita accusantium aliquid delectus deleniti.</p>
              </div>
              <div class="person">
                <div class="profile flex-box">
                  <div class="image">
                    <img src="<?php echo get_template_directory_uri();?>/image/Jpg/testimonial-3.jpg" alt="">
                  </div>
                  <div class="person-desi">
                    <h4 class="name">Shark Jacobson</h4>
                    <span class="sub-title">ENTERPRENEUR</span>
                  </div>
                </div>
                <p class="para-test para">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia iusto illo, sunt alias quidem similique. Expedita accusantium aliquid delectus deleniti.</p>
              </div>
              <div class="person">
                <div class="profile flex-box">
                  <div class="image">
                    <img src="<?php echo get_template_directory_uri();?>/image/Jpg/testimonial-4.jpg" alt="">
                  </div>
                  <div class="person-desi">
                    <h4 class="name">Shark Jacobson</h4>
                    <span class="sub-title">ENTERPRENEUR</span>
                  </div>
                </div>
                <p class="para-test para">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia iusto illo, sunt alias quidem similique. Expedita accusantium aliquid delectus deleniti.</p>
              </div>
              <div class="person">
                <div class="profile flex-box">
                  <div class="image">
                    <img src="<?php echo get_template_directory_uri();?>/image/Jpg/testimonial-5.jpg" alt="">
                  </div>
                  <div class="person-desi">
                    <h4 class="name">Shark Jacobson</h4>
                    <span class="sub-title">ENTERPRENEUR</span>
                  </div>
                </div>
                <p class="para-test para">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia iusto illo, sunt alias quidem similique. Expedita accusantium aliquid delectus deleniti.</p>
              </div>
              <div class="person">
                <div class="profile flex-box">
                  <div class="image">
                    <img src="<?php echo get_template_directory_uri();?>/image/Jpg/testimonial-6.jpg" alt="">
                  </div>
                  <div class="person-desi">
                    <h4 class="name">Shark Jacobson</h4>
                    <span class="sub-title">ENTERPRENEUR</span>
                  </div>
                </div>
                <p class="para-test para">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia iusto illo, sunt alias quidem similique. Expedita accusantium aliquid delectus deleniti.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--------Brand-section----------->
    <section class="brand-section section bg-image"> 
      <div class="container container-new">
        <div class="partner-slide">
          <div class="partner">
            <div class="image">
              <img src="<?php echo get_template_directory_uri();?>/image/Png/logo-1.png" alt="">
            </div>
          </div>
          <div class="partner">
            <div class="image">
              <img src="<?php echo get_template_directory_uri();?>/image/Png/logo-2.png" alt="">
            </div>
          </div>
          <div class="partner">
            <div class="image">
              <img src="<?php echo get_template_directory_uri();?>/image/Png/logo-3.png" alt="">
            </div>
          </div>
          <div class="partner">
            <div class="image">
              <img src="<?php echo get_template_directory_uri();?>/image/Png/logo-1.png" alt="">
            </div>
          </div>
          <div class="partner">
            <div class="image">
              <img src="<?php echo get_template_directory_uri();?>/image/Png/logo-4.png" alt="">
            </div>
          </div>
          <div class="partner">
            <div class="image">
              <img src="<?php echo get_template_directory_uri();?>/image/Png/logo-5.png" alt="">
            </div>
          </div>
          <div class="partner">
            <div class="image">
              <img class="dark-logo" src="<?php echo get_template_directory_uri();?>/image/Png/logo-6.png" alt="">
            </div>
          </div>
          <div class="partner">
            <div class="image">
              <img class="dark-logo" src="<?php echo get_template_directory_uri();?>/image/Png/logo-7.png" alt="">
            </div>
          </div>
          <div class="partner">
            <div class="image"> 
              <img class="dark-logo" src="<?php echo get_template_directory_uri();?>/image/Png/logo-8.png" alt="">
            </div>
          </div>
          <div class="partner">
            <div class="image">
              <img class="dark-logo" src="<?php echo get_template_directory_uri();?>/image/Png/logo-9.png" alt="">
            </div>
          </div>
        </div>
        <div class="content">
          <div class="span title-head">got a project</div>
          <h2 class="heading para-white">Ready to Simplify Your Next Contruction Porject with Us?</h2>
          <a href="#" class="btn all-btn">
            <i class="fas fa-envelope"></i>
            <span>contact us</span>
          </a>
        </div>
      </div>
    </section>
    <!--------blog-section----------->
    <section class="our-blog section">
      <div class="container container-new">
        <?php
          //$bn = get_categories(array(
            //'taxonomy'=> 'latest'));
          
        ?>
        <!--<pre><?php print_r($bn);?></pre>-->
        <!---<ul>
          <?php 
            //foreach($bn as $value){
          ?>
            <li><a href="<?php// echo get_category_link($value->term_id);?>"><?php echo $value->name,$value->count;?></a></li>
          <?php // };?>
        </ul>--->
        <div class="row">
          <div class="col-xl-3 col-lg-3 col-md-12">
            <div class="section-header section-header-md">
              <span class="title-head">news & artiles</span>  
              <h2 class="heading">Construction Blogs</h2>
            </div>
          </div>
          <div class="col-xl-9 col-lg-9 col-md-12">
            <div class="row">

              <?php
                $cp = array(
                    'post_type' => 'news',
                    'post_status' => 'publish'
                );
                $wp_var = new wp_Query($cp);

              ?>
              <?php 
                while($wp_var->have_posts()){
                  $wp_var -> the_post();
              ?>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-8 mx-sm-auto col-10 mx-auto mb-3 ">
                  <h3 class="sub-head"><?php the_title();?></h3>
                  <span class="sub-title"><?php echo get_the_date();?></span>
                  <p class="para"><?php the_excerpt();?></p>
                  <a href="<?php the_permalink();?>" class="btn read-more">Read more...</a>
                </div>
              <?php };?>  
            </div>
          </div>
        </div>
      </div>
    </section>



<?php

  get_footer();

?>              