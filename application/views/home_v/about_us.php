<?php $settings = get_settings();?>

      <!-- About Section Starts -->
      <div class="site-section" id="about-section">
        <div class="container">
          <div class="row mb-5">
            <div class="col-md-5 ml-auto mb-5 order-md-2" data-aos="fade">
              <div class="col-lg-12 img-banner-w3 text-center">
                <div class="csslider infinity" id="slider1">
                  <input
                    type="radio"
                    name="slides"
                    checked="checked"
                    id="slides_1"
                  />
                  <input type="radio" name="slides" id="slides_2" />
                  <input type="radio" name="slides" id="slides_3" />
                  <ul class="banner_slide_bg">
                    <li>
                      <img src="<?php echo base_url("assets");?>/media/about/review_bg.png" alt="" class="img-fluid" />
                    </li>                          
                    <li>
                      <img src="<?php echo base_url("assets");?>/media/about/about-us.png" alt="" class="img-fluid" />
                    </li>
                  </ul>
                  <div class="navigation">
                    <div>
                      <label for="slides_1"></label>
                      <label for="slides_2"></label>
                    </div>
                  </div>
                </div>
              </div>
            </div>            
            <div class="col-md-6 order-md-1" data-aos="fade">
              <div class="row">
                <div class="col-12">
                  <div class="text-left pb-1">
                    <h2 class="text-black h1 site-section-heading">Hakkımızda</h2>
                  </div>
                </div>
                <div class="col-12 mb-4">
                  <p class="lead">
                  <?php echo character_limiter(strip_tags($settings->about_us),400);?>
                  </p>
                </div>
                <div class="col-md-12 mb-md-5 mb-0 col-lg-6">
                  <div class="unit-4">
                    <div class="unit-4-icon mr-4 mb-3">
                      <img width="50px" height="50px" src="<?php echo base_url("assets");?>/media/icons/paint.svg" alt="">
                    </div>
                    <div>
                      <h3>Web &amp; Mobile Specialties</h3>
                      <p>
                      <?php echo character_limiter(strip_tags($settings->mission),100);?>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 mb-md-5 mb-0 col-lg-6">
                  <div class="unit-4">
                    <div class="unit-4-icon mr-4 mb-3">
                      <img width="50px" height="50px" src="<?php echo base_url("assets");?>/media/icons/sun.svg" alt="">
                    </div>
                    <div>
                      <h3>Intuitive Thinkers</h3>
                      <p>
                      <?php echo character_limiter(strip_tags($settings->mission),100);?>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
<!-- About Section Ends -->