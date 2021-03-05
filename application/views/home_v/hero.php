<?php $settings = get_settings();?>
  	<!-- Hero section -->
		<section class="hero-section" id="hero-section">
		<div class="hero-slider owl-carousel owl-theme">
			<div class="hs-item set-bg" data-setbg="<?php echo base_url("assets");?>/media/slider/1.jpg">
				<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-7">
							<h2>Modern Evler. </h2>
						</div>
					</div>
				</div>
			</div>
			<div class="hs-item set-bg" data-setbg="<?php echo base_url("assets");?>/media/slider/2.jpg">
				<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-7">
							<h2>Sade Mutfaklar. </h2>
						</div>
					</div>
				</div>
			</div>
			<div class="hs-item set-bg" data-setbg="<?php echo base_url("assets");?>/media/slider/3.jpg">
				<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-7">
							<h2>Şık Salonlar </h2>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Hero details slider -->
		<div class="hero-nav-slider-warp">
			<div class="container">
				<div class="hero-nav-slider owl-carousel">
					<div class="hns-item">
						<h5>Ürün...</h5>
						<p>Ev....</p>
						<!-- <span>$145</span> -->
					</div>
					<div class="hns-item">
						<h5>6 Kişilik Masa </h5>
						<p>Mutfak</p>
						<!-- <span>$145,000</span> -->
					</div>
					<div class="hns-item">
						<h5>Salon  </h5>
						<p>Köşe Takımları</p>
						<!-- <span>$145,000</span> -->
					</div>
				</div>
			</div>
		</div>
	</section>
      <!-- HERO Social Media -->
      <section class="site-sectiion">
      <div class="container">
        <div class="row text-center mt-3 py-2">
            <?php if($settings->email){ ?>
						<div class="col">
              <a target="_blank" href="mailto:<?php echo $settings->email;?>"><img src="<?php echo base_url("assets");?>/media/icons/mail.svg" width="40" height="40" alt=""></a>
            </div>
						<?php }?>
            <?php if($settings->instagram){ ?>
						<div class="col">
              <a target="_blank" href="<?php echo $settings->instagram;?>"><img src="<?php echo base_url("assets");?>/media/icons/instagram.svg" width="35" height="35" alt=""></a>
            </div>
						<?php } ?>
            <?php if($settings->facebook){ ?>
						<div class="col">
              <a target="_blank" href="<?php echo $settings->facebook;?>"><img src="<?php echo base_url("assets");?>/media/icons/facebook.svg" width="35" height="35" alt=""></a>
            </div>
						<?php }?>
          </div>
        </div>
      </section>
    <!-- Social Media Ends -->  
<!-- Hero section Ends-->
