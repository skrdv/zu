<header role="banner">

  <div id="header">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
          <a class="site-logo" href="/" title="<?php print $site_name; ?>">
            <img src="/sites/all/themes/zu/library/img/zu12_logo.png" alt="<?php print $site_name; ?>">
          </a>
        </div>
        <div class="col-xs-12 col-sm-6 hidden-md hidden-lg">
          <a class="cds-logo" href="/" title="">
            <img src="/sites/all/themes/zu/library/img/cds_logo.png" alt="">
          </a>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
          <?php if($page['toolbar_left']): ?>
            <?php print render($page['toolbar_left']); ?>
          <?php endif;  ?>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
          <?php if($page['toolbar_right']): ?>
            <?php print render($page['toolbar_right']); ?>
          <?php endif;  ?>
        </div>
        <div class="hidden-xs hidden-sm col-md-3 col-lg-3">
          <a class="cds-logo" href="http://www.cds.spb.ru/" target="_blank" title="">
            <img src="/sites/all/themes/zu/library/img/cds_logo.png" alt="">
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="clearfix"></div>
  <div id="nav">
    <div class="container">
      <div class="row">

          <div class="menu-btn hidden-lg hidden-md">
            <i class="fa fa-bars"></i>
            <span>МЕНЮ</span>
          </div>
          <?php if($page['main_menu']): ?>
            <?php print render($page['main_menu']); ?>
          <?php endif; ?>
          <?php if($page['menu_school']): ?>
            <?php print render($page['menu_school']); ?>
          <?php endif; ?>
          <?php if($page['menu_students']): ?>
            <?php print render($page['menu_students']); ?>
          <?php endif; ?>
          <?php if($page['menu_moderation']): ?>
            <?php print render($page['menu_moderation']); ?>
          <?php endif; ?>
          <?php if($page['user_menu']): ?>
            <?php print render($page['user_menu']); ?>
          <?php endif; ?>

      </div>
    </div>
  </div>

</header>
<div class="clearfix"></div>