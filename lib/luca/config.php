<?php

add_action('after_setup_theme', function() {
  remove_theme_support('luca-resources');
  remove_theme_support('luca-xero-resources');
  remove_theme_support('luca-covid-19-resources');
  add_theme_support('luca-dynamic-resources');
  add_theme_support('luca-disclaimer');
});

/**
 * Registered image sizes
 */
add_image_size('luca_hero', 1920, 500, true);
add_image_size('luca_banner', 1920, 400, true);
add_image_size('luca_featured_image', 1920, 400, true);
add_image_size('luca_logos_logo', 100, 100);
add_image_size('luca_blog_featured', 720, 422, true);
add_image_size('luca_testimonial_logo', 150, 150);
add_image_size('luca_team_featured', 360, 360, true);

// Theme-specific
add_image_size('luca_foto_header_hero', 1920, 800, true);
add_image_size('luca_foto_footer_infobar', 1920, 400, true);

/**
 * Page template configuration
 */
add_action('luca_init_after', function() {

  /**
   * Front page
   */
  luca()->getModule('banners')->registerContentBlock('front-banner0', '', 'front', 0);
  luca()->getModule('banners')->registerContentBlock('front-banner', '', 'front', 1);
  luca()->getModule('columns')->registerContentBlock('front-columns', '', 'front', 2);
  luca()->getModule('banners')->registerContentBlock('front-banner2', '', 'front', 3);
  luca()->getModule('logos')->registerContentBlock('front-logos', '', 'front', 4);
  luca()->getModule('blog')->registerContentBlock('front-blog', '', 'front', 5);
  luca()->getModule('fixed-price-packages')->registerContentBlock('front-packages', '', 'front', 6);
  luca()->getModule('testimonials')->registerContentBlock('front-testimonials', '', 'front', 7);
  luca()->getModule('textarea')->registerContentBlock('front-textarea', '', 'front', 8);

  /**
   * Landing page
   */
  luca()->getModule('textarea')->registerContentBlock('landing-textarea', '', ['post_type' => 'landing-page'], 0);

  /**
   *  Packages page
   */
  luca()->getModule('fixed-price-packages')->registerContentBlock('packages-page', '', 'fixed-price-packages', 1);

  /**
   * Team page
   */
  luca()->getModule('team-members')->registerContentBlock('team-page', '', 'team', 1);

  /**
   * Testimonials page
   */
  luca()->getModule('testimonials')->registerContentBlock('testimonials-page', '', 'testimonials', 1);

  /**
   * Disclaimer
   */
  luca()->getModule('disclaimer')->registerContentBlock('disclaimer', '', ['post_type' => 'not_exists'], 100);
});
