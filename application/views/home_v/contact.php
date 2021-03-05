<?php $settings = get_settings(); ?>
<!-- Contact Section Start -->
<section class="site-section bg-light" id="contact-section">
        <div class="container">
          <div class="row mb-5">
            <div class="col-12 text-center">
              <h2 class="text-black h1 site-section-heading">Bize Ulaş</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-md-7 mb-5">
              <form action="<?php echo base_url("mesaj-gonder");?>" name="form" id="form" method="POST" class="p-5 bg-white">
                <h2 class="h4 text-black mb-5">Mesaj Gönder</h2>

                <div class="row form-group">
                  <div class="col-md-6 mb-3 mb-md-0">
                    <label class="text-black" for="fname">Ad</label>
                    <input type="text" id="name" class="form-control" />
                  </div>
                  <div class="col-md-6">
                    <label class="text-black" for="lname">Soyad</label>
                    <input type="text" id="lastname" class="form-control" />
                  </div>
                </div>

                <div class="row form-group">
                  <div class="col-md-12">
                    <label class="text-black" for="email">Email</label>
                    <input type="email" id="email" class="form-control" />
                  </div>
                </div>

                <div class="row form-group">
                  <div class="col-md-12">
                    <label class="text-black" for="subject">Konu</label>
                    <input type="subject" id="subject" class="form-control" />
                  </div>
                </div>

                <div class="row form-group">
                  <div class="col-md-12">
                    <label class="text-black" for="message">Mesaj</label>
                    <textarea
                      name="message"
                      id="message"
                      cols="28"
                      rows="4"
                      class="form-control"
                      placeholder="Mesajınızı buraya yazın..."
                    ></textarea>
                  </div>
                </div>
                <div class="row form-group">
                  <div class="col-md-6 mb-3 mb-md-0">
                    <label for="code"><?php echo $captcha["image"];?></label>                     
                  </div>
                  <div class="col-md-6">
                    <input type="text" name="captcha" class="form-control" placeholder="Doğrulama kodu" required>
                  </div>
                </div>

                <div class="row form-group">
                  <div class="col-md-12">
                  <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash(); ?>">

                    <input        
                      id="submit" 
                      name="submit"             
                      type="submit"
                      value="Send Message"
                      class="btn btn-primary btn-md text-white"
                    />
                  </div>
                </div>
              </form>
            </div>
            <div class="col-md-5">
              <div class="p-5 mb-2 bg-white">
                <img width="25px" height="25px" src="<?php echo base_url("assets");?>/media/icons/pin.svg" alt="">
                <p class="mb-0 font-weight-bold">Adres</p>
                <p class="mb-2">
                  <?php echo $settings->address; ?>
                </p>
                <img width="25px" height="25px" src="<?php echo base_url("assets");?>/media/icons/phone.svg" alt="">
                <p class="mb-0 font-weight-bold">Telefon</p>
                <p class="mb-2"><a style="color: #000;" href="#"><?php echo $settings->phone_1; ?></a></p>
                <img width="25px" height="25px" src="<?php echo base_url("assets");?>/media/icons/mail-blue.svg" alt="">
                <p class="mb-0 font-weight-bold">Email</p>
                <p class="mb-0"><a style="color: #000;" href="#"><?php echo $settings->email; ?></a></p>
                <br>
              </div>
            </div>            
          </div>
        </div>
      </section>
<!-- Contact Section Ends -->