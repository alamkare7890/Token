<?php
//Template Name: Portfolio

?>
<?php
    get_header("inner");
?>

 <!--------portfolio-gallery------------>
 <section class="port-gallery" id="">
      <div class="container container-new">
        <!-- Nav tabs -->
        <div class="port-nav flex-box">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="showAll" data-toggle="tab" href="#allShow" role="tab" aria-controls="allShow" aria-selected="true">Show All</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="showIntfa" data-toggle="tab" href="#infraShow" role="tab" aria-controls="infraShow" aria-selected="true">Infrastructure</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="showInterio" data-toggle="tab" href="#interioShow" role="tab" aria-controls="interioShow" aria-selected="false">Interior</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="showBuilt" data-toggle="tab" href="#builtShow" role="tab" aria-controls="builtShow" aria-selected="false">Building</a>
            </li>
          </ul>
        </div>
        
        <!-- Tab panes -->
        <div class="tab-content">
          <div class="tab-pane active" id="allShow" role="tabpanel" aria-labelledby="showAll">
            <div class="gallery-grid">  
              <div class="image1 image">
                <div class="view-panel">
                  <img src="<?php echo get_template_directory_uri();?>/image/Jpg/project1.jpg" alt="">
                  <div class="grid-content">
                    <h3 class="sub-head">Scandinarian Living room</h3>
                    <span class="sub-title">Interior</span>
                  </div>
                </div>
                <div class="content">
                  <div class="view-btn">
                    <a href="#" class="btn pro-btn">zoom</a>
                    <a href="#" class="btn pro-btn">view</a>
                  </div>
                </div>
              </div>
              <div class="image2 image">
                <div class="view-panel">  
                  <img src="<?php echo get_template_directory_uri();?>/image/Jpg/project2.jpg" alt="">
                  <div class="grid-content">
                    <h3 class="sub-head">Scandinarian Living room</h3>
                    <span class="sub-title">Interior</span>
                  </div>
                </div>
                <div class="content">
                  <div class="view-btn">
                    <a href="#" class="btn pro-btn">zoom</a>
                    <a href="#" class="btn pro-btn">view</a>
                  </div>
                </div>

              </div>

              <div class="image3 image">
                <div class="view-panel">  
                  <img src="<?php echo get_template_directory_uri();?>/image/Jpg/project3.jpg" alt="">
                  <div class="grid-content">
                    <h3 class="sub-head">Scandinarian Living room</h3>
                    <span class="sub-title">Interior</span>
                  </div>
                </div>
                <div class="content">
                  <div class="view-btn">
                    <a href="#" class="btn pro-btn">zoom</a>
                    <a href="#" class="btn pro-btn">view</a>
                  </div>
                </div>
              </div>

              <div class="image4 image">
                <div class="view-panel">  
                  <img src="<?php echo get_template_directory_uri();?>/image/Jpg/project4.jpg" alt="">
                  <div class="grid-content">
                    <h3 class="sub-head">Scandinarian Living room</h3>
                    <span class="sub-title">Interior</span>
                  </div>
                </div>

                <div class="content">
                  <div class="view-btn">
                    <a href="#" class="btn pro-btn">zoom</a>
                    <a href="#" class="btn pro-btn">view</a>
                  </div>
                </div>

              </div>

              <div class="image5 image">
                <div class="view-panel">  
                  <img src="<?php echo get_template_directory_uri();?>/image/Jpg/project5.jpg" alt="">
                  <div class="grid-content">
                    <h3 class="sub-head">Scandinarian Living room</h3>
                    <span class="sub-title">Interior</span>
                  </div>
                </div>
                <div class="content">
                  <div class="view-btn">
                    <a href="#" class="btn pro-btn">zoom</a>
                    <a href="#" class="btn pro-btn">view</a>
                  </div>
                </div>               
              </div>


              <div class="image6 image">
                <div class="view-panel">  
                  <img src="<?php echo get_template_directory_uri();?>/image/Jpg/project6.jpg" alt="">
                  <div class="grid-content">
                    <h3 class="sub-head">Scandinarian Living room</h3>
                    <span class="sub-title">Interior</span>
                  </div>
                </div>
                <div class="content">
                  <div class="view-btn">
                    <a href="#" class="btn pro-btn">zoom</a>
                    <a href="#" class="btn pro-btn">view</a>
                  </div>
                </div>                 
              </div>
              
            </div>
          </div>
          <div class="tab-pane" id="infraShow" role="tabpanel" aria-labelledby="showIntfa">
            <div class="gallery-grid"> 
              <div class="image1 image">
                <div class="view-panel">
                  <img src="<?php echo get_template_directory_uri();?>/image/Jpg/project1.jpg" alt="">
                  <div class="grid-content">
                    <h3 class="sub-head">Scandinarian Living room</h3>
                    <span class="sub-title">Interior</span>
                  </div>
                </div>
                <div class="content">
                  <div class="view-btn">
                    <a href="#" class="btn pro-btn">zoom</a>
                    <a href="#" class="btn pro-btn">view</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane" id="interioShow" role="tabpanel" aria-labelledby="showInterio">
            <div class="gallery-grid"> 
              <div class="image1 pg-grid-1 image">
                <div class="view-panel">    
                  <img src="<?php echo get_template_directory_uri();?>/image/Jpg/project2.jpg" alt="">
                  <div class="grid-content">
                    <h3 class="sub-head">Scandinarian Living room</h3>
                    <span class="sub-title">Interior</span>
                  </div>
                </div>
                <div class="content">
                  <div class="view-btn">
                    <a href="#" class="btn pro-btn">zoom</a>
                    <a href="#" class="btn pro-btn">view</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane" id="builtShow" role="tabpanel" aria-labelledby="showBuilt">
            <div class="gallery-grid">
              <div class="build-grid-1 image">
                <div class="view-panel">
                  <img src="<?php echo get_template_directory_uri();?>/image/Jpg/project3.jpg" alt="">
                  <div class="grid-content">
                    <h3 class="sub-head">Scandinarian Living room</h3>
                    <span class="sub-title">Interior</span>
                  </div>
                </div>
                <div class="content">
                  <div class="view-btn">
                    <a href="#" class="btn pro-btn">zoom</a>
                    <a href="#" class="btn pro-btn">view</a>
                  </div>
                </div>
              </div>

              <div class="build-grid-2 image">
                <div class="view-panel">
                  <img src="<?php echo get_template_directory_uri();?>/image/Jpg/project4.jpg" alt="">
                  <div class="grid-content">
                    <h3 class="sub-head">Scandinarian Living room</h3>
                    <span class="sub-title">Interior</span>
                  </div>
                </div>
                <div class="content">
                  <div class="view-btn">
                    <a href="#" class="btn pro-btn">zoom</a>
                    <a href="#" class="btn pro-btn">view</a>
                  </div>
                </div>
              </div>

              <div class="build-grid-3 image">
                <div class="view-panel">
                  <img src="<?php echo get_template_directory_uri();?>/image/Jpg/project5.jpg" alt="">
                  <div class="grid-content">
                    <h3 class="sub-head">Scandinarian Living room</h3>
                    <span class="sub-title">Interior</span>
                  </div>
                </div>
                <div class="content">
                  <div class="view-btn">
                    <a href="#" class="btn pro-btn">zoom</a>
                    <a href="#" class="btn pro-btn">view</a>
                  </div>
                </div>

              </div>

              <div class="build-grid-4 image">
                <div class="view-panel">
                  <img src="<?php echo get_template_directory_uri();?>/image/Jpg/project6.jpg" alt="">
                  <div class="grid-content">
                    <h3 class="sub-head">Scandinarian Living room</h3>
                    <span class="sub-title">Interior</span>
                  </div>
                </div>
                <div class="content">
                  <div class="view-btn">
                    <a href="#" class="btn pro-btn">zoom</a>
                    <a href="#" class="btn pro-btn">view</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>



<?php
    get_footer();
?>