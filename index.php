<?php
/**
 * Blog posts index
 */
?>

<?php do_action('luca/theme/page-header'); ?>

<div class="container">

  <?php do_action('luca/theme/blog/index/content'); ?>

  <?php if (!have_posts()) : ?>
    <div class="alert alert-warning">
      <?php _e('Sorry, we couldn\'t find any matching posts.', 'bizink'); ?>
    </div>
  <?php endif; ?>

</div><!-- /.container -->

