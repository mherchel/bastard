<?php

/**
* Modifies theme to use Google CDN for Jquery using hook_js_alter().
*/


function bastard_js_alter(&$js) {
  if (isset($js['misc/jquery.js'])) {
    $jquery_path = 'http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js';
    $js['misc/jquery.js']['data'] = $jquery_path;
    $js['misc/jquery.js']['version'] = '1.4.4';
    $js['misc/jquery.js']['type'] = 'external';
  }
}

/**
* Removes some default Drupal cruft.
*/

function bastard_css_alter(&$css) {
  // Remove defaults.css file.
  unset($css[drupal_get_path('module', 'system') . '/defaults.css']);
  unset($css[drupal_get_path('module', 'system') . '/system.css']);
  unset($css[drupal_get_path('module', 'system') . '/system.menus.css']);
  unset($css[drupal_get_path('module', 'system') . '/system.theme.css']);
  unset($css[drupal_get_path('module', 'user') . '/user.css']);
}

/**
 * Provide a valid, unique HTML ID.
 */

function bastard_preprocess_region(&$variables) {
  $variables['region'] = drupal_html_id($variables['region']);
}

/**
 * Load Modernizr from Clouldfare CDN.
 */

/*
function bastard_preprocess_html(&$variables) {
  drupal_add_js('http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js', 'external');
}
*/

/**
 * Integrate with LiveReload 2. See http://livereload.com. 
 */

/*
function bastard_preprocess_html(&$variables) {
  drupal_add_js((drupal_get_path('theme',$GLOBALS['theme'])).'/js/livereload-snippit.js',
    array('type' => 'file', 'scope' => 'header')
  );
}
*/