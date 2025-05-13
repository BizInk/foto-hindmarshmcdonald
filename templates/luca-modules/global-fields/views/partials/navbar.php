<div class="navBar<?php if (get_field('header_show_hero')): ?> navBar-light<?php endif; ?>">
  <div class="container">
    <div class="navBar_header navBar_section-header">
      <a href="<?= esc_url(home_url('/')); ?>" class="navBar_brand<?php if (is_page_template('template-front.php')): ?> front<?php endif; ?><?php if (get_field('field__logo_white__luca_logo', 'option')): ?> white<?php endif; ?>">
       
          <img class="navBar_logo" src="<?= $data['logo']['url']; ?>" alt="<?= $data['logo']['alt']; ?>">
          
        <?php if (get_field('field__logo_white__luca_logo', 'option')): ?>
          <img class="navBar_logo navBar_logo-white" src="<?= get_field('field__logo_white__luca_logo', 'option')['url']; ?>" alt="<?= $data['logo']['alt']; ?>">
        <?php endif; ?>
        
        
      </a>
      
      <div class="navBar_menuToggle">

        <a href="#mainNavBar" class="burger burger-animated" data-toggle="collapse" aria-expanded="false" aria-controls="mainNavBar">
          <span class="sr-only">Toggle navigation</span>
          <span class="burger_bar"></span>
          <span class="burger_bar"></span>
          <span class="burger_bar"></span>
        </a>

        <?php if (get_field('contact_phone', 'option')): ?>
          <a href="tel:<?= get_field('contact_phone', 'option'); ?>" class="navBar_phone">
            <div class="navBar_phoneIcon">
              <div class="u-scalingSvg" style="padding-bottom: 88%;">
                <svg class="u-scalingSvg_shape">
                  <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-telephone"></use>
                </svg>
              </div>
            </div><!-- /.topBar_icon -->
            <?= get_field('contact_phone', 'option'); ?>
          </a>
        <?php endif; ?>

      </div>
    </div><!-- /.navBar_header -->

    <?php if ($data['menus']['header']): ?>

      <div id="mainNavBar" class="navBar_menu collapse">
        
        <div class="navBar_socialContainer">
        
          <?php if ($data['menus']['client_area']): ?>
          <div class="navBar_clientArea navBar_section-clientArea">
            <div class="dropButton">
              <div class="dropdown">
                <button class="dropButton_button dropdown-toggle" type="button" data-toggle="dropdown">
                  <?= $data['menus']['client_area_title']; ?>
                  <div class="dropButton_chevron">
                    <div class="u-scalingSvg">
                      <svg class="u-scalingSvg_shape">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-chevron-down"></use>
                      </svg>
                    </div>
                  </div><!-- /.dropButton_chevron -->
                </button>
                <?= $data['menus']['client_area']; ?>
              </div><!-- /.dropdown -->
            </div><!-- /.dropButton -->
          </div><!-- /.topBar_button-->
          <?php endif; ?>

          <?php if (get_field('contact_phone', 'option')): ?>
            <a href="tel:<?= get_field('contact_phone', 'option'); ?>" class="navBar_phone">
              <div class="navBar_phoneIcon">
                <div class="u-scalingSvg" style="padding-bottom: 88%;">
                  <svg class="u-scalingSvg_shape">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-telephone"></use>
                  </svg>
                </div>
              </div><!-- /.topBar_icon -->
              <?= get_field('contact_phone', 'option'); ?>
            </a>
          <?php endif; ?>
         
          <?php do_action($this->hook('header/navbar/social')); ?>
          
        </div><!-- /.navBar_socialContainer -->

        <div class="navBar_menuContainer navBar_section-mainMenu">
          <div class="mainMenu">
            <?= $data['menus']['header']; ?>
          </div>
        </div>

      </div><!-- /.navBar_menu -->

    <?php endif; ?>
  </div><!-- /.container -->

</div><!-- /.navBar -->
