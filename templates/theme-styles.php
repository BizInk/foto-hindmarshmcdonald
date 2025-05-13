<?php
  $navbar_min_height_desktop .= 'em';
  $navbar_logo_height_desktop .= 'em';
  $navbar_min_height_mobile .= 'em';
  $navbar_logo_height_mobile .= 'em';

  // color brightness adjustmen
  function adjustBrightness($hex, $steps) {
    // Steps should be between -255 and 255. Negative = darker, positive = lighter
    $steps = max(-255, min(255, $steps));

    // Normalize into a six character long hex string
    $hex = str_replace('#', '', $hex);
    if (strlen($hex) == 3) {
        $hex = str_repeat(substr($hex,0,1), 2).str_repeat(substr($hex,1,1), 2).str_repeat(substr($hex,2,1), 2);
    }

    // Split into three parts: R, G and B
    $color_parts = str_split($hex, 2);
    $return = '#';

    foreach ($color_parts as $color) {
        $color   = hexdec($color); // Convert to decimal
        $color   = max(0,min(255,$color + $steps)); // Adjust color
        $return .= str_pad(dechex($color), 2, '0', STR_PAD_LEFT); // Make two char hex code
    }
    return $return;
  }
?>

<style>
  a {
    color: <?= $brand_primary_color ?>;
  }
  a:hover,
  a:focus {
    color: <?= $brand_secondary_color ?>;
  }
  a:focus {
    outline: thin dotted <?= $brand_secondary_color ?>;
  }
  .themeColor-brandPrimary {
    color: <?= $brand_primary_color ?>;
  }
  .themeColor-brandSecondary {
    color: <?= $brand_secondary_color ?>;
  }
  /* .topbar */
  .topBar {
    background-color: <?= $brand_secondary_color ?>;
  }
  .topBar_menu li > a:hover,
  .topBar_menu li > a:focus {
    background: <?= $brand_primary_color ?>;
  }
  /* .button */
  .button {
    background-color: <?= $brand_primary_color ?>;
    border: 2px solid <?= $brand_primary_color ?>;
  }
  .button:hover,
  .button:focus {
    background-color: <?= adjustBrightness($brand_primary_color, -50) ?>;
    border-color: <?= adjustBrightness($brand_primary_color, -50) ?>;
  }
  .button-transparent {
    background-color: transparent;
  }
  .button-transparent:hover,
  .button-transparent:focus {
    color: <?= $brand_secondary_color ?>;
    border-color: <?= $brand_secondary_color ?>;
    background-color: transparent;
  }
  .button-parentColor {
    color: currentColor;
    border: 2px solid currentColor;
  }
  .button-parentColor:hover,
  .button-parentColor:focus {
    color: <?= $brand_secondary_color ?>;
    border-color: <?= $brand_secondary_color ?>;
  }
  .button-opacity {
    color: currentColor;
    border: 2px solid currentColor;
    background-color: transparent;
  }
  .button-opacity:hover,
  .button-opacity:focus {
    color: currentColor;
    border-color: currentColor;
    background-color: transparent;
  }

  .gForm .gform_wrapper.gf_browser_ie .gform_footer input.button,
  .gForm .gform_wrapper .gform_footer input.button,
  .iconTile_button {
    background-color: <?= $brand_primary_color ?>;
    border-color: <?= $brand_primary_color ?>;
  }

  .gForm .gform_wrapper.gf_browser_ie .gform_footer input.button:hover,
  .gForm .gform_wrapper.gf_browser_ie .gform_footer input.button:focus,
  .gForm .gform_wrapper .gform_footer input.button:hover,
  .gForm .gform_wrapper .gform_footer input.button:focus,
  .iconTile_button:hover,
  .iconTile_button:focus {
    background-color: <?= adjustBrightness($brand_primary_color, -50) ?>;
    border-color: <?= adjustBrightness($brand_primary_color, -50) ?>;
  }
  /* .catMenu */
  .active > .catMenu_link {
    background: <?= $brand_secondary_color ?>;
  }
  /*.collapseBlock*/
  .collapseBlock_header {
    background-color: <?= $brand_primary_color ?>;
  }
  .collapseBlock_header:hover,
  .collapseBlock_header:focus {
    background-color: <?= $brand_secondary_color ?>;
  }
  .collapseBlock_body a:hover,
  .collapseBlock_body a:focus,
  .collpaseBlock_navLink:hover,
  .collpaseBlock_navLink:focus {
    color: <?= $brand_secondary_color ?>;
  }
  /* .headerBackground */
  .headerBackground {
    background-color: <?= $brand_secondary_color ?>;
  }
  .headerBackground:before {
    background-color: <?= $brand_secondary_color ?>;
  }
  /* .iconTile */
  .iconTile_title {
    color: <?= $brand_primary_color ?>;
  }
  .iconTile_icon {
    fill: <?= $brand_primary_color ?>;
  }
  .iconTile_button {
    background-color: <?= $brand_primary_color ?>;
    border-color: <?= $brand_primary_color ?>;
  }
  .iconTile_button:hover,
  .iconTile_button:focus {
    fill: <?= $brand_secondary_color ?>;
    background-color: <?= adjustBrightness($brand_primary_color, -50) ?>;
    border-color: <?= adjustBrightness($brand_primary_color, -50) ?>;
  }
  .iconTile-link:hover,
  .iconTile-link:focus {
    background: <?= $brand_secondary_color ?>;
  }
  /* .mainMenu */
  .mainMenu a:hover,
  .mainMenu a:focus {
    color: <?= $brand_primary_color ?>;
  }
  .mainMenu .active > a,
  .mainMenu .current-menu-ancestor > a {
    color: <?= $brand_primary_color ?>;
  }
  .mainMenu .dropdown.open {
    background-color: <?= $brand_secondary_color ?>;
  }
  @media (min-width: 1200px) {
    .mainMenu .dropdown.open {
      background-color: transparent;
    }
    .mainMenu .dropdown.open > a {
      color: <?= $brand_primary_color ?>;
    }
    .mainMenu .sub-menu {
      background-color: <?= $brand_secondary_color ?>;
    }
    .mainMenu .sub-menu:before {
      border-color: transparent transparent <?= $brand_secondary_color ?> transparent;
    }
    .navBar-light .mainMenu a:hover,
    .navBar-light .mainMenu a:focus {
      color: <?= $brand_primary_color ?>;
    }
  }
  /* .pageNav */
  .pageNav_links a:hover,
  .pageNav_links a:focus {
    color: <?= $brand_secondary_color ?>;
  }
  /* .pagination */
  .pagination a:hover,
  .pagination a:focus {
    color: <?= $brand_secondary_color ?>;
  }
  .pagination > .current {
    background: <?= $brand_secondary_color ?>;
  }
  /* .panel */
  .panel {
    background-color: <?= $brand_primary_color ?>;
  }
  .panel_header {
    background: <?= $brand_primary_color ?>;
  }
  .panel_button {
    background: <?= $brand_primary_color ?>;
  }
  .panel_button:hover,
  .panel_button:focus {
    background: <?= adjustBrightness($brand_primary_color, -50) ?>;
  }
  /* .plainMenu */
  .plainMenu a:hover,
  .plainMenu a:focus {
    color: <?= $brand_primary_color ?>;
  }
  /* .postMeta */
  .postMeta_category a:hover,
  .postMeta_category a:focus {
    color: <?= $brand_secondary_color ?>;
  }
  .postMeta_info {
    color: <?= $brand_primary_color ?>;
  }
  /* .postPreview */
  .postPreview_title a:hover,
  .postPreview_title a:focus {
    color: <?= $brand_primary_color ?>;
  }
  .postPreview_excerpt a:hover,
  .postPreview_excerpt a:focus {
    color: <?= $brand_primary_color ?>;
  }
  /* .profileCard */
  .profileCard_title a:hover,
  .profileCard_title a:focus {
    color: <?= $brand_primary_color ?>;
  }
  .profileCard_icon:hover,
  .profileCard_icon:focus {
    fill: <?= $brand_secondary_color ?>;
  }
  .profileCard_nav:hover,
  .profileCard_nav:focus {
    color: <?= $brand_secondary_color ?>;
  }
  .profileCard_position {
    color: <?= $brand_primary_color ?>;
  }
  /* .slide */
  .slide {
    background-color: <?= $brand_primary_color ?>;
  }
  .slide:before {
    background-color: <?= $brand_primary_color ?>;
  }
  /* .socialIcons */
  .socialIcons_icon:hover,
  .socialIcons_icon:focus {
    fill: <?= $brand_primary_color ?>;
  }
  /* .navbar */
  .navBar_brand img {
    height: <?= $navbar_logo_height_mobile ?>;
  }
  .navBar_brand,
  .navBar_menuToggle {
    height: <?= $navbar_min_height_mobile ?>;
  }
  @media (min-width: 1200px) {
    .navBar_header,
    .navBar_menu {
      height: <?= $navbar_min_height_desktop ?>;
    }
    .navBar_brand {
      height: auto;
    }
    .navBar_brand img {
      height: <?= $navbar_logo_height_desktop ?>;
    }
  }
  /* .contentInfo */
  .contentInfo {
    background-color: <?= $brand_secondary_color ?>;
  }
  /* .footerBar */
  .footerBar {
    background-color: <?= $brand_secondary_color ?>;
  }
  /* .disclaimer */
  .disclaimer {
    background-color: <?= $brand_secondary_color ?>;
  }
  /* .pane */
  .pane_navLink {
    color: <?= $brand_primary_color ?>;
  }
  .pane_body li a:hover,
  .pane_body li a:focus {
    color: <?= $brand_primary_color ?>;
  }
  /* .blockHeader */
  .blockHeader_title {
    color: <?= $brand_secondary_color ?>;
  }
  /* dropButton */
  .dropButton .dropdown-menu {
    background-color: <?= $brand_secondary_color ?>;
  }
  .dropButton_button:hover,
  .dropButton_button:focus {
    color: <?= $brand_primary_color ?>;
  }
  /* mediaObject */
  .mediaObject_link {
    color: <?= $brand_primary_color ?>;
  }
  .mediaObject_link:hover,
  .mediaObject_link:focus {
    color: <?= $brand_secondary_color ?>;
  }
  /* themeTable */
  .themeTable th {
    background-color: <?= $brand_primary_color ?>;
  }
</style>
