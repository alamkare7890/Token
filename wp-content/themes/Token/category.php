<?php
  get_header('inner');
?>

<section class="article-section section">
      <div class="container container-new">
        <div class="row">
          <div class="col-xl-8 col-lg-8 col-md-8 col-sm-10 mx-auto">
            <?php
              while(have_posts()){
                the_post();      
                $cateImg =  wp_get_attachment_image_src(get_post_thumbnail_id(),'large')    
            ?>
              <article>
                <div class="image">
                  <img src="<?php echo $cateImg[0]?>"  alt="">
                </div>
                <div class="content">
                  <h4 class="blog-heading"><?php the_title() ?></h4>
                  <span class="sub-title"><?php  echo get_the_author()?></span>
                  <span class="sub-title">- News <?php echo get_the_date() ?></span>
                  <p class="para"><?php the_excerpt(); ?></p> 
                  <a href="<?php the_permalink();?>" class="btn read-more">Read More</a>                 
                </div>
              </article>
            <?php } ?>  
          </div>
          <div class="col-md-4 col-12">

          </div>
        </div>
      </div>
</section>


<?php
  get_footer();
?>