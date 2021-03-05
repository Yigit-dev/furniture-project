<?php $settings = get_settings();?>

      <!------------------ Photography section starts ------------>    
      <section class="site-section" id="featured_products">
        <div class="container">
          <div class="row mb-5 justify-content-center">
            <div class="col-md-8 text-center">
              <h2 class="text-black h1 site-section-heading text-center">
                Öne Çıkan Ürünler
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
          <?php foreach($featureds as $featured){ ?>
          <div class="col-md-6 col-lg-4 featured-product">
              <a href="<?php echo base_url("onecikanurunler/$featured->url")?>" class="media-1">
              <?php
                $image = get_featured_cover_image($featured->id); //boş gelmiyorsa : boş geliyorsa
                $image = ($image) ? base_url("panel/uploads/featured_v/$image") : base_url("assets/media/about_1.jpg");
              ?>
              <img class="img-fluid" src="<?php echo $image;?>" alt="">
                <div class="media-1-content">
                  <h2><?php echo character_limiter(strip_tags($featured->title),27);?></h2>
                  <span class="category"><?php echo character_limiter(strip_tags($featured->description),24);?></span>
                </div>
              </a>
            </div>
          <?php }?>
          </div>
        </div>
        <!-- </div> -->
      </section>
      <!------------ photo section end here ------------>