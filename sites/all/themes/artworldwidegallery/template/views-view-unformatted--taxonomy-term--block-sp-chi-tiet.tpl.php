<?php
/**
 ** hungd
 ** 1/20/2020 1:37 PM
 ** drupal-7.65
 **/
?>
<?php foreach ($rows as $id => $row): ?>
  <div<?php if ($classes_array[$id]): ?> class="<?php print $classes_array[$id]; ?>"<?php endif; ?>>
    <?php print $row; ?>
  </div>
<?php endforeach; ?>
