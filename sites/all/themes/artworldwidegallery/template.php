<?php
function getTopMenuDienNuocHL($class = ''){
  $mainMenu = menu_tree_all_data('menu-top-menu');
  $str = "";
  foreach ($mainMenu as $item){
    //        dpm($item);

    if($item['link']['hidden'] == 0){
      // Nếu không có menu con
      if (count($item['below']) == 0)
      {
        $str .='<li class="nav-item active">';
        $str .='<span>'.l($item['link']['link_title'].'</span>',
          $item['link']['link_path'],
          array(
            'attributes' => array(
              'title' => $item['link']['link_title']
            ),
            'html' => true
          )
        );
      }else
      {
        $str .='<li>';
        $str .=l($item['link']['link_title'],
          $item['link']['link_path'],
          array(
            'attributes' => array(
              'title' => $item['link']['link_title'],
            ),
            'html' => true
          )
        );
      }

      // nếu có menu con
      if(count($item['below']) > 0){
        $str .='<ul class="child">';
        foreach($item['below'] as $subItem){
          if($subItem['link']['hidden'] == 0)
            $str .="<li>".l($subItem['link']['link_title'],
                $subItem['link']['link_path'],
                array(
                  'attributes' => array(
                    'title' => $item['link']['link_title']
                  )
                )
              )."</li>";
        }
        $str .='</ul>';
      }
      $str .='</li>';
    }

  }

  return "<ul class='{$class}'>{$str}</ul>";
}

function getMenuMobile(){
  $mainMenu = menu_tree_all_data('main-menu');
  $str = "";
  foreach ($mainMenu as $item){
    if($item['link']['hidden'] == 0){
      // Nếu không có menu con
      if (count($item['below']) == 0)
      {
        $str .='<li  class="nav-item">';
        $str .= l($item['link']['link_title'],
            $item['link']['link_path'],
            array(
              'attributes' => array(
                'title' => $item['link']['link_title']
              ),
              'html' => true
            )
          );
      }else
      {
        $str .='<li class="nav-item navigation navigation_mobile">';
        $str .=l(
          '<span>'.$item['link']['link_title'].'</span>',
          $item['link']['link_path'],
          array(
            'attributes' => array(
              'title' => $item['link']['link_title'],
              'class' => array(
                'menu-mobile-link'
              )
            ),
            'html' => true
          )
        );
        $str .= l('<i class="fa fa-angle-down"></i>',
            '#',
            array(
                'attributes' => array(
                    'class' => array(
                        'arrow'
                    )
                ),
                'html' => true
            )
        );
      }

      // nếu có menu con
      if(count($item['below']) > 0){
        $str .='<ul class="menu-mobile-container_1" style="display: none;">';
        foreach($item['below'] as $subItem){
          if($subItem['link']['hidden'] == 0)
            $str .='<li class=" li-sub-mega">'.l($subItem['link']['link_title'],
                $subItem['link']['link_path'],
                array(
                  'attributes' => array(
                    'title' => $item['link']['link_title']
                  ),
                    'html' => true
                )
              )."</li>";
        }
        $str .='</ul>';
      }
      $str .='</li>';
    }

  }

  return "<ul class='nav navbar-nav hoverMenuWrapper'>{$str}</ul>";
}

function getDanhMucSP(){
  $mainMenu = menu_tree_all_data('menu-menu-danh-muc-san-pham');
  $str = "";
  foreach ($mainMenu as $item){
    if($item['link']['hidden'] == 0){
      // Nếu không có menu con
      if (count($item['below']) == 0)
      {
        $str .="<li class='nav-item _icon'>";
        $str .=l($item['link']['link_title'],
          $item['link']['link_path'],
          array(
            'attributes' => array(
              'title' => "<span>{$item['link']['link_title']}</span>"
            ),
            'html' => true
          )
        );
      }else
      {
        $str .='<li class="nav-item dropdown navigation _icon">';
        $str .=l(
          "<span>{$item['link']['link_title']}</span>".' <i class="fa fa-angle-down"></i> <i class="sub-dropdown1  visible-sm visible-md visible-lg"></i> <i class="sub-dropdown visible-sm visible-md visible-lg"></i>',
          $item['link']['link_path'],
          array(
              'attributes' => array(
                'title' => $item['link']['link_title'],
                'class' => array(
                  'dropdown-toggle',
                  'dropdown-link'
              ),
              'fragment' => ''),
              'external' => TRUE,
              'html' => true
            )
        );
      }

      // nếu có menu con
      if(count($item['below']) > 0){
        $str .='<ul class="dropdown-menu">';
        foreach($item['below'] as $subItem){
          if($subItem['link']['hidden'] == 0)
            $str .=' <li class="li-sub-mega">'.l($subItem['link']['link_title'],
                $subItem['link']['link_path'],
                array(
                  'attributes' => array(
                    'title' => $item['link']['link_title'],
                    'tabindex' => -1
                  )
                )
              )."</li>";
        }
        $str .='</ul>';
      }
      $str .='</li>';
    }
  }

  return '<ul class="navigation_links_left dropdown-menu">'.$str.'</ul>';
}

function getMainMenu(){
  $mainMenu = menu_tree_all_data('main-menu');
  $str = "";
  foreach ($mainMenu as $item){
    if($item['link']['hidden'] == 0){
      // Nếu không có menu con
      if (count($item['below']) == 0)
      {
        $str .="<li class='nav-item'>";
        $str .=l($item['link']['link_title'],
          $item['link']['link_path'],
          array(
            'attributes' => array(
              'title' => $item['link']['link_title']
            ),
            'html' => true
          )
        );
      }else
      {
        $str .='<li class="nav-item dropdown navigation">';
        $str .=l($item['link']['link_title'],
          $item['link']['link_path'],
          array(
            'attributes' => array(
              'title' => $item['link']['link_title'].' <i class="fa fa-angle-down"></i><i class="sub-dropdown1  visible-sm visible-md visible-lg"></i><i class="sub-dropdown visible-sm visible-md visible-lg"></i>',
              'class' => array(
                'dropdown-toggle',
                'dropdown-link'
              )
            ),
            'html' => true
          )
        );
      }

      // nếu có menu con
      if(count($item['below']) > 0){
        $str .='<ul class="dropdown-menu">';
        foreach($item['below'] as $subItem){
          if($subItem['link']['hidden'] == 0)
            $str .="<li class='li-sub-mega'>".l($subItem['link']['link_title'],
                $subItem['link']['link_path'],
                array(
                  'attributes' => array(
                    'title' => $item['link']['link_title']
                  )
                )
              )."</li>";
        }
        $str .='</ul>';
      }
      $str .='</li>';
    }
  }
  return "<ul class='navigation_links'>{$str}</ul>";
}

function diennuochalong_form_alter(&$form, &$form_state)
{
  if($form['form_id']['#id'] == 'edit-search-block-form'){
    $form['search_block_form ']['#attributes']['placeholder'] = 'Enter your keyword';
  }
}
