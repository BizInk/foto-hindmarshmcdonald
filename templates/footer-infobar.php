<?php if (get_field('footer_infobar_text', 'option')): ?>
  <div class="infobar" <?php if (get_field('footer_infobar_image', 'option')): ?>style="background-image: url('<?= \Luca\Theme\Utils\get_acf_image(get_field('footer_infobar_image', 'option'), 'luca_foto_footer_infobar'); ?>')"<?php endif; ?>>
    <span class="infoBar_text"><?= get_field('footer_infobar_text', 'option'); ?></span>
    <?php if (get_field('footer_infobar_btn_title', 'option') && get_field('footer_infobar_btn_url', 'option')): ?>
      <span class="infoBar_button">
        <a class="button button-opacity" href="<?= get_field('footer_infobar_btn_url', 'option'); ?>"><?= get_field('footer_infobar_btn_title', 'option'); ?></a>
      </span>
    <?php endif; ?>
  </div> <!-- /.infoBar -->
<?php endif; ?>
