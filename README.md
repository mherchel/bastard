# Bastard [Drupal Theme]

Bastard is a lean and mean Drupal 7 starter theme that enables best practices for the lonely front-end developer (hence the name). It steals [what i consider] the best ideas from other themes and bastardizes them into one theme. This bastard is a continuous work in progress.

Bastard was originally bastardized by [Mike Herchel](http://herchel.com) in late 2012 and updated in early 2014.

## Bastard contains the following features

*   Fully responsive
*   Integrated nested responsive navigation.
*   Sass integration.
*   IE8 Media Query fallbacks.
*   Mobile first approach.
*   No grid integration! Make or integrate your own if needed.
*   Integration with the [font awesome](http://fortawesome.github.io/Font-Awesome/) icon font.
*   [Modernizr](http://modernizr.com/) support.
*   Integration with [LiveReload](http://livereload.com), for rapid in-browser development.
*   Fully HTML5 compliant.
*   No cruft. This theme gets rid of some Drupal default css, and  does not include any gui theme settings. Make your changes directly in code.

## How to use this bastard

1.  Bastard is not meant to be used as a base theme. Instead, rename and edit it directly. Any upgrades will **not** be backwards compatible.
2.  Edit the directory name to your choosing.
3.  Edit the _bastard.info_ filename to _&lt;name&gt;.info_.
4.  Modify the contents of your _&lt;name&gt;.info _file to suit its new name.
5.  Change all function names in the _template.php_ to your new theme name.
6.  The responsive navigation works via the _Main Menu_ block. Place this block into the _Navigation_ region for things to click. Be sure that all menu items are marked as expanded in the Drupal UI.
7.  You can enable the _sass_options = {:debug_info =&gt; true}_ line at the bottom of _config.rb_ to enable sass debugging in Chrome tools. Note that Chrome needs to be configured to support this.
8.  To enable development via LiveReload, uncomment the appropriate function within the _template.php_ file, and then install the LiveReload application from [http://livereload.com.](http://livereload.com/) Beware of [this](https://github.com/dz0ny/LiveReload-sublimetext2/issues/31) bug.
9.  Delete this _README.md_ file.
10.  Theme away...

## Recommended tools

*   [Fences module](http://drupal.org/project/fences) - enables clean and semantic HTML5 elements around your fields
*   [HTML5_tools module](http://drupal.org/project/html5_tools) - various HTMl5 fixes and tools
*   [Borealis Module](https://drupal.org/project/borealis) - support for responsive images and semantic block templates
*   [Flexslider module](http://drupal.org/project/flexslider) - responsive and touch enabled slideshow
*   [Blockify module](https://drupal.org/project/blockify) - Exposes a number of Drupalisms as blocks