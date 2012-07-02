<?php
/**
 * @file views-view-unformatted.tpl.php
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<?php foreach ($rows as $id => $row): ?>
  <div class="<?php print $classes_array[$id]; ?><?php if (drupal_is_front_page()): ?> grid-4<?php endif; ?>">
  	<div class="widget">
    	<?php print $row; ?>
  	</div>
  </div>
<?php endforeach; ?>
