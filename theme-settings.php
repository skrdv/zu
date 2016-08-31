<?php

function zu_form_system_theme_settings_alter(&$form, $form_state) {

  $theme_path = drupal_get_path('theme', 'zu');
  $form['settings'] = array(
      '#type' => 'vertical_tabs',
      '#title' => t('Theme settings'),
      '#weight' => 2,
      '#collapsible' => TRUE,
      '#collapsed' => FALSE,
  );

  $form['settings']['general_setting'] = array(
      '#type' => 'fieldset',
      '#title' => t('General Settings'),
      '#collapsible' => TRUE,
      '#collapsed' => FALSE,
  );

  $form['settings']['general_setting']['general_setting_tracking_code'] = array(
      '#type' => 'textarea',
      '#title' => t('Tracking Code'),
      '#default_value' => theme_get_setting('general_setting_tracking_code', 'zu'),
  );


   $form['settings']['header'] = array(
      '#type' => 'fieldset',
      '#title' => t('Header settings'),
      '#collapsible' => TRUE,
      '#collapsed' => FALSE,
  );

   $form['settings']['header']['header_style'] = array(

      '#title' => t('Header style'),

      '#type' => 'select',

      '#options' => array(
        'header1' => t('Header 1'),
        'header2' => t('Header 2'),
        'header3' => t('Header 3')
        ),
      '#default_value' => theme_get_setting('header_style', 'zu'),
  );

   $form['settings']['header']['phone_contact'] = array(

      '#title' => t('Phone contact'),

      '#type' => 'textfield',

      '#default_value' => theme_get_setting('phone_contact', 'zu'),
  );

   $form['settings']['header']['contact_email'] = array(

      '#title' => t('Contact email'),

      '#type' => 'textfield',

      '#default_value' => theme_get_setting('contact_email', 'zu'),
   );

   $form['settings']['header']['social_network'] = array(

      '#title' => t('Header social network'),

      '#type' => 'textarea',

      '#default_value' => theme_get_setting('social_network', 'zu'),
   );

  $form['settings']['blogs'] = array(
      '#type' => 'fieldset',
      '#title' => t('Blogs'),
      '#collapsible' => TRUE,
      '#collapsed' => FALSE,
  );
    $form['settings']['blogs']['blogs_list'] = array(
      '#type' => 'select',
      '#title' => t('Blogs list style'),
      '#options' => array('style1' => t('Style 1'),'style2' => t('Style 2'), ),
      '#default_value' => theme_get_setting('blogs_style', 'zu'),
  );
  $form['settings']['footer'] = array(
      '#type' => 'fieldset',
      '#title' => t('Footer settings'),
      '#collapsible' => TRUE,
      '#collapsed' => FALSE,
  );

  $form['settings']['footer']['enable_footer_logo'] = array(
      '#type' => 'select',
      '#title' => t('Enable footer logo'),
      '#options' => array('on' => t('ON'),'off' => t('OFF'), ),
      '#default_value' => theme_get_setting('enable_footer_logo', 'zu'),
  );

  $form['settings']['footer']['footer_copyright_message'] = array(
      '#type' => 'textarea',
      '#title' => t('Footer copyright message'),
      '#default_value' => theme_get_setting('footer_copyright_message', 'zu'),
  );


  $form['settings']['custom_css'] = array(
      '#type' => 'fieldset',
      '#title' => t('Custom CSS'),
      '#collapsible' => TRUE,
      '#collapsed' => FALSE,
    );

  $form['settings']['custom_css']['custom_css'] = array(
      '#type' => 'textarea',
      '#title' => t('Custom CSS'),
      '#default_value' => theme_get_setting('custom_css', 'zu'),
      '#description'  => t('<strong>Example:</strong><br/>h1 { font-family: \'Metrophobic\', Arial, serif; font-weight: 400; }')
    );

  $form['settings']['skin'] = array(

        '#type' => 'fieldset',

        '#title' => t('Switcher Style'),

        '#collapsible' => TRUE,

        '#collapsed' => FALSE,

    );


  //Disable Switcher style;

  $form['settings']['skin']['zu_disable_switch'] = array(

      '#title' => t('Switcher style'),

      '#type' => 'select',

      '#options' => array('on' => t('ON'), 'off' => t('OFF')),

      '#default_value' => theme_get_setting('zu_disable_switch', 'zu'),

  );
  $form['settings']['skin']['zu_layout'] = array(

      '#title' => t('Layout'),

      '#type' => 'select',

      '#options' => array('wide' => t('Wide'), 'boxed' => t('Boxed')),

      '#default_value' => theme_get_setting('zu_layout', 'zu'),

  );
  $form['settings']['skin']['zu_direction'] = array(

      '#title' => t('Direction'),

      '#type' => 'select',

      '#options' => array('ltr' => t('LTR'), 'rtl' => t('RTL')),

      '#default_value' => theme_get_setting('zu_direction', 'zu'),

  );
  $form['settings']['skin']['zu_style'] = array(

      '#title' => t('Style'),

      '#type' => 'select',

      '#options' => array('light' => t('LIGHT'), 'dark' => t('DARK')),

      '#default_value' => theme_get_setting('zu_style', 'zu'),

  );
  $form['settings']['skin']['zu_skin'] = array(

      '#title' => t('Skins'),

      '#type' => 'select',

      '#options' => array('default' => t('Default'),
                          'alimbalmarina' => t('Alimbalmarina'),
                          'juicy' => t('Juicy'),
                          'spoonflower_goats' => t('Spoonflower goats'),
                          'nutricap_keratin_vit' => t('Nutricap keratin vit'),
                          'courtly_attire' => t('Courtly attire'),
                          'mondrian' => t('Mondrian'),
                          'sage' => t('Sage'),
                          'walking_by' => t('Walking by'),

                        ),

      '#default_value' => theme_get_setting('zu_skin', 'zu'),

  );
  $form['settings']['skin']['background'] = array(

        '#type' => 'fieldset',

        '#title' => t('Background style'),

        '#collapsible' => TRUE,

        '#collapsed' => FALSE,

    );
  $form['settings']['skin']['background']['background_style'] = array(

      '#title' => t('Use style'),

      '#type' => 'select',

      '#options' => array('pattern' => t('Pattern'),
                          'image' => t('Image'),
                          ),

      '#default_value' => theme_get_setting('background_style', 'zu'),

  );
  $form['settings']['skin']['background']['zu_bg_pattern'] = array(

      '#title' => t('Bg pattern'),

      '#type' => 'select',

      '#options' => array('swirl_pattern' => t('Swirl pattern'),
                          'sativa' => t('Sativa'),
                          'dimension' => t('Dimension'),
                          'symphony' => t('Symphony'),
                          'black_lozenge' => t('Black lozenge'),
                          'congruent_outline' => t('Congruent outline'),
                          'dark_exa' => t('Dark exa'),
                          'office_pattern' => t('Office pattern'),
                        ),

      '#default_value' => theme_get_setting('zu_bg_pattern', 'zu'),

  );
  $form['settings']['skin']['background']['zu_bg_image'] = array(

      '#title' => t('Bg image'),

      '#type' => 'select',

      '#options' => array('1' => t('1'),
                          '2' => t('2'),
                          '3' => t('3'),
                          '4' => t('4'),
                          '5' => t('5'),
                          '6' => t('6'),
                          '7' => t('7'),
                          '8' => t('8'),
                        ),

      '#default_value' => theme_get_setting('zu_bg_image', 'zu'),

  );

}
