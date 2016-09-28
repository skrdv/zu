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
  if ($vars['node']->type == 'work_school' && $vars['view_mode'] == 'page_1') {
        $vars['theme_hook_suggestions'][] = 'node__work_school_page_1';
      } 
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
