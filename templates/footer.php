<?php get_template_part('templates/footer-infobar'); ?>

<footer class="mainFooter">

  <div class="mainFooter_section mainFooter_section-disclaimer">
    <?php do_action('luca/theme/footer/disclaimer'); ?>
  </div>

  <div class="mainFooter_section mainFooter_section-variableContent">
    <?php do_action('luca/theme/footer/variable_content'); ?>
  </div><!-- /.mainFooter_section -->

  <div class="mainFooter_section mainFooter_section-contentInfo">

    <div class="contentInfo">
      <div class="container">

        <div class="contentInfo_address">
          <?php do_action('luca/theme/footer/contact'); ?>
        </div>

        <div class="contentInfo_social">
          <?php do_action('luca/theme/footer/social'); ?>
        </div>

        <?php if (get_field('footer_title', 'option')): ?>
          <h2 class="contentInfo_title"><?= get_field('footer_title', 'option'); ?></h2>
        <?php endif; ?>

        <?php if (get_field('footer_subtitle', 'option')): ?>
          <div class="contentInfo_subtitle"><?= get_field('footer_subtitle', 'option'); ?></div>
        <?php endif; ?>

        <div class="contentInfo_form">
          <?php do_action('luca/theme/footer/newsletter'); ?>
        </div>

      </div><!-- /.container -->

    </div><!-- /.contentInfo -->

  </div><!-- /.mainFooter_section -->

  <div class="mainFooter_section mainFooter_section-footerBar">
    <div class="footerBar">
      <div class="container">
        <div class="footerBar_col">
          <div class="plainMenu">
            <?php do_action('luca/theme/footer/navigation'); ?>
          </div><!-- /.plainMenu -->
        </div>
        <div class="footerBar_col footerBar_col-right">
          <?php do_action('luca/theme/footer/copyright'); ?>
        </div>
      </div>
    </div><!-- /.footerBar -->
  </div><!-- /.mainFooter_section -->

</footer><!-- /.mainFooter -->


