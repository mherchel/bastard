<!DOCTYPE html>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>>

<head>
  <?php print $head; ?>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no" />
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>
  <!--[if lte IE 9]>
  <link rel="stylesheet" href="/<?php print drupal_get_path('theme',$GLOBALS['theme']); ?>/css/ie-lte-9.css" media="all" />
  <![endif]-->

  <!--[if lte IE 8]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <link rel="stylesheet" href="/<?php print drupal_get_path('theme',$GLOBALS['theme']); ?>/css/narrow.css" media="all" />
  <link rel="stylesheet" href="/<?php print drupal_get_path('theme',$GLOBALS['theme']); ?>/css/normal.css" media="all" />
  <link rel="stylesheet" href="/<?php print drupal_get_path('theme',$GLOBALS['theme']); ?>/css/ie-lte-8.css" media="all" />
  <![endif]-->

  <!--[if lte IE 7]>
  <link rel="stylesheet" href="/<?php print drupal_get_path('theme',$GLOBALS['theme']); ?>/css/ie-lte-7.css" media="all" />
  <![endif]-->
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>
