<?php

/**
* Modifies theme to use Google CDN for Jquery using hook_js_alter().
*/

function herchel_js_alter(&$js) {
  if (isset($js['misc/jquery.js'])) {
    $jquery_path = 'http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js';
    $js['misc/jquery.js']['data'] = $jquery_path;
    $js['misc/jquery.js']['version'] = '1.4.4';
    $js['misc/jquery.js']['type'] = 'external';
  }
}

/**
* Removes some default Drupal CSS
*/

function herchel_css_alter(&$css) {
  // Remove defaults.css file.
  unset($css[drupal_get_path('module', 'system') . '/defaults.css']);
  unset($css[drupal_get_path('module', 'system') . '/system.css']);
  unset($css[drupal_get_path('module', 'system') . '/system.menus.css']);
  unset($css[drupal_get_path('module', 'system') . '/system.theme.css']);
  unset($css[drupal_get_path('module', 'user') . '/user.css']);
}