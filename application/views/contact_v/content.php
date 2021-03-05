<!--------------- contact section starts here --------------->
<?php $settings = get_settings(); ?>
<a name="contact"></a>
<section class="contact">
    <div class="wrap xl-2 lg-2 md-2 sm-1">
        <div class="col">
            <div class="addres">
                <div class="googlemap">
                    <h1 class="wow fadeInUp" data-wow-delay="0.4s">Harita</h1>
                    <iframe class="map wow fadeInUp" data-wow-delay="0.6s" src="<?php echo $settings->map; ?>" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="addres">
                <div class="mail">
                    <h1 class="wow fadeInUp" data-wow-delay="0.4s">Bize Mesaj Gönder</h1>

                    <form action="<?php echo base_url("mesaj-gonder");?>" name="form" id="form" method="POST">
                        <ul>
                            <li class="wow fadeInUp" data-wow-delay="0.6s">
                                <label for="name">Ad Soyad :</label>
                                <div class="textarea">
                                    <input type="text" name="name" id="name" value="" required>
                                </div>
                            </li>

                            <br>
                            <li class="wow fadeInUp" data-wow-delay="0.6s">
                                <label for="name">Konu :</label>
                                <div class="textarea">
                                    <input type="text" name="subject" id="subject" value="" required>
                                </div>
                            </li>
                            <br>
                            <li class="wow fadeInUp" data-wow-delay="0.7s">
                                <label for="email">E-Posta :</label>
                                <div class="textarea">
                                    <input type="email" name="email" id="email" value="" required>
                                </div>
                            </li>

                            <br>

                            <li class="wow fadeInUp" data-wow-delay="0.8s">
                                <label for="project">Mesaj :</label>
                                <div class="textarea">
                                    <textarea name="message" id="message" rows="6" required width="200px"></textarea>
                                </div>
                            </li>

                            <div class="row">
                                <div class="col-md-2">
                                    <?php echo $captcha["image"];?>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" name="captcha" class="form-control" placeholder="->Doğrulama kodunu yazınız">

                                </div>
                            </div>
                        </ul>
                        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash(); ?>">

                        <button type="submit" name="submit" id="submit" class="submit wow fadeInUp" data-wow-delay="0.9s">Gönder</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--------------- contact section ends here --------------->