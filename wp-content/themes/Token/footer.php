   <!--------Footer-section----------->
   <footer class="footer-section">
      <div class="container container-new">
        <div class="row">
          <div class="col-xl-7 col-lg-7 col-md-8">
              <div class="row align-item-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-6 col-sm-6">
                  <div class="contact-num">
                    <span class="title-head">call center</span>
                    <div>
                      <a href="#" class="sub-head"><?php the_field('makecontact',199);?></a>
                    </div>
                  </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-6 col-sm-6">
                  <div class="social-icon">
                    <ul class="flex-box">
                      <li>
                        <a href="#">
                          <i class="fab fa-facebook-f"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fab fa-twitter"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fab fa-instagram"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fab fa-youtube"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                  <div class="footer-content">
                    <span class="title-head">head office</span>
                    <ul>
                      <li>
                        <a href="#">
                        <?php the_field('address',199);?>

                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span>Telp.</span>
                          <span><?php the_field('tel',199);?></span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span>Fax.</span>
                          <span><?php the_field('fax',199);?></span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <?php
                $cate = get_categories(array('taxonomy' => 'category'));?>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-6">
                  <div class="footer-content">
                  <span class="title-head">our services</span>
                  <!--<ul>
                    <?php
                      foreach ($cate as $catevalue) { ?>
                        <li>
                          <a href="#">
                            <i class="far fa-check-circle"></i>
                              Precontruction
                          </a>
                        </li>
                    <?php } ?>  
                    

                    
                  </ul>-->
                 <!-- <?php 
                    wp_nav_menu(array(
                      'theme location' => 'primary-menu',
                    ));
                  ?>-->
                  </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-6">
                  <div class="footer-content">
                    <span class="title-head">office hour</span>
                    <ul class="timing">
                      <li>Monday - Friday</li>
                      <li><?php the_field('timing',199);?></li>
                    </ul>
                  </div>
                </div>
              </div>
          </div>
          <div class="col-xl-5 col-lg-5 col-md-4 px-0 d-sm-none d-lg-block d-lxl-block d-md-block d-none">
            <div class="footer-image">
              <img src="<?php echo get_template_directory_uri()?>/image/Png/footer.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </footer>
    <div class="yellow">
      <?php
        $date = date('Y');
        echo "<p class='copyright'><small>All the copyright reserved @ $date</small></p>";
      ?>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js" integrity="sha512-IsNh5E3eYy3tr/JiX2Yx4vsCujtkhwl7SLqgnwLNgf04Hrt9BT9SXlLlZlWx+OK4ndzAoALhsMNcCmkggjZB1w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <?php wp_footer()?>
    <script src="<?php echo get_template_directory_uri()?>/js/script.js"></script>
  </body> 
</html>