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
  /* Remove some default Drupal css */
  $exclude = array(
    'modules/aggregator/aggregator.css' => FALSE,
    'modules/block/block.css' => FALSE,
    'modules/book/book.css' => FALSE,
    'modules/comment/comment.css' => FALSE,
    'modules/dblog/dblog.css' => FALSE,
    'modules/field/theme/field.css' => FALSE,
    'modules/file/file.css' => FALSE,
    'modules/filter/filter.css' => FALSE,
    'modules/forum/forum.css' => FALSE,
    'modules/help/help.css' => FALSE,
    'modules/menu/menu.css' => FALSE,
    'modules/node/node.css' => FALSE,
    'modules/openid/openid.css' => FALSE,
    'modules/poll/poll.css' => FALSE,
    'modules/profile/profile.css' => FALSE,
    'modules/search/search.css' => FALSE,
    'modules/statistics/statistics.css' => FALSE,
    'modules/syslog/syslog.css' => FALSE,
    'modules/system/admin.css' => FALSE,
    'modules/system/maintenance.css' => FALSE,
    'modules/system/system.css' => FALSE,
    'modules/system/system.admin.css' => FALSE,
    'modules/system/system.maintenance.css' => FALSE,
    'modules/system/system.messages.css' => FALSE,
    'modules/system/system.theme.css' => FALSE,
    'modules/system/system.menus.css' => FALSE,
    'modules/taxonomy/taxonomy.css' => FALSE,
    'modules/tracker/tracker.css' => FALSE,
    'modules/update/update.css' => FALSE,
    'modules/user/user.css' => FALSE,
    // Flexslider below
    //'sites/all/libraries/flexslider/flexslider.css' => FALSE,
    drupal_get_path('module', 'views') . '/css/views.css' => FALSE,
  );

  $css = array_diff_key($css, $exclude);

  /* Get rid of some default panel css */
  foreach ($css as $path => $meta) {
    if (strpos($path, 'threecol_33_34_33_stacked') !== FALSE || strpos($path, 'threecol_25_50_25_stacked') !== FALSE) {
      unset($css[$path]);
    }
  }
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
 * Adds a HTML5 placeholder to the search block.
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
* Implements theme_menu_link().
*
* Add level indicator css class to all menu items and menu links.
*
*/

function bastard_menu_link(array $variables) {
  $element = $variables['element'];
  $sub_menu = '';
  $element['#attributes']['class'][] = 'menu-item menu-item--level-' . $element['#original_link']['depth'];
  $menu_link = 'menu-item-link menu-item-link--level-' . $element['#original_link']['depth'];
  if ($element['#below']) {
    $sub_menu = drupal_render($element['#below']);
  }
  $output = l($element['#title'], $element['#href'], array('attributes' => array('class' => array($menu_link))));
  return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
}

/**
* Add page template suggestions based on the aliased path. For instance, if the current
* page has an alias of about/history/early, we'll have templates of:
* page-about-history-early.tpl.php, page-about-history.tpl.php, page-about.tpl.php
* Whichever is found first is the one that will be used.
*/

function bastard_preprocess_page(&$vars) {
  if (module_exists('path')) {
    $alias = drupal_get_path_alias(str_replace('/edit','',$_GET['q']));
    if ($alias != $_GET['q']) {
      $template_filename = 'page';
      foreach (explode('/', $alias) as $path_part) {
        $template_filename = $template_filename . '-' . $path_part;
        $vars['template_files'][] = $template_filename;
      }
    }
  }
}


