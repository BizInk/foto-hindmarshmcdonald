<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>
<!doctype html>
<html <?php language_attributes(); ?>>

  <?php get_template_part('templates/head'); ?>

  <body <?php body_class(); ?>>

    <?php do_action('luca/theme/before'); ?>

    <?php get_template_part('templates/svg-spritesheet'); ?>

    <!--[if IE]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->

    <?php do_action('get_header'); ?>

    <div class="pageWrap">
      <?php do_action('luca/theme/content/before'); ?>

      <main class="main">
        <?php include Wrapper\template_path(); ?>
      </main><!-- /.main -->

      <?php do_action('luca/theme/content/after'); ?>
    </div>

    <?php do_action('get_footer'); ?>
    <?php wp_footer(); ?>

    <?php do_action('luca/theme/after'); ?>

  </body>
</html>
