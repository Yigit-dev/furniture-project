<?php $user = get_active_user(); ?>

<aside id="menubar" class="menubar light">
    <div class="app-user">
        <div class="media">
            <div class="media-body">
                <div class="foldable">
                    <h5 style="text-align: center; font-size: 18px;"><a href="javascript:void(0)" class="username"><?php echo $user->full_name; ?></a></h5>
                    <ul>
                        <li class="dropdown" style="text-align: center;">
                            <a href="javascript:void(0)" class="dropdown-toggle usertitle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <small>İşlemler</small>
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu animated flipInY">
                                <li>
                                    <a class="text-color" href="<?php echo base_url(); ?>">
                                        <span class="m-r-xs"><i class="fa fa-home"></i></span>
                                        <span>Anasayfa</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="text-color" href="<?php echo base_url("users/update_form/$user->id"); ?>">
                                        <span class="m-r-xs"><i class="fa fa-user"></i></span>
                                        <span>Profilim</span>
                                    </a>
                                </li>
                                <li role="separator" class="divider"></li>
                                <li>
                                    <a class="text-color" href="<?php echo base_url("logout"); ?>">
                                        <span class="m-r-xs"><i class="fa fa-power-off"></i></span>
                                        <span>Çıkış</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div><!-- .media-body -->
        </div><!-- .media -->
    </div><!-- .app-user -->

    <div class="menubar-scroll">
        <div class="menubar-scroll-inner">
            <ul class="app-menu">
                <?php if(isAllowedViewModule("dashboard")) { ?>
                    <li>
                        <a href="<?php echo base_url("dashboard"); ?>">
                            <i class="menu-icon zmdi zmdi-view-dashboard zmdi-hc-lg"></i>
                            <span class="menu-text">Dashboard</span>
                        </a>
                    </li>
                <?php } ?>

                <?php if(isAllowedViewModule("settings")) { ?>
                    <li>
                        <a href="<?php echo base_url("settings"); ?>">
                            <i class="menu-icon zmdi zmdi-settings zmdi-hc-lg"></i>
                            <span class="menu-text">Site Ayarları</span>
                        </a>
                    </li>
                <?php } ?>

                <?php if(isAllowedViewModule("featured")) { ?>
                    <li>
                        <a href="<?php echo base_url("featured"); ?>">
                            <i class="menu-icon fa fa-heart"></i>
                            <span class="menu-text">Öne Çıkanlar</span>
                        </a>
                    </li>
                <?php } ?>

                <?php if(isAllowedViewModule("bedroom") && isAllowedViewModule("anchor") && isAllowedViewModule("sofas") && isAllowedViewModule("seatingroom") && isAllowedViewModule("bedbasehead") && isAllowedViewModule("diningroom") && isAllowedViewModule("tvunit") && isAllowedViewModule("youngroom")) { ?>

                    <li class="has-submenu">
                        <a href="javascript:void(0)" class="submenu-toggle">
                            <i class="menu-icon fa fa-institution"></i>
                            <span class="menu-text">Ürünlerimiz</span>
                            <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo base_url("bedroom"); ?>">
                                    <span class="menu-text">Yatak Odaları</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url("diningroom"); ?>">
                                    <span class="menu-text">Yemek Odaları</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url("tvunit"); ?>">
                                    <span class="menu-text">TV Üniteleri</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url("youngroom"); ?>">
                                    <span class="menu-text">Genç Odaları</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url("seatingroom"); ?>">
                                    <span class="menu-text">Oturma Grupları</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url("sofas"); ?>">
                                    <span class="menu-text">Sehpalar</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url("anchor"); ?>">
                                    <span class="menu-text">Kanepeler</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url("bedbasehead"); ?>">
                                    <span class="menu-text">Yatak Baza Başlık</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                <?php } ?>

                <!-- <?php if(isAllowedViewModule("popups")) { ?>

                    <li>
                        <a href="<?php echo base_url("popups"); ?>">
                            <i class="menu-icon zmdi zmdi-lamp zmdi-hc-lg"></i>
                            <span class="menu-text">Popup</span>
                        </a>
                    </li>

                <?php } ?> -->
                <!-- <?php if(isAllowedViewModule("teams")) { ?>

                    <li>
                        <a href="<?php echo base_url("teams"); ?>">
                            <i class="menu-icon fa fa-group "></i>
                            <span class="menu-text">Takımımız</span>
                        </a>
                    </li>

                <?php } ?> -->
                <!-- <?php if(isAllowedViewModule("services")) { ?>

                    <li>
                        <a href="<?php echo base_url("services"); ?>">
                            <i class="menu-icon fa fa-check-circle"></i>
                            <span class="menu-text">Hizmetlerimiz</span>
                        </a>
                    </li>

                <?php } ?> -->






                <!-- <?php if(isAllowedViewModule("brands")) { ?>

                    <li>
                        <a href="<?php echo base_url("brands"); ?>">
                            <i class="menu-icon zmdi zmdi-puzzle-piece zmdi-hc-lg"></i>
                            <span class="menu-text">Markalar</span>
                        </a>
                    </li>

                <?php } ?> -->
                <?php if(isAllowedViewModule("emailsettings")) { ?>

                    <li>
                        <a href="<?php echo base_url("emailsettings"); ?>">
                            <i class="menu-icon zmdi zmdi-email zmdi-hc-lg"></i>
                            <span class="menu-text">E-posta Ayarları</span>
                        </a>
                    </li>

                <?php } ?>


                <?php if(isAllowedViewModule("user_roles")) { ?>

                    <li>
                        <a href="<?php echo base_url("user_roles"); ?>">
                            <i class="menu-icon fa fa-eye"></i>
                            <span class="menu-text">Kullanıcı Rolü</span>
                        </a>
                    </li>

                <?php } ?>


                <?php if(isAllowedViewModule("users")) { ?>

                    <li>
                        <a href="<?php echo base_url("users"); ?>">
                            <i class="menu-icon fa fa-user-secret"></i>
                            <span class="menu-text">Kullanıcılar</span>
                        </a>
                    </li>

                <?php } ?>


            </ul><!-- .app-menu -->
        </div><!-- .menubar-scroll-inner -->
    </div><!-- .menubar-scroll -->
</aside>