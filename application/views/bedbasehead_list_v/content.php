<?php $settings = get_settings();?>
      <!------------------ bedbasehead Section Starts ------------>
      <section class="site-section" id="work-section">
        <!-- Title -->
      <div class="container mt-5">
          <div class="row mb-5 justify-content-center">
            <div class="col-md-8 text-center">
              <h2 class="text-black h1 site-section-heading text-center">
                Yatak Baza Başlık
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
            <?php foreach($bedbaseheads as $bedbasehead){ ?>
            <!-- bedbaseheads -->
                    <div class="col-md-6 col-lg-4">
                        <!-- o ürüne ait yere gönderdi -->
                      <a href="<?php echo base_url("yatakbazabaslik/$bedbasehead->url")?>" class="media-1" data-fancybox="gallery">
                        <!-- o ürünün kapak fotoğrafıydı  -->
                        <?php
                            $image = get_bedbasehead_cover_image($bedbasehead->id); //boş gelmiyorsa : boş geliyorsa
                            $image = ($image) ? base_url("panel/uploads/bedbasehead_v/$image") : base_url("assets/media/about_1.jpg");
                        ?>
                      <img src="<?php echo $image;?>" alt="Image" class="img-fluid" />
                        <div class="media-1-content">
                          <h2><?php echo $bedbasehead->title; ?></h2>
                          <span class="category"><?php echo $bedbasehead->description; ?></span>
                        </div>
                      </a>
                    </div>  
                    <!-- bedbaseheads End --> 
            <?php } ?>
          </div>
        </div>
      </section>
      <!------------ bedbasehead Section end here ------------>