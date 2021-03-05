<?php $settings = get_settings();?>
      <!------------------ anchor Section Starts ------------>
      <section class="site-section" id="work-section">
        <!-- Title -->
      <div class="container mt-5">
          <div class="row mb-5 justify-content-center">
            <div class="col-md-8 text-center">
              <h2 class="text-black h1 site-section-heading text-center">
                Kanepeler
              </h2>
              <p class="lead">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Dolores, itaque neque, delectus odio iure explicabo.
              </p>
            </div>
          </div>
        </div>
        <div class="container-fluid">
          <div class="row">
            <?php foreach($anchors as $anchor){ ?>
            <!-- anchors -->
                    <div class="col-md-6 col-lg-4">
                        <!-- o ürüne ait yere gönderdi -->
                      <a href="<?php echo base_url("kanepeler/$anchor->url")?>" class="media-1" data-fancybox="gallery">
                        <!-- o ürünün kapak fotoğrafıydı  -->
                        <?php
                            $image = get_anchor_cover_image($anchor->id); //boş gelmiyorsa : boş geliyorsa
                            $image = ($image) ? base_url("panel/uploads/anchor_v/$image") : base_url("assets/media/about_1.jpg");
                        ?>
                      <img src="<?php echo $image;?>" alt="Image" class="img-fluid" />
                        <div class="media-1-content">
                          <h2><?php echo $anchor->title; ?></h2>
                          <span class="category"><?php echo $anchor->description; ?></span>
                        </div>
                      </a>
                    </div>  
                    <!-- anchors End --> 
            <?php } ?>
          </div>
        </div>
      </section>
      <!------------ anchor Section end here ------------>