<?php $phone_contact = theme_get_setting('phone_contact', 'manis'); ?>
<?php $contact_email = theme_get_setting('contact_email', 'manis'); ?>
<?php $social_network = theme_get_setting('social_network', 'manis'); ?>
<?php $header_style = theme_get_setting('header_style', 'manis'); ?>
<?php if($header_style == 'header1'){ ?>
  <header class="site-header" data-version="1" role="banner" id="site-head">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="site-header-left">

            
            <?php if($logo): ?>
              <!-- Site logo start //-->
              <div class="site-logo">
                <a href="<?php print base_path(); ?>" title="<?php print $site_name.' - '.$site_slogan; ?>"><img src="<?php print $logo; ?>" alt="<?php print $site_name.' - '.$site_slogan; ?>"></a>
              </div>
              <!-- Site logo end //-->
            <?php endif; ?>
              

              
            <?php if(!empty($site_slogan)): ?>
              <!-- Site slogan start //-->
              <div class="site-slogan to-slide">
                <p><?php print $site_slogan; ?></p>
              </div>
              <!-- Site slogan end //-->
            <?php endif; ?>
            
          </div>

          <div class="site-header-right">
            <a href="#mobile-menu" class="mobile-menu-btn hidden-lg hidden-md"><i class="glyphicon glyphicon-align-justify"></i></a>
            <?php if(!empty($social_network)): ?>
              <!-- Social icons start //-->
              <?php print $social_network; ?>
              <!-- Social icons end //-->
            <?php endif; ?>
            <div class="clearfix hidden-lg hidden-md"></div>
            <!-- Contacts start //-->
            <ul class="header-contacts to-slide">
              <li><i class="glyphicon glyphicon-envelope"></i> <span class="hidden-xs"><?php print t('Email');?>: </span><?php print $contact_email; ?></li>
              <li style="clear:both;line-height:0;">&nbsp;</li>
              <li><i class="glyphicon glyphicon-phone"></i> <span class="hidden-xs"><?php print t('Phone');?>: </span><?php print $phone_contact; ?></li>
            </ul>
            <!-- Contacts end //-->
            <div class="clearfix"></div>
            <?php if($page['main_menu']): ?>
              <!-- Navigation start //-->
              <?php print render($page['main_menu']); ?>
              <!-- Navigation end //-->
            <?php endif; ?>
            
          </div>
        </div>
      </div>
    </div>
  </header>
<?php }elseif($header_style == 'header2'){ ?>
  <header class="site-header" data-version="2" role="banner" id="site-head">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="site-header-left">
            
            <?php if($logo): ?>
              <!-- Site logo start //-->
              <div class="site-logo">
                <a href="<?php print base_path(); ?>" title="<?php print $site_name.' - '.$site_slogan; ?>"><img src="<?php print $logo; ?>" alt="<?php print $site_name.' - '.$site_slogan; ?>"></a>
              </div>
              <!-- Site logo end //-->
            <?php endif; ?>
            
            
            <?php if($page['main_menu']): ?>
              <!-- Navigation start //-->
              <?php print render($page['main_menu']); ?>
              <!-- Navigation end //-->
            <?php endif; ?>
            
          </div>
          <div class="site-header-right">
            <a href="#mobile-menu" class="mobile-menu-btn hidden-lg hidden-md"><i class="glyphicon glyphicon-align-justify"></i></a>
            <?php if(!empty($social_network)): ?>
              <!-- Social icons start //-->
              <?php print $social_network; ?>
              <!-- Social icons end //-->
            <?php endif; ?>
            <div class="clearfix"></div>
            <!-- Contacts start //-->
            <ul class="header-contacts to-slide">
              <li><i class="glyphicon glyphicon-envelope"></i> <span class="hidden-xs"><?php print t('Email');?>: </span><?php print $contact_email; ?></li>
              <li style="clear:both;line-height:0;">&nbsp;</li>
              <li><i class="glyphicon glyphicon-phone"></i> <span class="hidden-xs"><?php print t('Phone');?>: </span><?php print $phone_contact; ?></li>
            </ul>
            <!-- Contacts end //-->
          </div>
        </div>
      </div>
    </div>
  </header>
<?php }else{ ?>
  <header class="site-header" data-version="3" role="banner" id="site-head">
    <div class="w-100 float-left border-bottom-1 to-slide">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="site-header-left">
              <?php if($logo): ?>
                <!-- Site logo start //-->
                <div class="site-logo">
                  <a href="" title="<?php print $site_name.' - '.$site_slogan; ?>"><img src="<?php print $logo; ?>" alt="<?php print $site_name.' - '.$site_slogan; ?>"></a>
                </div>
                <!-- Site logo end //-->
              <?php endif; ?>
              
              <!-- Contacts start //-->
              <ul class="header-contacts">
                <li><i class="glyphicon glyphicon-envelope"></i> <span class="hidden-xs"><?php print t('Email');?>: </span><?php print $contact_email;?></li>
                <li><i class="glyphicon glyphicon-phone"></i> <span class="hidden-xs"><?php print t('Phone');?>: </span><?php print $phone_contact;?></li>
              </ul>
              <!-- Contacts end //-->
            </div>
            <div class="site-header-right">
              <a href="#mobile-menu" class="mobile-menu-btn hidden-lg hidden-md"><i class="glyphicon glyphicon-align-justify"></i></a>
              
              <?php if($social_network): ?>
                <!-- Social icons start //-->
                <?php print $social_network; ?>
                <!-- Social icons end //-->
              <?php endif; ?>
              
              <div class="clearfix hidden-lg hidden-md"></div>
              
              <?php if($page['search']): ?>
                <!-- Header search start //-->
                <div class="header-search" id="header-search"> 
                  <?php print render($page['search']); ?> 
                </div>
                <!-- Header search end //-->
              <?php endif; ?>
              
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <a href="#mobile-menu" class="mobile-menu-btn second hidden-lg hidden-md"><i class="glyphicon glyphicon-align-justify"></i></a>         
          <?php if($page['main_menu']): ?>
            <!-- Navigation start //-->
            <?php print render($page['main_menu']); ?>
            <!-- Navigation end //-->
          <?php endif; ?>         
        </div>
      </div>
    </div>
  </header>  
<?php } ?>
<div class="clearfix"></div>
<!-- Site header end //-->
