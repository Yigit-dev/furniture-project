<!-- featured Details -->
<?php $settings = get_settings();?>
      <!------------------ featured Section Starts ------------>
      <section class="site-section" id="work-section">
        <!-- Title -->
      <div class="container mt-5">
          <div class="row mb-5 justify-content-center">
            <div class="col-md-8 text-center">
              <h2 class="text-black h1 site-section-heading text-center">
                <?php echo $featured->title; ?>
              </h2>
              <p class="lead">
              <?php echo $featured->description; ?>
              </p>
            </div>
          </div>
        </div>
        <div class="container-fluid">
          <div class="row">
          <?php foreach($featured_images as $image){ ?>
            <!-- featureds -->
                    <div class="col-md-6 col-lg-4">
                      <img src="<?php echo base_url("panel/uploads/featured_v/$image->img_url");?>" alt="Image" class="img-fluid" />
                    </div>  
            <!-- featureds End --> 
            <?php } ?>
          </div>
        </div>
      </section>
      <!------------ featured Section end here ------------>