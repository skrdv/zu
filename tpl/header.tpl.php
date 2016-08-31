<?php $phone_contact = theme_get_setting('phone_contact', 'zu'); ?>
<?php $contact_email = theme_get_setting('contact_email', 'zu'); ?>
<?php $social_network = theme_get_setting('social_network', 'zu'); ?>
<?php $header_style = theme_get_setting('header_style', 'zu'); ?>

<header class="site-header" data-version="3" role="banner">

  <div id="header" class="w-100 to-slide">
    <div class="container">
      <div class="row">

        <div class="col-lg-6 header-left">
          <div class="row">

            <?php if($logo): ?>
              <div class="col-lg-4 site-logo">
                <a href="/" title="<?php print $site_name.' - '.$site_slogan; ?>"><img src="<?php print $logo; ?>" alt="<?php print $site_name.' - '.$site_slogan; ?>"></a>
              </div>
            <?php endif; ?>

            <div class="col-lg-7 header-info">
              <ul class="header-contacts">
                <li><i class="glyphicon glyphicon-phone"></i> <?php print $phone_contact;?></li>
                <li><i class="glyphicon glyphicon-envelope"></i> <?php print $contact_email;?></li>
              </ul>
              <?php if($social_network): ?>
                <?php print $social_network; ?>
              <?php endif; ?>
              <a href="#mobile-menu" class="mobile-menu-btn hidden-lg hidden-md">
                <i class="glyphicon glyphicon-align-justify"></i>
              </a>
            </div>

          </div>
        </div>

        <div class="col-lg-6 header-right">
          <div class="row">
          <?php  if($page['toolbar']): ?>
              <?php print render($page['toolbar']); ?>
          <?php endif;  ?>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div id="nav">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <a href="#mobile-menu" class="mobile-menu-btn second hidden-lg hidden-md">
            <i class="glyphicon glyphicon-align-justify"></i>
          </a>
          <?php if($page['main_menu']): ?>
            <?php print render($page['main_menu']); ?>
          <?php endif; ?>
          <?php if($page['menu_school']): ?>
            <?php print render($page['menu_school']); ?>
          <?php endif; ?>
          <?php if($page['menu_students']): ?>
            <?php print render($page['menu_students']); ?>
          <?php endif; ?>
          <?php if($page['user_menu']): ?>
            <?php print render($page['user_menu']); ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </diuv>

</header>

<div class="clearfix"></div>
