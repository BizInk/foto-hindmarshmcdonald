<?php namespace Luca\Theme;

// Add fields to Luca's existing field groups
function footer_title_field($field_group) {
  $field_group['fields'] = array_merge($field_group['fields'], require('fields/settings-footer-title.php'));
  return $field_group;
}
add_filter('luca/acf/field_group/group__settings__luca_admin', __NAMESPACE__ . '\footer_title_field');

function admin_logo_white($field_group) {
  $field_group['fields'] = array_merge($field_group['fields'], require('fields/admin-logo-white.php'));
  return $field_group;
}
add_filter('luca/acf/field_group/group__logo__luca_logo', __NAMESPACE__ . '\admin_logo_white');

function footer_newsletter_field($field_group) {
  $field_group['fields'][] = require('fields/settings-footer-newsletter.php');
  return $field_group;
}
add_filter('luca/acf/field_group/group__settings__luca_admin', __NAMESPACE__ . '\footer_newsletter_field');

function footer_infobar_field($field_group) {
  $field_group['fields'] = array_merge($field_group['fields'], require('fields/global-footer-infobar.php'));
  return $field_group;
}
add_filter('luca/acf/field_group/group__website_settings__luca_global', __NAMESPACE__ . '\footer_infobar_field');

function header_hero() {
  acf_add_local_field_group(require('fields/global-header-hero.php'));
}
header_hero();

// Services
require('fields/services.php');

// Logos
require('fields/logos.php');