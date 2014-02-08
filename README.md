# Bastard [Drupal Theme]

Bastard is a lean and mean Drupal 7 starter theme that enables best practices for the lonely front-end developer (hence the name). It steals [what i consider] the best ideas from other themes and bastardizes them into one theme. This bastard is a continuous work in progress.

Bastard was originally bastardized by [Mike Herchel](http://herchel.com) in late 2012 / early 2013. 

## Bastard contains the following features

*   Responsive with 3 modes: smartphone, tablet, and normal.
*   Integrated nested responsive navigation via a modified version of [flaunt-js](https://github.com/toddmotto/flaunt-js).
*   Sass integration.
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
6.  The flaunt.js navigation works via the _Main Menu_ block. Place this block into the _Navigation_ region for things to click. You can change this behavior by editing _flaunt-menu.js_ and _flaunt-menu.css_.
7.  Breakpoint configurations are located in **both** the _bastard.info _and _flaunt-menu.css_ files.
8.  You can enable the _sass_options = {:debug_info =&gt; true}_ line at the bottom of _config.rb_ to enable sass debugging in Chrome tools. Note that Chrome needs to be configured to support this.
9.  You can enable Modernizr support by uncommenting the appropriate function within the _template.php_ file.
10.  To enable development via LiveReload, uncomment the appropriate function within the _template.php_ file, and then install the LiveReload application from [http://livereload.com.](http://livereload.com/) Beware of [this](https://github.com/dz0ny/LiveReload-sublimetext2/issues/31) bug.
11.  Delete this _README.md_ file.
12.  Theme away...

## Recommended tools

*   [Fences module](http://drupal.org/project/fences) - enables clean and semantic HTML5 elements around your fields
*   [HTML5_tools module](http://drupal.org/project/html5_tools) - various HTMl5 fixes and tools
*   [Block_class module](http://drupal.org/project/block_class) - makes it easier to follow the [smacss](http://smacss.com/) workflow within Drupal
*   [Client-side adaptive image module](http://drupal.org/project/cs_adaptive_image) - enables smaller images to be served to smaller devices
*   [Flexslider module](http://drupal.org/project/flexslider) - responsive and touch enabled slideshow