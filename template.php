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


function bastard_preprocess_html(&$variables) {
  drupal_add_js('http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js', 'external');
}

/**
 * Implements hook_form_FORM_ID_alter().
 *
 * Adds a placeholder to the search block.
 */
function bastard_form_search_block_form_alter(&$form, &$form_state, $form_id) {
  $form['search_block_form']['#attributes']['placeholder'] = t('Search');
}


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

/**
* Add level indicator css class to all menu items.
*/

function bastard_menu_link(array $variables) {
  $element = $variables['element'];
  $sub_menu = '';
  
  $element['#attributes']['class'][] = 'menu-item menu-item--level-' . $element['#original_link']['depth'];
  if ($element['#below']) {
    $sub_menu = drupal_render($element['#below']);
  }
  $output = l($element['#title'], $element['#href'], $element['#localized_options']);
  return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
}