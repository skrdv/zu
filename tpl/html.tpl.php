<!DOCTYPE html>
<html lang="<?php print $language->language; ?>">
<head>
    <title><?php print $head_title; ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="360">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <?php print $styles; print $head; ?>
</head>
<body class="<?php print $classes;?>" <?php print $attributes;?>>
    <div id="skip-link">
        <a href="#main-content" class="element-invisible element-focusable">
          <?php print t('Skip to main content'); ?>
        </a>
    </div>
    <div id="page">
        <div id="riva-preload"></div>
        <div id="riva-site-wrapper" class="page-wrap use-ltr wide-layout light-theme">
            <?php print $page_top; ?><?php print $page; ?><?php print $page_bottom; ?>
            <div class="move-to-the-top"><i class="glyphicon glyphicon-triangle-top"></i></div>
        </div>
    </div>
    <?php print $scripts; ?>
</body>
</html>