<!DOCTYPE html>
<html lang="<?php print $language->language; ?>">
  <head>
    <title><?php print $head_title; ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="HandheldFriendly" content="True">
	  <meta name="MobileOptimized" content="360">
	  <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <?php print $styles; print $head; ?>
    <?php $tracking_code = theme_get_setting('general_setting_tracking_code', 'zu'); ?>
    <?php print $tracking_code; ?>
    <?php $custom_css = theme_get_setting('custom_css', 'zu'); ?>
    <?php if(!empty($custom_css)): ?>
      <style type="text/css" media="all">
      <?php print $custom_css;?>
      </style>
    <?php endif; ?>
  </head>
  <body class="<?php print $classes;?>" <?php print $attributes;?>>
    <div id="skip-link">
        <a href="#main-content" class="element-invisible element-focusable">
          <?php print t('Skip to main content'); ?>
        </a>
    </div>
    <?php $zu_disable_switch = theme_get_setting('zu_disable_switch','zu');?>
    <?php $background_style = theme_get_setting('background_style','zu'); ?>
    <?php $zu_bg_image = theme_get_setting('zu_bg_image','zu'); ?>
    <?php $zu_direction = theme_get_setting('zu_direction','zu'); ?>
    <?php $zu_layout = theme_get_setting('zu_layout','zu'); ?>
    <?php $zu_style = theme_get_setting('zu_style','zu'); ?>

    <div id="page" <?php print('data-background="'.$background_style.'"');?> style="background-image:url(<?php if($background_style == 'image'){print base_path().path_to_theme().'/img/body/img/'.$zu_bg_image.'.jpg';}else{print base_path().path_to_theme().'/img/body/pat/'.$zu_bg_pattern.'.png';}?>)">

        <div id="riva-preload"></div>

        <div id="riva-site-wrapper" class="page-wrap <?php print('use-'.$zu_direction.' ');print($zu_layout.'-layout ');print($zu_style.'-theme ');?>">

            <?php print $page_top; ?><?php print $page; ?><?php print $page_bottom; ?>

            <div class="move-to-the-top"><i class="glyphicon glyphicon-triangle-top"></i></div>

            <nav id="mobile-menu"></nav>

        </div>
    </div>

    <?php print $scripts; ?>

</body>
</html>
