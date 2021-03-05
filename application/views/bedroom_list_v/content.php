<?php $settings = get_settings();?>
      <!------------------ bedroom Section Starts ------------>
      <section class="site-section" id="work-section">
        <!-- Title -->
      <div class="container mt-5">
          <div class="row mb-5 justify-content-center">
            <div class="col-md-8 text-center">
              <h2 class="text-black h1 site-section-heading text-center">
                Yatak Odaları
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
            <?php foreach($bedrooms as $bedroom){ ?>
            <!-- bedrooms -->
                    <div class="col-md-6 col-lg-4">
                        <!-- o ürüne ait yere gönderdi -->
                      <a href="<?php echo base_url("yatakodalari/$bedroom->url")?>" class="media-1" data-fancybox="gallery">
                        <!-- o ürünün kapak fotoğrafıydı  -->
                        <?php
                            $image = get_bedroom_cover_image($bedroom->id); //boş gelmiyorsa : boş geliyorsa
                            $image = ($image) ? base_url("panel/uploads/bedroom_v/$image") : base_url("assets/media/about_1.jpg");
                        ?>
                      <img src="<?php echo $image;?>" alt="Image" class="img-fluid" />
                        <div class="media-1-content">
                          <h2><?php echo strip_tags($bedroom->title); ?></h2>
                          <span class="category"><?php echo strip_tags($bedroom->description); ?></span>
                        </div>
                      </a>
                    </div>  
                    <!-- bedrooms End --> 
            <?php } ?>
          </div>
        </div>
      </section>
      <!------------ bedroom Section end here ------------>