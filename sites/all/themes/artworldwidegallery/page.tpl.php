<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable
 */
?>
<header id="top" class="header clearfix">
  <div id="shopify-section-theme-header" class="shopify-section">
    <div data-section-id="theme-header" data-section-type="header-section">
      <section class="main-header">
        <div class="main-header-wrapper">
          <div class="container clearfix">
            <div class="row">
              <div class="main-header-inner">

                <div class="nav-top">
                  <div class="nav-logo">
                    <?php if ($logo): ?>
                      <a href="<?php print $front_page; ?>" title="<?php print t('Art World Wide Gallery'); ?>" rel="" id="logo">
                        <img src="<?php print $logo; ?>" alt="<?php print t('Art World Wide Gallery'); ?>" />
                      </a>
                    <?php endif; ?>
                  </div>
                  <div class="group-search-cart">
                    <div class="nav-search">
                      <div class="phone-number hidden-sm hidden-xs">
                        <?php if($page['top_header']) print render($page['top_header']); ?>
                      </div>
                      <?php if($page['tim_kiem_block']) print render($page['tim_kiem_block']) ?>
                    </div>
                    <?php print render($page['mini_cart']) ?>
                  </div>
                </div>
                <!--                MOBILE NAVIGATION-->
                <div class="mobile-navigation">
                  <button id="showLeftPush" class="visible-xs"><i class="fa fa-bars fa-2x"></i></button>
                  <div class="nav-logo visible-xs">
                    <div>
                      <?php if ($logo): ?>
                        <a href="<?php print $front_page; ?>" title="<?php print t('Art World Wide Gallery'); ?>" rel="Art World Wide Gallery" id="logo">
                          <img src="<?php print $logo; ?>" alt="<?php print t('Art World Wide Gallery'); ?>" />
                        </a>
                      <?php endif; ?>
                    </div>
                  </div>
                  <div class="icon_cart visible-xs">
                    <div class="cart-info-group">
                      <?php print l('<i class="sub-dropdown1 visible-sm visible-md visible-lg"></i>
                        <i class="sub-dropdown visible-sm visible-md visible-lg"></i>
                        <div class="num-items-in-cart">
                          <div class="items-cart-left">
                            <img class="cart_img" src="http://minhhienstore.com/assets/images/bg-cart-2.png" alt="Image Cart" title="Image Cart">
                            <span class="cart_text icon"><span class="number">2</span></span>
                          </div>
                        </div>', 'cart', array(
                        'attribute' => array(
                          'class' => array(
                            'cart',
                            'dropdown-toggle',
                            'dropdown-link'
                          ),
                        ),
                        'html' => TRUE
                      )) ?>
                    </div>
                  </div>
                  <div class="nav-search visible-xs">
                    <?php if($page['tim_kiem_block']) print render($page['tim_kiem_block']) ?>
                  </div>
                  <div class="mobile-navigation-inner">
                    <div class="mobile-navigation-content">
                      <div class="nav-menu visible-xs leftnavi" id="is-mobile-nav-menu">
                        <div class="is-mobile-menu-content">
                          <div class="mobile-content-link">
                            <?php print getMenuMobile(); ?>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="navigation-header">
        <div class="navigation-header-wrapper">
          <div class="container clearfix">
            <div class="row">
              <div class="main-navigation-inner">
                <div class="navigation_area">
                  <div class="navigation_right">
                    <?php print getMainMenu(); ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
</header>
<div class="fix-sticky"></div>
<section class="breadcrumb-header">
  <div class="container">
    <div class="title-breadcrumb">
      <?php if($title != ''): ?>
      <h1 class="title" id="page-title"><?php print $title; ?></h1>
      <?php endif; ?>

      <?php if ($breadcrumb): ?>
        <div id="breadcrumb">
          <?= str_replace(" » ", ' <i class="fa fa-angle-right"></i> ', $breadcrumb); ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>
<div class="page-container" id="PageContainer">
  <main class="main-content" id="MainContent" role="main">
    <div class="container">
      <div class="row">
        <div class="col col-md-<?=($page['sidebar-right'] ? '9' : '12')?>">
          <?php print $messages; ?>
          <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
          <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
          <?php print render($page['content']); ?>
        </div>
        <?php if($page['sidebar-right']): ?>
          <div class="col col-md-3">
            <div class="blog-sidebar">
              <?php print render($page['sidebar-right']) ?>
            </div>
          </div>
        <?php endif; ?>
      </div>
      <?php if($page['full_content']) print render($page['full_content']);  ?>
    </div>
  </main>
</div>
<footer class="footer">
  <div id="shopify-section-theme-footer-bottom" class="shopify-section">
    <section class="footer_linklist_block">
      <div class="footer_linklist_wrapper">
        <div class="container icon-service">
          <div class="end-footer">
            <div class="end-footer-item linklist_item end-footer-col-1">
              <?php if($page['end_footer_col_1']) print render($page['end_footer_col_1']) ?>
            </div>
            <div class="end-footer-item linklist_item end-footer-col-2">
              <?php if($page['end_footer_col_2']) print render($page['end_footer_col_2']) ?>
            </div>
            <div class="end-footer-item linklist_item end-footer-col-3">
              <?php if($page['end_footer_col_3']) print render($page['end_footer_col_3']) ?>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="copy-right">
      <div class="copy-right-wrapper">
        <div class="container">
          <?php if($page['copyright']) print render($page['copyright']);  ?>
        </div>
      </div>
    </section>
  </div>
</footer>
