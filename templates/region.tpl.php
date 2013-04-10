<?php
/**
 * @file
 * Default theme implementation to display a region.
 */
?>

<?php if ($content): ?>
  <section id="<?php print $region; ?>" class="<?php print $classes; ?>">
    <?php print $content; ?>
  </section>
<?php endif; ?>
