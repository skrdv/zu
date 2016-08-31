<!DOCTYPE html>
<html lang="<?php print $language->language; ?>">
  <head>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title><?php print $head_title; ?></title>
    <!-- includes css //-->
    <?php print $styles; print $head; ?>
    <?php

        //Tracking code

        $tracking_code = theme_get_setting('general_setting_tracking_code', 'zu');

        print $tracking_code;

        //Custom css

        $custom_css = theme_get_setting('custom_css', 'zu');

        if(!empty($custom_css)):

        ?>

        <style type="text/css" media="all">

        <?php print $custom_css;?>

        </style>

        <?php

            endif;

        ?>

  </head>

  <body class="<?php print $classes;?>" <?php print $attributes;?>>

    <div id="skip-link">

        <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>

    </div>
    <?php $zu_disable_switch = theme_get_setting('zu_disable_switch','zu');?>
    <?php if($zu_disable_switch == 'on'): ?>
    <!-- Settings start //-->
    <div class="m-settings-btn hidden" id="m-settings-btn-show"><i class="glyphicon glyphicon-cog"></i></div>

    <div class="m-settings" id="m-settings-block">

        <i class="glyphicon glyphicon-remove" id="m-settings-btn-hide"></i>

        <h4><?php print t('layout');?></h4>

        <p>
        <?php $zu_layout = theme_get_setting('zu_layout','zu'); ?>
        <?php if(empty($zu_layout)){
                $zu_layout ='wide';
                }
        ?>
            <a href="" data-layout="wide"
            <?php if($zu_layout=='wide'): ?>
                class="active"
            <?php endif; ?>>
            <?php print t('wide');?>
            </a>
            <a href="" data-layout="boxed"
            <?php if($zu_layout=='boxed'): ?>
                class="active"
            <?php endif; ?>>
            <?php print t('boxed');?>
            </a>

        </p>

        <h4><?php print t('direction'); ?></h4>

        <p>
        <?php $zu_direction = theme_get_setting('zu_direction','zu'); ?>
        <?php if(empty($zu_direction)){
                $zu_direction ='ltr';
            }
        ?>
            <a href="" data-dir="ltr"
            <?php if($zu_direction=='ltr'): ?>
                class="active"
            <?php endif; ?>>
            <?php print t('ltr');?>
            </a>
            <a href="" data-dir="rtl"
            <?php if($zu_direction=='rtl'): ?>
                class="active"
            <?php endif; ?>>
            <?php print t('rtl');?>
            </a>
        </p>
        <h4><?php print t('style'); ?></h4>
        <p>
        <?php $zu_style = theme_get_setting('zu_style','zu'); ?>
        <?php
            if(empty($zu_style)){
                $zu_style = 'light';
            }
        ?>
            <a href="" data-style="light"
            <?php if($zu_style=='light'): ?>
                class="active"
            <?php endif; ?>>
            <?php print t('light'); ?>
            </a>
            <a href="" data-style="dark"
            <?php if($zu_style=='dark'): ?>
                class="active"
            <?php endif; ?>>
            <?php print t('dark'); ?>
            </a>
        </p>
        <?php $zu_skin = theme_get_setting('zu_skin','zu'); ?>
        <?php if(empty($zu_skin)){
            $zu_skin = 'default';
            } ?>
        <h4><?php print t('skins'); ?></h4>
        <p id="zu-skin">
            <a href="" data-skin="default"
                <?php if($zu_skin=='default'): ?>
                    class="active"
                <?php endif; ?>>
                <?php print t('default'); ?>
            </a>
            <a href=""  data-skin="alimbalmarina"
                <?php if($zu_skin=='alimbalmarina'): ?>
                    class="active"
                <?php endif; ?>>
                <?php print t('alimbalmarina'); ?>
            </a>
            <a href="" data-skin="somnambula"
                <?php if($zu_skin=='somnambula'): ?>
                    class="active"
                <?php endif; ?>>
                <?php print t('somnambula'); ?>
            </a>
            <a href="" data-skin="juicy"
                <?php if($zu_skin=='juicy'): ?>
                    class="active"
                <?php endif; ?>>
                <?php print t('juicy'); ?>
            </a>
            <a href="" data-skin="spoonflower_goats"
                <?php if($zu_skin=='spoonflower_goats'): ?>
                    class="active"
                <?php endif; ?>>
                <?php print t('spoonflower goats'); ?>
            </a>
            <a href="" data-skin="nutricap_keratin_vit"
                <?php if($zu_skin=='nutricap_keratin_vit'): ?>
                    class="active"
                <?php endif; ?>>
                <?php print t('nutricap keratin vit'); ?>
            </a>
            <a href="" data-skin="courtly_attire"
                <?php if($zu_skin=='courtly_attire'): ?>
                    class="active"
                <?php endif; ?>>
                <?php print t('courtly attire'); ?>
            </a>
            <a href="" data-skin="mondrian"
                <?php if($zu_skin=='mondrian'): ?>
                    class="active"
                <?php endif; ?>>
                <?php print t('mondrian'); ?>
            </a>
            <a href="" data-skin="sage"
                <?php if($zu_skin=='sage'): ?>
                    class="active"
                <?php endif; ?>>
                <?php print t('sage'); ?>
            </a>
            <a href="" data-skin="walking_by"
                <?php if($zu_skin=='walking_by'): ?>
                    class="active"
                <?php endif; ?>>
                <?php print t('walking by'); ?>
            </a>
        </p>
        <h4><?php print t('bg pattern'); ?></h4>

        <p>
        <?php $zu_bg_pattern = theme_get_setting('zu_bg_pattern','zu'); ?>
            <a href="" data-pattern="swirl_pattern"
            <?php if($zu_bg_pattern =='swirl_pattern'):?>
                class="active"
            <?php endif; ?>>
                <?php print t('1'); ?>
            </a>
            <a href="" data-pattern="sativa"
            <?php if($zu_bg_pattern =='sativa'):?>
                class="active"
            <?php endif; ?>>
            <?php print t('2');?>
            </a>
            <a href="" data-pattern="dimension"
            <?php if($zu_bg_pattern =='dimension'):?>
                class="active"
            <?php endif; ?>>
            <?php print t('3');?>
            </a>
            <a href="" data-pattern="symphony"
            <?php if($zu_bg_pattern =='symphony'):?>
                class="active"
            <?php endif; ?>>
            <?php print t('4');?>
            </a>
            <a href="" data-pattern="black_lozenge"
            <?php if($zu_bg_pattern =='black_lozenge'):?>
                class="active"
            <?php endif; ?>>
            <?php print t('5');?>
            </a>
            <a href="" data-pattern="congruent_outline"
            <?php if($zu_bg_pattern =='congruent_outline'):?>
                class="active"
            <?php endif; ?>>
            <?php print t('6');?>
            </a>
            <a href="" data-pattern="dark_exa"
            <?php if($zu_bg_pattern =='dark_exa'):?>
                class="active"
            <?php endif; ?>>
            <?php print t('7');?>
            </a>
            <a href="" data-pattern="office_pattern"
            <?php if($zu_bg_pattern =='office_pattern'):?>
                class="active"
            <?php endif; ?>>
            <?php print t('8');?>
            </a>
        </p>

        <h4><?php print t('bg image'); ?></h4>

        <p>
        <?php $zu_bg_image = theme_get_setting('zu_bg_image','zu'); ?>
            <a href="" data-bg="1"
            <?php if($zu_bg_image =='1'):?>
                class="active"
            <?php endif; ?>>
            <?php print t('1');?>
            </a>
            <a href="" data-bg="2"
            <?php if($zu_bg_image =='2'):?>
                class="active"
            <?php endif; ?>>
            <?php print t('2');?>
            </a>
            <a href="" data-bg="3"
            <?php if($zu_bg_image =='3'):?>
                class="active"
            <?php endif; ?>>
            <?php print t('3');?>
            </a>
            <a href="" data-bg="4"
            <?php if($zu_bg_image =='4'):?>
                class="active"
            <?php endif; ?>>
            <?php print t('4');?>
            </a>
            <a href="" data-bg="5"
            <?php if($zu_bg_image =='5'):?>
                class="active"
            <?php endif; ?>>
            <?php print t('5');?>
            </a>
            <a href="" data-bg="6"
            <?php if($zu_bg_image =='6'):?>
                class="active"
            <?php endif; ?>>
            <?php print t('6');?>
            </a>
            <a href="" data-bg="7"
            <?php if($zu_bg_image =='7'):?>
                class="active"
            <?php endif; ?>>
            <?php print t('7');?>
            </a>
            <a href="" data-bg="8"
            <?php if($zu_bg_image =='8'):?>
                class="active"
            <?php endif; ?>>
            <?php print t('8');?>
            </a>
        </p>

    </div>
    <!-- Settings end //-->
    <?php endif; ?>
    <?php $background_style = theme_get_setting('background_style','zu'); ?>
    <div id="page" <?php print('data-background="'.$background_style.'"');?> style="background-image:url(<?php if($background_style == 'image'){print base_path().path_to_theme().'/img/body/img/'.$zu_bg_image.'.jpg';}else{print base_path().path_to_theme().'/img/body/pat/'.$zu_bg_pattern.'.png';}?>)">

        <!-- Page preloader start //-->

        <div id="riva-preload"></div>

        <!-- Page preloader end //-->

        <div id="riva-site-wrapper" class="page-wrap <?php print('use-'.$zu_direction.' ');print($zu_layout.'-layout ');print($zu_style.'-theme ');?>">

            <!-- PUT YOUR CONTENT HERE BELOW //-->

            <?php print $page_top; ?><?php print $page; ?><?php print $page_bottom; ?>

        <!-- To the top start //-->

        <div class="move-to-the-top"><i class="glyphicon glyphicon-triangle-top"></i></div>

        <!-- to the top end //-->

        <!-- Mobile menu start //-->

        <nav id="mobile-menu"></nav>

        <!-- Mobile menu end //-->

        </div>
        </div>
    <!-- includes js //-->
       <?php print $scripts; ?>

    </body>
</html>
