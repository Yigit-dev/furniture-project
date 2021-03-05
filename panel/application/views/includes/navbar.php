<?php $settings = get_settings(); ?>

<nav id="app-navbar" class="navbar navbar-inverse navbar-fixed-top primary">
    <!-- navbar header -->
    <div class="navbar-header">
        <button type="button" id="menubar-toggle-btn" class="navbar-toggle visible-xs-inline-block navbar-toggle-left hamburger hamburger--collapse js-hamburger">
            <span class="sr-only">Toggle navigation</span>
            <span class="hamburger-box"><span class="hamburger-inner"></span></span>
        </button>

        <button type="button" class="navbar-toggle navbar-toggle-right collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="zmdi zmdi-hc-lg zmdi-more"></span>
        </button>



        <a href="<?php echo base_url(); ?>" class="navbar-brand">
            <span class="brand-icon">

       <!--         <?php if($settings->logo != "default"){ ?>
                    <img
                        width="70"
                        src="<?php echo get_picture("settings_v",$settings->logo, "150x35"); ?>"
                        alt=""
                        class="img-responsive">

                <?php } else {?>

                    <img
                        width="70"
                        src="<?php echo base_url("assets/assets/images/index/infinity-logo.png"); ?>"
                        alt=""
                        class="img-responsive">

                <?php } ?>
-->
                  <img
                          width="100%"
                          src="<?php echo base_url("assets/assets/images/logo/logo.png"); ?>"
                          alt=""
                          class="img-responsive panelbrand">
            </span>
            <span class="brand-name">
                <!--<?php echo $settings->company_name; ?>-->
            </span>
        </a>
    </div><!-- .navbar-header -->

    <div class="navbar-container container-fluid">
        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <ul class="nav navbar-toolbar navbar-toolbar-left navbar-left">
                <li class="hidden-float hidden-menubar-top">
                    <a href="javascript:void(0)" role="button" id="menubar-fold-btn" class="hamburger hamburger--arrowalt is-active js-hamburger">
                        <span class="hamburger-box"><span class="hamburger-inner"></span></span>
                    </a>
                </li>

            </ul>

        </div>
    </div><!-- navbar-container -->
</nav>