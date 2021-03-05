<!-- referances -->
<section>
    <div class="super_container">
        <div class="wrap xl-1 md-1 sm-1 lg-1 xl-center md-center lg-center sm-center">
            <div class="col">
                <div class="project-description">
                    <h1>Referanslarımız</h1>
                    <p>Birlikte çalıştığımız kurum, kuruluş ve vakıfları görebilirsiniz.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="wrap xl-3 lg-3 md-3 sm-1 xl-center lg-center md-center">
        <?php foreach($brands as $brand){ ?>
        <div class="col">
            <div class="referance-box wow fadeInUp" data-wow-delay="0.4s">
                <img src="<?php echo base_url("panel/uploads/brands_v/$brand->img_url");?>" alt="<?php echo $brand->title; ?>" class="image">
                <div class="overlay overlayTop">
                    <div class="text"><?php echo $brand->title;?></div>
                </div>
            </div>
        </div>
        <?php }?>
    </div>
</section>

<!-- referances end -->