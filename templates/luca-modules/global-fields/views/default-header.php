<header
  class="mainHeader<?php if (get_field('header_show_hero')): ?> mainHeader-imageBg<?php endif; ?>"
  <?php if (get_field('header_show_hero')): ?>
    style="background-image: url('<?= Luca\Theme\Utils\get_acf_image(get_field('header_hero_image'), 'luca_foto_header_hero'); ?>');"
  <?php endif; ?>
>

  <div class="mainHeader_nav <?php if (get_field('header_show_hero')): ?> mainHeader_nav-light<?php endif; ?> mainHeader_section-nav">
    <?php do_action($this->hook('header/navbar/content')); ?>
  </div><!-- /.mainHeader_nav -->

  <?php if (get_field('header_show_hero')): ?>
    <div class="mainHeader_hero mainHeader_section-hero">
      <div class="mainHeader_heroInner">

        <div class="container">

          <div class="featured" <?php if (get_field('header_hero_text_color')): ?>style="color: <?= get_field('header_hero_text_color'); ?>"<?php endif; ?>>

            <?php if (get_field('header_hero_title')): ?>
              <h1 class="featured_title<?php if (get_field('header_hero_text_shadow')): ?> u-textShadow<?php endif; ?>">
                <?= get_field('header_hero_title'); ?>
              </h1>
            <?php endif; ?>

            <?php if (get_field('header_hero_content')): ?>
              <div class="featured_body<?php if (get_field('header_hero_text_shadow')): ?> u-textShadow<?php endif; ?>">
                <p>
                  <?= get_field('header_hero_content'); ?>
                </p>
              </div>
            <?php endif; ?>

            <?php if (get_field('header_hero_btn_text') && get_field('header_hero_btn_url')): ?>
              <div class="featured_button">
                <a href="<?= get_field('header_hero_btn_url'); ?>" class="button"><?= get_field('header_hero_btn_text'); ?></a>
              </div>
            <?php endif; ?>

          </div><!-- /.featured -->

        </div>

      </div><!-- /.mainHeader_heroInner -->

    </div><!-- /.mainHeader_hero -->
  <?php endif; ?>

</header><!-- /.mainHeader -->
