<nav id="<?php print $block_html_id; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>

  <?php print render($title_prefix); ?>
    <?php if ($block->subject): ?>
      <header><h2<?php print $title_attributes; ?>><?php print $block->subject ?></h2></header>
    <?php endif;?>
  <?php print render($title_suffix); ?>

  <?php print $content ?>

</nav>
