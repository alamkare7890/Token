<?php
    //Template Name: Contact Us

?>
<?php
  get_header('inner');

  the_field('contact',14);

?>


  <!---------Contact-section----------->
  <section class="located-section section">
        <div class="container container-new">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="contact-details">
                        <div class="flex-box">
                            <ul>
                                <li>
                                  <div class="row align-items-center">
                                    <!--<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2">-->
                                    <div class="col-auto">  
                                      <div class="icon">
                                          <i class="fas fa-map-marker-alt"></i>
                                      </div>
                                    </div>
                                    <div class="col-auto">  
                                      <div class="detail">
                                          <span class="title d-block">address</span>
                                          <a href="#">
                                            <?php the_field('address',14);?>
                                          </a>
                                      </div>
                                    </div>
                                  </div>
                                </li>
                                <li>
                                  <div class="row align-items-center">
                                    <div class="col-auto">
                                      <div class="icon sub-head">
                                          <i class="fas fa-phone-square"></i>
                                      </div>
                                    </div>
                                    <div class="col-auto">
                                      <div class="detail">
                                          <span class="d-block title">Fax.</span>
                                          <a href="#" class="heading"><?php the_field('fax',14);?></a>
                                      </div>
                                    </div>
                                  </div>
                                </li>
                                <li>
                                  <div class="row align-items-center">
                                    <div class="col-auto">
                                      <div class="icon sub-head">
                                          <i class="fas fa-fax"></i>
                                      </div>
                                    </div>
                                    <div class="col-auto">
                                      <div class="detail">
                                          <span class="d-block title">Phone</span>
                                          <a href="#" class="heading"><?php the_field('phone',14);?></a>
                                      </div>
                                    </div>
                                  </div>
                                </li>
                                <li>
                                  <div class="row align-items-center">
                                    <div class="col-auto">
                                      <div class="icon sub-head">
                                          <i class="fas fa-external-link-alt"></i>
                                      </div>
                                    </div>
                                    <div class="col-auto">
                                      <div class="detail">
                                          <span class="title d-block">Website</span>
                                          <a href="<?php the_field('website',14);?>"><?php the_field('website',14);?></a>
                                      </div>
                                    </div>
                                  </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 px-0">  
                    <div class="location">
                      <?php the_field('map', 14);?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-form section">
        <div class="container container-new">
            <h4 class="title"><sup>*</sup>Required Field</h4>
            <!--<form action="">
                <div class="form-group">
                    <label for="forName" class="title">Name <sup>*</sup></label>
                    <input type="text" name='forName' class="form-control form-control-lg">
                </div>
                <div class="form-group">
                    <label for="forEmail" class="title">Email <sup>*</sup></label>
                    <input type="email" name='forEmail' class="form-control form-control-lg">
                </div>
                <div class="form-group">
                    <label for="forSub" class="title"> Subject <sup>*</sup></label>
                    <input type="text" name='forSub' class="form-control form-control-lg">
                </div>
                <div class="form-group">
                    <label for="forMes" class="title">Message <sup>*</sup></label>
                    <textarea class="form-control form-control-lg" name="forMes" id=""></textarea>
                </div>
                <div class="btn-box">
                    <button class="all-btn btn" id='subForm' type="submit">send email</button>
                </div>
            </form>-->
            <div class="contact_space">
              <?php 
                //'/add-template-for-contact-form-7/form.php';
                echo do_shortcode('[contact-form-7 id="289" title="ContactMe"]');
              ?>
            </div>
        </div>
    </section>




<?php
    get_footer();
?>