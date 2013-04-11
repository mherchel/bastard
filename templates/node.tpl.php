<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php if (!$page): ?>
    <header>
      <?php print render($title_prefix); ?>
      <h1<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h1>
      <?php print render($title_suffix); ?>
    </header>
  <?php endif; ?>

  <?php if ($display_submitted || $user_picture): ?>
    <footer class="author">
      <?php print $user_picture; ?>
      <?php print $submitted; ?>
    </footer>
  <?php endif; ?>

  <div class="content"<?php print $content_attributes; ?>>
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      print render($content);
    ?>
  </div>

  <?php if ($links = render($content['links'])): ?>
    <footer class="link-wrapper">
      <?php print $links; ?>
    </footer>
  <?php endif; ?>

  <?php print render($content['comments']); ?>

</article>
