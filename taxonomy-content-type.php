<?php
/**
 * Single Resource Content Type page
 */
?>

<?php do_action('luca/theme/page-header'); ?>
<?php do_action('luca/theme/dynamic-resources/content-type/content'); ?>

<?php if (!have_posts()) : ?>
  <div class="section">
    <div class="container">
        <div class="alert alert-warning">
          <?php _e('Sorry, we couldn\'t find any matching Resources.', 'bizink'); ?>
        </div>
    </div>
  </div>
<?php endif; ?>
