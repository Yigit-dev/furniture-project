<?php $settings = get_settings();?>
<div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-2">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>
       <!-- NAVIGATION -->
       <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light py-1 js-sticky-header site-navbar-target" role="navigation">
        <div class="container">
          <div class="logo-brand">
            <a class="navbar-brand-logo" href="#hero-section">    
              <img src="<?php echo base_url("assets");?>/media/logo.svg" width="40" height="40" alt="">
            </a>
          </div>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item px-3">
              <a class="nav-link" href="#hero-section">Anasayfa</a>
            </li>
            <li class="nav-item px-3">
              <a class="nav-link" href="#about-section">Hakkımızda</a>
            </li>
            <li class="nav-item px-3">
              <a class="nav-link" href="#featured_products">Öne Çıkan Ürünler</a>
            </li>
            <li class="nav-item px-3 dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Ürünlerimiz
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="<?php echo base_url("yatakodalari"); ?>">Yatak Odası</a>
                <a class="dropdown-item" href="<?php echo base_url("yemekodalari"); ?>">Yemek Odaları</a>
                <a class="dropdown-item" href="<?php echo base_url("tvuniteleri"); ?>">TV Üniteleri</a>
                <a class="dropdown-item" href="<?php echo base_url("gencodalari"); ?>">Genç Odaları</a>
                <a class="dropdown-item" href="<?php echo base_url("oturmagruplari"); ?>">Oturma Grupları</a>
                <a class="dropdown-item" href="<?php echo base_url("yatakbazabaslik"); ?>">Yatak, Baza ve Başlıklar</a>
                <a class="dropdown-item" href="<?php echo base_url("sehpalar"); ?>">Sehpalar</a>
                <a class="dropdown-item" href="<?php echo base_url("kanepeler"); ?>">Kanepeler</a>
              </div>
            </li>  

          </ul>
          <ul class="navbar-nav ml-auto">
          </ul>
          <div class="navbar-brand lang" href="#">    
            <ul class="navbar-nav ">
              <li class="nav-item px-0">
                <a href="#" onclick="doGTranslate('tr|en');return false;" title="English" class="gflag nturl" style="background-position:-0px -0px;"></a><a href="#" onclick="doGTranslate('tr|fr');return false;" title="French" class="gflag nturl" style="background-position:-200px -100px;"></a><a href="#" onclick="doGTranslate('tr|de');return false;" title="German" class="gflag nturl" style="background-position:-300px -100px;"></a><a href="#" onclick="doGTranslate('tr|it');return false;" title="Italian" class="gflag nturl" style="background-position:-600px -100px;"></a><a href="#" onclick="doGTranslate('tr|pt');return false;" title="Portuguese" class="gflag nturl" style="background-position:-300px -200px;"></a><a href="#" onclick="doGTranslate('tr|ru');return false;" title="Russian" class="gflag nturl" style="background-position:-500px -200px;"></a><a href="#" onclick="doGTranslate('tr|es');return false;" title="Spanish" class="gflag nturl" style="background-position:-600px -200px;"></a>                
                <select onchange="doGTranslate(this);">
                  <option value="">Language</option>
                  <option value="tr|en">English</option><option value="tr|de">German</option><option value="tr|ru">Russian</option><option value="tr|tr">Turkish</option>
                </select>
                <div id="google_translate_element2"></div>
              </li>            
            </ul>
          </div>
        </div>
      </div>
      </nav>
      <!-- End Navigation -->
