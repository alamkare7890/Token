
<?php
    echo get_header('inner');

 /* $sechaValue = '';
  if($_GET['searchArea']!= ''){
    $sechaValue = $_GET['searchArea'];

  };*/


?>

<section class="article-section section">
      <div class="container container-new">
        <div class="row">
          <div class="col-xl-8 col-lg-8 col-md-8 col-sm-10 mx-auto">
            <?php
              while(have_posts()){
                the_post();      
                $blogImage =  wp_get_attachment_image_src(get_post_thumbnail_id(),'large')    
            ?>
              <article>
                <div class="image">
                  <img src="<?php echo $blogImage[0]?>"  alt="">
                </div>
                <div class="content">
                  <h4 class="blog-heading"><?php the_title() ?></h4>
                  <span class="sub-title"><?php  echo get_the_author()?></span>
                  <span class="sub-title">- News <?php echo get_the_date() ?></span>
                  <p class="para"><?php the_excerpt() ?></p>
                  <a href="<?php echo the_permalink()?>" class="btn read-more">Read more</a>
                </div>
              </article>
            <?php } ?>  
          </div>
          <div class="col-xl-4 col-lg-4 col-md-8 col-sm-10 mx-auto">
            <div class="section-header">
              <h3 class="blog-heading">Quick Links</h3>

             <!-- <nav class="navbar navbar-light justify-content-between align-item-center bg-light">
                <form class="form-inline" method="get">
                  <input class="form-control" type="search" name="searchArea" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
              </nav>-->
            </div>
            <!--<?php
                while( have_posts()){
                  the_post();
                  $imgBLog = wp_get_attachment_image_src(get_post_thumbnail_id(),'large');
                  ?>
                <div class="row mb-4">
                  <div class="col-xl-4 col-lg-4 col-md-3 col-sm-3 col-3">
                    <div class="small-image">
                      <img src="<?php echo $imgBLog[0] ?>" alt="">
                    </div>
                  </div>
                  <div class="col-xl-8 col-lg-8 col-md-8 col-sm-9 col-sm-9 col-9 pl-0">
                    <h5 class="small-head"><?php the_title() ?></h5>
                    <span class="sub-title"><?php echo get_the_date() ?></span>
                  </div>
                </div>
              <?php } ?>-->
              <?php dynamic_sidebar('sidebar')?>
             <!-- <div class="row mb-4">
                  <div class="col-xl-4 col-lg-4 col-md-3 col-sm-3 col-3">
                    <div class="small-image">
                      <img src="<?php echo get_template_directory_uri();?>/image/Jpg/smaple-2.jpg" alt="">
                    </div>
                  </div>
                  <div class="col-xl-8 col-lg-8 col-md-9 col-sm-9 col-9 pl-0">
                    <h5 class="small-head">Smart factories and industry 4.0 are the future</h5>
                    <span class="sub-title">17 August 2020</span>
                  </div>
              </div>
              <div class="row mb-4">
                  <div class="col-xl-4 col-lg-4 col-md-3 col-sm-3 col-3">
                    <div class="small-image">
                      <img src="<?php echo get_template_directory_uri();?>/image/Jpg/sample-3.jpg" alt="">
                    </div>
                  </div>
                  <div class="col-xl-8 col-lg-8 col-md-9 col-sm-9 col-9 pl-0">
                    <h5 class="small-head">Smart factories and industry 4.0 are the future</h5>
                    <span class="sub-title">17 August 2020</span>
                  </div>
              </div>
              <div class="row mb-4">
                  <div class="col-xl-4 col-lg-4 col-md-3 col-sm-3 col-3">
                    <div class="small-image">
                      <img src="<?php echo get_template_directory_uri();?>/image/Jpg/smaple-4.jpg" alt="">
                    </div>
                  </div>
                  <div class="col-xl-8 col-lg-8 col-md-9 col-sm-9 col-9 pl-0">
                    <h5 class="small-head">Smart factories and industry 4.0 are the future</h5>
                    <span class="sub-title">17 August 2020</span>
                  </div>
              </div>-->
          </div>
        </div>
        <?php echo wp_pagenavi() ?>
      </div>
</section>



<?php
   get_footer();
?>