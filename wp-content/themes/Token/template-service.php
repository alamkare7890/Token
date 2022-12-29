<?php
//Template Name: serviceNew

?>
<?php
    get_header('inner');


?>

   <section class="service-gallery section">
      <div class="container container-new">
        <div class="row align-items-center">
          <?php 
            if(have_rows('servicegroup',199)){
              while(have_rows('servicegroup',199)){
                the_row();          
          ?>
              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="whole-service">
                  <div class="image">
                    <img src="<?php echo get_sub_field('bgimage',199);?>" alt="">
                  </div>
                  <div class="content">
                    <h3 class="blog-head"><?php echo get_sub_field('headserv',199);?></h3>
                  </div>
                </div>
              </div>
          <?php }; }?>   
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
            if(have_rows('servcate',199)){
              while(have_rows('servcate',199)){
                the_row();
          ?>  
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="benefits">
                <div class="pic_box"><?php get_sub_field('servimg',199);?></div>
                <h3 class="sub-head"><?php echo get_sub_field('servhead',199);?></h3>
                <p class="para"><?php echo get_sub_field('servcon',199);?></p>
              </div>
            </div>
          <?php };}?>
        <!--  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="benefits">
              <!DOCTYPE svg  PUBLIC '-//W3C//DTD SVG 1.1//EN'  'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'><svg height="512px" id="Layer_1" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" width="512px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M340.8,83C307,83,276,98.8,256,124.8c-20-26-51-41.8-84.8-41.8C112.1,83,64,131.3,64,190.7c0,27.9,10.6,54.4,29.9,74.6  L245.1,418l10.9,11l10.9-11l148.3-149.8c21-20.3,32.8-47.9,32.8-77.5C448,131.3,399.9,83,340.8,83L340.8,83z"/></svg>
              <h3 class="sub-head">Certified Engineers</h3>
              <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, ex. Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, ex.</p>
            </div>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="benefits">
              <svg height="48" viewBox="0 0 48 48" width="48" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h48v48h-48z" fill="none"/><path d="M38.71 20.07c-1.36-6.88-7.43-12.07-14.71-12.07-2.95 0-5.7.87-8.02 2.34l2.92 2.92c1.53-.79 3.26-1.26 5.1-1.26 6.08 0 11 4.92 11 11v1h3c3.31 0 6 2.69 6 6 0 2.27-1.27 4.22-3.13 5.24l2.9 2.9c2.55-1.81 4.23-4.77 4.23-8.14 0-5.28-4.11-9.56-9.29-9.93zm-32.71-9.52l5.5 5.48c-6.38.27-11.5 5.52-11.5 11.97 0 6.63 5.37 12 12 12h23.45l4 4 2.55-2.54-33.45-33.46-2.55 2.55zm9.45 9.45l16 16h-19.45c-4.42 0-8-3.58-8-8s3.58-8 8-8h3.45z"/></svg>
              <h3 class="sub-head">Certified Engineers</h3>
              <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, ex. Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, ex.</p>
            </div>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="benefits">
              <svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M7 7h4v4H7zm0 6h4v4H7zm6-6h4v4h-4zm0 6h4v4h-4z"/></svg>
              <h3 class="sub-head">Certified Engineers</h3>
              <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, ex. Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, ex.</p>
            </div>
          </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="benefits">
              <!DOCTYPE svg  PUBLIC '-//W3C//DTD SVG 1.1//EN'  'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'><svg height="512px" id="Layer_1" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" width="512px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M340.8,83C307,83,276,98.8,256,124.8c-20-26-51-41.8-84.8-41.8C112.1,83,64,131.3,64,190.7c0,27.9,10.6,54.4,29.9,74.6  L245.1,418l10.9,11l10.9-11l148.3-149.8c21-20.3,32.8-47.9,32.8-77.5C448,131.3,399.9,83,340.8,83L340.8,83z"/></svg>
              <h3 class="sub-head">Certified Engineers</h3>
              <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, ex. Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, ex.</p>
            </div>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="benefits">
              <!DOCTYPE svg  PUBLIC '-//W3C//DTD SVG 1.1//EN'  'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'><svg height="512px" id="Layer_1" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" width="512px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M340.8,83C307,83,276,98.8,256,124.8c-20-26-51-41.8-84.8-41.8C112.1,83,64,131.3,64,190.7c0,27.9,10.6,54.4,29.9,74.6  L245.1,418l10.9,11l10.9-11l148.3-149.8c21-20.3,32.8-47.9,32.8-77.5C448,131.3,399.9,83,340.8,83L340.8,83z"/></svg>
              <h3 class="sub-head">Certified Engineers</h3>
              <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, ex. Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, ex.</p>
            </div>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="benefits">
              <svg height="48" viewBox="0 0 48 48" width="48" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h48v48h-48z" fill="none"/><path d="M38.71 20.07c-1.36-6.88-7.43-12.07-14.71-12.07-2.95 0-5.7.87-8.02 2.34l2.92 2.92c1.53-.79 3.26-1.26 5.1-1.26 6.08 0 11 4.92 11 11v1h3c3.31 0 6 2.69 6 6 0 2.27-1.27 4.22-3.13 5.24l2.9 2.9c2.55-1.81 4.23-4.77 4.23-8.14 0-5.28-4.11-9.56-9.29-9.93zm-32.71-9.52l5.5 5.48c-6.38.27-11.5 5.52-11.5 11.97 0 6.63 5.37 12 12 12h23.45l4 4 2.55-2.54-33.45-33.46-2.55 2.55zm9.45 9.45l16 16h-19.45c-4.42 0-8-3.58-8-8s3.58-8 8-8h3.45z"/></svg>
              <h3 class="sub-head">Certified Engineers</h3>
              <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, ex. Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, ex.</p>
            </div>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="benefits">
              <svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M7 7h4v4H7zm0 6h4v4H7zm6-6h4v4h-4zm0 6h4v4h-4z"/></svg>
              <h3 class="sub-head">Certified Engineers</h3>
              <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, ex. Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, ex.</p>
            </div>
          </div>-->
        </div>
      </div>
    </section>
    <!---------overview-section----------->
    <section class="overview">
        <div class="container container-new">
            <div class="play-about">
              <img src="<?php echo get_template_directory_uri();?>/image/Jpg/about-bg.jpg" alt="">
              <div class="play-btn flex-box">
                <div class="play-box">
                  <i class="fas fa-play-circle"></i>
                  <h3 class="sub-head">Our Latest Technology Overview</h3>
                </div>
              </div>
            </div>
        </div>
        <div class="container container-new">
          <div id="numCounter">  
            <div class="row my-3">
              <div class="col-xl-4 col-lg-4 col-sm-4">
                <div class="perform">
                  <span class="mycounter num" data-speed="5000">8</span>
                  <span class="sub-title">Years of Exprience</span>              
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-sm-4">
                <div class="perform">
                  <span class="mycounter num" data-speed="5000">85</span>
                  <span class="sub-title">Commercial Building</span>              
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-sm-4">
                <div class="perform">
                  <span class="mycounter num" data-speed="5000">180</span>
                  <span class="sub-title">Dwelling Houses Built</span>              
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


<?php
    get_footer();

?>