<h1>Bastard [Drupal Theme]</h1>
<p>Bastard is a lean and mean Drupal 7 starter theme that enables best practices for the lonely front-end developer (hence the name). It steals [what i consider] the best ideas from other themes and bastardizes them into one theme. This bastard is a continuous work in progress.</p>
<p>Bastard was originally bastardized by <a href="http://herchel.com">Mike Herchel</a> in late 2012 / early 2013. </p>
<h2>Bastard contains the following features</h2>
<ul>
  <li>Responsive with 3 modes: smartphone, tablet, and normal.</li>
  <li>Integrated nested responsive navigation via a modified version of <a href="https://github.com/toddmotto/flaunt-js">flaunt-js</a>.</li>
  <li>Sass integration.</li>
  <li>Mobile first approach.</li>
  <li>No grid integration! Make or integrate your own if needed.</li>
  <li>Integration with the <a href="http://fortawesome.github.io/Font-Awesome/">font awesome</a> icon font.</li>
  <li><a href="http://modernizr.com/">Modernizr</a> support.</li>
  <li>Integration with <a href="http://livereload.com">LiveReload</a>, for rapid in-browser development.</li>
  <li>Fully HTML5 compliant.</li>
  <li>No cruft. This theme gets rid of some Drupal default css, and  does not include any gui theme settings. Make your changes directly in code.</li>
</ul>
<h2>How to use this bastard</h2>
<ol>
  <li>Bastard is not meant to be used as a base theme. Instead, rename and edit it directly. Any upgrades will <strong>not</strong> be backwards compatible.</li>
  <li>Edit the directory name to your choosing.</li>
  <li>Edit the <em>bastard.info</em> filename to <em>&lt;name&gt;.info</em>.</li>
  <li>Modify the contents of your <em>&lt;name&gt;.info </em>file to suit its new name.</li>
  <li>Change all function names in the <em>template.php</em> to your new theme name.</li>
  <li>The flaunt.js navigation works via the <em>Main Menu</em> block. Place this block into the <em>Navigation</em> region for things to click. You can change this behavior by editing <em>flaunt-menu.js</em> and <em>flaunt-menu.css</em>.</li>
  <li>Breakpoint configurations are located in <strong>both</strong> the <em>bastard.info </em>and <em>flaunt-menu.css</em> files.</li>
  <li>You can enable the <em>sass_options = {:debug_info =&gt; true}</em> line at the bottom of <em>config.rb</em> to enable sass debugging in Chrome tools. Note that Chrome needs to be configured to support this.</li>
  <li>You can enable Modernizr support by uncommenting the appropriate function within the <em>template.php</em> file.</li>
  <li>To enable development via LiveReload, uncomment the appropriate function within the <em>template.php</em> file, and then install the LiveReload application from <a href="http://livereload.com/">http://livereload.com.</a> Beware of <a href="https://github.com/dz0ny/LiveReload-sublimetext2/issues/31">this</a> bug.</li>
  <li>Delete this <em>README.md</em> file.</li>
  <li>Theme away...</li>
</ol>
<h2>Recommended tools</h2>
<ul>
  <li><a href="http://drupal.org/project/fences">Fences module</a> - enables clean and semantic HTML5 elements around your fields</li>
  <li><a href="http://drupal.org/project/html5_tools">HTML5_tools module</a> - various HTMl5 fixes and tools</li>
  <li><a href="http://drupal.org/project/block_class">Block_class module</a> - makes it easier to follow the <a href="http://smacss.com/">smacss</a> workflow within Drupal</li>
  <li><a href="http://drupal.org/project/cs_adaptive_image">Client-side adaptive image module</a> - enables smaller images to be served to smaller devices</li>
  <li><a href="http://drupal.org/project/flexslider">Flexslider module</a> - responsive and touch enabled slideshow</li>
</ul>
