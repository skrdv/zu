<?php


function zu_preprocess_html(&$variables) {
  drupal_add_css('https://fonts.googleapis.com/css?family=PT+Sans:400,700&subset=cyrillic', array('type' => 'external'));
}

function zu_preprocess_page(&$vars) {

  if (isset($vars['node'])) {
    $vars['theme_hook_suggestions'][] = 'page__'. $vars['node']->type;
  }

  //404 page
  $status = drupal_get_http_header("status");
  if($status == "404 Not Found") {
    $vars['theme_hook_suggestions'][] = 'page__404';
  }

  //Taxonomy page
  if (arg(0) == 'taxonomy') {
      $vars['theme_hook_suggestions'][] = 'page__taxonomy';
    }

    //View template
    if(views_get_page_view())   {
    $vars['theme_hook_suggestions'][] = 'page__view';
    }

    drupal_add_js('jQuery.extend(Drupal.settings, { "pathToTheme": "' .base_path().path_to_theme() . '" });', 'inline');

}

function zu_preprocess_node(&$vars) {
  unset($vars['content']['links']['statistics']['#links']['statistics_counter']['title']);

    // Add css class "node--NODETYPE--VIEWMODE" to nodes
    $vars['classes_array'][] = 'node--' . $vars['type'] . '--' . $vars['view_mode'];

    // Make "node--NODETYPE--VIEWMODE.tpl.php" templates available for nodes
    $vars['theme_hook_suggestions'][] = 'node__' . $vars['type'] . '__' . $vars['view_mode'];
}


function zu_form_alter(&$form, &$form_state, $form_id) {

    if ($form_id == 'user-login') {

        $form['user-login']['#attributes']['id'] = array("mod-search-searchword");

    }

  if ($form_id == 'search_block_form') {
    $form['search_block_form']['#title_display'] = 'invisible'; // Toggle label visibilty
    $form['search_block_form']['#default_value'] = t(''); // Set a default value for the textfield
    $form['search_block_form']['#attributes']['id'] = array("mod-search-searchword");
    //disabled submit button
    //unset($form['actions']['submit']);
    unset($form['search_block_form']['#title']);
  }
  if($form_id == 'contact_site_form'){
    $form['mail']['#attributes']['class'] = array("input-contact-form");
    $form['name']['#attributes']['class'] = array("input-contact-form");
    $form['subject']['#attributes']['class'] = array("input-contact-form");
    $form['message']['#attributes']['class'] = array("message-contact-form");
    $form['actions']['submit']['#attributes']['class'] = array('btn btn-success contact-form-button');
  }
  if ($form_id == 'comment_form') {
    $form['comment_filter']['format'] = array(); // nuke wysiwyg from comments
  }

}

function zu_preprocess_views_view_table(&$vars) 
{
    $vars['classes_array'][] = 'table table-striped table-hover';
}

/*
function zu_breadcrumb($variables) {
  $crumbs ='';
  $breadcrumb = $variables['breadcrumb'];
  if (!empty($breadcrumb)) {
    $crumbs .= '';
    foreach($breadcrumb as $value) {
      $crumbs .= $value.'&nbsp;&nbsp;<i class="fa fa-caret-right"></i>&nbsp;&nbsp;';
    }
    $crumbs .= drupal_get_title();
    return $crumbs;
  }else{
    return NULL;
  }
}
*/

function zu_preprocess_file_entity(&$variables) {
  if ($variables['type'] == 'image') {

    // Alt Text
    if (!empty($variables['field_media_alt_text'])) {
      $variables['content']['file']['#alt'] = $variables['field_media_alt_text']['und'][0]['safe_value'];
    }

    // Title
    if (!empty($variables['field_media_title'])) {
      $variables['content']['file']['#title'] = $variables['field_media_title']['und'][0]['safe_value'];
    }
  }
}


function zu_menu_tree__main_menu(array $variables) {
    // $variables['tree'] = preg_replace('/class="[^"]*"/i', '', $variables['tree']);
  return '<ul class="main-nav">' . $variables['tree'] . '</ul>';
}

function zu_menu_tree__menu_front(array $variables) {
    return '<ul class="main-nav nav-front">' . $variables['tree'] . '</ul>';
}

function zu_menu_tree__menu_school(array $variables) {
  return '<ul class="main-nav nav-school">' . $variables['tree'] . '</ul>';
}

function zu_menu_tree__menu_students(array $variables) {
  return '<ul class="main-nav nav-students">' . $variables['tree'] . '</ul>';
}

function zu_menu_tree__user_menu(array $variables) {
    return '<ul class="main-nav nav-user">' . $variables['tree'] . '</ul>';
}

function zu_menu_tree__menu_moderation(array $variables) {
    return '<ul class="main-nav nav-moderation">' . $variables['tree'] . '</ul>';
}

function zu_menu_tree__menu_footer_menu($variables) {
  $str  = '';
  $str .= '<ul class="footer-menu">';
  $str .= $variables['tree'];
  $str .= '</ul>';
  return $str;
}

function zu_menu_tree__menu_menu_404_page($variables) {
  $str  = '';
  $str .= '<div class="col-lg-12"><ul class="page-404-menu">';
  $str .= $variables['tree'];
  $str .= '</ul></div>';
  return $str;
}

function zu_pager($variables) {
    $tags = $variables['tags'];
    $element = $variables['element'];
    $parameters = $variables['parameters'];
    $quantity = $variables['quantity'];
    global $pager_page_array, $pager_total, $theme;

    // Add js code for Ctrl+arrows navigation
    // drupal_add_js(drupal_get_path('theme', $theme) . '/js/paginator.js');

    // Calculate various markers within this pager piece:
    // Middle is used to "center" pages around the current page.
    $pager_middle = ceil($quantity / 2);
    // current is the page we are currently paged to
    $pager_current = $pager_page_array[$element] + 1;
    // first is the first page listed by this pager piece (re quantity)
    $pager_first = $pager_current - $pager_middle + 1;
    // last is the last page listed by this pager piece (re quantity)
    $pager_last = $pager_current + $quantity - $pager_middle;
    // max is the maximum page number
    $pager_max = $pager_total[$element];
    // End of marker calculations.

    // Prepare for generation loop.
    $i = $pager_first;
    if ($pager_last > $pager_max) {
        // Adjust "center" if at end of query.
        $i = $i + ($pager_max - $pager_last);
        $pager_last = $pager_max;
    }
    if ($i <= 0) {
        // Adjust "center" if at start of query.
        $pager_last = $pager_last + (1 - $i);
        $i = 1;
    }
    // End of generation loop preparation.

    $li_previous = theme('pager_previous', array('text' => (isset($tags[1]) ? '←' : NULL), 'element' => $element, 'interval' => 1, 'parameters' => $parameters));
    $li_next = theme('pager_next', array('text' => (isset($tags[3]) ? '→' : NULL), 'element' => $element, 'interval' => 1, 'parameters' => $parameters));

    $li_first = theme('pager_first', array('text' => 1, 'element' => $element, 'parameters' => $parameters));
    $li_last = theme('pager_last', array('text' => $pager_max, 'element' => $element, 'parameters' => $parameters));

    // First-page link display condition
    $show_first = ($i > 1) ? true : false;

    if ($pager_total[$element] > 1) {
        if ($li_previous) {
            $items[] = array(
                'class' => array('pager-previous'),
                'data' => $li_previous,
            );
        }

        if ($show_first && $li_first) {
            $items[] = array(
                'class' => array('pager-first'),
                'data' => $li_first,
            );
        }

        // When there is more than one page, create the pager list.
        if ($i != $pager_max) {
            if ($i > 2) {
                $items[] = array(
                    'class' => array('pager-ellipsis'),
                    'data' => '…',
                );
            }
            // Now generate the actual pager piece.
            for (; $i <= $pager_last && $i <= $pager_max; $i++) {
                if ($i < $pager_current) {
                    $items[] = array(
                        'class' => array('pager-item'),
                        'data' => theme('pager_previous', array('text' => $i, 'element' => $element, 'interval' => ($pager_current - $i), 'parameters' => $parameters)),
                    );
                }
                if ($i == $pager_current) {
                    $items[] = array(
                        'class' => array('pager-current'),
                        'data' => '<span>' . $i . '</span>',
                    );
                }
                if ($i > $pager_current) {
                    $items[] = array(
                        'class' => array('pager-item'),
                        'data' => theme('pager_next', array('text' => $i, 'element' => $element, 'interval' => ($i - $pager_current), 'parameters' => $parameters)),
                    );
                }
            }
            if ($i < $pager_max) {
                $items[] = array(
                    'class' => array('pager-ellipsis'),
                    'data' => '…',
                );
            }
        }

        // Last-page link display condition
        $show_last = ($pager_max > ($i-1)) ? true : false;

        // End generation.
        if ($show_last && $li_last) {
            $items[] = array(
                'class' => 'pager-last',
                'data' => $li_last,
            );
        }

        if ($li_next) {
            $items[] = array(
                'class' => array('pager-next'),
                'data' => $li_next,
            );
        }
        return '<h2 class="element-invisible">' . t('Pages') . '</h2>' . theme('item_list', array(
            'items' => $items,
            'attributes' => array('class' => array('pager')),
        ));
    }
}

function zu_views_pre_render(&$view){
    $used_nids = array();
    $new_view_result = array();
    if ($view->name == 'works_school'){
        if ($view->current_display == 'works_school'){
            foreach ($view->result as $row){
                if (!in_array($row->nid, $used_nids)){
                    $new_view_result[] = $row;
                    $used_nids[] = $row->nid;
                }
            }
            $view->result = $new_view_result;
        }
    } else if ($view->name == 'works_students'){
        if ($view->current_display == 'works_students'){
            foreach ($view->result as $row){
                if (!in_array($row->nid, $used_nids)){
                    $new_view_result[] = $row;
                    $used_nids[] = $row->nid;
                }
            }
            $view->result = $new_view_result;
        }
    }
}