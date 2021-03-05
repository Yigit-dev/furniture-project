<?php $settings = get_settings(); ?>
<!--------------- footer starts here --------------->
<footer class="site-footer">
        <div class="container">
          <div class="row">
            <div class="col-md-9">
              <div class="row">
                <div class="col-md-5">
                  <h2 class="footer-heading mb-4">About Us</h2>
                  <p>
                  <?php echo character_limiter(strip_tags($settings->about_us),150);?>
                  </p>
                </div>
                <div class="col-md-3 ml-auto">
                  <h2 class="footer-heading mb-4">Features</h2>
                  <ul class="list-unstyled">
                  <!-- <?php echo base_url("yatakodalari"); ?> -->
                    <li><a href="<?php echo base_url("#hero-section"); ?>">Anasayfa</a></li>
                    <li><a href="<?php echo base_url("#featured_products");?>">Öne Çıkan Ürünler</a></li>
                    <li><a href="<?php echo base_url("#services-section");?>">Ürünler</a></li>
                    <li><a href="<?php echo base_url("#contact_section");?>">İletişim</a></li>
                  </ul>
                </div>
                <div class="col-md-3 mb-4">
                  <h2 class="footer-heading mb-4">Bizi Takip Et</h2>
                  <?php if($settings->facebook){ ?>
                  <a target="_blank" href="<?php echo $settings->facebook;?>" class="pl-0 pr-3">
                    <img src="<?php echo base_url("assets");?>/media/icons/facebook-gray.svg" alt="">
                  </a>
                  <?php } ?>
                  <?php if($settings->instagram){ ?>
                  <a target="_blank" href="<?php echo $settings->instagram;?>" class="pl-3 pr-3">
                    <img src="<?php echo base_url("assets");?>/media/icons/instagram-gray.svg" alt="">
                  </a>    
                  <?php } ?>
                  <?php if($settings->email){ ?>              
                  <a target="_blank" href="mailto:<?php echo $settings->email;?>" class="pl-3 pr-3">
                    <img src="<?php echo base_url("assets");?>/media/icons/mail-gray.svg" alt="">
                  </a>     
                  <?php } ?>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <h2 class="footer-heading mb-4">Telefon</h2>
              <a href="tel:<?php echo $settings->phone_1;?>"><?php echo $settings->phone_1; ?></a>
            </div>
          </div>
          <div class="row pt-5 mt-5 text-center">
            <div class="col-md-12">
              <div class="border-top pt-5">
                <p>
                  &copy;
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  Tüm Hakları Saklıdır | <?php echo $settings->company_name;?> 
                  <i class="icon-heart text-danger" aria-hidden="true"></i>
                  Software & Design |
                  <a href="mailto:contact@yigitcakmak.com" target="_blank">Yiğit Çakmak</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </footer>