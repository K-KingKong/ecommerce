<?php
/**
 ** hungd
 ** 1/18/2020 10:13 PM
 ** drupal-7.65
 **/
?>
<div class="container icon-service">
  <div class="articles">
    <div class="page-title">
      <h2><?php print t($view->get_title()); ?></h2>
    </div>
    <div class="blog-items-front blog-items carousel">
      <?php foreach ($rows as $id => $row): ?>
        <?php print $row; ?>
      <?php endforeach; ?>
    </div>
  </div>
</div>
