<!-- tvunit Details -->
<?php $settings = get_settings();?>
      <!------------------ tvunit Section Starts ------------>
      <section class="site-section" id="work-section">
        <!-- Title -->
      <div class="container mt-5">
          <div class="row mb-5 justify-content-center">
            <div class="col-md-8 text-center">
              <h2 class="text-black h1 site-section-heading text-center">
                Tv Üniteleri
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
          <?php foreach($tvunit_images as $image){ ?>
            <!-- tvunits -->
                    <div class="col-md-6 col-lg-4">
                      <img src="<?php echo base_url("panel/uploads/tvunit_v/$image->img_url");?>" alt="Image" class="img-fluid" />
                    </div>  
            <!-- tvunits End --> 
            <?php } ?>
          </div>
        </div>
      </section>
      <!------------ tvunit Section end here ------------>