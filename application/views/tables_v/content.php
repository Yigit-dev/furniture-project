<!-- tables Details -->
<?php $settings = get_settings();?>
      <!------------------ tables Section Starts ------------>
      <section class="site-section" id="work-section">
        <!-- Title -->
      <div class="container mt-5">
          <div class="row mb-5 justify-content-center">
            <div class="col-md-8 text-center">
              <h2 class="text-black h1 site-section-heading text-center">
                Sehpalar
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
          <?php foreach($tables_images as $image){ ?>
            <!-- tabless -->
                    <div class="col-md-6 col-lg-4">
                      <img src="<?php echo base_url("panel/uploads/tables_v/$image->img_url");?>" alt="Image" class="img-fluid" />
                    </div>  
            <!-- tabless End --> 
            <?php } ?>
          </div>
        </div>
      </section>
      <!------------ tables Section end here ------------>