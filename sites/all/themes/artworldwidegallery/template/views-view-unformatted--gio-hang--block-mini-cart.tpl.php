<?php
/**
 ** hungd
 ** 2/25/2020 7:52 AM
 ** views-view-unformatted--gio-hang--block-mini-cart.tpl.php
 ** kickstart
 */
?>
<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 9/8/2018
 * Time: 11:29 AM
 */

$soluong = 0;
$tongtien = 0;
$arr=[];
?>
<?php foreach ($rows as $id => $row): ?>
  <?php
  $arr_row = explode('{{^}}',$row);
//  $arr[]=$arr_row[1];
  $arr_sp = explode('<br />', nl2br(strip_tags($arr_row[0])));
  $soluong += intval(trim($arr_sp[1]));
  $tongtien +=  floatval(str_replace('.', '', str_replace('$', '', trim($arr_sp[2])))) ;
  ?>
<?php endforeach; ?>

<div class="nav-cart " id="cart-target">
  <div class="cart-info-group">
    <a href="cart" class="cart dropdown-toggle dropdown-link" data-toggle="dropdown">
      <i class="sub-dropdown1 visible-sm visible-md visible-lg"></i>
      <i class="sub-dropdown visible-sm visible-md visible-lg"></i>
      <div class="num-items-in-cart">
        <div class="items-cart-left">
          <img class="cart_img" src="http://minhhienstore.com/assets/images/bg-cart.png" alt="Image Cart" title="Image Cart">
          <span class="cart_text icon"><span class="number"><?=$soluong?></span></span>
        </div>
        <div class="items-cart-right">
          <span class="title_cart"><?php print t('My Cart') ?></span>
        </div>
      </div>
    </a>
    <div class="dropdown-menu cart-info" style="display: none;">
      <div class="cart-content">
        <div class="items control-container">
          <?php foreach ($rows as $id => $row): ?>
            <?php
            $arr_row = explode('{{^}}',$row);
            print trim($arr_row[1]);
            ?>
          <?php endforeach; ?>
        </div>
        <div class="subtotal">
          <span><?php print t('Subtotal:') ?></span>
          <span class="cart-total-right money" data-currency-usd="$<?=number_format($tongtien,0, '.', ',')?>" data-currency="USD">$<?=number_format($tongtien,0, '.', ',')?></span>
        </div>
        <div class="action">
          <button class="btn" onclick="window.location='cart'"><?php print t('View Cart') ?><i class="fa fa-caret-right"></i></button>
          <button class="btn float-right" onclick="window.location='checkout'"><?php print t('CHECKOUT') ?><i class="fa fa-caret-right"></i></button>
        </div>
      </div>
    </div>
  </div>
</div>
